
<?php

get_header(); ?>

<!-- header sur la home-->
<?php if( is_home() ) : ?>
    <div class="row" id="tf-bg-img">

    <div class="col-md-12">

        <!-- image de "fond" -->
        <img src="<?php header_image(); ?>" alt="background image" />

        <!-- dégragé avec fond noir -->
        <div id="tf-header-darkener"></div>

        <!-- titre du blog -->
        <div id="tf-header-title">
            <h1><?php echo get_bloginfo(); ?></h1>
            <p><?php echo get_bloginfo('description'); ?></p>
        </div>

    </div>
</div>
<?php endif; ?>

<!-- liste des articles -->
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <!--vérifier s’il y a des articles à afficher: « if have posts ». S’il n’y en a pas, il n’affiche rien. -->
<?php if(have_posts()) : ?>

  <!--va aller chercher PARMI les articles (commande « while ») celui qu’il faut (« the post »)-->
  <?php while(have_posts()) : the_post(); ?>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">

          <!--aller chercher l’ID de l’article dans la base-->
          <div class="post" id="post-<?php the_ID(); ?>">

            <!--appeler le titre de l’article ou des articles // avec commande qui va permettre au titre de s’afficher quand vous survolez son lien-->
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

            <p class="postmetadata">
              Le <?php the_time('j F Y') ?>
              par <?php the_author() ?> <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires') . edit_post_link('Editer', ' &#124; ', ''); ?>
            </p>
          </div>
          <!--afficher le contenu de l'article-->
          <div class="text-justify">
            <?php the_content(); ?>
          </div>

        </div>
      </div>
      <!--fermer cette requête-->
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</div>
  <?php get_footer(); ?>
