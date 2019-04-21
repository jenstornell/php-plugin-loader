# PHP Plugin Loader

*Version 1.0*

If you are making some kind of tool, you may want a plugin loader.

## In short

- Very small
- Includes and excludes support
- Will skip hidden plugins prefixed with _
- You can control the plugin load order

## Usage

In the example below, it will load `third` and then `second` in that order. If you don't use `include` and `exclude` it will load all plugins in the folder except invisible ones (prefixed with _).

```php
<?php
include __DIR__ . '/lib/php-plugin-loader.php';

$plugin_loader = new PluginLoader(__DIR__ . '/tests/plugins');
$plugin_loader->include(['third', 'first', 'second']);
$plugin_loader->exclude(['first']);
$plugin_loader->load();
```

1. Include the library
1. Set the path to the plugin folder
1. Include and exclude if needed
1. Load the plugins set

## Donate

Donate to [DevoneraAB](https://www.paypal.me/DevoneraAB) if you want.

## Requirements

- PHP 7

## License

MIT