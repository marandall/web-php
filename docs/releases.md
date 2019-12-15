# Release History
## Previous Internal Design
On production, information on each release is stored in a pair of PHP arrays
stored in files within the include directory.

The first contains the most recent releases of the currently supported branches 
and is relatively small compared to the second, which is a huge data dump of every
previous release, and its source file URLs. 

When a new version is released, a command line script moves the data from the previous 
current release to the end of the archive dump, and replaces the current release versions. 
In addition, a news article is generated which announces that the new version is available, 
if it was a security or bugfix, and  that users should download it.

This release notice is 90% boilerplate but is replicated hundreds of times. 

A separate set of information, the change log, is written to a completely separate file that
is based on the major version (rather than branch or release).

## Internal Design Now
All information about a particular release has been unified in a single XML file
contained within the data/releases directory. 

This contains the information that was previously stored within the array, the version,
date, tags and source code locations, but it has been expanded to include nodes
for a simple release announcement (in multiple languages).

Each release has its own file located at data/releases/major_minor/major_minor_release.xml

To convert this data into a cachable array, the release:compile command should be run. This 
will iterate over all of the release data xml files and build the array, writing it to 
data/compiled/releases.php

Independent stores of 'current release' and 'archived' no longer exist, a current release is
considered to be the last published release of a particular branch that is still within its
support cycle.  

## Front-End Changes
Because all of the information is now unified, boilerplate code and repetition can be
completely stripped out in place of doing what PHP is good at, combining and rendering
it.

Each individual release has its own page located at /versions/major.minor.release/ that
combines the essential-details release notice, the change log, and the source code. 

The controllers rendering these pages will check to see if this is the latest version of
the given branch, and display a warning banner if not. A warning banner will also be shown
if the branch is no longer supported. 