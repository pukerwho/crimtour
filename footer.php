</div>

<footer class="bg-theme-dark text-gray-200 py-20">
  <div class="container">
    <div class="flex flex-wrap lg:-mx-8">
      <div class="w-full lg:w-6/12 lg:px-8 mb-6 lg:mb-0">
        <div class="relative mb-8">
          <a href="<?php echo get_home_url(); ?>" class="absolute-link"></a>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/crimtour-white-logo.png" alt="Лого">
        </div>
        <div class="text-sm font-light opacity-75">
          В цьому каталозі не всі сайти, які є в інтернеті. Але наша команда постійно працює над тим, щоб додавати нові цікаві сайти в наш каталог. Ми можете нам допомогти в цьому ;) Будемо дуже вдячні за будь-яку допомогу.
        </div>
      </div>

      <div class="w-full lg:w-3/12 lg:px-8 mb-6 lg:mb-0">
        <div class="text-lg text-gray-400 uppercase mb-4">
          <?php _e('Категории', 'treba-wp'); ?>
        </div>
        <div>
          <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => 'div',
            'menu_class' => 'flex flex-col'
          ]); ?> 
        </div>
      </div>

      <div class="w-full lg:w-3/12 lg:px-8">
        <div class="text-lg text-gray-400 uppercase mb-4">
          <?php _e('CMS', 'treba-wp'); ?>
        </div>
        <div>
          <?php wp_nav_menu([
            'theme_location' => 'footer-cms',
            'container' => 'div',
            'menu_class' => 'flex flex-col'
          ]); ?> 
        </div>
      </div>

    </div>
  </div>
</footer>

<div class="modal-bg hidden"></div>

<div class="modal" data-modal="menu">
  <div class="modal_content w-full h-screen">
    <div class="h-full bg-white rounded-xl">
      <div class="flex items-center justify-between bg-theme-dark text-white text-lg rounded-t-lg px-4 py-6 mb-4">
        <div class="logo font-extrabold">
          <a href="<?php echo get_home_url(); ?>"><span class="text-blue-500">n</span><span class="text-yellow-400">Ukraine</span></a>
        </div>
        <div class="modal-close-js">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </div>
      </div>
      <div class="p-4">
        <div class="text-2xl font-title mb-6"><?php _e("Меню", "treba-wp"); ?></div>
        <div>
          <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => 'div',
            'menu_class' => 'flex flex-col'
          ]); ?> 
        </div>
      </div>
    </div>
  </div>  
</div>

<?php wp_footer(); ?>

</body>
</html>