<?php
	$context = Timber::get_context();
	$context['post'] = new Timberpost();
	$context['menu'] = new \TimberMenu();
	Timber::render('index.twig', $context);
?>
