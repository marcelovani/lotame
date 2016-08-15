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
    // If you have dfp enabled, you can add Global targeting keys enclosed by {}.
    'articles' => 'Custom^Technology^DFP^^{key}',
  );

  return $patterns;
}
