<?php

/**
 * @file
 * Contains Drupal\demo\DemoService.
 */

namespace Drupal\xai;

class XaiService {
  
  protected $demo_value;
  
  public function __construct() {
    $this->demo_value = 'Upchuk';
  }
  
  public function getDemoValue() {
    return $this->demo_value;
  }
  
}