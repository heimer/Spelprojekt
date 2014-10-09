<?php

class Activity extends Eloquent {

    public function product()
    {
        return $this->hasMany('Question');
    }
}