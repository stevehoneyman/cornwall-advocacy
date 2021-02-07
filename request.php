<?php
  /* Template Name: Request Advocate */
	$context = Timber::get_context();
	$context['post'] = new Timberpost();
  $context['forms'] = [
    'request' => new \Timber\FunctionWrapper('gravity_form', ['Request Advocate', false, false, false, '', false ] ),
  ];
  Timber::render('request.twig', $context);
?>
