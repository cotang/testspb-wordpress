<?php
  $post = $wp_query->post;
 
  if (in_category('news')) { //slug  категории
    include(TEMPLATEPATH.'/single-news.php');
  } elseif (in_category('sertifikaciia')) {
    include(TEMPLATEPATH.'/single-sertifikaciia.php');
  } else {
    include(TEMPLATEPATH.'/single-default.php');
  }
?>