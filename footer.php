<div class="container mt-10">
  <div class="text-lg font-semibold border-b border-gray-200 pb-4 mb-4">🔍 <?php _e("Популярні запити", "treba-wp"); ?></div>
  <div class="flex flex-wrap lg:-mx-4">
    <?php if ( is_home() ): ?>
      <div class="w-full lg:w-1/3 lg:px-4 mb-4">
        <div><a href="https://s-cast.ua/" class="hover:text-blue-500">s-cast.ua</a></div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-4 mb-4">
        <div><a href="https://treba-solutions.com/" class="hover:text-blue-500">treba-solutions.com</a></div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-4 mb-4">
        <div><a href="https://sdamkvartiry.com/" class="hover:text-blue-500">sdamkvartiry.com</a></div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-4 mb-4">
        <div><a href="https://tarakan.org.ua/" class="hover:text-blue-500">tarakan.org.ua</a></div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-4 mb-4">
        <div><a href="https://priazovka.com/" class="hover:text-blue-500">priazovka.com</a></div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-4 mb-4">
        <div><a href="https://auto-future.land/" class="hover:text-blue-500">auto-future.land</a></div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-4 mb-4">
        <div><a href="https://d-art.org.ua/" class="hover:text-blue-500">d-art.org.ua</a></div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-4 mb-4">
        <div><a href="https://icatalog.pro/" class="hover:text-blue-500">icatalog.pro</a></div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-4 mb-4">
        <div><a href="https://webgolovolomki.com/" class="hover:text-blue-500">webgolovolomki.com</a></div>
      </div>
    <?php else: ?>
      <?php 
        $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $super_links = super_links($current_url);
        foreach ($super_links as $super_link):
      ?>
      <div class="w-full lg:w-1/3 lg:px-4 mb-4">
        <div><?php echo $super_link->top_links; ?></div>
      </div>
      <?php endforeach; ?>
    <?php endif; ?>  
  </div>
</div>

</div>

<footer class="bg-theme-dark text-gray-200 py-20">
  <div class="container">
    <div class="flex flex-wrap lg:-mx-8">
      <div class="w-full lg:w-6/12 lg:px-8 mb-6 lg:mb-0">
        <div class="relative mb-8">
          <a href="<?php echo get_home_url(); ?>" class="absolute-link"></a>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/crimtour-white-logo.png" alt="Лого">
        </div>
        <div class="text-sm font-light opacity-75 mb-6">
          В цьому каталозі не всі сайти, які є в інтернеті. Але наша команда постійно працює над тим, щоб додавати нові цікаві сайти в наш каталог. Ми можете нам допомогти в цьому ;) Будемо дуже вдячні за будь-яку допомогу.
        </div>
        <div>
          <a href="https://sviato.top/"><img src="https://crimtour.com/wp-content/uploads/2024/05/sviato.jpeg" alt="Sviato.top" width="25"></a>
        </div>
      </div>

      <div class="w-full lg:w-3/12 lg:px-8 mb-6 lg:mb-0">
        <div class="text-lg text-gray-400 uppercase mb-4">
          <?php _e('Категории', 'treba-wp'); ?>
        </div>
        <div>
          <?php wp_nav_menu([
            'theme_location' => 'footer',
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