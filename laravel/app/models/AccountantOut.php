<?php

class AccountantOut extends Eloquent {
    
    public $timestamps = false;
    protected $table = 'accountantout';
    protected $fillable = ['amount', 'way', 'date'];
    
    
}

