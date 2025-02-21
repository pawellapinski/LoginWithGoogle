<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private User $user;

    protected function setUp(): void
    {
        $this->user = new User();
    }

    public function testGetterAndSetterEmail(): void
    {
        $email = 'kowalski@gmail.com';
        $this->user->setEmail($email);
        $this->assertEquals($email, $this->user->getEmail());
        $this->assertEquals($email, $this->user->getUserIdentifier());
    }

    public function testDefaultRoles(): void
    {
        $this->assertContains('ROLE_USER', $this->user->getRoles());
    }

    public function testGoogleId(): void
    {
        $googleId = '12345';
        $this->user->setGoogleId($googleId);
        $this->assertEquals($googleId, $this->user->getGoogleId());
    }
}
