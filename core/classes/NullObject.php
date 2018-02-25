<?php

namespace Julez;

class NullObject
{

    public function __get($key)
    {
        return '';
    }

    public function __call($a, $b)
    {
        return '';
    }

}
