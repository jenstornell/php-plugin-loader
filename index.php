<?php
include __DIR__ . '/lib/php-plugin-loader.php';

$plugin_loader = new PluginLoader(__DIR__ . '/tests/plugins');
$plugin_loader->set();
print_r($plugin_loader->get());

$plugin_loader->load();