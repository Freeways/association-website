<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
 dpm($fields);
?>
<div class="row margin-top-20">
    <div class="col-md-2">
        <div class="text-center well well-sm">
            <h2>
                <i class="glyphicon glyphicon-comment"></i>
                <strong><?php print $fields['cid']->content; ?></strong>
            </h2>                    
            <p><small><?php print t('Response(s)'); ?></small></p>
        </div>
    </div>
    <div class="col-md-7">
        <h4><?php print $fields['title']->content; ?></h4>
        <?php print $fields['body']->content; ?>
    </div>
    <div class="col-md-3 thumbnail">
        <?php $user = user_load($fields['uid']->raw); ?>
        <?php if($user->picture): ?>
            <?php $default_thumbnail = image_style_url('small_thumbnail', $user->picture->uri); ?>
            <img class="img-circle pull-left" src="<?php print $default_thumbnail;?>" style="margin-right:5px;"/>
        <?php endif; ?>
        <div class="submitted caption">
            <?php print t('Posted by <b>@fullname</b><br/>',
                    array('@fullname'=> @$user->field_nom_et_prenom['und'][0]['value'])); ?>
            <?php print t('Asked')?> <b><?php print $fields['created']->content ?></b> <?php print t('ago')?>
        </div>
    </div>
    
</div>
<hr/>
