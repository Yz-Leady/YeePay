<?php

namespace Leady\YeePay;

use Exception;
use Illuminate\Support\Str;

class YeePay
{

    public function command(string $className)
    {
        $className = Str::studly($className);
        $class     = 'Leady\\YeePay\\Commands\\'.$className;
        if (class_exists($class)) {
            return resolve($class);
        } else {
            throw new Exception('命令类['.$className.']不存在');
        }
    }

    public function __call($name, $arguments)
    {
        if (Str::is('*_*', $name)) {
            $className    = Str::before($name, '_');
            $functionName = Str::after($name, '_');
            $class        = $this->command($className);
            if (count($arguments) == 2) {
                return $class->$functionName($arguments[0],
                    $arguments[1]);
            }elseif(count($arguments) == 1){
                return $class->$functionName($arguments[0]);
            }else{
                return $class->$functionName();
            }
        } else {
            $this->command($name);
        }
    }

}