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
    
    public function postPayout(){
        
        $rules = array('payout' => 'required|integer|min:1000');

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            return Redirect::to('payout')->withErrors($validator);
        }
        
        $accountantIn = new AccountantOut();
 
        $accountantIn->amount = Input::get('payout');
        $accountantIn->way = 'test way';
 
        if($accountantIn->save()){
            return Redirect::action('AccountantController@getIndex');
        }
        
        return Redirect::action('AccountantController@getPayout');
    }
    
     public function postPayin(){
        
         
        $rules = array(
            'payin' => 'required|integer|min:1000',
            'way' => 'required|in:trainings,freelance'
            );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            return Redirect::to('payin')->withErrors($validator);
        }
        
        $accountantIn = new AccountantIn;
 
        $accountantIn->amount = Input::get('payin');
        $accountantIn->way = Input::get('way');
 
        if($accountantIn->save()){
            return Redirect::action('AccountantController@getIndex');
        }
        
        return Redirect::action('AccountantController@getPayin');
    }
    
    
}
