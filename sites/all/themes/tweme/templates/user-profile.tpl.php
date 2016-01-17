<?php

/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable
 */
 $user = $elements['#account'];
?>

<div class="profile col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3"<?php print $attributes; ?>>
    <div class="well">
        <center>
            <?php if($user->picture): ?>
                <?php $default_thumbnail = image_style_url('medium', $user->picture->uri); ?>
                <img class="img-circle" src="<?php print $default_thumbnail;?>"/>
            <?php endif; ?>
            <h3><?php print render($user_profile['field_civilite'][0]);?> 
            <?php print render($user_profile['field_nom_et_prenom'][0]);?> </h3>
            <small>
                <cite>
                    <i class="glyphicon glyphicon-map-marker">
                        <?php print render($user_profile['field_adresse'][0]);?>
                    </i>
                </cite>
            </small>
            <hr/>
            <p><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:<?php print $user->mail;?>"><?php print $user->mail;?></a> </p>
            <p><i class="glyphicon glyphicon-phone"></i> <?php print render($user_profile['field_tel'][0]);?> </p>
            <p><strong><?php print render($user_profile['field_occupation']['#title']);?> : </strong> <?php print render($user_profile['field_occupation'][0]);?> </p>
            <p><strong><?php print render($user_profile['field_organisme']['#title']);?> : </strong> <?php print render($user_profile['field_organisme'][0]);?> </p>
    	</center>
    	<hr/>
    	<p>
    	   <strong><?php print render($user_profile['field_a_propos_de_moi']['#title']);?> : </strong>
            <?php print render($user_profile['field_a_propos_de_moi'][0]);?>
        </p>
    </div>
  
</div>
