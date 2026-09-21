# Statamic Widget: Newest Users

Keep an eye on the users that register with your site.

## Requirements

- Statamic v6

For Statamic v3, v4 and v5, use v1.2.0.

## Installation

From your site folder, run `composer require stoffelio/statamic-widget-newest-users` - or install it via the control panel.

## Usage

To add the widget to your control panel dashboard, edit the config under `config/statamic/cp.php` and add the following entry to the `widgets` array:

```php
[
    'type' => 'newest_users',
    'width' => 100,
],
```

If your users are stored in files, the widget will show nothing for a while. Statamic does not record a creation timestamp for file users, so this addon writes one when a user is saved, and only users registered after you install it can appear.

If your users are stored in the database, every user has a real `created_at` column already and the widget lists them straight away.

## Optional Parameters

There is one optional parameter **limit**, which states the maximum number of users to list (default: 5).

```php
[
    'type' => 'newest_users',
    'width' => 100,
    'limit' => 5
],
```

## About

Built and maintained by [Alexander Stoffel](https://stoffel.io/), freelance Statamic and Laravel developer.
