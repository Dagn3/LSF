<?php

namespace App\Tests;

use App\Entity\Lait;
use PHPUnit\Framework\TestCase;

class LaitTest extends TestCase
{
    public function testIsTrue(): void
    {

        $lait = new Lait();

        $lait ->setNom('nom');
        $lait ->setSlug('slug');

        $this->assertTrue($lait->getNom() === 'nom' );
        $this->assertTrue($lait->getSlug() === 'slug' );
    }

    public function testIsFalse(): void
    {

        $lait = new Lait();

        $lait ->setNom('nom');
        $lait ->setSlug('slug');

        $this->assertFalse($lait->getNom() === 'false' );
        $this->assertFalse($lait->getSlug() === 'false' );
    }

    public function testIsEmpty(): void
    {

        $lait = new Lait();

        $this->assertEmpty($lait->getNom());
        $this->assertEmpty($lait->getSlug());
    }
}
