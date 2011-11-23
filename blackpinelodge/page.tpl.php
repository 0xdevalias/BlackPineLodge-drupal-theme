<?php
// $Id: page.tpl.php,v 1.48 2010/11/20 04:03:51 webchick Exp $
?>
  <div id="wrapper">
    <div id="container" class="clearfix">
      <div id="header" class="header clearfix">
        <?php print render($page['header']); ?>
      </div>

      <div id="contentArea" class="clearfix">
        <div id="breadcrumb" class="clearfix">
          <?php
		    /* Display the breadcrumb, handling front page as well */
            print $breadcrumb;
			if (!$is_front)
			{
			  print "› ";
			}
			print $title;
          ?>
        </div>
        <?php if ($page['highlighted']): ?>
          <div id="highlighted">
        <?php print render($page['highlighted']); ?>
          </div>
        <?php endif; ?>
      
        <?php if ($page['pageBanner']): ?>
          <div id="pageBanner" class="pageBanner clearfix">
            <?php print render($page['pageBanner']); ?>
          </div>
        <?php endif;?>
      
        <div id="sideContent" class="sideContent clearfix">
          <?php print render($page['sideContent']); ?>
        </div>
          
        <div id="mainContent" class="mainContent clearfix">
          <div id="mainContentHeading">
            <?php print render($title); ?>
          </div>
          
          <?php print render($page['mainContent']); ?>
        </div>
      </div>
      
      <div id="footer" class="footer clearfix">
        <?php //print $feed_icons ?>
        <?php print render($page['footer']); ?>
      </div>

      <?php /* BEGIN HIDE OLD CODE ?>

      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="sidebar">
          <?php print render($page['sidebar_first']); ?>
        </div>
      <?php endif; ?>

      <div id="center">
        <div id="squeeze">
          <div class="right-corner">
            <div class="left-corner">
          <?php print $breadcrumb; ?>
         
          <a id="main-content"></a>
          <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($tabs2); ?>
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <div class="clearfix">
            <?php print render($page['content']); ?>
          </div>
          <?php print $feed_icons ?>
          <?php print render($page['footer']); ?>
      </div></div></div></div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->

      <?php END HIDE OLD CODE */ ?>

    </div> <!-- /#container -->
  </div> <!-- /#wrapper -->