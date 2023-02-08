<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php 
    $current_title = wp_get_document_title();
    if ( is_singular( 'sites' ) ) {
      $site_url = get_the_title();
      $current_title = 'Безкоштовний аналіз сайту ' . $site_url . ': SEO-аудит';
      $current_description = 'Аудит сайту ' . $site_url . '. Безкоштовно перевірити показники. SEO аналіз сайту. Все про сайт.';
    }
  ?>
  <title><?php echo $current_title; ?></title>
  <?php if ($current_description): ?>
    <meta name="description" content="<?php echo $current_description; ?>"/>
  <?php endif; ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<?php echo carbon_get_theme_option('crb_google_analytics'); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <header class="block lg:hidden border-b border-gray-200 mb-4 py-4">
    <div class="container">
      <div class="flex justify-between items-center">
        <div>
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/crimtour-logo.png" alt="Лого" width="90">
          </a>
        </div>
        <div class="menu-click">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
          </svg>
        </div>
      </div>
    </div>
  </header>
  <div class="wrap">