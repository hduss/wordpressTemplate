<?php
/*
Template Name: Author
*/

// inclusion des header
get_header();

// Récupération des auteurs
$args = array(
    'post_type' => 'auteur'
);
$authors = new WP_Query($args);

?>
<div class="post text-center">
<!-- Les auteurs -->
    <h1>Présentation des auteurs</h1>
</div>
<?php
// Boucle wordpress
while ($authors->have_posts()) : $authors->the_post();
?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 post">
            <?php the_post_thumbnail(
                'post-thumbnail', [
                    'class' => 'img-thumbnail'
                ]);?>
            <h2><?php the_title(); ?></h2>

            <p><?php the_content();?></p>
        </div>
    </div>
<?php
endwhile;

// inclusion du footer
get_footer();
