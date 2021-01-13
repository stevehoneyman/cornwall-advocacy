<?php
  /* Template Name: Contact */
	$context = Timber::get_context();
	$context['post'] = new Timberpost();
  Timber::render('contact.twig', $context);
?>
