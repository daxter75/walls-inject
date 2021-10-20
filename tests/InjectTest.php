<?php

use PHPUnit\Framework\TestCase;

class InjectTest extends TestCase
{
    protected $inject;

    /** @test */
    public function injected_after_existing_key()
    {
        $this->inject = new Inject(
            $this->data()['initArray'],
            $this->data()['afterKey'],
            $this->data()['newKey'],
            $this->data()['newValue']
        );
        $expected = [
            'foo' => 3,
            'bar' => 1,
            'joe' => 22,
            'baz' => 42,
            'jane' => 44
        ];

        return $this->assertSame($expected, $this->inject->getInjected());
    }

    /** @test */
    public function injected_if_key_does_not_exists()
    {
        $this->inject = new Inject(
            $this->data()['initArray'],
            'peter',
            $this->data()['newKey'],
            $this->data()['newValue']
        );
        $expected = [
            'foo' => 3,
            'bar' => 1,
            'joe' => 22,
            'jane' => 44,
            'baz' => 42
        ];

        return $this->assertSame($expected, $this->inject->getInjected());
    }

    /** @test */
    public function injected_if_new_key_exists()
    {
        $this->inject = new Inject(
            $this->data()['initArray'],
            $this->data()['afterKey'],
            'bar',
            $this->data()['newValue']
        );
        $expected = [
            'foo' => 3,
            'joe' => 22,
            'bar' => 42,
            'jane' => 44
        ];

        return $this->assertSame($expected, $this->inject->getInjected());
    }

    /** @test */
    public function injected_and_move_if_array_start_with_new_key()
    {
        $this->inject = new Inject(
            $this->data()['initArray'],
            $this->data()['afterKey'],
            'foo',
            $this->data()['newValue']
        );
        $expected = [
            'bar' => 1,
            'joe' => 22,
            'foo' => 42,
            'jane' => 44
        ];

        return $this->assertSame($expected, $this->inject->getInjected());
    }

    private function data() : array
    {
        return [
            'initArray' => [
                'foo' => 3,
                'bar' => 1,
                'joe' => 22,
                'jane' => 44
            ],
            'afterKey' => 'joe',
            'newKey' => 'baz',
            'newValue' => 42
        ];
    }

}