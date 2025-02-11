<?php
	$theme = Array();

	// Theme name
	$theme['name'] = 'Index';
	// Description (you can use Tinyboard markup here)
	$theme['description'] = 'Show a homepage';
	$theme['version'] = 'v1.0';

	// Theme configuration
	$theme['config'] = Array();

	$theme['config'][] = Array(
		'title' => 'Icon',
		'name' => 'icon',
		'type' => 'text',
		'default' => '',
		'size' => 50
	);

	$theme['config'][] = Array(
		'title' => 'Title',
		'name' => 'title',
		'type' => 'text',
		'default' => 'Welcome to DiscoNet!',
		'size' => 50
	);

	$theme['config'][] = Array(
		'title' => 'Subtitle',
		'name' => 'subtitle',
		'type' => 'text',
		'default' => 'OUR MODERATION IS THAT YOU\'RE IN ARM\'S REACH. SO MODERATE YOURSELF.',
		'size' => 50
	);

	$theme['config'][] = Array(
		'title' => 'Description',
		'name' => 'description',
		'type' => 'textarea',
		'default' => 'Social media sucks, let\'s build something better'
	);

		$theme['config'][] = Array(
		'title' => 'Image of the now.',
		'name' => 'imageofnow',
		'type' => 'text',
		'default' => '../templates/themes/index/killdozer.png',
		'size' => 50
	);

		$theme['config'][] = Array(
		'title' => 'Quote of the now.',
		'name' => 'quoteofnow',
		'type' => 'textarea',
		'default' => '"No one\'s in charge, we\'re all just pissed!" - Robert Evans'
	);

		$theme['config'][] = Array(
		'title' => 'Video of the Now',
		'name' => 'videoofnow',
		'type' => 'text',
		'default' => '',
		'size' => 50
	);

	$theme['config'][] = Array(
		'title' => '# of recent entries',
		'name' => 'no_recent',
		'type' => 'text',
		'default' => 5,
		'size' => 3,
		'comment' => '(number of recent news entries to display; "0" is infinite)'
	);

	$theme['config'][] = Array(
		'title' => 'Excluded boards',
		'name' => 'exclude',
		'type' => 'text',
		'comment' => '(space seperated)'
	);

	$theme['config'][] = Array(
		'title' => '# of recent images',
		'name' => 'limit_images',
		'type' => 'text',
		'default' => '15',
		'comment' => '(maximum images to display)'
	);

	$theme['config'][] = Array(
		'title' => '# of recent posts',
		'name' => 'limit_posts',
		'type' => 'text',
		'default' => '30',
		'comment' => '(maximum posts to display)'
	);

	$theme['config'][] = Array(
		'title' => 'HTML file',
		'name' => 'html',
		'type' => 'text',
		'default' => 'index.html',
		'comment' => '(eg. "index.html")'
	);

	$theme['config'][] = Array(
		'title' => 'CSS file',
		'name' => 'css',
		'type' => 'text',
		'default' => 'index.css',
		'comment' => '(eg. "index.css")'
	);

	$theme['config'][] = Array(
		'title' => 'CSS stylesheet name',
		'name' => 'basecss',
		'type' => 'text',
		'default' => 'index.css',
		'comment' => '(eg. "index.css" - see templates/themes/index for details)'
	);

	// Unique function name for building everything
	$theme['build_function'] = 'index_build';
	$theme['install_callback'] = 'index_install';

	if (!function_exists('index_install')) {
		function index_install($settings) {
			if (!is_numeric($settings['limit_images']) || $settings['limit_images'] < 0)
				return Array(false, '<strong>' . utf8tohtml($settings['limit_images']) . '</strong> is not a non-negative integer.');
			if (!is_numeric($settings['limit_posts']) || $settings['limit_posts'] < 0)
				return Array(false, '<strong>' . utf8tohtml($settings['limit_posts']) . '</strong> is not a non-negative integer.');
			if (!is_numeric($settings['no_recent']) || $settings['no_recent'] < 0)
				return Array(false, '<strong>' . utf8tohtml($settings['no_recent']) . '</strong> is not a non-negative integer.');
		}
	}
