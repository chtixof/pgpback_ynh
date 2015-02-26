# pgpback_ynh : save and restore local PGP keys used by RainLoop under Yunohost #

pgpback_ynh is packaged to be installed on a [Yunohost](https://yunohost.org) server. It has been tested with Chrome.

The PGP keys used by [RainLoop](https://github.com/polytan02/rainloop_ynh) for encryption and signature are stored in the local storage of the browser.

pgpback_ynh comes in complement. It enables to:
- save the PGP keys from the local storage to the server in a file dedicated to the user connected to Yunohost
- clear the PGP keys from the local storage, to avoid it to be accessed by anyone
- restore the PGP keys in the local storage from the server 