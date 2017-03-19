<?php

require_once __DIR__ . '/../vendor/autoload.php';


class RequestTest extends \PHPUnit\Framework\TestCase
{
    public function testGet()
    {
        $_GET["test"] = true;
        $request = new \Gephart\Request\Request();
        $this->assertTrue($request->get("test"));
        $this->assertFalse($request->get("nonexisting"));
    }

    public function testPost()
    {
        $_POST["test"] = true;
        $request = new \Gephart\Request\Request();
        $this->assertTrue($request->post("test"));
        $this->assertFalse($request->post("nonexisting"));
    }
}
