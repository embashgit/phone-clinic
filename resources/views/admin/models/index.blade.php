@extends('layouts.app2')

@section('content')
<div  class="row">
   <div style="margin-top: 50px" class="col-8 col-offset-2">
     @if (session()->has('success_message'))
     <hr>
            <div style="text-align: center;" class="alert alert-success">
                {{ Session::get('success_message') }}
            </div>
        @endif

            @if (session()->has('error_message'))
            <hr>

            <div style="text-align: center;" class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif
          @if ($errors->has('brand'))
          <div style="text-align: center;" class="alert alert-danger">
             <span class="help-block"> {{ $errors->first('brand') }}</span>
            </div>
           
        @endif
            <div class="col-8">
            <h1 >List of Available models</h1>
            </div>

            <div class="col-4">

            
            <button type="button" style="margin-top: 20px" class="btn btn-primary btn-lg  pull-right" data-toggle="modal" data-target="#exampleModal">
               Create a new Phone Model
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                     <div class="modal-header">
                  <h2 class="modal-title" id="exampleModalLabel">Phone Klinic</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
                </button>
                </div>
                   <div class="modal-body">
                    <h3 align="center">Create a new phone Model</h3>
                    <hr>
            <div align="center">
            {!! Form::open(['route'=>'models.store', 'files'=>'true', 'class'=>'form-horizontal form-label-left'])!!}


             <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" >
    
              
             <input type="text" name="name" class="form-control" placeholder="enter Model name">
             <br>
             <input type="text" name="number" class="form-control" placeholder="enter Model number">
             <br>
             <input type="text" name="category" class="form-control" placeholder="Enter Model Category">
             <br>
             <select class="form-control" name="os" required>
               <option class="default">Select Phone O.S</option>
               <option>OS 7.0 </option>
               <option>OS 5.0 </option>
               <option>OS 6.1.0 </option>
               <option>OS 4.4.2 </option>
               <option>OS 7.1 </option>


             </select>
             <br>
             <select class="form-control" name="phone_id" placeholder="choose phone">
                @foreach($phones as $phone)
                  <option value="{{ $phone->id }}" >{{$phone->brand}}  </option>
                @endforeach
            </select>
            <br>
             <input type="file" name="image" class="" placeholder="Choose Phone image">
             
        
         @if ($errors->has('name'))
            <span class="help-block"> {{ $errors->first('name') }}</span>
        @endif
         </div>
    
     
    </div>

                    </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
            <div align="right" class="form-group">

    <input type="submit" class="btn btn-success" value="Save Model">

    </div> 
            {!! Form::close() !!}
          </div>
            </div>
            </div>
            </div>
            </div>
          </div>
        </div>
        <hr>
          <div class="row">
          <div class="col-8 col-offset-2">
                <table class="table table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Model</th>
                            <th>Phone OS</th>
                            <th>Phone Category</th>
                            <th>Action</th>

                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                           <th>S/N</th>
                            <th>Model</th>
                            <th>Phone OS</th>
                            <th>Phone Category</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if (count($models))
                        @foreach($models as $model)
                        <tr>
                            <td>{!! $loop->iteration !!}</td>
                           <td> <a class="btn btn-info btn-secondary" href="{{ route('models.edit', ['id' => $model->id]) }}"> {{ $model->name }} </a></td>
                           <td>{{$model->os}}</td>
                           <td>{{ $model->phone->brand }}</td>               
                                                             
                                 

                            
                            <td>
                                <a href="{{route('models.destroy', $model->id)}}" class="btn btn-danger btn-xs">Delete</a>
                                <a href="{{ route('models.show', $model->id)}}" class="btn btn-info btn-xs pull-right">Show</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                {!! $models->render() !!}
</div>
</div>
@endsection



