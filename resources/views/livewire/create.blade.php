<div>
    <div class="modal fade" id="newgroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new group</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        {{ csrf_field() }}
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-12 col-lg-12 col-xl-12">
                <label for="inputEmail4">Group Name {{$value}}</label>
                <input type="text" wire:model='name' class="form-control" id="inputEmail4" placeholder="">
                    @error('name')
                <div class="text-danger">{{$message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-6 col-lg-6">
    
                <button  wire:click="addgroup()" class="btn btn-lg btn-primary">Add</button>
              </div>
            </div>
          </div>
 
    </div>
  </div>
</div>
</div>