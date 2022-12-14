<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_email_validation_by_function()
    {
        $result = validate_email('martha@me.com');
        $this->assertTrue($result);

        $result = validate_email('martha@@me.com');
        $this->assertFalse($result);
    }
}
