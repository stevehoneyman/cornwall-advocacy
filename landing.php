<?php
  /* Template Name: Landing */
  $context = Timber::get_context();
	$context['post'] = new Timberpost();
  Timber::render('landing.twig', $context);
?>
