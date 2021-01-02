<?php
	$context = Timber::get_context();
	$context['post'] = new \Timberpost();
	$context['menu'] = new \TimberMenu();
	Timber::render('front-page.twig', $context);
?>
