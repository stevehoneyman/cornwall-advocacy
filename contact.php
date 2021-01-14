<?php
  /* Template Name: Contact */
	$context = Timber::get_context();
	$context['post'] = new Timberpost();
  $context['forms'] = [
    'contact' => new \Timber\FunctionWrapper('gravity_form', ['Contact', false, false, false, '', false ] ),
  ];
  Timber::render('contact.twig', $context);
?>
