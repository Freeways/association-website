<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="row article-content">
        <div class="col-md-8">
            <?php print render($content['body']); ?>
            <?php print render($content['field_gallerie']); ?>
            <br/>
            <div class="clearfix">
                <strong class="pull-left">
                  <span class="glyphicon glyphicon-share" aria-hidden="true"></span>
                  <?php print render($content['field_partager']['#title']); ?> :&nbsp;
                </strong>
                <?php print render($content['field_partager'][0]); ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="well">
                <div class="clearfix">
                    <div class="thumbnail">
                        <?php print render($content['field_image']); ?>
                    </div>
                </div>
                <hr/>
                <div class="clearfix">
                    <strong class="pull-left">
                      <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                      <?php print render($content['field_tags']['#title']); ?> :&nbsp;
                    </strong>
                    <?php print render($content['field_tags'][0]); ?>
                </div>
                <hr/>
                <div class="thumbnail clearfix">
                    <?php if ($display_submitted): ?>
                        <?php $user = user_load($uid); ?>
                        <?php if($user->picture): ?>
                            <?php $default_thumbnail = image_style_url('small_thumbnail', $user->picture->uri); ?>
                            <img class="img-circle pull-left" src="<?php print $default_thumbnail;?>" style="margin-right:5px;"/>
                        <?php endif; ?>
                        <div class="submitted caption">
                            <?php print t('Posted by <b>@fullname</b><br/>On <b>@date</b>',
                                    array('@fullname'=> @$user->field_nom_et_prenom['und'][0]['value'],
                                        '@date' => format_date($created,'medium'))); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row article-comments">
        <?php print render($content['links']); ?>
        <?php print render($content['comments']); ?>
    </div>
</div>