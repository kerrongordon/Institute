<?php
/**
 *Template Name: energy-research page
 * @package tamcc
 */

get_header(); ?>

<ul class="pro-box"> <!-- opening ul tag -->
<?php
    $args=array(
    'post_type' => 'page', //selects pages
    'showposts'=>11,
    'post_parent' => '152' //Selects pages with the parent ID of 10
   );
 
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
 
<li>
         
    <!-- Business Image -->
 	<div class="imageHolder">
        <a href="<?php the_permalink() ?>">
            <div class="proImage"><?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?></div>
        </a>
    </div>
     
<!-- Business Info -->
 
    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
    <p><?php echo substr(get_the_excerpt(), 0,100); ?></p>
    <a href="<?php the_permalink() ?>">Learn more</a>
 
</li>
     
<?php
    endwhile;
    }
    ?>
</ul>

<?php get_footer(); ?>
