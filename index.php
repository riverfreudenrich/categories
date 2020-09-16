<?php
$categories = get_the_category();
$slug = '';
if ( ! empty( $categories ) ) {
  foreach ( $categories as $cat ) {
    $slug .= $cat->slug . ' ';
  }
}
?>

<p><?php echo $cls; ?></p>
