<div id="node-<?php print $node->nid; ?>" class="sh-blog <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
        <h2 class="blog-content-tile" <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
        
    <div class="blog-image clearfix">
        <?php print render($content['field_image']);?>
        <div class="image-overlay">
            <a title="<?php print $title; ?>" href="<?php print $node_url; ?>" class="image-overlay-inside"></a>
        </div>
    </div>
        
    <div class="article-info">
        <?php print t('Written by'); ?> 
        <?php $user = user_load($uid); ?>
        <span class="username" xml:lang="" typeof="sioc:UserAccount" property="foaf:name" datatype=""><?php print @$user->field_nom_et_prenom['und'][0]['value'];?></span>
         - <span class="cdate"><?php print format_date($created,'custom','d/m/Y');?></span>
    </div>    
    
    <div class="blog-content content"<?php print $content_attributes; ?>>
        <?php print render($content['body']);?>
        <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        //print render($content);
        ?>
    </div>
    <?php print l(t('Read more'),'node/'.$nid);?>
    <?php //print render($content['links']); ?>
    <?php //print render($content['comments']); ?>
</div>