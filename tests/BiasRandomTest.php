<?php

use wataridori\BiasRandom\BiasRandom;

class ChatworkBaseTest extends PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $biasRandom = new BiasRandom();
        $this->assertEquals(get_class($biasRandom), 'wataridori\BiasRandom\BiasRandom');
    }

    public function testAddElement()
    {
        $originalData = [
            1 => 10,
            2 => 30,
            'three' => 50,
        ];
        $biasRandom = new BiasRandom();
        foreach ($originalData as $key => $value) {
            $biasRandom->addElement($key, $value);
        }

        $data = $biasRandom->getData();
        $this->assertEquals($originalData, $data);
    }

    public function removeElement()
    {
        $originalData = [
            1 => 10,
            2 => 30,
            'three' => 50,
        ];
        $biasRandom = new BiasRandom();
        $biasRandom->setData($originalData);
        $biasRandom->removeElement(1);
        $data = $biasRandom->getData();
        unset($originalData[1]);
        $this->assertEquals($originalData, $data);
    }

    public function testRandom()
    {
        $originalData = [
            1 => 10,
            2 => 30,
            'three' => 50,
        ];
        $biasRandom = new BiasRandom();
        $biasRandom->setData($originalData);

        $random = $biasRandom->random();
        $this->assertCount(1, $random);
        foreach($random as $key) {
            $this->assertArrayHasKey($key, $originalData);
        }

        $random = $biasRandom->random(2);
        $this->assertCount(2, $random);
        foreach($random as $key) {
            $this->assertArrayHasKey($key, $originalData);
        }

        $random = $biasRandom->random(3);
        $this->assertCount(3, $random);
        foreach($random as $key) {
            $this->assertArrayHasKey($key, $originalData);
        }

        $random = $biasRandom->random(4);
        $this->assertCount(3, $random);
        foreach($random as $key) {
            $this->assertArrayHasKey($key, $originalData);
        }
    }
}