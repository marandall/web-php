# Videos
## Previous Design
There were no videos :-(

## Internal Design Now
Videos follow the same process as everything else, individual video records are
stored in XML files and are compiled using the videos:compile command.

Because most videos are from YouTube, a videos:add-yt command has been added
that allows importing the video data from the YouTube API, including creating a 
copy of the small thumbnail and adding it to the static content directory, thus 
sparing the person using it the effort of doing them manually, as external URLs
are prone to change.

I believe this is fair use, as the thumbnails are being used exclusively for the
purposes of describing the content and linking back to it on YouTube, and the local 
copy is simply to allow consistent linking.

## Front-End Changes
A new set of pages has been added under "Community", the Community and Conference Videos
section. The vide thumbnail is shown along with a summary and a link to watch the video
on YouTube (due to embedding issues). 
