Module: Lotame Advanced Tags

Description
===========
This is a sub-module of Lotame. It allows the customization of tags, like
Crowd Control for example.

To add Crowd control tags to the page follow this example:

function hook_lotame_adv_tags_default_patterns() {

  $patterns = array(
    'global' => 'Custom^Technology^Site^^[site:name]',
    'term_pages' => 'Custom^Technology^Term^^[term:name]',
  );

  return $patterns;
}

If you want to add or remove tags depending on the page:
function hook_lotame_adv_tags_default_patterns_alter(&$patterns) {
  $menu = menu_get_item();

  // Remove term_pages pattern from taxonomy pages.
  if ($menu['map'][0] != 'taxonomy') {
    unset($patterns['global']);
  }
}
