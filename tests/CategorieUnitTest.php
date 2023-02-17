<?php

namespace App\Tests;

use App\Entity\Categorie;
use PHPUnit\Framework\TestCase;

class CategorieUnitTest extends TestCase
{
    public function testIsTrue(): void
    {    $cat= new Categorie();
        $cat->setNom("nom")
        ->setDescription("desc")
        ->setSlug("test");
        $this->assertTrue($cat->getNom()=="nom");
        $this->assertTrue($cat->getDescription()=="desc");
        $this->assertTrue($cat->getSlug()=="test");
    }

    public function testIsFalse(): void
    {    $cat= new Categorie();
        $cat->setNom("nom")
        ->setDescription("desc")
        ->setSlug("test");
        $this->assertFalse($cat->getNom()=="false");
        $this->assertFalse($cat->getDescription()=="false");
        $this->assertFalse($cat->getSlug()=="false");
    }

    public function testIsEmpty(): void
    {    $cat= new Categorie();
      
        $this->assertEmpty($cat->getNom());
        $this->assertEmpty($cat->getDescription());
        $this->assertEmpty($cat->getSlug());
    }
}
