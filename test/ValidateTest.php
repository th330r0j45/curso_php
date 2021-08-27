<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('test@example.com');
        $this -> assertTrue ($email);
    }
    public function test_url()
    {
        $url = Validate::url('https://platzi.com');
        $this -> assertTrue ($url);
        $url = Validate::url('platzi.com');
        $this -> assertFalse ($url);
    }
    public function test_password()
    {
        $password = Validate::password('Contrasena2021*');
        $this->assertTrue($password);

        $password = Validate::password('Contrasena');
        $this->assertFalse($password);
    }
}   