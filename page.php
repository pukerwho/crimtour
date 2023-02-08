<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container">
  <div class="flex flex-col-reverse lg:flex-row flex-wrap lg:-mx-10">
    <div class="w-full lg:w-1/5 border-r border-gray-200 lg:px-10">
      <?php get_template_part("template-parts/sidebar"); ?>
    </div>
    <div class="w-full lg:w-4/5 lg:px-10 mb-6 lg:mb-0">
      <h1 class="text-3xl lg:text-4xl font-bold mb-6 lg:pt-8"><?php the_title(); ?></h1>
      <div class="content bg-gray-200 rounded-lg p-4">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>
<?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>