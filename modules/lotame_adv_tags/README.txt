Module: Lotame Advanced Tags

Description
===========
This is a sub-module of Lotame. It allows the customization of tags, like
Crowd Control for example.

To add Crowd control tags to the page follow this example:

function hook_lotame_adv_tags_default_tags() {

  $tags = array(
    'global' => 'Custom^Technology^Site^^[site:name]',
    'term_pages' => 'Custom^Technology^Term^^[term:name]',
  );

  return $tags;
}

If you want to add or remove tags depending on the page:
function hook_lotame_adv_tags_default_tags_alter(&$tags) {
  $menu = menu_get_item();

  // Remove term_pages tag from taxonomy pages.
  if ($menu['map'][0] != 'taxonomy') {
    unset($tags['global']);
  }
}
