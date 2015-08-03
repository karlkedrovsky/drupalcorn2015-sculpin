<?php

namespace App;

use Twig_Extension;
use Twig_SimpleFunction;

class DrupalInfo extends Twig_Extension {

  public function getFunctions() {
    return array(
      'drupalInfo' => new Twig_SimpleFunction('drupalInfo', array($this, 'drupalInfo')),
      'drupalModules' => new Twig_SimpleFunction('drupalModules', array($this, 'drupalModules'))
    );
  }

  public function drupalInfo($drush_alias) {
    $output = array();
    exec('drush ' . $drush_alias . ' status --format=json', $output);
    return json_decode($output[0]);
  }

  public function drupalModules($drush_alias) {
    $output = array();
    exec('drush ' . $drush_alias . ' pm-list --type=module --status=enabled --format=json', $output);
    return json_decode($output[0], TRUE);
  }

  public function getName()
  {
    return 'drupal.info';
  }

}