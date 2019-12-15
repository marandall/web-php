# Conference Data
## Previous Internal Design
Despite having a page dedicated to it, there was no such thing as an actual 
conference on the website.

Instead, a series of news article in ATOM format would be uploaded to the 
GIT repository and they would then be created as news feed items with an additional
flag which told them when to stop being displayed. 

## New Internal Design
Conferences are now unique entities with their own properties and data
attached to them.

Each conference now has its own XML file located in data/events/conferences
with existing historical conferences having their data transmuted into the
new format. Dates are implied using the custom property in the atom feed for
when they should last be displayed. 

To convert the XML files into a PHP array, use the conferences:compile command

## Front-End Changes
Future and previous conferences have now been separated into different pages to
make it more clear what is coming up.

There is a huge amount extra that could be done with this, but it means having a live
external data source such as a database. 