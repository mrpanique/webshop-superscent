<?php

class Question
{
    public $text;
    public $user_id;

    public $date = '';

    public function __construct($text, $user_id)
    {
        $this->text = $text;
        $this->user_id = $user_id;
    }

    public function isTextEmpty()
    {
        if (strlen($this->text) === 0) {
            return true;
        } else {
            return false;
        }
    }

    public function isTextInLimits()
    {
        if (mb_strlen($this->text) <= 1500) {
            return true;
        } else {
            return false;
        }
    }

    public function setDate($date){
        $this->date = $date;
    }
}