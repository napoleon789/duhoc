

  <div id="skip-link">
    <div id="container" class="clearfix">
        <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
        <?php if ($main_menu): ?>
          <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
        <?php endif; ?>
    </div>
  </div>

  <header id="header" role="banner" class="clearfix">
    <div id="container" class="clearfix">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>
        <?php if ($site_name || $site_slogan): ?>
          <hgroup id="site-name-slogan">
            <?php if ($site_name): ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
            <?php if ($site_slogan): ?>
              <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
            <?php endif; ?>
          </hgroup>
        <?php endif; ?>

        <?php print render($page['header']); ?>

        <?php if ($main_menu || $secondary_menu || !empty($page['navigation'])): ?>
          <nav id="navigation" role="navigation" class="clearfix">
            <?php if (!empty($page['navigation'])): ?> <!--if block in navigation region, override $main_menu and $secondary_menu-->
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
            <?php if (empty($page['navigation'])): ?>
              <?php print theme('links__system_secondary_menu', array(
                'links' => $secondary_menu,
                'attributes' => array(
                  'id' => 'secondary-menu',
                  'class' => array('links', 'clearfix'),
                ),
                'heading' => array(
                  'text' => t('Secondary menu'),
                  'level' => 'h2',
                  'class' => array('element-invisible'),
                ),
              )); ?>
              <?php print theme('links__system_main_menu', array(
                'links' => $main_menu,
                'attributes' => array(
                  'id' => 'main-menu',
                  'class' => array('links', 'clearfix'),
                ),
                'heading' => array(
                  'text' => t('Main menu'),
                  'level' => 'h2',
                  'class' => array('element-invisible'),
                ),
              )); ?>

            <?php endif; ?>
          </nav> <!-- /#navigation -->
        <?php endif; ?>
    </div>
  </header> <!-- /#header -->

  <section id="main" role="main" class="clearfix">
    <div id="container" class="clearfix">
      <?php
      $tree = menu_tree_page_data('primary-links'); //substitute your menu name for primary-links
      foreach($tree as $key => $mi) {
        if ($mi['link']['in_active_trail'] && $tree[$key]['below']) {
          $menu = menu_tree_output($tree[$key]['below']);
        }
      }
      print $menu;
      ?>
        <?php print $messages; ?>
        <a id="main-content"></a>
        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
        <?php print render($title_prefix); ?>

        <?php print render($title_suffix); ?>
        <?php $a = arg(2);?>
        <?php $b = arg(1);?>
      <?php drupal_set_title('Student '.arg(3)) ?>
       <?php if (isset($a) && $b == 'student'):?>
          <ul class="menu_student">
            <li class="item <?php if(arg(3) =='basic') echo 'active';?>"><a href="http://localhost/duhoc/quanly/student/<?php echo $a;?>/basic">Personal Background</a> </li>
            <li class="item <?php if(arg(3) =='contract') echo 'active';?>"><a href="http://localhost/duhoc/quanly/student/<?php echo $a;?>/contract">Contract</a> </li>
            <li class="item  <?php if(arg(3) =='pathway') echo 'active';?>"><a href="http://localhost/duhoc/quanly/student/<?php echo $a;?>/pathway">Pathway and Comission</a> </li>
            <li class="item  <?php if(arg(3) =='visa') echo 'active';?>"><a href="http://localhost/duhoc/quanly/student/<?php echo $a;?>/visa">Visa</a> </li>
          </ul>
       <?php endif; ?>

      <?php if($b =='setting'):?>
          <ul class="menu_seting">
            <li class="item <?php if($a == false) echo 'active';?>"><a href="http://localhost/duhoc/quanly/setting/">List Country</a> </li>
            <li class="item <?php if($a =='contract') echo 'active';?>"><a href="http://localhost/duhoc/quanly/setting/contract">List Contract</a> </li>
          </ul>
      <?php endif;?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
    </div>
  </section> <!-- /#main -->

  <div id="container" class="clearfix">
      <?php if ($page['sidebar_first']): ?>
        <aside id="sidebar-first" role="complementary" class="sidebar clearfix">
          <?php print render($page['sidebar_first']); ?>
        </aside>  <!-- /#sidebar-first -->
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <aside id="sidebar-second" role="complementary" class="sidebar clearfix">
          <?php print render($page['sidebar_second']); ?>
        </aside>  <!-- /#sidebar-second -->
      <?php endif; ?>
  </div><!-- #container -->

  <footer id="footer" role="contentinfo" class="clearfix">
    <div id="container" class="clearfix">
        <?php print render($page['footer']) ?>
        <?php print $feed_icons ?>
    </div>
  </footer> <!-- /#footer -->


