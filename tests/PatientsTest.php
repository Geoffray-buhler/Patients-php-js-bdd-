<?php
// declare(strict_types=1);

require_once __DIR__.'/../phpunit-9.0.1.phar';
require_once __DIR__.'/../model.php';

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $bdd = getBDD();
        $this->assertInstanceOf(
            PDO::class,
            $bdd
        );
    }
}