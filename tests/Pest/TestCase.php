<?php

declare(strict_types=1);

namespace Tests\Pest;

use PHPUnit\Framework\TestCase as BaseTestCase;

/**
 * This is the base Test Case for your Webby application tests.
 * All your unit and feature tests should extend this class.
 */
abstract class TestCase extends BaseTestCase
{

    protected static $ci;

    // Add any setup or tear down methods here that are common to all your tests.
    // For example, if you need to mock CodeIgniter's Super Global or load a base CI instance.

    protected function setUp(): void
    {
        parent::setUp();
    }

}
