<?php

class Todo extends \Phalcon\Mvc\Model
{
    public $id;
    public $title;
    public $status;

    public static function getTodos()
    {
        $data = static::find();
        return $data;
    }
}
