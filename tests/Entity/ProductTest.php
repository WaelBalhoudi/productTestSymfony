<?php
    namespace App\Tests\Entity; 
    use App\Entity\Product; 
    use PHPUnit\Framework\TestCase; 
    class ProductTest extends TestCase{ 
        public function testFood(){ 
            $product = new Product('Pomme', 'food', 1); 
            $this->assertSame(0.055, $product->computeTVA()); 
         } 
         public function testNoFood(){ 
            $product = new Product('Pomme', 'bat', 1); 
            $this->assertSame(0.196, $product->computeTVA()); 
         } 
    }
?>