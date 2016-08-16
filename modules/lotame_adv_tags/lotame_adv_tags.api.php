<?php

/**
 * @file
 * Hooks provided by Lotame advanced tags.
 *
 */

/**
 * Defines the lotame advanced tag patterns.
 */
function hook_lotame_adv_tags_default_patterns() {
  $patterns = array(
    // You can use text and drupal tokens.
    'global' => 'Custom^Technology^site^^[site:name]',
  );

  return $patterns;
}
