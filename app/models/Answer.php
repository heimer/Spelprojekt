<?php

class Answer extends Eloquent {

    public function product()
    {
        return $this->belongsTo('Question');
    }
}