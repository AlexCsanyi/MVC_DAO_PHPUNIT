<?php 
     class CalculatorTest extends \PHPUnit\Framework\TestCase
     {
        /** @test */
        public function can_set_single_operation()
        {
            $addition = new \App\Calculator\Addition;
            $addition->setOperands([5,10]);

            $calculator = new \App\Calculator\Calculator;
            $calculator->setOperation($addition);

            $this->assertCount(1, $calculator->getOperations());
        }
     }
?>