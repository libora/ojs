<?php

/**
 * @file tests/functional/TestTestingEnvironment.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2000-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class TestTestingEnvironment
 * @ingroup tests_functional
 * @see TestTestingEnvironment
 *
 * @brief Integration/Functional test to make sure the testing environment is working.
 */


import('lib.pkp.tests.WebTestCase');

class FunctionalEditingBaseTestCase extends WebTestCase {

	function testTestingEnvironment() {
		$this->logIn('admin', 'ojsojs');
	}
}