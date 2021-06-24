### Purpose:

This repo controls the file area of https://addons.nvda-project.org under files section.

This fork was created so that NV Access could review changes to the add-on website before they become active. Please create a pull request for required changes.

### New Add-ons:

To include a new add-on, host it (ideally on GitHub, the [add-on template](https://github.com/nvdaaddons/addontemplate) makes this easy), and edit the get.php file.
You need to make sure to have a unique key (add-on ID) in get.php for your add-on.

The server pulls this repo once per hour, see [nvaccess/mrconfig/automatic.crontab](https://github.com/nvaccess/mrconfig/blob/master/automatic.crontab).
Then the file will be available from:
https://addons.nvda-project.org/files/get.php?file=key

We needed this because [Ikiwiki](https://ikiwiki.info) doesn't seem to like long links.

### Reviewing updated add-on links:

When there are changes to get.php, the following should be done for each updated entry:
* Check that the add-on URL is correct.
    + Either by downloading the add-on, or
    + With `curl -L -I` Full example `curl -LI https://github.com/lukaszgo1/winWizard/releases/download/V5.0.2/winWizard-5.0.2.nvda-addon`.
        - This follows redirects, and just returns the header info.
        - Look for `HTTP/2 200` in the final block.
* Ensure that the manifest is correct. Including API versions.
    + This will require downloading the add-on, extracting it (or opening it with a tool like 7-zip), and reading the manifest.
    + Only once the first NVDA Beta is released will the API be considered frozen, therefore 'lastTested' should not be set to that version until after the beta.
