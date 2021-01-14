<?php
  /* Template Name: Contact */
	$context = Timber::get_context();
	$context['post'] = new Timberpost();
  $context['forms'] = [
    'contact' => new \Timber\FunctionWrapper('gravity_form', [1, false] ),
  ];
  Timber::render('contact.twig', $context);

  /*
  $context['forms'] = [
  			'contact' => new \Timber\FunctionWrapper('gravity_form', [1, false, false, false, null, true, 100] ),
  ];
  */
?>
