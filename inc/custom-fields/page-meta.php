<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page_theme_options' );
function crb_page_theme_options() {
	Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', 'IN', array('page-cms.php') )
    ->add_fields( array(
      Field::make( 'text', 'crb_page_cms', 'Назва CMS' ),
  ) );

  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->add_fields( array(
      Field::make( 'textarea', 'crb_page_description', 'Короткий опис' ),
      Field::make( 'complex', 'crb_page_blocks', 'Блоки' )->set_layout('tabbed-horizontal')->add_fields( array(
        Field::make( 'image', 'crb_page_blocks_img', 'Зображення' ),
        Field::make( 'rich_text', 'crb_page_blocks_content', 'Текст' ),
      )),
  ) );
}

?>