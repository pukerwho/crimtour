<?php get_header(); ?>

<div class="container">
  <div class="flex flex-col-reverse lg:flex-row flex-wrap lg:-mx-10">
    <div class="w-full lg:w-1/5 border-r border-gray-200 lg:px-10">
      <?php get_template_part("template-parts/sidebar"); ?>
    </div>
    <div class="w-full lg:w-4/5 lg:px-10 mb-6">
      <h1 class="text-3xl lg:text-4xl font-bold mb-4 lg:pt-8"><?php _e("Каталог сайтів", "treba-wp"); ?></h1>
      <div class="font-light opacity-75 mb-6"><?php _e("Нещодавно перевірені сайти", "treba-wp"); ?>.</div>
      <div class="flex flex-wrap lg:-mx-4 mb-6">
        <?php 
        $popular_sites = new WP_Query( array(
          'post_type' => 'sites',
          'posts_per_page' => 30,
        ));
        if ($popular_sites->have_posts()) : while ($popular_sites->have_posts()) : $popular_sites->the_post(); ?>
        <div class="w-full lg:w-1/3 lg:px-4 mb-4">
          <?php get_template_part('template-parts/site-item'); ?>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
      <div class="flex justify-center mb-10">
        <a href="<?php echo get_post_type_archive_link('sites'); ?>" class="inline-block hover:bg-gray-600 hover:text-white relative text-lg border-2 border-gray-600 rounded-lg px-8 py-2"><?php _e("Перейти в каталог", "treba-wp"); ?></a>
      </div>
      <div>
        <div class="text-lg font-semibold border-b border-gray-200 pb-4 mb-4">🔍 <?php _e("Популярні запити", "treba-wp"); ?></div>
        <div class="w-full lg:w-1/3 lg:px-4 mb-4">
          <div><a href="https://s-cast.ua/" class="hover:text-blue-500">s-cast.ua</a></div>
          <div><a href="https://treba-solutions.com/" class="hover:text-blue-500">treba-solutions.com</a></div>
          <div><a href="https://sdamkvartiry.com/" class="hover:text-blue-500">sdamkvartiry.com</a></div>
          <div><a href="https://tarakan.org.ua/" class="hover:text-blue-500">tarakan.org.ua</a></div>
          <div><a href="https://priazovka.com/" class="hover:text-blue-500">priazovka.com</a></div>
          <div><a href="https://auto-future.land/" class="hover:text-blue-500">auto-future.land</a></div>
          <div><a href="https://webgolovolomki.com/" class="hover:text-blue-500">webgolovolomki.com</a></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>