<?php

namespace WeChat\WeChat;

class Factory {

    public static function make($name, $arguments)
    {
        $namespace = "\\WeChat\\{$name}\\Application";
        return new $namespace($arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}