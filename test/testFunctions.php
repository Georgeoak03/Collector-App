<?php
require '../functions.php';

use PHPUnit\Framework\TestCase;

class functionsTest extends TestCase
{
    function testSuccessDisplayWine()
    {
        $input = [
                'wine' => 'RAIXE',
                'date' => '2021/07/11',
                'drinking_location' => 'Marmo',
                'colour' => 'red',
                'producer' => 'Giorgia Grande',
                'region' => 'Albarola',
                'vintage' => 2011,
                'price_gbp' => 19.99,
                'rating' => 4
        ];
        $expectedOutput ='<tr><td class="wine">RAIXE</td><td class="wine-content"> 2021/07/11</td><td class="wine-content"> Marmo</td><td class="wine-content"> red</td><td class="wine-content"> Giorgia Grande</td><td class="wine-content"> Albarola</td><td class="wine-content"> 2011</td><td class="wine-content"> 19.99</td><td class="wine-content"> 4</td></tr>';

        $actualOutput = displayWine($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
    function testFailureDisplayWine()
    {
        $input = ['Delicious Wine', '1988/09/11', 'Wetherspoons', 'brown', 'GiodePoopey', 'Hull', 1988, 2.99, 5];
        $expectedOutput = '';
        $actualOutput = displayWine($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}