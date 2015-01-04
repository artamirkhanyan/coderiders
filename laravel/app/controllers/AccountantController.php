<?php

class AccountantController extends BaseController {
    protected $layout = 'layouts.master';
    
    public function getIndex(){
        
        $this->layout->content = View::make('accountant.index')
                ->with('testVar', 'barev');
    }
    
    
}
