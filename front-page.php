<?php
	$context = Timber::get_context();
	$context['post'] = new \Timberpost();
  Timber::render('front-page.twig', $context);
?>
