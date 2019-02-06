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

    public function testMakeDir()
    {
        $root = codecept_root_dir();
        $dir = "$root/cache/sub/";
        mkdir($dir, 0777, true);

        $file = "$dir/file1";
        file_put_contents($file, 'hello');

        $cache = file_get_contents($file);
        $this->assertEquals('hello', $cache);
    }
}