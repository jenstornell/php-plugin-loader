<?php
include __DIR__ . '/lib/php-plugin-loader.php';

$plugin_loader = new PluginLoader(__DIR__ . '/tests/plugins');
$plugin_loader->include(['third', 'first', 'second']);
$plugin_loader->exclude(['first']);
$plugin_loader->load();