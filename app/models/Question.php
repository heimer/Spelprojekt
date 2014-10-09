<?php

class Question extends Eloquent {

    public function product()
    {
        return $this->belongsTo('Activity');
    }
     public function product()
    {
        return $this->hasMany('Answer');
    }
}