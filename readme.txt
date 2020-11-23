This repo controls the file area of https://addons.nvda-project.org under files section.

This fork was created so that NV Access could review changes to the addon website before
they become active. Please create a pull request for required changes.

If the addon is small and you don't have a place to host it,
then add it to this git repo and push it.
You need to make sure to have a unique key (add-on ID) in get.php for your addon.

The server pulls this repo once per hour, see [nvaccess/mrconfig/automatic.crontab](https://github.com/nvaccess/mrconfig/blob/master/automatic.crontab)
Then the file will be available from:
https://addons.nvda-project.org/files/get.php?file=key

We needed this because ikiwiki doesnt seem to like long links.
