<?php
namespace Leuverink\Scalpel\Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use Illuminate\View\Compilers\BladeCompiler;

class ScalpelCheckedIfTest extends TestCase
{
    public function tearDown()
    {
        m::close();
    }
    
    public function testCheckedIfStatementsAreCompiled()
    {
        $compiler = new BladeCompiler($this->getFiles(), __DIR__);
        $string = '@checkedif (name(foo(bar)))';
        $expected = "<?= (name(foo(bar))) ? 'checked' : null ?>";

        $this->assertEquals($expected, $compiler->compileString($string));
    }

    protected function getFiles()
    {
        return m::mock('Illuminate\Filesystem\Filesystem');
    }
}