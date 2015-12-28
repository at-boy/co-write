# Co-Write
A collaborative story writing system

## Purpose

The purpose of this project is to create a system where users take turns writing part of a story not necessarily talking with or knowing each other, not even knowing each others ideas and plans for the path of the story.

Writing a story this way can be quite fun and result in some quite wacky stories which don't necessarily make a lot of sense. One moment a author might have one idea and direction for the story, when the next author takes over he or she gets inspired and may or may not see where previous author(s) wanted to go but get inspired to follow another path which might triggers new ideas when previous author(s) get their turn again to continue the story.

The purpose of this is not to write a perfect story but rather writing just for the fun of it, grasping ideas from the top of ones head, running with them and see what kind of ideas they trigger in the other authors when they get their turn.

## Development plan

### v0.1 Dickens
* Admin can invite users by e-mail to create author account
* Author can press "Write" button to take the turn to write if nobody else is writing (timeout after 30 min)
* Author can press "Publish" button when done writing to save and publish
* Author can press "Cancel" button to relinquish their turn to write
* System is limited to one story
* Show "complete" story on front page (only published parts)

### v0.2 Verne
* Implement waitinglist, authors apply to list instead of waiting on site for someone to stop writing
* System sends e-mail to authors on their turn, author gets 3 hours to click link to accept their turn
* New timeout of 8 hours to write, countdown starts when authors accepts their turn

### v0.3 Carroll
* Add max wordcount of 126 words
* Add minimum wordcount of 20 words
* Add auto-save so author can leave site at come back at a later time to finish

### v0.4 Doyle
* Implement stricter rules for waitinglist
⋅⋅* Author can apply for waitinglist if he or she have not written a part of the story yet
⋅⋅* Author can apply for waitinglist if 3 other authors have is on the list after the authors last turn
⋅⋅* Author can apply for waitinglist if it has been 24 hours since last turn and limit of 3 has not been reached

### Future versions
#### v0.5 Wells
#### v0.6 Travers
#### v0.7 Lovecraft
#### v0.8 Orwell
#### v0.9 Asimov
#### v1.0 Gibson
