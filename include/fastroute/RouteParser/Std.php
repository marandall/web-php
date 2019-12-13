<?php
declare(strict_types=1);

namespace FastRoute\RouteParser;

use FastRoute\BadRouteException;
use FastRoute\RouteParser;
use const PREG_OFFSET_CAPTURE;
use const PREG_SET_ORDER;
use function count;
use function preg_match;
use function preg_match_all;
use function preg_split;
use function rtrim;
use function strlen;
use function substr;
use function trim;

/**
 * Parses route strings of the following form:
 *
 * "/user/{name}[/{id:[0-9]+}]"
 */
class Std implements RouteParser
{
    public const VARIABLE_REGEX = <<<'REGEX'
\{
    \s* ([a-zA-Z_][a-zA-Z0-9_-]*) \s*
    (?:
        : \s* ([^{}]*(?:\{(?-1)\}[^{}]*)*)
    )?
\}
REGEX;

    public const DEFAULT_DISPATCH_REGEX = '[^/]+';

    /**
     * {@inheritDoc}
     */
    public function parse(string $route): array
    {
        $routeWithoutClosingOptionals = rtrim($route, ']');
        $numOptionals = strlen($route) - strlen($routeWithoutClosingOptionals);

        // Split on [ while skipping placeholders
        $segments = preg_split('~' . self::VARIABLE_REGEX . '(*SKIP)(*F) | \[~x', $routeWithoutClosingOptionals);

        if ($numOptionals !== count($segments) - 1) {
            // If there are any ] in the middle of the route, throw a more specific error message
            if (preg_match('~' . self::VARIABLE_REGEX . '(*SKIP)(*F) | \]~x', $routeWithoutClosingOptionals)) {
                throw new BadRouteException('Optional segments can only occur at the end of a route');
            }

            throw new BadRouteException("Number of opening '[' and closing ']' does not match");
        }

        $currentRoute = '';
        $routeDatas = [];

        foreach ($segments as $n => $segment) {
            if ($segment === '' && $n !== 0) {
                throw new BadRouteException('Empty optional part');
            }

            $currentRoute .= $segment;
            $routeDatas[] = $this->parsePlaceholders($currentRoute);
        }

        return $routeDatas;
    }

    /**
     * Parses a route string that does not contain optional segments.
     *
     * @return mixed[]
     */
    private function parsePlaceholders(string $route): array
    {
        if (! preg_match_all('~' . self::VARIABLE_REGEX . '~x', $route, $matches, PREG_OFFSET_CAPTURE | PREG_SET_ORDER)) {
            return [$route];
        }

        $offset = 0;
        $routeData = [];

        foreach ($matches as $set) {
            if ($set[0][1] > $offset) {
                $routeData[] = substr($route, $offset, $set[0][1] - $offset);
            }

            $routeData[] = [
                $set[1][0],
                isset($set[2]) ? trim($set[2][0]) : self::DEFAULT_DISPATCH_REGEX,
            ];

            $offset = $set[0][1] + strlen($set[0][0]);
        }

        if ($offset !== strlen($route)) {
            $routeData[] = substr($route, $offset);
        }

        return $routeData;
    }
}