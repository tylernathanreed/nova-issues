<p align="center"><a href="https://nova.laravel.com/" target="_blank"><img src="docs/nova.png" width="400" alt="Laravel Nova Logo"></a></p>

## Laravel Nova Issues

This is my repository for replicating issues for the [Nova Issue Tracker](https://github.com/laravel/nova-issues).

Every issue I report will have a dedicated branch, leading with the issue number. For example:

```
<####>-issue-<description>
6424-issue-filter-menu-refresh
```

## Installation

This repository uses [Laravel Sail](https://laravel.com/docs/11.x/sail), which makes replicating the issue on your own environment a breeze.

Here's how you can load up the site:

```
git clone git@github.com:tylernathanreed/nova-issues.git
cd nova-issues
git branch <####>-issue-<description>
composer install
sail up -d
sail artisan db:seed
```

## Logging In

This repository ships with some default users:
 - tylernathanreed@gmail.com
 - crynobone@gmail.com
 - nova@laravel.com

The password for all users is "`password`".
