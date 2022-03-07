### Purpose:

This repo controls the file area of https://addons.nvda-project.org under files section.

This fork was created so that NV Access could review changes to the add-on website before they become active. Please create a pull request for required changes.

### New Add-ons:

To include a new add-on:
1. Host it (ideally on GitHub, the [add-on template](https://github.com/nvdaaddons/addontemplate) makes this easy).
2. Fork this repo (nvaccess/addonFiles) into your own GitHub account.
3. Create a new branch in your forked version of addonFiles.
4. In your new branch, edit the get.php file, as described below.
5. Push the new branch to your fork, and issue a pull request to merge it into this repository. When creating the pull request, be sure to follow the instructions that appear in the edit field on GitHub.

Your pull request will be reviewed, and if approved, will be merged, thus making your changes to get.php part of the official add-ons website as described below.

#### Get.php for New Add-ons:

You need to make sure to have a unique key (add-on ID) in get.php for your add-on.
We needed unique keys because [Ikiwiki](https://ikiwiki.info) doesn't seem to like long links, such as would be formed by the full add-on name..

#### Get.php for Updated Add-ons:

Find your add-on's existing entry in get.php, and change the URL to point to your new version's direct download (That is, usually the part ending with "`.nvda-addon`").

### Update Timing:

The server pulls this repo once per hour, see [nvaccess/mrconfig/automatic.crontab](https://github.com/nvaccess/mrconfig/blob/master/automatic.crontab).
After your pull request is approved and merged, and the next hourly update occurs, the new/updated add-on will be available from:
https://addons.nvda-project.org/files/get.php?file=key

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
