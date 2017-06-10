This repo controls the file area of https://addons.nvda-project.org/files

if the addon is small and you dont have a place to host it, then add it 
to this git repo and push it.
You need to make sure to have a unique key (add-on ID) in get.php for your addon.

the server pulls this repo every 10 minutes.
then the file will be available from:
https://addons.nvda-project.org/files/get.php?file=key

We needed this because ikiwiki doesnt seem to like long links.
