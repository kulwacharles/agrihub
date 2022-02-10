
    
<div style="text-align: center">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3"></div>
        <div class="col-lg-6 col-md-6 col-sm-6">
       
            <label>first number</label>
            <input type="number" wire:model='fnumber' class="form-control">
            <br>
            <label>Second number</label>
            <input type="number" wire:model='lnumber' class="form-control">
            <br>
            <button  wire:click='plus()' class="form-control btn btn-success">+</button>
        <br>
        Result: {{$result}}
        </div>
    </div>
    </div>
    