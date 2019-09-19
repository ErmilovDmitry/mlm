<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

  public static function post_title($id)
  {
     $post_obj = get_post ($id);
     return $post_obj->post_title;
  }

  public static function post_content($id)
  {
      $post_obj = get_post ($id);
      return apply_filters( 'the_content', strip_shortcodes($post_obj->post_content)  );
  }

  public static function post_thumbnail($id, $class='', $size='large')
  {
      $url = get_the_post_thumbnail_url($id, $size);
      $post_obj = get_post ($id);
      $alt = $post_obj->post_title;
      return "<img src='$url' alt='$alt' class='$class' />";
  }

  public static function post_thumbnail_url($id, $size='large')
  {
      $url = get_the_post_thumbnail_url($id, $size);
      return $url;
  }

  public static function post_fields($id, $field_name='')
  {
    if ($field_name == '') {
      $meta = get_post_meta( $id );
    } else {
      $meta = get_post_meta( $id, $field_name, true );
    }

      return $meta;
  }

  public static function galleryLoop()
  {
      $gallery_items = get_posts([
          'post_type' => 'post',
          'posts_per_page'=>'10',
      ]);

      return array_map(function ($post) {
          return [
              'content' => apply_filters('the_content', $post->post_content),
              'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
          ];
      }, $gallery_items);
  }

  public static function gallery($id) {

     return photo_gallery($id);

  }

  public function galleryOut()
  {
      $post_obj = get_post(7);
      $array = array();
      $output = array();

      if ( !is_object($post_obj) ) return false;

      $content = $post_obj->post_content;
      if ( has_shortcode( $content, 'gallery' ) ) {
        $array = get_post_gallery( 7 , false);
        $numbers = explode(',',$array['ids']);
        $i=0;
        foreach ($numbers as $item) {
          $output[$i]['big'] = wp_get_attachment_image_url($item, 'large');
          $output[$i]['small'] = wp_get_attachment_image_url($item, 'testimonial_small');
          $i++;
        }
       return $output;
      } else return false;

  }

  public function testItems()
  {
    $test_items = get_posts([
          'post_type' => 'post',
          'numberposts'=>'10',
          'category'=>'4',
    ]);
    return array_map(function ($post) {
          return [
              'content' => apply_filters('the_content', $post->post_content),
              'pic' => get_the_post_thumbnail($post->ID, 'thumbnail'),
              'link' => get_post_meta($post->ID, 'testimonial_link_vk', true),
              'name' => $post->post_title,
          ];
    }, $test_items);
  }

  public function getEvents()
  {

    $today = date('Y-m-d');
    $get_events = get_posts([
          'post_type' => 'post',
          'numberposts'=>'10',
          'category'=>'6',
          'order'     => 'ASC',
          'meta_key' => 'event_date',
          'orderby'   => 'meta_value',
          'meta_query' => array(
                array(
                 'key' => 'event_date',
                 'value' => $today,
                 'compare' => '>',
                 'type' => 'DATE',
                )
              )
    ]);
    return array_map(function ($post) {
          return [
              'date' => date("d.m.Y", strtotime(get_post_meta($post->ID, 'event_date', true))),
              'time' => get_post_meta($post->ID, 'event_time', true),
              'title' => $post->post_title,
              'date_and_time' => str_replace( array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ),  array( 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря' ) , date("j F", strtotime(get_post_meta($post->ID, 'event_date', true)))),
          ];
    }, $get_events);
  }
}
