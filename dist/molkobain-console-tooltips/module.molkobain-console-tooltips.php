<?php
/**
 * Copyright (c) 2015 - 2018 Molkobain.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'molkobain-console-tooltips/1.0.2', array(
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
	    'console/uiextension.class.inc.php',
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
