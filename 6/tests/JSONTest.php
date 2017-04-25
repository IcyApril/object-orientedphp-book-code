<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 24/04/2017
 * Time: 22:26
 */
class JSONTest extends PHPUnit_Framework_TestCase
{
    private $storage;

    protected function setUp()
    {
        $this->storage = $this->getMockBuilder(\IcyApril\Six\File::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testStore()
    {
        $objectToStore = new stdClass();
        $objectToStore->data = "hello.";

        $this->storage
            ->expects($this->once())
            ->method('storeContents')
            ->with('{"data":"hello."}')
            ->willReturn(true);

        $jsonStore = new \IcyApril\Six\JSON($this->storage);
        $stored = $jsonStore->store($objectToStore);

        $this->assertTrue($stored);
    }

    public function testRetrieve()
    {
        $objectToRetrieve = new stdClass();
        $objectToRetrieve->data = "hello.";

        $this->storage
            ->expects($this->once())
            ->method('getContents')
            ->willReturn('{"data":"hello."}');

        $jsonRetrieve = new \IcyApril\Six\JSON($this->storage);
        $retrieved = $jsonRetrieve->retrieve();

        $this->assertEquals($objectToRetrieve, $retrieved);
    }

    public function testRetrieveNoData()
    {
        $this->storage
            ->expects($this->once())
            ->method('getContents')
            ->willReturn('');

        $jsonRetrieve = new \IcyApril\Six\JSON($this->storage);
        $retrieved = $jsonRetrieve->retrieve();

        $this->assertEquals(new stdClass(), $retrieved);
    }

    public function testRetrieveCorrupt()
    {
        $this->storage
            ->expects($this->once())
            ->method('getContents')
            ->willReturn('this is fake[ json ]]]]]');

        $jsonRetrieve = new \IcyApril\Six\JSON($this->storage);

        $this->expectException(\IcyApril\Six\JSONException::class);
        $jsonRetrieve->retrieve();
    }
}
