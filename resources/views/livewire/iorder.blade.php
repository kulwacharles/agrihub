@extends('layouts.master')

@section('content')
<div class="card">
<form>
      <div class="card-header">
        <h4>JavaScript Validation (Horizontal Form) </h4>
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-xl-3 colsm-3 col-12">
                <label>Product name</label>
                
               
                    <div class="invalid-feedback">
                    What's your name?
                    </div>
               
            </div>
            <div class="col-lg-3 col-xl-3 colsm-3 col-12">
                <label>Quantity</label>
                
                    <input type="number"  class="form-control" wire:model="quantity" required="">
                    <div class="invalid-feedback">
                    Oh no! Email is invalid.
                    </div>
              
            </div>
            <div class="col-lg-3 col-xl-3 colsm-3 col-12">
                <label >Supplier</label>
               
              
                    <div class="valid-feedback">
                    Good job!
                    </div>
                
            </div>
         
            <div class="col-lg-3 col-xl-3 colsm-3 col-12">
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" wire:click="adddata()">Submit</button>
                    </div>
            </div>
           {{$quantity}}  
        </div>
    
  </div>
   
@endsection