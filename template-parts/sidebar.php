<div class="sidebar hidden lg:block w-full lg:w-auto h-full lg:h-auto fixed lg:sticky top-0 lg:top-4 left-0 right-0 bg-white lg:bg-transparent z-1 p-4 lg:p-0 lg:py-8">
  <div>
    <a href="<?php echo home_url(); ?>">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/crimtour-logo.png" alt="Лого" class="mb-8 mx-auto" width="140">
    </a>
    <div class="text-sm opacity-75 mb-6"><?php _e("Ресурс на якому ви зможете проаналізувати будь-який сайт. Безкоштовно", "treba-wp"); ?>.</div>
    <div class="w-[60px] h-[1px] bg-gray-300 mb-6"></div>
  </div>
  <div class="mb-6">
    <?php wp_nav_menu([
      'theme_location' => 'main',
      'container' => 'div',
      'menu_class' => 'menu-main flex flex-col'
    ]); ?> 
  </div>
  
  <div class="mb-6">
    <div class="text-sm font-light uppercase opacity-75 mb-4"><?php _e("Сайти на CMS", "treba-wp"); ?></div>
    <ul class="menu-main">
      <li><a href="/wordpress">WordPress</a></li>
      <li><a href="/joomla">Joomla</a></li>
      <li><a href="/prestashop">Prestashop</a></li>
      <li><a href="/tilda">Tilda</a></li>
      <li><a href="/prom">Prom</a></li>
      <li><a href="/horoshop">Хорошоп</a></li>
      <li><a href="/custom">Самописна</a></li>
    </ul>
  </div>

  <div class="mb-6">
    <div class="text-sm font-light uppercase opacity-75 mb-4"><?php _e("Цікаві статті", "treba-wp"); ?></div>
    <div class="flex items-center">
      <div><a href="https://icatalog.pro/12977-about-cctv/" class="text-sm font-light text-gray-600 hover:text-blue-600">О важности роли видеонаблюдения в системе охраны частного дома</a></div>
    </div>
  </div>

  <div class="menu-close block lg:hidden border border-gray-300 rounded text-center text-gray-600 px-4 py-3"><?php _e("Закрити меню", "treba-wp"); ?></div>
</div>