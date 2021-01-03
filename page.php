<?php
	$context = Timber::get_context();
	$context['post'] = new Timberpost();
  Timber::render('page.twig', $context);
?>
