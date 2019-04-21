<?php
include __DIR__ . '/../lib/php-plugin-loader.php';

// Plugins includes excludes
$plugin_loader = new PluginLoader(__DIR__ . '/../plugins');
ob_start();
$plugin_loader->include(['third', 'first', 'second']);
$plugin_loader->exclude(['first']);
$plugin_loader->load();
$content = ob_get_contents();
ob_end_clean();
if($content != 'thirdsecond') echo 'Plugins includes excludes';