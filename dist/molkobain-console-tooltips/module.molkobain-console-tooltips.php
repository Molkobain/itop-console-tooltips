<?php

// Copyright (C) 2017-2018 Molkobain
//
//   This file is part of the iTop extension molkobain-console-tooltips.

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'molkobain-console-tooltips/1.0.0', array(
	// Identification
	'label' => 'Attributes description tooltip',
		'category' => 'ui',
	// Setup
	'dependencies' => array(
	),
	'mandatory' => false,
	'visible' => true,
	// Components
	'datamodel' => array(
	    'console/consoleuiextension.class.inc.php',
	),
	'webservice' => array(
	//'webservices.itop-portal-base.php',
	),
	'dictionary' => array(
	//'en.dict.itop-portal-base.php',
	),
	'data.struct' => array(
	//'data.struct.itop-portal-base.xml',
	),
	'data.sample' => array(
	//'data.sample.itop-portal-base.xml',
	),
	// Documentation
	'doc.manual_setup' => '',
	'doc.more_information' => '',
	// Default settings
	'settings' => array(
	    'decoration_class' => 'fas fa-question',
        'enabled' => true,
	),
	)
);
