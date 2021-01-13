<?php
  /* Template Name: Home */
	$context = Timber::get_context();
	$context['post'] = new \Timberpost();
  Timber::render('front-page.twig', $context);
?>
