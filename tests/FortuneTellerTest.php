<?php
use PHPUnit\Framework\TestCase;

require __DIR__ . "/../src/FortuneTeller.php";

class FortuneTellerTest extends TestCase {


   public function testRelationshipPrediction_WithDefaultEntries_ReturnsNotNull() {

        $fortuneTeller = new FortuneTeller();
        $prediction = $fortuneTeller->getRelationshipPrediction();
        $this->assertNotNull($prediction);
        $this->assertIsString($prediction);

   }

   public function testMoneyArray_WithDefaultEntires_ReturnsCountOf3() {

        $fortuneTeller = new FortuneTeller();
        $reflection = new ReflectionClass($fortuneTeller);
        $property = $reflection->getProperty('money_array');
        $property->setAccessible(true);
        $moneyArray = $property->getValue($fortuneTeller);
        
        $this->assertCount(3, $moneyArray);

   }

   
}



