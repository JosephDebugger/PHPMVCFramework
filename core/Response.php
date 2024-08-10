<?php

/**
 * Class Response
 * 
 * @author Joseph Dias <josephdias012@gmail.com>
 * @package namespace app\core;
 */

namespace app\core;

class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}
