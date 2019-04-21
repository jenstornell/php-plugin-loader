<?php
class PluginLoader {
  function __construct($root) {
    $this->root = $root;
    $this->includes = null;
    $this->excludes = null;
  }
  
  function all() {
    $this->includes = glob($this->root . '/*', GLOB_ONLYDIR);
  }

  function filter($folders) {
    foreach($folders as $folder) {
      $name = basename($folder);
      if(substr($name, 0, 1) == '_') continue;
      if(!file_exists($folder . '/index.php')) continue;
      if($name == 'php-plugin-loader') continue;
      if(isset($this->excludes) && in_array($name, $this->excludes)) continue;

      $plugins[] = $name;
    }
    return $plugins;
  }

  function include($names = []) {
    foreach($names as $name) {
      $folders[] = $this->root . '/' . $name;
    }

    $this->includes = $folders;
  }

  function exclude($names = []) {
    $this->excludes = $names;
  }

  function load() {
    if($this->includes === null) {
      $this->all();
    }

    $this->plugins = $this->filter($this->includes);

    foreach($this->plugins as $dirname) {
      include $this->root . '/' . $dirname . '/index.php';
    }
  }
}