<?php

namespace Gephart\Request;

final class Request
{

    private $get = [];
    private $post = [];

    public function __construct()
    {
        foreach ($_GET as $key => $value) {
            $this->get[$key] = $value;
        }

        foreach ($_POST as $key => $value) {
            $this->post[$key] = $value;
        }
    }

    public function get(string $key)
    {
        return isset($this->get[$key]) ? $this->get[$key] : false;
    }

    public function post(string $key)
    {
        return isset($this->post[$key]) ? $this->post[$key] : false;
    }

}