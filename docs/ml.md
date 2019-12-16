# Email to Mailing List
Hi Everyone,

What started as a quick patch to change the minimum version of the
readme from 5.3 (!) to 7.4 ended up plunging me down the rabbit hole
of web-php in traditional programmer style.

As a product of the early 2000s, the code style reflects as such, and
I feel that some kind of upgrade is desperately necessary to allow the
site to grow from what is at present little more than a list of HTML
files tied together by procedural headers and more global variables
than you can shake a stick at.

To that end, I have started on a rework branch that, while far from
perfect and nowhere close to finished, is, to my mind, a lot more
upgradable than what is presently used.

https://github.com/marandall/web-php/tree/rework/lib/phpweb with my
dev site located at https://php-web.markrandall.uk/



Developments:

I've converted a lot of the basic pages into ADR, and I have used
Nikic's router to eliminate the need for having routable html files
everywhere. I know there is political opposition to using frameworks,
but to quote Rasmus, the people writing the code get to make the
decisions, and as I'm writing the code, I want my time to be
productive by building upon the work of others, this is something that
the PHP ecosystem should encourage, if it were not for its mature
ecosystem, PHP wouldn't be a popular language.

In terms of data, I am looking to move everything into XML files that
combine the version data, source files, announcement and the change
log. 

An example given here:
https://github.com/marandall/web-php/blob/rework/data/releases/7_4/7_4_0.xml

I have also created XML layouts for conferences and branches, and
intend to cover news and everything else.

Because parsing XML each time would be slow, I have added console
commands that, as part of a build process, will parse these XML files
and turn them into PHP arrays. This data is then picked up and
converted in to internal in-memory objects using repository classes.

With a combination of data, routing and a better object model, pages
can be composed from the data, and changes can be made to dynamically
alter them, such as displaying banner warnings where a branch is
reaching the end of its security support or is end of life (example:
https://php-web.markrandall.uk/versions/7.2.0/)

I have begun to re-work the download page, instead of just offering
source files with very little information on how to use them, I am
dynamically creating pages which offer guides and tools for a
particular branch, such as this one for using the Launchpad PPA
typically used on Ubuntu / Debian -
https://php-web.markrandall.uk/versions/7.3/install/ubuntu_ppa



Plans:

* My next target is the news feed. There is no need at all for
repeating the same boilerplate text to link to the standard download
pages when that content can be generated programatically, and linked
appropriately, pulling in whatever data is necessary. If we need ATOM
feeds for it we can easily spit them out.

* Is there a particular reason all of the source downloads are stored
on the local server vs, say, an S3 or cloud storage bucket? I intend
to make the downloads directory configurable, and remove the
expectation of those files being present on the local server.

* I need to write commands to generate a new release XML file and
import its release announcement and changelist from the NEWS file.

* Better display the hundreds, or thousands of pieces of video content
that is relevant to PHP.  YouTube has thousands of conference talks
etc,  most recently from half the core internals team at PHP
Barcelona, and in my view it is a terrible waste that these are not
being promoted via php.net.

* Need to define branch meta information in XML and have that imported.


The process is not without problems...

* There is a lot of junk that has built up over the years, there are
hundreds, maybe even thousands of error-based redirects which, so far
as I can tell, exist simply to save 7 or 8 bytes of text, which while
it may have been important in 2002, is a far cry away from what should
be encouraged now. I think we need a discussion of what we actually
need, and what we need to keep. Obviously there will need to be a
period of redirection from old URLs to a new format for things such as
APIs and the change logs.

* Relying on static files significantly hampers the flexibility of
what can be achieved in terms of adding community features. The
potential if backed by a database is huge, but this would be a
significant change in how it operates.

* I have no idea yet how I will integrate the manual pages, because I
haven't got that far and will need to download a copy of the database,
I expect to bug George about this as I know he's working on it.

* The only database-backed tools exist on web-master, which itself
seems quite antiquated. A more comprehensive API on master could allow
for web to act as a more powerful front end.


This is, at present, a personal project, but I would like to put it
into the sphere of PHP itself, and to that end I am looking for
feedback and discussion on what we can do, what we can't do, and if we
can't, what are the limitations, if they are technical or human, and
what can be done to overcome them.

Many thanks

--
Mark Randall
