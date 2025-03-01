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
        
        // Use get_object_vars() to access dynamically created properties
        $objectVars = get_object_vars($fortuneTeller);
        
        // Ensure the 'money_array' key exists before accessing it
        $this->assertArrayHasKey('money_array', $objectVars);
        
        $moneyArray = $objectVars['money_array'];
        
        $this->assertIsArray($moneyArray);
        $this->assertCount(3, $moneyArray);

   }

   
}



