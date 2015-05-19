<?php
    switch ($forum_user['avatar'])
    {
        case FORUM_AVATAR_GIF:
            $avatar_filename = $forum_user['id'].'.gif';
            break;

        case FORUM_AVATAR_JPG:
            $avatar_filename = $forum_user['id'].'.jpg';
            break;

        case FORUM_AVATAR_PNG:
            $avatar_filename = $forum_user['id'].'.png';
            break;

        case FORUM_AVATAR_NONE:
            $noavatar = TRUE;
            break;
        default:
            $noavatar = TRUE;
            break;
    }
?>
<?php if(!isset($noavatar)) { ?>
<a href="<?php echo forum_link($forum_url['user'],$forum_user['id']); ?>"><img src="<?php echo($base_url); ?>/<?php echo($forum_config['o_avatars_dir']); ?>/<?php echo($avatar_filename); ?>" id="topavatar"/></a>
<?php }