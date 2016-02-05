# Hackaton-mini-site
Hackaton mini-site


## Install (Mac)
The days of simple html pages are long behind us, sir. For most of our front-end apps, we distribute static packages, with dependency configuration and branched repo versioning. If this sounds scary, don't worry, its like rainbows and unicorns.

### Prerequisites
To install the required components for managing your WordPress site, 
we'll need following tools in our toolbelt: Composer, HomeBrew.

[More info](http://blog.cloudoki.com/set-up-your-local-battleground/)

##### Get HomeBrew
If you haven't done so, install Brew right away.
```ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"```

If you're not sure, run `brew -v`.


##### Composer
Start with installing [Composer](https://getcomposer.org/), the dependency manager.

```
brew tap josegonzalez/homebrew-php
brew install josegonzalez/php/composer
```

##### Download Github
If you don't actively use one of the smaller versioning services, you'll probably end up with Github. Good choice too.
Github has an awesome software client for managing your repositories locally.

**[Download Github for Mac](https://mac.github.com/)**


## The Project

The Hackaton site uses a slightly modified public theme called Sydney. You can fuly customise the looks of your website with it!
For more information check [Sydney's](http://athemes.com/theme/sydney/) website!

### Plugins

Code Snippets - An easy, clean and simple way to add code snippets to your site.

Simple Calendar - Google Calendar Plugin - Add Google Calendar events to your WordPress site in minutes. 

MailChimp for WordPress - MailChimp for WordPress. Subscribe your WordPress site visitors to your MailChimp lists, with ease.

Simple Twitter Tweets - Display your Tweets on your WordPress site using the new Twitter OAuth API v1.1

Slack - Allows you to send notifications to Slack channels when certain events in WordPress occur.

Social Media Widget - Adds links to all of your social media and sharing site profiles. Tons of icons come in 3 sizes, 4 icon styles, and 4 animations.

Team Members - Create new team members, add their positions, bios, social links and copy-paste the shortcode into any post/page. 

User Specific Content - Allows you to select specific users by user name, or by role name who can view a specific post content or page content.

WordPress Social Login - Allow your visitors to comment and login with social networks such as Twitter, Facebook, Google, Yahoo and more.

WP Github - Display users Github public repositories, commits, issues and gists.

Please note that several plugins such as Slack and Simple Twitter Tweets require external API's. Make sure you get those API keys in order for the plugins to function :)


The team members and Calendar are displayed on the homepage via shortcodes. Once you have create your team and calendar, go to the Shortcodes admin page and save the Team Shortcode Name and Calendar Shortcode ID respectively


### Instructions

First, clone the hackaton-mini-site project to your regular project folders location

```
git clone https://github.com/Cloudoki/Hackathon-mini-site.git
```

If you wish to clone and rename

```
git clone https://github.com/Cloudoki/Hackathon-mini-site.git folder-name
```


Now we will have to install the required components.

```
cd /local/path/to/Hackaton-mini-site
composer install
```

To connect the theme folder with the WP theme directory, add a symlink. Same for the uploads folder (or private plugins) - watch out with the -sf force in the "ln flag", though.

```
ln -s /path/to/root/themes/sydney /path/to/root/web/wp/wp-content/themes/sydney 
ln -sf /path/to/root/shared/uploads path/to/root/web/wp/wp-content/uploads 
```

Your local WordPress site will be located at

```
/path/to/root/web/wp
```

After that, WordPress will guide you through the installation. Once completed, log in and go to Appearance > Themes and activate the Sydney theme. The go to Plugins and activated the plugins.

All is done, happy hacking!