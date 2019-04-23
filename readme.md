# PHP Plugin Loader

*Version 1.1*

If you are making some kind of tool, you may want a plugin loader.

## In short

- Very small
- Includes and excludes support
- Will skip hidden plugins prefixed with _
- You can control the plugin load order

## Setup

Include the file to the library. Create a class instance.

1. The first argument should be the path to the plugin folder.
1. The second argument should be plugins that will always be excluded.

```php
<?php
include __DIR__ . '/lib/php-plugin-loader.php';

$load = new PluginLoader(__DIR__ . '/plugins', ['first']);
```

## Usage

### Include

Use the folder names of the plugins as arguments. The code below will load the plugins `third`, `second` and `forth` in that exact order. The plugin `first` will be skipped because it's excluded in the setup.

```php
$load->load('third', 'second');
$load->load('first', 'forth');
```

### Exclude

If you don't set any plugins to be included, it will load all the plugins that are not excluded. If we don't run the include example above, this example will load all the plugins except `second`.

```php
$load->load('!second');
```

### Prefix to exclude

Another alternative to exclude a plugin is to use the `_` as a prefix. If you name a plugin folder `_fourth`, then it will be excluded.

## Donate

Donate to [DevoneraAB](https://www.paypal.me/DevoneraAB) if you want.

## Requirements

- PHP 7

## License

MIT