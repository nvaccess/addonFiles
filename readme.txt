This repo controls the file area of https://addons.nvda-project.org under files section.

This fork was created so that NV Access could review changes to the addon website before
they become active. Please create a pull request for required changes.

To include a new addon, host it (ideally on GitHub, the addon-template makes this easy), and edit the get.php file.
You need to make sure to have a unique key (add-on ID) in get.php for your addon.

The server pulls this repo once per hour, see [nvaccess/mrconfig/automatic.crontab](https://github.com/nvaccess/mrconfig/blob/master/automatic.crontab)
Then the file will be available from:
https://addons.nvda-project.org/files/get.php?file=key

We needed this because ikiwiki doesnt seem to like long links.

### Reviewing updated addon links:
When there are changes to get.php, the following should be done.
For each updated entry:
- Check that the addon URL is correct
  - Either by downloading the addon, or
  - With `curl -L -I` Full example `curl -LI https://github.com/lukaszgo1/winWizard/releases/download/V5.0.2/winWizard-5.0.2.nvda-addon`
  - This follows redirects, and just returns the header info.
  - Look for `HTTP/2 200` in the final block.
- Ensure that the manifest is correct. Including API versions.
  - This will requie downloading the addon, extracting it (or open with a tool like 7-zip), and read the manifest.
  - Only once the first NVDA Beta is released will the API be considered frozen, therfore 'lastTested' should not be set to that version until after the beta.
