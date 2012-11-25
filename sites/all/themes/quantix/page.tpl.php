<div class="confetti_wrapper">
<div class="wrapper">
<div class="header">
<div class="header_right">  <?php print render($page['header_right']); ?></div>
<div id="logo">  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    </a>
    </div> 
 </div>
<div class="prime_nav"> 
 <?php print theme('links__system_main_menu', array(
      'links' => $main_menu,
      'attributes' => array(
        'id' => 'navlist',
        'class' => array('links'),
      ),
      'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      ),
    )); ?>
</div> 
<?php print $messages; ?>
<?php if ($page['header']): ?>
<div class="header_region"> <?php print render($page['header']); ?></div>
<?php endif; ?>
<div class="middle"> 
 <?php if ($page['sidebar_first']): ?>
<div class="left">
 <?php print render($page['sidebar_first']); ?>
 </div>
  <?php endif; ?>
<div class="main_content">
 <?php if ($page['above_content']): ?>
<div class="above_content">
 <?php print render($page['above_content']); ?>
 </div>
  <?php endif; ?>
<div class="content_margin">
	  <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
</div>
</div>
 <?php if ($page['sidebar_second']): ?>
<div class="right">
 <?php print render($page['sidebar_second']); ?>
 </div>
 <?php endif; ?>
			</div>
<div class="footer">
<div class="privacy_menu"><a href="<?php global $base_url;print $base_url;?>/node/2/">Privacy Policy & Terms of Use</a></div>
<div class="copyright">&copy; Quantix Health Capital</div>
<div class="footer_menu">  <?php print render($page['footer']); ?>  </div>
		</div>
	</div>
</div>