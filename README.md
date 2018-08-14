# Matomo-PHP Plugin

This **Matomo** PHP Plugin is designed to integrate Matomo, formerly Piwik, with [Grav CMS](http://github.com/getgrav/grav). By using the HTTP Request method, it provides the basic tracking capabilities as their Javascript Tracker Client script, without using Javascript or HTML. For detailed info, read [Matomo's Tracking API Documentation](https://matomo.org/docs/tracking-api).


## Installation

Installing the Matomom-PHP plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install iplocate

This will install the Matomo-PHP plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/matomo-php`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `matomo-php`. You can find these files on [GitHub](https://github.com/c0v3rt0p/grav-plugin-matomo-php).

You should now have all the plugin files under

    /your/site/grav/user/plugins/matomo-php

## Services

This plugin currently supports the basic geolocation tracking provided by [Matomo](https://matomo.org/). Visit their official website for more information on the exact functions they are able to provide.

There are A LOT more features available that are not included in this plugin. This is the basic geolocation data to give you insights on traffic to your website.
I am in no way of affiliated with them. I wasn't a big fan of inserting the Javascript Tracking code, (Nothing looks more professional than a large script on the main page shouting, "I know your here!", am I right?), so their PHP SDK looked like a good option.

>> NOTE: Some services may have licensing terms that involve disclosure, restrictions, etc. This plugin does **not** control any of that! It is the user's responsibility to ensure that all licensing conditions are met.

## Configuration
First off, install Matomo on your server. For more information on how to get Matomo set up, view [Motomo's Installatin documentation](https://matomo.org/docs/installation/).

You need to provide few configurations in order for the SDK to communicate with your Matomo files. In your Grav Administration panel, go to Plugins > Matomo-PHP to view the plugin configuration page.

Enter the *url* where Matomo is installed. Eg. http://www.<yourdomain>.com/piwik .
Enter the *page_id* of the site you wish to track. If this is a single website configuration, it will probably be '1'.
Enter the *token_auth* of a Matomo user that has administrative rights. This API token can be found by going to Settings -> Personal Settings.
Enter the *page_view*, the <Title> of your site.

For more information how to get application set up, see the [Facebook Developers documentation](https://developers.facebook.com/).

## Config Defaults

If you need to override some plugin default values, copy `matomo-php.yaml` from the `plugins/matomo-php` folder to your `config/plugins` folder.

This plugin is enabled by default.
```
enabled: true
```
  - `enabled` is used to enable/disable the plugin. There is no way to selectively enable this plugin. Either it is on or off.

# Additional Information

There is a lot more you can customize. I am fairly new to all aspects of Grav, and web development for that matter, so all input on improvements would be greatly appreciated. If you wish to add additional calls to the SDK, by all means, feel free to modify the php files and create your own plugin. I am open to all suggestions, and have merely created this plugin to fill an immediate need.

