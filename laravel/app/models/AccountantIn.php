<?php

class AccountantIn extends Eloquent {
    
    public $timestamps = false;
    protected $table = 'accountantin';
    protected $fillable = ['amount', 'way', 'date'];
    
}
