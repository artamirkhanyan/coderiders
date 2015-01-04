<?php

class AccountantController extends BaseController {
    protected $layout = 'layouts.master';
    
    public function getIndex(){
        
        $this->layout->content = View::make('accountant.index')
                ->with('testVar', 'Statistics');
    }
    
    public function getPayin(){
        
        $this->layout->content = View::make('accountant.payin');
    }
    
    public function getPayout(){
        
        $this->layout->content = View::make('accountant.payout');
    }
    
    
}
