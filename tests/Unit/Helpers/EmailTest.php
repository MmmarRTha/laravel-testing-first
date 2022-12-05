<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function test_email()
    {
        $result = Email::validate('martha@me.com');
        $this->assertTrue($result);

        $result = Email::validate('martha@@me.com');
        $this->assertFalse($result);
    }
}
