@extends('layouts.master')

@section('content')
  <div class="page-header">Ելք (ծախս)</div>  
  <form class="form-inline" action="" method="post">
    <div class="form-group">
      <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
      <div class="input-group">
        <div class="input-group-addon">&#1423;</div>
        <input type="number" name="payout" class="form-control" id="exampleInputAmount" placeholder="Amount">
        <div class="input-group-addon">դրամ</div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
  <div class="form-group has-error">
    <div class="bg-danger">{{$errors->first('payout')}}</div>
  </div>  
@stop

@section('script')

<script>
    //console.log($);
</script>

@stop


