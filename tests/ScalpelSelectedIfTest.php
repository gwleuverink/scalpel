<?php
namespace Leuverink\Scalpel\Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use Illuminate\View\Compilers\BladeCompiler;

class ScalpelSelectedIfTest extends TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function testSelectedIfStatementsAreCompiled()
    {
        $compiler = new BladeCompiler($this->getFiles(), __DIR__);
        $string = '@selectedif (name(foo(bar)))';
        $expected = "<?= (name(foo(bar))) ? 'selected' : null ?>";

        $this->assertEquals($expected, $compiler->compileString($string));
    }

    protected function getFiles()
    {
        return m::mock('Illuminate\Filesystem\Filesystem');
    }
}