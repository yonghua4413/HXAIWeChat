<?php

namespace HXAIWeChat;

class Factory {

    public static function make($name, $arguments)
    {
        $namespace = "\\HXAIWeChat\\{$name}\\Application";
        return new $namespace($arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}