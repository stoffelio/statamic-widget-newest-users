# Statamic Widget: Newest Users

Keep an eye on the users  that register with your site.

## Requirements

- Statamic v3

## Installation

From your site folder, run `composer require stoffelio/statamic-widget-newest-users` - or install it via the control panel.

## Usage

To add the widget to  your control panel dashboard, edit the config under `config/statamic/cp.php` and add the following entry to the `widgets` array:

```php
[
    'type' => 'newest_users',
    'width' => 100,
],

```

After installing the widget, there will be no data shown for a while. Statamic does not save the creation timestamp, so only users registered after the installation of this addon will receive a timestamp and appear in the widget.

## Optional Parameters

By default the widget displays:

```php
[
    'type' => 'newest_users',
    'width' => 100,
    'limit' => 5
],

```

**Limit:** The maximum number of users to display

## About Us

[Webographen](https://webographen.de/) is a digital design studio focusing on Statamic. We make websites that are not just pretty, but scale in terms of design and technology.