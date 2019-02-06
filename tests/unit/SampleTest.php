<?php 
declare(strict_types=1);

final class SampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testDebugPrint()
    {
        echo 'from echo' . PHP_EOL;
        var_dump('from var_dump');
        codecept_debug('from codecept_debug');
    }
}