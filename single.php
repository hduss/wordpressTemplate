


<?php
/*Template Name: Single*/
get_header(); ?>

<div class="row">
    <div class="col-md-2 sidebar">
        <?php get_template_part('template-parts/sidebar'); ?>
    </div>

	<div class="col-md-8">

		<div class="post" id="post-<?php the_ID(); ?>">


			<!--appeler le titre de l’article ou des articles // avec commande qui va permettre au titre de s’afficher quand vous survolez son lien-->



			<div id="content-article">

				<h2 id="title-article"><?php the_title(); ?></h2>

			</div>



			<div class="post_content">

				<?php if(have_posts()) : ?>

					<!--va aller chercher PARMI les articles (commande « while ») celui qu’il faut (« the post »)-->
					<?php while(have_posts()) : the_post(); ?>
						<div class="text-justify">
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>




			<p class="postmetadata">


				<?php the_time('j F Y')?> par <?php the_author()?> <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires') . edit_post_link('Editer', ' &#124; ', ''); ?>
			</p>


		</div>
	</div>
</div>


<?php get_footer(); ?>
