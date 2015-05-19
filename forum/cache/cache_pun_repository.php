<?php

if (!defined('PUN_REPOSITORY_EXTENSIONS_LOADED')) define('PUN_REPOSITORY_EXTENSIONS_LOADED', 1);

$pun_repository_extensions = array (
  'pun_admin_add_user' => 
  array (
    'content' => '
	',
    'attributes' => 
    array (
      'engine' => '1.0',
    ),
    'id' => 'pun_admin_add_user',
    'title' => 'Admin add user',
    'version' => '1.4.1',
    'description' => 'Admin may add new user using the form in the bottom of User list.',
    'author' => 'PunBB Development Team',
    'minversion' => '1.4RC1',
    'maxtestedon' => '1.4.2',
  ),
  'pun_admin_clear_cache' => 
  array (
    'content' => '
	',
    'attributes' => 
    array (
      'engine' => '1.0',
    ),
    'id' => 'pun_admin_clear_cache',
    'title' => 'Admin Clear Cache',
    'version' => '1.1.5',
    'description' => 'The link in the page footer to clear forum cache.',
    'author' => 'PunBB Development Team',
    'minversion' => '1.4RC1',
    'maxtestedon' => '1.4.2',
  ),
  'pun_admin_manage_extensions_improved' => 
  array (
    'content' => '
	',
    'attributes' => 
    array (
      'engine' => '1.0',
    ),
    'id' => 'pun_admin_manage_extensions_improved',
    'title' => 'Pun Admin Manage Extensions Improved',
    'version' => '1.5.3',
    'description' => 'This extension allows to choose several extensions to enable/disable/uninstall them',
    'author' => 'PunBB Development Team',
    'minversion' => '1.4',
    'maxtestedon' => '1.4.2',
    'dependencies' => 
    array (
      'dependency' => 'pun_jquery',
    ),
    'note' => 
    array (
      0 => 
      array (
        'content' => 'If extension "pun_extension_reinstaller" was installed, it will be disabled.',
        'attributes' => 
        array (
          'type' => 'install',
          'timing' => 'pre',
        ),
      ),
    ),
  ),
  'pun_attachment' => 
  array (
    'content' => '
	',
    'attributes' => 
    array (
      'engine' => '1.0',
    ),
    'id' => 'pun_attachment',
    'title' => 'Attachment',
    'version' => '1.1.19',
    'description' => 'Allows users to attach files to posts.',
    'author' => 'PunBB Development Team',
    'minversion' => '1.4RC1',
    'maxtestedon' => '1.4.2',
    'note' => 
    array (
      1 => 
      array (
        'content' => 'WARNING: your web-server should have write access to FORUM_ROOT/extensions/pun_attachment/attachments/.',
        'attributes' => 
        array (
          'type' => 'install',
          'timing' => 'pre',
        ),
      ),
      2 => 
      array (
        'content' => 'WARNING: all users\' attachments will be removed during the uninstallation process. It is recommended that you disable the "pun_attachment" extension instead, or upgrade it without uninstalling.',
        'attributes' => 
        array (
          'type' => 'uninstall',
          'timing' => 'pre',
        ),
      ),
    ),
  ),
  'pun_bbcode' => 
  array (
    'content' => '
	',
    'attributes' => 
    array (
      'engine' => '1.0',
    ),
    'id' => 'pun_bbcode',
    'title' => 'BBCode buttons',
    'version' => '1.4.18',
    'description' => 'Pretty buttons for easy BBCode formatting.',
    'author' => 'PunBB Development Team',
    'minversion' => '1.4RC1',
    'maxtestedon' => '1.4.2',
  ),
  'pun_colored_usergroups' => 
  array (
    'content' => '
	',
    'attributes' => 
    array (
      'engine' => '1.0',
    ),
    'id' => 'pun_colored_usergroups',
    'title' => 'Colored usergroups',
    'version' => '1.2.4',
    'description' => 'This extension allows setting specific colors for user groups.',
    'author' => 'PunBB Development Team',
    'minversion' => '1.4RC1',
    'maxtestedon' => '1.4.2',
  ),
  'pun_forum_news' => 
  array (
    'content' => '
	',
    'attributes' => 
    array (
      'engine' => '1.0',
    ),
    'id' => 'pun_forum_news',
    'title' => 'Forum news',
    'version' => '1.1.2',
    'description' => 'Allow users to mark topics or posts as "news". News is shown on a special page.',
    'author' => 'PunBB Development Team',
    'minversion' => '1.4RC1',
    'maxtestedon' => '1.4.2',
  ),
  'pun_jquery' => 
  array (
    'content' => '
	',
    'attributes' => 
    array (
      'engine' => '1.0',
    ),
    'id' => 'pun_jquery',
    'title' => 'jQuery',
    'description' => 'A PunBB extension that provide jQuery lib (version 1.7.1)',
    'author' => 'PunBB Development Team',
    'version' => '1.1.5',
    'minversion' => '1.4RC1',
    'maxtestedon' => '1.4.2',
  ),
  'pun_move_posts' => 
  array (
    'content' => '
	',
    'attributes' => 
    array (
      'engine' => '1.0',
    ),
    'id' => 'pun_move_posts',
    'title' => 'Pun Move Posts',
    'version' => '1.1.4',
    'description' => 'This extension allows moderators to move posts to other topics.',
    'author' => 'PunBB Development Team',
    'minversion' => '1.4RC1',
    'maxtestedon' => '1.4.2',
  ),
  'pun_pm' => 
  array (
    'content' => '
	',
    'attributes' => 
    array (
      'engine' => '1.0',
    ),
    'id' => 'pun_pm',
    'title' => 'Private Messaging',
    'version' => '2.4.2',
    'description' => 'Allows users to send and receive private messages.',
    'author' => 'PunBB Development Team',
    'minversion' => '1.4RC1',
    'maxtestedon' => '1.4.2',
    'note' => 
    array (
      3 => 
      array (
        'content' => 'WARNING! All users messages will be removed during the uninstall process. It is strongly recommended you to disable "Private Messages" extension instead or to upgrade it without uninstalling.',
        'attributes' => 
        array (
          'type' => 'uninstall',
          'timing' => 'pre',
        ),
      ),
    ),
  ),
  'pun_poll' => 
  array (
    'content' => '
	',
    'attributes' => 
    array (
      'engine' => '1.0',
    ),
    'id' => 'pun_poll',
    'title' => 'Pun poll',
    'version' => '2.3',
    'description' => 'Adds polls feature for topics.',
    'author' => 'PunBB Development team',
    'minversion' => '1.4RC1',
    'maxtestedon' => '1.4.2',
  ),
  'pun_repository' => 
  array (
    'content' => '
	',
    'attributes' => 
    array (
      'engine' => '1.0',
    ),
    'id' => 'pun_repository',
    'title' => 'PunBB Repository',
    'version' => '1.3.1',
    'description' => 'Feel free to download and install extensions from PunBB repository.',
    'author' => 'PunBB Development Team',
    'minversion' => '1.4',
    'maxtestedon' => '1.4.2',
    'note' => 
    array (
      4 => 
      array (
        'content' => 'Warning: web server should have write access to your extensions directory.',
        'attributes' => 
        array (
          'type' => 'install',
          'timing' => 'pre',
        ),
      ),
    ),
  ),
  'pun_stop_bots' => 
  array (
    'content' => '
	',
    'attributes' => 
    array (
      'engine' => '1.0',
    ),
    'id' => 'pun_stop_bots',
    'title' => 'Stop spam from bots',
    'version' => '0.3.3',
    'description' => 'The extension will ask some questions to prevent bot registration and posting.',
    'author' => 'PunBB Development Team',
    'minversion' => '1.4RC1',
    'maxtestedon' => '1.4',
  ),
  'pun_tags' => 
  array (
    'content' => '
	',
    'attributes' => 
    array (
      'engine' => '1.0',
    ),
    'id' => 'pun_tags',
    'title' => 'Pun tags',
    'version' => '1.8.1',
    'description' => 'Topics are taggable now.',
    'author' => 'PunBB Development Team',
    'minversion' => '1.4RC1',
    'maxtestedon' => '1.4.1',
  ),
  'surly' => 
  array (
    'content' => '
    ',
    'attributes' => 
    array (
      'engine' => '1.0',
    ),
    'id' => 'surly',
    'title' => 'Sur.ly',
    'version' => '1.1.0',
    'description' => 'Sur.ly enables you to control and analyze any outbound links published by your site visitors in user-generated content as well as to protect and retain users that follow such links.',
    'author' => 'Sur.ly',
    'minversion' => '1.3.2RC1',
    'maxtestedon' => '1.4.2',
  ),
);

$pun_repository_extensions_timestamp = 1419011203;

?>