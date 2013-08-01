<?php
use Codeception\Util\Stub;

class NumberGuyTest extends \Codeception\TestCase\Test
{
   /**
    * @var \CodeGuy
    */
    protected $codeGuy;

    protected function _before()
    {
        require_once realpath(dirname(__FILE__)).'/../../libs/NumberNames.class.php';
    }

    protected function _after()
    {
    }

    // tests
    public function testLessThanTen()
    {
        $NumberNames = new NumberNames();
        $output = $NumberNames->translate(7);
        $this->assertTrue('Seven' == $output);

    }

    public function testUpToTwenty()
    {
        $NumberNames = new NumberNames();
        $output = $NumberNames->translate(20);
        $this->assertTrue('Twenty' == $output);
    }

    public function testUpToHundred()
    {
        $NumberNames = new NumberNames();
        $output = $NumberNames->translate(77);
        $this->assertTrue('Seventyseven' == $output);
    }
}