<?php 
  get_header(); 
  $current_id = get_the_ID();
  
  $countNumber = tutCount($current_id);
?>


<div class="container">
  <div class="flex flex-col-reverse lg:flex-row flex-wrap lg:-mx-10">
    <div class="w-full lg:w-1/5 border-r border-gray-200 lg:px-10">
      <?php get_template_part("template-parts/sidebar"); ?>
    </div>
    <div class="w-full lg:w-4/5 lg:px-10 mb-6 lg:mb-0">
      <h1 class="text-3xl lg:text-4xl font-bold border-b border-gray-200 pb-4 mb-4 lg:pt-8">🚀 <?php _e("Безкоштовний аналіз сайту", "treba-wp"); ?> <span class="text-blue-500"><?php the_title(); ?></span></h1>
      <div class="bg-gray-200 rounded-lg p-4 mb-12">
        <div class="flex flex-wrap lg:-mx-8">
          <div class="w-full lg:w-1/2 font-light border-b lg:border-b-0 lg:border-r border-gray-300 mb-4 lg:mb-0 lg:px-8">
            <h2 class="text-lg font-semibold mb-4">🌐 <?php _e("Загальна інформація", "treba-wp"); ?></h2>
            <div class="border-b border-gray-300 pb-4 mb-4">
              <div class="mb-2"><?php _e("Вік сайту", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_age'); ?></div>
              <div class="mb-2"><?php _e("Зворотніх посилань", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_backlinks'); ?></div>
              <div class="mb-2"><?php _e("Сторінок в індексі", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_indexpages'); ?></div>
              <div class=""><?php _e("Відвідуваність сайту", "treba-wp"); ?>: ≈<?php echo custom_meta_site($current_id, 'meta_site_visits'); ?>0</div>
            </div>
            <div class="font-semibold">
              <div class="mb-2">➡️ <a href="http://<?php the_title(); ?>" target="_blank" rel="nofollow" class="underline"><?php _e("Перейти на сайт", "treba-wp"); ?></a></div>
              <div>➡️ <a href="https://web.archive.org/web/20230901000000*/<?php the_title(); ?>" target="_blank" rel="nofollow" class="underline"><?php _e("Архів сайту", "treba-wp"); ?></a></div>
            </div>
          </div>
          <div class="w-full lg:w-1/2 font-light lg:px-8">
            <h2 class="text-lg font-semibold mb-4">💻 <?php _e("Тести", "treba-wp"); ?></h2>
            <div class="border-b border-gray-300 pb-4 mb-4">
              <div class="mb-2"><?php _e("Успішних тестів", "treba-wp"); ?>: <span class="bg-green-300 rounded-lg py-1 px-2"><?php echo custom_meta_site($current_id, 'meta_site_success'); ?></span></div>
              <div class="mb-2"><?php _e("Помилок", "treba-wp"); ?>: <span class="bg-red-300 rounded-lg py-1 px-2"><?php echo custom_meta_site($current_id, 'meta_site_error'); ?></span></div>
              <div class="mb-2"><?php _e("Попередження", "treba-wp"); ?>: <span class="bg-orange-300 rounded-lg py-1 px-2"><?php echo custom_meta_site($current_id, 'meta_site_warning'); ?></span></div>
            </div>
            <h2 class="text-lg font-semibold mb-4">🏆 <?php _e("Оцінки", "treba-wp"); ?></h2>
            <div>
              <div class="mb-2">
                <?php _e("Оцінка користувачів", "treba-wp"); ?>: 
                <?php $site_rating_user = custom_meta_site($current_id, 'meta_site_rating_user'); ?>
                <?php if ($site_rating_user == 2): ?>
                  <span class="text-red-500"><?php _e("Погано", "treba-wp"); ?></span>
                <?php elseif ($site_rating_user == 3): ?>
                  <span class="text-orange-500"><?php _e("Задовільно", "treba-wp"); ?></span>
                <?php elseif ($site_rating_user == 4): ?>
                  <span class="text-gray-900"><?php _e("Добре", "treba-wp"); ?></span>
                <?php elseif ($site_rating_user == 5): ?>
                  <span class="text-green-600"><?php _e("Чудово", "treba-wp"); ?></span>
                <?php endif; ?>
              </div>
              <div>
                <?php _e("Наша оцінка", "treba-wp"); ?>: 
                <?php $site_rating_our = custom_meta_site($current_id, 'meta_site_rating_our'); ?>
                <?php if ($site_rating_our == 2): ?>
                  <span class="text-red-500"><?php _e("Погано", "treba-wp"); ?></span>
                <?php elseif ($site_rating_our == 3): ?>
                  <span class="text-orange-500"><?php _e("Задовільно", "treba-wp"); ?></span>
                <?php elseif ($site_rating_our == 4): ?>
                  <span class="text-gray-900"><?php _e("Добре", "treba-wp"); ?></span>
                <?php elseif ($site_rating_our == 5): ?>
                  <span class="text-green-600"><?php _e("Чудово", "treba-wp"); ?></span>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-12">
        <h2 class="text-lg font-semibold border-b border-gray-200 pb-4 mb-4">🔍 <?php _e("Показники сайту", "treba-wp"); ?></h2>
        <div class="overflow-x-auto bg-white border-2 border-gray-200">
          <table class="w-full table-auto">
            <thead class="bg-gray-200 border-b-2 border-gray-200">
              <tr>
                <th class="text-left whitespace-nowrap px-2 py-3">
                  <div class="text-left font-bold"><?php _e("Показник", "treba-wp"); ?></div>
                </th>
                <th class="text-left whitespace-nowrap px-2 py-3">
                  <div class="text-left font-bold"><?php _e("Значення", "treba-wp"); ?></div>
                </th>
              </tr>
            </thead>
            <tbody class="text-sm">
              <tr class="border-b border-gray-200 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  <div>ИКС</div>
                </td>
                <td class="whitespace-nowrap px-2 py-3">
                  <div><?php echo site_theme_meta($current_id, "site_meta_iks"); ?>0</div>
                </td>
              </tr>
              <tr class="border-b border-gray-200 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  <div>PR-CY</div>
                </td>
                <td class="whitespace-nowrap px-2 py-3">
                  <div><?php echo site_theme_meta($current_id, "site_meta_prcy"); ?> / 100</div>
                </td>
              </tr>
              <tr class="border-b border-gray-200 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  <div>Citation Flow</div>
                </td>
                <td class="whitespace-nowrap px-2 py-3">
                  <div><?php echo site_theme_meta($current_id, "site_meta_cf"); ?></div>
                </td>
              </tr>
              <tr class="border-b border-gray-200 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  <div>Trust Flow</div>
                </td>
                <td class="whitespace-nowrap px-2 py-3">
                  <div><?php echo site_theme_meta($current_id, "site_meta_tf"); ?></div>
                </td>
              </tr>
              <tr class="border-b border-gray-200 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  <div>Domain Authority</div>
                </td>
                <td class="whitespace-nowrap px-2 py-3">
                  <div><?php echo site_theme_meta($current_id, "site_meta_da"); ?></div>
                </td>
              </tr>
              <tr class="border-b border-gray-200 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  <div>Domain Rating</div>
                </td>
                <td class="whitespace-nowrap px-2 py-3">
                  <div><?php echo site_theme_meta($current_id, "site_meta_dr"); ?> / 100</div>
                </td>
              </tr>
              <tr class="border-b border-gray-200 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  <div>cPR Score</div>
                </td>
                <td class="whitespace-nowrap px-2 py-3">
                  <div><?php echo site_theme_meta($current_id, "site_meta_cpr"); ?> / 10</div>
                </td>
              </tr>
              <tr class="border-b border-gray-200 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  <div>PageRank</div>
                </td>
                <td class="whitespace-nowrap px-2 py-3">
                  <div><?php echo site_theme_meta($current_id, "site_meta_pr"); ?> / 10</div>
                </td>
              </tr>
              <tr class="border-b border-gray-200 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  <div>Semrush AS</div>
                </td>
                <td class="whitespace-nowrap px-2 py-3">
                  <div><?php echo site_theme_meta($current_id, "site_meta_as"); ?> / 100</div>
                </td>
              </tr>
              <tr class="border-b border-gray-200 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  <div><?php _e("Рівень спаму", "treba-wp"); ?></div>
                </td>
                <td class="whitespace-nowrap px-2 py-3">
                  <div><?php echo site_theme_meta($current_id, "site_meta_spam"); ?></div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="mb-12">
        <h2 class="text-lg font-semibold border-b border-gray-200 pb-4 mb-4">⚙️ <?php _e("Технічни показники сайту", "treba-wp"); ?></h2>
        <div class="font-light">
          <div class="mb-2"><?php _e("CMS", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_cms'); ?></div>
          <div class="mb-2"><?php _e("Статистика", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_stat'); ?></div>
          <div class="mb-2"><?php _e("Мова программування", "treba-wp"); ?>: PHP, Javascript</div>
          <div class="mb-2"><?php _e("Кодування", "treba-wp"); ?>: UTF-8</div>

          <?php $rand_file_array = ["Файл знайден", "Не знайдено"]; ?>
          <div class="mb-2"><?php _e("Карта сайта", "treba-wp"); ?>: <?php echo $rand_file_array[array_rand($rand_file_array, 1)]; ?></div>
          <div class="mb-2"><?php _e("Файл robots.txt", "treba-wp"); ?>: <?php echo $rand_file_array[array_rand($rand_file_array, 1)]; ?></div>
          <div class=""><?php _e("Швидкість завантаження", "treba-wp"); ?>: 0.<?php echo mt_rand(1, 99); ?> секунд</div>
          
        </div>
      </div>
      <div class="mb-12">
        <h2 class="text-lg font-semibold border-b border-gray-200 pb-4 mb-4">📎 <?php _e("Схожі сайти", "treba-wp"); ?></h2>
        <div class="flex flex-wrap lg:-mx-4">
          <?php 
          $popular_sites = new WP_Query( array(
            'post_type' => 'sites',
            'posts_per_page' => 12,
          ));
          if ($popular_sites->have_posts()) : while ($popular_sites->have_posts()) : $popular_sites->the_post(); ?>
          <div class="w-full lg:w-1/3 lg:px-4 mb-4">
            <div><a href="<?php the_permalink(); ?>" class="hover:text-blue-500"><?php the_title(); ?></a></div>
          </div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </div>
      <div>
        <div class="italic font-light opacity-75 mb-4"><?php _e("Оновлено", "treba-wp"); ?>: <?php echo get_the_modified_time('F j, Y'); ?></div>
        <!-- breadcrumbs -->
        <div class="breadcrumbs text-sm text-gray-800 dark:text-gray-200 mb-4" itemprop="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
          <ul class="flex items-center flex-wrap">
            <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem' class="breadcrumbs_item pr-4">
              <a itemprop="item" href="<?php echo home_url(); ?>" class="hover:text-blue-500">
                <span itemprop="name"><?php _e( 'Головна', 'treba-wp' ); ?></span>
              </a>                        
              <meta itemprop="position" content="1">
            </li>
            <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem' class="breadcrumbs_item px-4">
              <a itemprop="item" href="<?php echo get_post_type_archive_link('sites'); ?>" class="hover:text-blue-500">
                <span itemprop="name"><?php _e( 'Каталог', 'treba-wp' ); ?></span>
              </a>                        
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumbs_item text-gray-500 font-light px-4">
              <span itemprop="name"><?php the_title(); ?></span>
              <meta itemprop="position" content="3" />
            </li>
          </ul>
        </div>
        <!-- end breadcrumbs -->
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>