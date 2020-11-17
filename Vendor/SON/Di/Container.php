<?php

namespace SON\Di;

class Container{
    public static function getClass($nome){
        $str_class = "\\App\\Models\\".ucfirst($nome);
        $class = new $str_class(\App\Init::getDB());
        return $class;
    }
}