<article id="article-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="article-inner">

    <?php print $unpublished; ?>

    <?php print render($title_prefix); ?>
    <?php if ($title || $display_submitted): ?>
      <header>
        <?php if ($title): ?>
          <h1<?php print $title_attributes; ?>>
            <a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a>
          </h1>
        <?php endif; ?>

      </header>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <div<?php print $content_attributes; ?>>
    <?php print $user_picture; ?>
    <?php
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      print render($content);
    ?>
    </div>

    <?php if (!empty($content['links'])): ?>
      <nav class="clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>
    <div class="content-bottom-section clearfix">
    <?php if (!empty($content['field_tags'])): ?>
      <?php if ($display_submitted): ?>
        <div class="submitted"><?php print format_date($node->created)?></div>
      <?php endif; ?>
      <div class='taxonomy'><?php print render($content['field_tags']); ?></div>
    <?php endif; ?>
    </div>

    <?php print render($content['comments']); ?>

  </div>
</article>
