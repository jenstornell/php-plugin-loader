<?php
include __DIR__ . '/../lib/php-plugin-loader.php';

// Folder missing
$plugin_loader = new PluginLoader(__DIR__ . '/../plugins3');
$plugin_loader->include(['third', 'first', 'second']);
$plugin_loader->exclude(['first']);
$plugin_loader->load();

// Plugins missing
$plugin_loader = new PluginLoader(__DIR__ . '/../plugins-empty');
$plugin_loader->include(['third', 'first', 'second']);
$plugin_loader->exclude(['first']);
$plugin_loader->load();

// Plugins all
$plugin_loader = new PluginLoader(__DIR__ . '/../plugins');
ob_start();
$plugin_loader->load();
$content = ob_get_contents();
ob_end_clean();
if($content != 'firstsecondthird') echo 'Plugins all';

// Load plugins again
$plugin_loader = new PluginLoader(__DIR__ . '/../plugins');
ob_start();
$plugin_loader->load();
$content = ob_get_contents();
ob_end_clean();
if($content != '') echo 'Plugins again';