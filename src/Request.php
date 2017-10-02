<?php

namespace Gephart\Request;

/**
 * Request
 *
 * @package Gephart\Request
 * @author Michal Katuščák <michal@katuscak.cz>
 * @since 0.2
 */
final class Request
{

    /**
     * @var array
     */
    private $get = [];

    /**
     * @var array
     */
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

    /**
     * @param string $key
     * @return bool|mixed
     */
    public function get(string $key)
    {
        return isset($this->get[$key]) ? $this->get[$key] : false;
    }

    /**
     * @param string $key
     * @return bool|mixed
     */
    public function post(string $key)
    {
        return isset($this->post[$key]) ? $this->post[$key] : false;
    }
}
