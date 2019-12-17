<?php
	
	use Symfony\Component\DependencyInjection\Container;
	use Symfony\Component\DependencyInjection\Exception\LogicException;
	
	/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class ServiceList extends Container
{
    private $parameters = [];

    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMap = [
            'phpweb\\Controllers\\About\\AboutMiddleware' => 'getAboutMiddlewareService',
            'phpweb\\Controllers\\About\\ContactController' => 'getContactControllerService',
            'phpweb\\Controllers\\About\\CopyrightController' => 'getCopyrightControllerService',
            'phpweb\\Controllers\\About\\PrivacyController' => 'getPrivacyControllerService',
            'phpweb\\Controllers\\About\\SitemapController' => 'getSitemapControllerService',
            'phpweb\\Controllers\\About\\SitesController' => 'getSitesControllerService',
            'phpweb\\Controllers\\Community\\Conferences\\Conference\\ConferenceIndexController' => 'getConferenceIndexControllerService',
            'phpweb\\Controllers\\Community\\Conferences\\Conference\\ConferenceLoaderFromUri' => 'getConferenceLoaderFromUriService',
            'phpweb\\Controllers\\Community\\Conferences\\ConferencesArchiveController' => 'getConferencesArchiveControllerService',
            'phpweb\\Controllers\\Community\\Conferences\\ConferencesIndexController' => 'getConferencesIndexControllerService',
            'phpweb\\Controllers\\Community\\Events\\CalendarController' => 'getCalendarControllerService',
            'phpweb\\Controllers\\Community\\Events\\SubmitEventController' => 'getSubmitEventControllerService',
            'phpweb\\Controllers\\Community\\Videos\\VideosIndexController' => 'getVideosIndexControllerService',
            'phpweb\\Controllers\\ControllerInterface' => 'getControllerInterfaceService',
            'phpweb\\Controllers\\CreditsController' => 'getCreditsControllerService',
            'phpweb\\Controllers\\Developers\\GetInvolvedController' => 'getGetInvolvedControllerService',
            'phpweb\\Controllers\\Developers\\Git\\GitController' => 'getGitControllerService',
            'phpweb\\Controllers\\Developers\\Git\\RegisterGitAccountController' => 'getRegisterGitAccountControllerService',
            'phpweb\\Controllers\\Developers\\Tools\\BuildSetupController' => 'getBuildSetupControllerService',
            'phpweb\\Controllers\\DocsController' => 'getDocsControllerService',
            'phpweb\\Controllers\\Downloads\\DownloadsIndexController' => 'getDownloadsIndexControllerService',
            'phpweb\\Controllers\\Downloads\\GpgKeysController' => 'getGpgKeysControllerService',
            'phpweb\\Controllers\\Downloads\\LogosController' => 'getLogosControllerService',
            'phpweb\\Controllers\\ElephpantController' => 'getElephpantControllerService',
            'phpweb\\Controllers\\IndexController' => 'getIndexControllerService',
            'phpweb\\Controllers\\License\\ContributorGuidelinesController' => 'getContributorGuidelinesControllerService',
            'phpweb\\Controllers\\License\\DistributionGuidelinesController' => 'getDistributionGuidelinesControllerService',
            'phpweb\\Controllers\\License\\LicenseIndexController' => 'getLicenseIndexControllerService',
            'phpweb\\Controllers\\Lists\\MailingListsIndexController' => 'getMailingListsIndexControllerService',
            'phpweb\\Controllers\\Lists\\UnsubscribeController' => 'getUnsubscribeControllerService',
            'phpweb\\Controllers\\Manual\\En\\EnglishManualRouter' => 'getEnglishManualRouterService',
            'phpweb\\Controllers\\Manual\\HelpTranslateController' => 'getHelpTranslateControllerService',
            'phpweb\\Controllers\\Manual\\PHP3ManualArchiveController' => 'getPHP3ManualArchiveControllerService',
            'phpweb\\Controllers\\Manual\\PHP4ManualArchiveController' => 'getPHP4ManualArchiveControllerService',
            'phpweb\\Controllers\\Middleware\\CommunityMiddleware' => 'getCommunityMiddlewareService',
            'phpweb\\Controllers\\Middleware\\ConferencesMiddleware' => 'getConferencesMiddlewareService',
            'phpweb\\Controllers\\Middleware\\UiInjector' => 'getUiInjectorService',
            'phpweb\\Controllers\\Middleware\\UiReleasesMiddleware' => 'getUiReleasesMiddlewareService',
            'phpweb\\Controllers\\MyController' => 'getMyControllerService',
            'phpweb\\Controllers\\News\\NewsIndexController' => 'getNewsIndexControllerService',
            'phpweb\\Controllers\\NotFoundController' => 'getNotFoundControllerService',
            'phpweb\\Controllers\\Search\\SearchController' => 'getSearchControllerService',
            'phpweb\\Controllers\\Search\\SearchManualController' => 'getSearchManualControllerService',
            'phpweb\\Controllers\\SecurityNoteController' => 'getSecurityNoteControllerService',
            'phpweb\\Controllers\\Security\\BlowfishArchiveController' => 'getBlowfishArchiveControllerService',
            'phpweb\\Controllers\\SoftwareController' => 'getSoftwareControllerService',
            'phpweb\\Controllers\\SupportController' => 'getSupportControllerService',
            'phpweb\\Controllers\\ThanksController' => 'getThanksControllerService',
            'phpweb\\Controllers\\Versions\\Branches\\BranchAtomFeedController' => 'getBranchAtomFeedControllerService',
            'phpweb\\Controllers\\Versions\\Branches\\BranchChangelogController' => 'getBranchChangelogControllerService',
            'phpweb\\Controllers\\Versions\\Branches\\BranchController' => 'getBranchControllerService',
            'phpweb\\Controllers\\Versions\\Branches\\BranchLoaderMiddleware' => 'getBranchLoaderMiddlewareService',
            'phpweb\\Controllers\\Versions\\Branches\\Install\\BranchInstallController' => 'getBranchInstallControllerService',
            'phpweb\\Controllers\\Versions\\Branches\\Install\\InstallBranchDockerController' => 'getInstallBranchDockerControllerService',
            'phpweb\\Controllers\\Versions\\Branches\\Install\\InstallBranchFromPPAController' => 'getInstallBranchFromPPAControllerService',
            'phpweb\\Controllers\\Versions\\Branches\\Install\\InstallBranchSourceController' => 'getInstallBranchSourceControllerService',
            'phpweb\\Controllers\\Versions\\Branches\\Install\\InstallBranchWindowsIISController' => 'getInstallBranchWindowsIISControllerService',
            'phpweb\\Controllers\\Versions\\EOLController' => 'getEOLControllerService',
            'phpweb\\Controllers\\Versions\\Release\\Install\\InstallFromSourceController' => 'getInstallFromSourceControllerService',
            'phpweb\\Controllers\\Versions\\Releases\\ReleaseController' => 'getReleaseControllerService',
            'phpweb\\Controllers\\Versions\\Releases\\ReleaseLoaderMiddleware' => 'getReleaseLoaderMiddlewareService',
            'phpweb\\Controllers\\Versions\\SupportedVersionsController' => 'getSupportedVersionsControllerService',
            'phpweb\\Controllers\\Versions\\VersionsIndexController' => 'getVersionsIndexControllerService',
            'phpweb\\Data\\Branches\\BranchRepository' => 'getBranchRepositoryService',
            'phpweb\\Data\\Conferences\\ConferenceRepository' => 'getConferenceRepositoryService',
            'phpweb\\Data\\News\\ArticlesRepository' => 'getArticlesRepositoryService',
            'phpweb\\Data\\Release\\ReleasesRepository' => 'getReleasesRepositoryService',
        ];

        $this->aliases = [];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
        ];
    }

    /**
     * Gets the public 'phpweb\Controllers\About\AboutMiddleware' shared autowired service.
     *
     * @return \phpweb\Controllers\About\AboutMiddleware
     */
    protected function getAboutMiddlewareService()
    {
        return $this->services['phpweb\\Controllers\\About\\AboutMiddleware'] = new \phpweb\Controllers\About\AboutMiddleware();
    }

    /**
     * Gets the public 'phpweb\Controllers\About\ContactController' shared autowired service.
     *
     * @return \phpweb\Controllers\About\ContactController
     */
    protected function getContactControllerService()
    {
        return $this->services['phpweb\\Controllers\\About\\ContactController'] = new \phpweb\Controllers\About\ContactController();
    }

    /**
     * Gets the public 'phpweb\Controllers\About\CopyrightController' shared autowired service.
     *
     * @return \phpweb\Controllers\About\CopyrightController
     */
    protected function getCopyrightControllerService()
    {
        return $this->services['phpweb\\Controllers\\About\\CopyrightController'] = new \phpweb\Controllers\About\CopyrightController();
    }

    /**
     * Gets the public 'phpweb\Controllers\About\PrivacyController' shared autowired service.
     *
     * @return \phpweb\Controllers\About\PrivacyController
     */
    protected function getPrivacyControllerService()
    {
        return $this->services['phpweb\\Controllers\\About\\PrivacyController'] = new \phpweb\Controllers\About\PrivacyController();
    }

    /**
     * Gets the public 'phpweb\Controllers\About\SitemapController' shared autowired service.
     *
     * @return \phpweb\Controllers\About\SitemapController
     */
    protected function getSitemapControllerService()
    {
        return $this->services['phpweb\\Controllers\\About\\SitemapController'] = new \phpweb\Controllers\About\SitemapController();
    }

    /**
     * Gets the public 'phpweb\Controllers\About\SitesController' shared autowired service.
     *
     * @return \phpweb\Controllers\About\SitesController
     */
    protected function getSitesControllerService()
    {
        return $this->services['phpweb\\Controllers\\About\\SitesController'] = new \phpweb\Controllers\About\SitesController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Community\Conferences\Conference\ConferenceIndexController' shared autowired service.
     *
     * @return \phpweb\Controllers\Community\Conferences\Conference\ConferenceIndexController
     */
    protected function getConferenceIndexControllerService()
    {
        return $this->services['phpweb\\Controllers\\Community\\Conferences\\Conference\\ConferenceIndexController'] = new \phpweb\Controllers\Community\Conferences\Conference\ConferenceIndexController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Community\Conferences\Conference\ConferenceLoaderFromUri' shared autowired service.
     *
     * @return \phpweb\Controllers\Community\Conferences\Conference\ConferenceLoaderFromUri
     */
    protected function getConferenceLoaderFromUriService()
    {
        return $this->services['phpweb\\Controllers\\Community\\Conferences\\Conference\\ConferenceLoaderFromUri'] = new \phpweb\Controllers\Community\Conferences\Conference\ConferenceLoaderFromUri(($this->services['phpweb\\Data\\Conferences\\ConferenceRepository'] ?? ($this->services['phpweb\\Data\\Conferences\\ConferenceRepository'] = new \phpweb\Data\Conferences\ConferenceRepository())));
    }

    /**
     * Gets the public 'phpweb\Controllers\Community\Conferences\ConferencesArchiveController' shared autowired service.
     *
     * @return \phpweb\Controllers\Community\Conferences\ConferencesArchiveController
     */
    protected function getConferencesArchiveControllerService()
    {
        return $this->services['phpweb\\Controllers\\Community\\Conferences\\ConferencesArchiveController'] = new \phpweb\Controllers\Community\Conferences\ConferencesArchiveController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Community\Conferences\ConferencesIndexController' shared autowired service.
     *
     * @return \phpweb\Controllers\Community\Conferences\ConferencesIndexController
     */
    protected function getConferencesIndexControllerService()
    {
        return $this->services['phpweb\\Controllers\\Community\\Conferences\\ConferencesIndexController'] = new \phpweb\Controllers\Community\Conferences\ConferencesIndexController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Community\Events\CalendarController' shared autowired service.
     *
     * @return \phpweb\Controllers\Community\Events\CalendarController
     */
    protected function getCalendarControllerService()
    {
        return $this->services['phpweb\\Controllers\\Community\\Events\\CalendarController'] = new \phpweb\Controllers\Community\Events\CalendarController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Community\Events\SubmitEventController' shared autowired service.
     *
     * @return \phpweb\Controllers\Community\Events\SubmitEventController
     */
    protected function getSubmitEventControllerService()
    {
        return $this->services['phpweb\\Controllers\\Community\\Events\\SubmitEventController'] = new \phpweb\Controllers\Community\Events\SubmitEventController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Community\Videos\VideosIndexController' shared autowired service.
     *
     * @return \phpweb\Controllers\Community\Videos\VideosIndexController
     */
    protected function getVideosIndexControllerService()
    {
        return $this->services['phpweb\\Controllers\\Community\\Videos\\VideosIndexController'] = new \phpweb\Controllers\Community\Videos\VideosIndexController();
    }

    /**
     * Gets the public 'phpweb\Controllers\ControllerInterface' shared autowired service.
     *
     * @return \phpweb\Controllers\ControllerInterface
     */
    protected function getControllerInterfaceService()
    {
        return $this->services['phpweb\\Controllers\\ControllerInterface'] = new \phpweb\Controllers\ControllerInterface();
    }

    /**
     * Gets the public 'phpweb\Controllers\CreditsController' shared autowired service.
     *
     * @return \phpweb\Controllers\CreditsController
     */
    protected function getCreditsControllerService()
    {
        return $this->services['phpweb\\Controllers\\CreditsController'] = new \phpweb\Controllers\CreditsController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Developers\GetInvolvedController' shared autowired service.
     *
     * @return \phpweb\Controllers\Developers\GetInvolvedController
     */
    protected function getGetInvolvedControllerService()
    {
        return $this->services['phpweb\\Controllers\\Developers\\GetInvolvedController'] = new \phpweb\Controllers\Developers\GetInvolvedController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Developers\Git\GitController' shared autowired service.
     *
     * @return \phpweb\Controllers\Developers\Git\GitController
     */
    protected function getGitControllerService()
    {
        return $this->services['phpweb\\Controllers\\Developers\\Git\\GitController'] = new \phpweb\Controllers\Developers\Git\GitController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Developers\Git\RegisterGitAccountController' shared autowired service.
     *
     * @return \phpweb\Controllers\Developers\Git\RegisterGitAccountController
     */
    protected function getRegisterGitAccountControllerService()
    {
        return $this->services['phpweb\\Controllers\\Developers\\Git\\RegisterGitAccountController'] = new \phpweb\Controllers\Developers\Git\RegisterGitAccountController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Developers\Tools\BuildSetupController' shared autowired service.
     *
     * @return \phpweb\Controllers\Developers\Tools\BuildSetupController
     */
    protected function getBuildSetupControllerService()
    {
        return $this->services['phpweb\\Controllers\\Developers\\Tools\\BuildSetupController'] = new \phpweb\Controllers\Developers\Tools\BuildSetupController();
    }

    /**
     * Gets the public 'phpweb\Controllers\DocsController' shared autowired service.
     *
     * @return \phpweb\Controllers\DocsController
     */
    protected function getDocsControllerService()
    {
        return $this->services['phpweb\\Controllers\\DocsController'] = new \phpweb\Controllers\DocsController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Downloads\DownloadsIndexController' shared autowired service.
     *
     * @return \phpweb\Controllers\Downloads\DownloadsIndexController
     */
    protected function getDownloadsIndexControllerService()
    {
        return $this->services['phpweb\\Controllers\\Downloads\\DownloadsIndexController'] = new \phpweb\Controllers\Downloads\DownloadsIndexController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Downloads\GpgKeysController' shared autowired service.
     *
     * @return \phpweb\Controllers\Downloads\GpgKeysController
     */
    protected function getGpgKeysControllerService()
    {
        return $this->services['phpweb\\Controllers\\Downloads\\GpgKeysController'] = new \phpweb\Controllers\Downloads\GpgKeysController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Downloads\LogosController' shared autowired service.
     *
     * @return \phpweb\Controllers\Downloads\LogosController
     */
    protected function getLogosControllerService()
    {
        return $this->services['phpweb\\Controllers\\Downloads\\LogosController'] = new \phpweb\Controllers\Downloads\LogosController();
    }

    /**
     * Gets the public 'phpweb\Controllers\ElephpantController' shared autowired service.
     *
     * @return \phpweb\Controllers\ElephpantController
     */
    protected function getElephpantControllerService()
    {
        return $this->services['phpweb\\Controllers\\ElephpantController'] = new \phpweb\Controllers\ElephpantController();
    }

    /**
     * Gets the public 'phpweb\Controllers\IndexController' shared autowired service.
     *
     * @return \phpweb\Controllers\IndexController
     */
    protected function getIndexControllerService()
    {
        return $this->services['phpweb\\Controllers\\IndexController'] = new \phpweb\Controllers\IndexController();
    }

    /**
     * Gets the public 'phpweb\Controllers\License\ContributorGuidelinesController' shared autowired service.
     *
     * @return \phpweb\Controllers\License\ContributorGuidelinesController
     */
    protected function getContributorGuidelinesControllerService()
    {
        return $this->services['phpweb\\Controllers\\License\\ContributorGuidelinesController'] = new \phpweb\Controllers\License\ContributorGuidelinesController();
    }

    /**
     * Gets the public 'phpweb\Controllers\License\DistributionGuidelinesController' shared autowired service.
     *
     * @return \phpweb\Controllers\License\DistributionGuidelinesController
     */
    protected function getDistributionGuidelinesControllerService()
    {
        return $this->services['phpweb\\Controllers\\License\\DistributionGuidelinesController'] = new \phpweb\Controllers\License\DistributionGuidelinesController();
    }

    /**
     * Gets the public 'phpweb\Controllers\License\LicenseIndexController' shared autowired service.
     *
     * @return \phpweb\Controllers\License\LicenseIndexController
     */
    protected function getLicenseIndexControllerService()
    {
        return $this->services['phpweb\\Controllers\\License\\LicenseIndexController'] = new \phpweb\Controllers\License\LicenseIndexController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Lists\MailingListsIndexController' shared autowired service.
     *
     * @return \phpweb\Controllers\Community\Lists\MailingListsIndexController
     */
    protected function getMailingListsIndexControllerService()
    {
        return $this->services['phpweb\\Controllers\\Lists\\MailingListsIndexController'] = new \phpweb\Controllers\Community\Lists\MailingListsIndexController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Lists\UnsubscribeController' shared autowired service.
     *
     * @return \phpweb\Controllers\Community\Lists\UnsubscribeController
     */
    protected function getUnsubscribeControllerService()
    {
        return $this->services['phpweb\\Controllers\\Lists\\UnsubscribeController'] = new \phpweb\Controllers\Community\Lists\UnsubscribeController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Manual\En\EnglishManualRouter' shared autowired service.
     *
     * @return \phpweb\Controllers\Manual\En\EnglishManualRouter
     */
    protected function getEnglishManualRouterService()
    {
        return $this->services['phpweb\\Controllers\\Manual\\En\\EnglishManualRouter'] = new \phpweb\Controllers\Manual\En\EnglishManualRouter();
    }

    /**
     * Gets the public 'phpweb\Controllers\Manual\HelpTranslateController' shared autowired service.
     *
     * @return \phpweb\Controllers\Manual\HelpTranslateController
     */
    protected function getHelpTranslateControllerService()
    {
        return $this->services['phpweb\\Controllers\\Manual\\HelpTranslateController'] = new \phpweb\Controllers\Manual\HelpTranslateController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Manual\PHP3ManualArchiveController' shared autowired service.
     *
     * @return \phpweb\Controllers\Manual\PHP3ManualArchiveController
     */
    protected function getPHP3ManualArchiveControllerService()
    {
        return $this->services['phpweb\\Controllers\\Manual\\PHP3ManualArchiveController'] = new \phpweb\Controllers\Manual\PHP3ManualArchiveController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Manual\PHP4ManualArchiveController' shared autowired service.
     *
     * @return \phpweb\Controllers\Manual\PHP4ManualArchiveController
     */
    protected function getPHP4ManualArchiveControllerService()
    {
        return $this->services['phpweb\\Controllers\\Manual\\PHP4ManualArchiveController'] = new \phpweb\Controllers\Manual\PHP4ManualArchiveController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Middleware\CommunityMiddleware' shared autowired service.
     *
     * @return \phpweb\Controllers\Middleware\CommunityMiddleware
     */
    protected function getCommunityMiddlewareService()
    {
        return $this->services['phpweb\\Controllers\\Middleware\\CommunityMiddleware'] = new \phpweb\Controllers\Middleware\CommunityMiddleware();
    }

    /**
     * Gets the public 'phpweb\Controllers\Middleware\ConferencesMiddleware' shared autowired service.
     *
     * @return \phpweb\Controllers\Middleware\ConferencesMiddleware
     */
    protected function getConferencesMiddlewareService()
    {
        return $this->services['phpweb\\Controllers\\Middleware\\ConferencesMiddleware'] = new \phpweb\Controllers\Middleware\ConferencesMiddleware();
    }

    /**
     * Gets the public 'phpweb\Controllers\Middleware\UiInjector' shared autowired service.
     *
     * @return \phpweb\Controllers\Middleware\UiInjector
     */
    protected function getUiInjectorService()
    {
        return $this->services['phpweb\\Controllers\\Middleware\\UiInjector'] = new \phpweb\Controllers\Middleware\UiInjector();
    }

    /**
     * Gets the public 'phpweb\Controllers\Middleware\UiReleasesMiddleware' shared autowired service.
     *
     * @return \phpweb\Controllers\Middleware\UiReleasesMiddleware
     */
    protected function getUiReleasesMiddlewareService()
    {
        return $this->services['phpweb\\Controllers\\Middleware\\UiReleasesMiddleware'] = new \phpweb\Controllers\Middleware\UiReleasesMiddleware();
    }

    /**
     * Gets the public 'phpweb\Controllers\MyController' shared autowired service.
     *
     * @return \phpweb\Controllers\MyController
     */
    protected function getMyControllerService()
    {
        return $this->services['phpweb\\Controllers\\MyController'] = new \phpweb\Controllers\MyController();
    }

    /**
     * Gets the public 'phpweb\Controllers\News\NewsIndexController' shared autowired service.
     *
     * @return \phpweb\Controllers\News\NewsIndexController
     */
    protected function getNewsIndexControllerService()
    {
        return $this->services['phpweb\\Controllers\\News\\NewsIndexController'] = new \phpweb\Controllers\News\NewsIndexController();
    }

    /**
     * Gets the public 'phpweb\Controllers\NotFoundController' shared autowired service.
     *
     * @return \phpweb\Controllers\NotFoundController
     */
    protected function getNotFoundControllerService()
    {
        return $this->services['phpweb\\Controllers\\NotFoundController'] = new \phpweb\Controllers\NotFoundController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Search\SearchController' shared autowired service.
     *
     * @return \phpweb\Controllers\Search\SearchController
     */
    protected function getSearchControllerService()
    {
        return $this->services['phpweb\\Controllers\\Search\\SearchController'] = new \phpweb\Controllers\Search\SearchController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Search\SearchManualController' shared autowired service.
     *
     * @return \phpweb\Controllers\Search\SearchManualController
     */
    protected function getSearchManualControllerService()
    {
        return $this->services['phpweb\\Controllers\\Search\\SearchManualController'] = new \phpweb\Controllers\Search\SearchManualController();
    }

    /**
     * Gets the public 'phpweb\Controllers\SecurityNoteController' shared autowired service.
     *
     * @return \phpweb\Controllers\SecurityNoteController
     */
    protected function getSecurityNoteControllerService()
    {
        return $this->services['phpweb\\Controllers\\SecurityNoteController'] = new \phpweb\Controllers\SecurityNoteController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Security\BlowfishArchiveController' shared autowired service.
     *
     * @return \phpweb\Controllers\Security\BlowfishArchiveController
     */
    protected function getBlowfishArchiveControllerService()
    {
        return $this->services['phpweb\\Controllers\\Security\\BlowfishArchiveController'] = new \phpweb\Controllers\Security\BlowfishArchiveController();
    }

    /**
     * Gets the public 'phpweb\Controllers\SoftwareController' shared autowired service.
     *
     * @return \phpweb\Controllers\SoftwareController
     */
    protected function getSoftwareControllerService()
    {
        return $this->services['phpweb\\Controllers\\SoftwareController'] = new \phpweb\Controllers\SoftwareController();
    }

    /**
     * Gets the public 'phpweb\Controllers\SupportController' shared autowired service.
     *
     * @return \phpweb\Controllers\SupportController
     */
    protected function getSupportControllerService()
    {
        return $this->services['phpweb\\Controllers\\SupportController'] = new \phpweb\Controllers\SupportController();
    }

    /**
     * Gets the public 'phpweb\Controllers\ThanksController' shared autowired service.
     *
     * @return \phpweb\Controllers\ThanksController
     */
    protected function getThanksControllerService()
    {
        return $this->services['phpweb\\Controllers\\ThanksController'] = new \phpweb\Controllers\ThanksController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Versions\Branches\BranchAtomFeedController' shared autowired service.
     *
     * @return \phpweb\Controllers\Versions\Branches\BranchAtomFeedController
     */
    protected function getBranchAtomFeedControllerService()
    {
        return $this->services['phpweb\\Controllers\\Versions\\Branches\\BranchAtomFeedController'] = new \phpweb\Controllers\Versions\Branches\BranchAtomFeedController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Versions\Branches\BranchChangelogController' shared autowired service.
     *
     * @return \phpweb\Controllers\Versions\Branches\BranchChangelogController
     */
    protected function getBranchChangelogControllerService()
    {
        return $this->services['phpweb\\Controllers\\Versions\\Branches\\BranchChangelogController'] = new \phpweb\Controllers\Versions\Branches\BranchChangelogController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Versions\Branches\BranchController' shared autowired service.
     *
     * @return \phpweb\Controllers\Versions\Branches\BranchController
     */
    protected function getBranchControllerService()
    {
        return $this->services['phpweb\\Controllers\\Versions\\Branches\\BranchController'] = new \phpweb\Controllers\Versions\Branches\BranchController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Versions\Branches\BranchLoaderMiddleware' shared autowired service.
     *
     * @return \phpweb\Controllers\Versions\Branches\BranchLoaderMiddleware
     */
    protected function getBranchLoaderMiddlewareService()
    {
        return $this->services['phpweb\\Controllers\\Versions\\Branches\\BranchLoaderMiddleware'] = new \phpweb\Controllers\Versions\Branches\BranchLoaderMiddleware(($this->services['phpweb\\Data\\Branches\\BranchRepository'] ?? ($this->services['phpweb\\Data\\Branches\\BranchRepository'] = new \phpweb\Data\Branches\BranchRepository())));
    }

    /**
     * Gets the public 'phpweb\Controllers\Versions\Branches\Install\BranchInstallController' shared autowired service.
     *
     * @return \phpweb\Controllers\Versions\Branches\Install\BranchInstallController
     */
    protected function getBranchInstallControllerService()
    {
        return $this->services['phpweb\\Controllers\\Versions\\Branches\\Install\\BranchInstallController'] = new \phpweb\Controllers\Versions\Branches\Install\BranchInstallController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Versions\Branches\Install\InstallBranchDockerController' shared autowired service.
     *
     * @return \phpweb\Controllers\Versions\Branches\Install\InstallBranchDockerController
     */
    protected function getInstallBranchDockerControllerService()
    {
        return $this->services['phpweb\\Controllers\\Versions\\Branches\\Install\\InstallBranchDockerController'] = new \phpweb\Controllers\Versions\Branches\Install\InstallBranchDockerController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Versions\Branches\Install\InstallBranchFromPPAController' shared autowired service.
     *
     * @return \phpweb\Controllers\Versions\Branches\Install\InstallBranchFromPPAController
     */
    protected function getInstallBranchFromPPAControllerService()
    {
        return $this->services['phpweb\\Controllers\\Versions\\Branches\\Install\\InstallBranchFromPPAController'] = new \phpweb\Controllers\Versions\Branches\Install\InstallBranchFromPPAController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Versions\Branches\Install\InstallBranchSourceController' shared autowired service.
     *
     * @return \phpweb\Controllers\Versions\Branches\Install\InstallBranchSourceController
     */
    protected function getInstallBranchSourceControllerService()
    {
        return $this->services['phpweb\\Controllers\\Versions\\Branches\\Install\\InstallBranchSourceController'] = new \phpweb\Controllers\Versions\Branches\Install\InstallBranchSourceController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Versions\Branches\Install\InstallBranchWindowsIISController' shared autowired service.
     *
     * @return \phpweb\Controllers\Versions\Branches\Install\InstallBranchWindowsIISController
     */
    protected function getInstallBranchWindowsIISControllerService()
    {
        return $this->services['phpweb\\Controllers\\Versions\\Branches\\Install\\InstallBranchWindowsIISController'] = new \phpweb\Controllers\Versions\Branches\Install\InstallBranchWindowsIISController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Versions\EOLController' shared autowired service.
     *
     * @return \phpweb\Controllers\Versions\EOLController
     */
    protected function getEOLControllerService()
    {
        return $this->services['phpweb\\Controllers\\Versions\\EOLController'] = new \phpweb\Controllers\Versions\EOLController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Versions\Release\Install\InstallFromSourceController' shared autowired service.
     *
     * @return \phpweb\Controllers\Versions\Release\Install\InstallFromSourceController
     */
    protected function getInstallFromSourceControllerService()
    {
        return $this->services['phpweb\\Controllers\\Versions\\Release\\Install\\InstallFromSourceController'] = new \phpweb\Controllers\Versions\Release\Install\InstallFromSourceController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Versions\Releases\ReleaseController' shared autowired service.
     *
     * @return \phpweb\Controllers\Versions\Releases\ReleaseController
     */
    protected function getReleaseControllerService()
    {
        return $this->services['phpweb\\Controllers\\Versions\\Releases\\ReleaseController'] = new \phpweb\Controllers\Versions\Releases\ReleaseController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Versions\Releases\ReleaseLoaderMiddleware' shared autowired service.
     *
     * @return \phpweb\Controllers\Versions\Releases\ReleaseLoaderMiddleware
     */
    protected function getReleaseLoaderMiddlewareService()
    {
        return $this->services['phpweb\\Controllers\\Versions\\Releases\\ReleaseLoaderMiddleware'] = new \phpweb\Controllers\Versions\Releases\ReleaseLoaderMiddleware(($this->services['phpweb\\Data\\Release\\ReleasesRepository'] ?? ($this->services['phpweb\\Data\\Release\\ReleasesRepository'] = new \phpweb\Data\Release\ReleasesRepository())), ($this->services['phpweb\\Data\\Branches\\BranchRepository'] ?? ($this->services['phpweb\\Data\\Branches\\BranchRepository'] = new \phpweb\Data\Branches\BranchRepository())));
    }

    /**
     * Gets the public 'phpweb\Controllers\Versions\SupportedVersionsController' shared autowired service.
     *
     * @return \phpweb\Controllers\Versions\SupportedVersionsController
     */
    protected function getSupportedVersionsControllerService()
    {
        return $this->services['phpweb\\Controllers\\Versions\\SupportedVersionsController'] = new \phpweb\Controllers\Versions\SupportedVersionsController();
    }

    /**
     * Gets the public 'phpweb\Controllers\Versions\VersionsIndexController' shared autowired service.
     *
     * @return \phpweb\Controllers\Versions\VersionsIndexController
     */
    protected function getVersionsIndexControllerService()
    {
        return $this->services['phpweb\\Controllers\\Versions\\VersionsIndexController'] = new \phpweb\Controllers\Versions\VersionsIndexController();
    }

    /**
     * Gets the public 'phpweb\Data\Branches\BranchRepository' shared autowired service.
     *
     * @return \phpweb\Data\Branches\BranchRepository
     */
    protected function getBranchRepositoryService()
    {
        return $this->services['phpweb\\Data\\Branches\\BranchRepository'] = new \phpweb\Data\Branches\BranchRepository();
    }

    /**
     * Gets the public 'phpweb\Data\Conferences\ConferenceRepository' shared autowired service.
     *
     * @return \phpweb\Data\Conferences\ConferenceRepository
     */
    protected function getConferenceRepositoryService()
    {
        return $this->services['phpweb\\Data\\Conferences\\ConferenceRepository'] = new \phpweb\Data\Conferences\ConferenceRepository();
    }

    /**
     * Gets the public 'phpweb\Data\News\ArticlesRepository' shared autowired service.
     *
     * @return \phpweb\Data\News\ArticlesRepository
     */
    protected function getArticlesRepositoryService()
    {
        return $this->services['phpweb\\Data\\News\\ArticlesRepository'] = new \phpweb\Data\News\ArticlesRepository();
    }

    /**
     * Gets the public 'phpweb\Data\Release\ReleasesRepository' shared autowired service.
     *
     * @return \phpweb\Data\Release\ReleasesRepository
     */
    protected function getReleasesRepositoryService()
    {
        return $this->services['phpweb\\Data\\Release\\ReleasesRepository'] = new \phpweb\Data\Release\ReleasesRepository();
    }
}
