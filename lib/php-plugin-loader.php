<?php
class PluginLoader {
  function __construct($root) {
    $this->root = $root;
    $this->plugins = [];
  }
  
  function set($plugins = null) {
    //if($plugins)
    $folders = glob($this->root . '/*', GLOB_ONLYDIR);
    #print_r($folders);
    $this->plugins = $this->filter($folders);
  }

  function filter($folders) {
    foreach($folders as $folder) {
      $name = basename($folder);
      if(substr($name, 0, 1) == '_') continue;
      if(!file_exists($folder . '/index.php')) continue;
      if($name == 'php-plugin-loader') continue;

      $plugins[] = $name;
    }
    return $plugins;
  }

  function get() {
    return $this->plugins;
  }

  function load() {
    foreach($this->plugins as $dirname) {
      include $this->root . '/' . $dirname . '/index.php';
    }
  }
}