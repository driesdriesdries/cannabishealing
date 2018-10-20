<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cannabis_Healing
 */

?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="post-info">
    <?php the_time('F jS, Y'); ?> | 
    
    Posted in 

    <?php 
      $categories = get_the_category(); 
      $separator = ", ";
      $output = "";

      if ($categories) {
        foreach ($categories as $category) {
          $output .= '<a href="' . get_category_link($category->term_id) .'">' .$category->cat_name .'</a>' . $separator;
        }
        echo trim($output, $separator);

      }

    ?>
</p>
<?php  
// check if the post has a Post Thumbnail assigned to it.
  if ( has_post_thumbnail() ) {
      the_post_thumbnail();
      }
?>
<p>
  <?php echo get_the_excerpt(); ?>
  <a href="<?php the_permalink(); ?>">Readmore &raquo;</a>
</p>