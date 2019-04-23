<?php
include __DIR__ . '/lib/php-plugin-loader.php';

$load = new PluginLoader(__DIR__ . '/plugins', ['first']);

/*$load->debug('third', '!first', 'second');

$load->debug('!first', '!second');

$load->debug('first');
$load->debug();
*/

$load->load('third', '!first', 'second', '_fourth');
#$load->plugin('third', '!first', 'second');