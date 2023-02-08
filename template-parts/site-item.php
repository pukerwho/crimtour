<?php 
  $current_id = get_the_ID();
?>

<div class="font-light border border-gray-200 rounded-lg p-4">
  <div class="truncate mb-2"><a href="<?php the_permalink(); ?>" class="text-lg text-blue-600 hover:text-red-600"><?php the_title(); ?></a></div>
  <div class="mb-1"><?php _e("Вік сайту", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_age'); ?></div>
  <div class="mb-1"><?php _e("Зворотніх посилань", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_backlinks'); ?></div>
  <div class="mb-2"><?php _e("Сторінок в індексі", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_indexpages'); ?></div>
  <div class="w-[60px] h-[1px] bg-gray-200 mb-2"></div>
  <div class="mb-1">
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
  <div class="mb-2">
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
  <div class="w-[60px] h-[1px] bg-gray-200 mb-2"></div>
  <div><?php _e("Помилок на сайті", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_bugs'); ?></div>
</div>