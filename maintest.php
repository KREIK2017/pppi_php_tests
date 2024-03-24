<?php
use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase {

    public function testAddTwoNumbers() {
        $this->assertEquals(3, addTwoNumbers(1, 2));
    }

    public function testConcatenateStrings() {
        $this->assertEquals("Hello World", concatenateStrings("Hello ", "World"));
    }

    public function testRectangleArea() {
        $this->assertEquals(10, rectangleArea(2, 5));
    }

    public function testCircleArea() {
        $this->assertEquals(25, circleArea(5)); // The result should be approximately 78.54, not 25
    }
}
?>
