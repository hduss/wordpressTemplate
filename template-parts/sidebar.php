<?php
$posts = get_posts();
?><ul><?php
foreach ($posts as $post) {
  ?><li><a href="<?php echo get_permalink($post)?>"><?= $post->post_title; ?></a></li> <?php
}
?>
</ul>
