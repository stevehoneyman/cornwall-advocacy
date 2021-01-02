<?php
	$context = Timber::get_context();
	$context['post'] = new Timberpost();
	$context['menu'] = new \TimberMenu();

	// set posts query
	$context['posts'] = Timber::get_posts(array(
		'post_type' => 'post',
		'posts_per_page' => 3,
		'order' => 'ASC'
	));

	Timber::render('home.twig', $context);
?>
