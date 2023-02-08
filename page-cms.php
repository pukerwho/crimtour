<?php 
/*
Template Name: CMS
*/
get_header(); 
$current_cms = carbon_get_the_post_meta('crb_page_cms');
?>

<div class="container">
  <div class="flex flex-col-reverse lg:flex-row flex-wrap lg:-mx-10">
    <div class="w-full lg:w-1/5 border-r border-gray-200 lg:px-10">
      <?php get_template_part("template-parts/sidebar"); ?>
    </div>
    <div class="w-full lg:w-4/5 lg:px-10 mb-6 lg:mb-0">
      <h1 class="text-3xl lg:text-4xl font-bold mb-6 lg:pt-8"><?php the_title(); ?></h1>
      <div class="flex flex-wrap lg:-mx-4 mb-6">
        <?php 
        global $wp_query, $wp_rewrite;  
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
        $all_sites = new WP_Query( array(
          'post_type' => 'sites',
          'posts_per_page' => 30,
          'orderby' => 'date',
          'paged' => $current, 
          'meta_query' => array(
            array(
              'key' => 'meta_site_cms',
              'value' => $current_cms,
              'compare' => 'IN',
            ),
          ),
        ));
        if ($all_sites->have_posts()) : while ($all_sites->have_posts()) : $all_sites->the_post(); ?>
        <div class="w-full lg:w-1/3 lg:px-4 mb-4">
          <?php get_template_part('template-parts/site-item'); ?>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
      <div class="b_pagination text-center mb-12">
        <?php 
          $big = 9999999991; // уникальное число
          echo paginate_links( array(
            'format' => '?paged=%#%',
            'total' => $all_sites->max_num_pages,
            'current' => $current,
            'prev_next' => true,
            'next_text' => (''),
            'prev_text' => (''),
          )); 
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>