<?php
  /* Template Name: Home */
	$context = Timber::get_context();
	$context['post'] = new \Timberpost();
  Timber::render('404.twig', $context);
?>
