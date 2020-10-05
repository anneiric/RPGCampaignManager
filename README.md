# RPG Campaign Manager

A fully Open-Source RPG Campaign Manager and World Building tool.

This tool is currently in early development and not ready for general use. Signification portions of functionality have yet to be implemented and what is there remains very buggy. 

I **strongly** recommend not hosting this on a public server until the policy, auth and validation checks have been fully implemented, as currently people will be able to write data to each others accounts.

## Key features

* Create and manage multiple custom maps. Just upload a map image and draw on whatever points of interest you choose..
* Create unlimited amount of Locations, Buildings, NPC's, Players, Items, Events etc.
* Easily filter campaign content to find the content you need.
* Run as many campaigns as you like.
* Manage content using markdown, with drag & drop image uploading supported.

## Missing features

* Setup of requests (validation) and Better auth flow (email verification if none local).
* Move off of generated bootstrap entirely + setup better styling for all pages.
* More content types - for example stat blocks for common RPG style games.
* Some proper tests & CI.
* Utils "cli", to allow commands like `d6 2` to provide the values of 2 d6 rolls.

## Setup

This project is based on Laravel, so easy to get setup and working locally. You will need up to date PHP & MySQL available.

First off clone the repository down to where you want it to run.

```
git clone git@github.com:thybag/RPGCampaignManager.git
```

Navigate inside the cloned folder and run the following to install dependencies via composer, set app keys & link storage.

```
composer install && cp .env.example .env && php artisan key:generate && php artisan storage:link
```
Once the above is complete, open `.env` and replace the database settings with your local databases own details. 

After that hit migrate.

```
 php artisan migrate

```

At this point, you should be able to access the application from the public directory, You can now "register" your first user account and start your first campaign.

## Development setup

In addition to the above steps, to start building/working on the front end you will need to npm install and start the watch task.

```
npm install && npm run watch
```

## Help out?

If you are interested in contributing to OSS, this project is in its super early days and is based on a pretty standard PHP stack (Laravel, Leaflet etc.) so any help would be much appreciated. Please message me on Github and I'd be happy to point you in the right direction. I'm also open to direct PR's (Although there's a large risk of breaking changes / duplication of work given how early on everything is).

In addition to dev work, if anyone has a nice map image they'd be happy to be used in screen shot of the tool in use, please get in touch.
