<?php

/**
 * @file
 * Hooks provided by Lotame advanced tags.
 *
 */

/**
 * Defines the lotame advanced tag tags.
 */
function hook_lotame_adv_tags_default_tags() {
  $tags = array(
    // You can use text and drupal tokens.
    'global' => 'Custom^Technology^Site^^[site:name]',
  );

  return $tags;
}
