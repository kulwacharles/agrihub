@extends('layouts.master')

@section('content')

  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <!-- alert -->
          @if(Session::get('messagev'))
          <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>×</span>
              </button>
              {{Session::get('messagev')}}
            </div>
          </div>
          @endif
          @if(Session::get('messager'))
          <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>×</span>
              </button>
              {{Session::get('messager')}}
            </div>
          </div>
           @endif

          <!-- end of alert -->
          <div class="card">
            <div class="card-header">
              
                <h4>Product List</h4>
                <div class="card-header-form">
                  
                    <div class="input-group">
                      <h4><button class="btn btn-primary"  data-toggle="modal" data-target="#owner">Add unit measure<i class="fa fa-plus"></i></button></h4>
                    </div>
                  
                </div>
              
              
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-10 col-xl-10 col-md-10">
                  <div class="table-responsive">
                    @if(count($unit)>0)
                        <table class="table table-striped table-md">
                          <tbody><tr>
                              <th>S/N</th>
                            <th>Unit Measure</th>
                       
                            <th>Action</th>
                          </tr>
                          
                          @foreach($unit as $unit)
                             <tr>
                                 <td>{{$loop->index + 1}}</td>
                            <td>{{$unit->name}}</td>
                           
                        
                               
                            <td>
                              <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                            
                              <a href="#"   data-toggle="modal" data-target="#owner{{$unit->user->id}}"><i class="fas fa-edit"></i></a>

                              <a href="#"  data-toggle="modal" data-target="#del{{$unit->user->id}}"><i class="fas fa-trash-alt"></i></a>

                              
                                </div>
                            </td>
                             </tr>
                            
                          @endforeach
                          @else
                          No data available
                          @endif
                          
                        </tbody>
                        
                      </table>
                      </div>
                      <div class="card-footer text-right">
                        <nav class="d-inline-block">
                          <ul class="pagination mb-0">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li class="page-item">
                              <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        </div>
    </div>
    
  </section>
  <!-- delete modal -->
 
  @foreach($unit2 as $unit)
  <div class="modal fade" id="del{{$unit->user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Unit measure</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete?
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" type="submit"  class="btn btn-danger"><a href="{{url('unit/'.$unit->id.'/delete')}}" style="color:white;font-weight:bold">Delete</a></button>
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
 @endforeach

<!-- end of the delete model -->


  <!--create owner modal -->
  <div class="modal fade" id="owner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add unit measure</h5> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form" method="post" action="{{url('unit/save')}}">
        {{ csrf_field() }}
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-12 col-lg-12 col-xl-12">
                <label for="inputEmail4">Unit measure</label>
                <input type="text" name='name' class="form-control" id="inputEmail4" placeholder="">
                    @error('name')
                <div class="text-danger">{{$message }}</div>
                @enderror
              </div>

            </div>
         
         
             
            <div class="form-row">
               <div class="form-group col-md-12 col-lg-12">
    
                <input type="submit" value="Add" name="save" class="btn btn-block btn-primary">
              </div>
            </div>
          </div>
  </form>
    </div>
  </div>
</div>
<!-- end of the unit modal -->
<!-- edit modal -->
@foreach($unit2 as $unit)
<div class="modal fade" id="owner{{$unit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Edit unit measure</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form class="form" method="post" action="{{url('unit/'.$unit->id.'/edit')}}">
      {{ csrf_field() }}
        <div class="card-body">
          <div class="form-row">
            <div class="form-group col-md-12 col-lg-12 col-xl-12">
              <label for="inputEmail4">Update Unit Measure</label>
              <input type="text" value="{{$unit->name}}" name='name' class="form-control" id="inputEmail4" placeholder="">
                  @error('name')
              <div class="text-danger">{{$message }}</div>
              @enderror
            </div>
  
          </div>
          
           
          <div class="form-row">
             <div class="form-group col-md-12 col-lg-12">
  
              <input type="submit" value="Save edit" name="save" class="btn btn-block btn-primary">
            </div>
          </div>
        </div>
</form>
  </div>
</div>
</div>
@endforeach
<!-- end of the edit modal -->
@endsection