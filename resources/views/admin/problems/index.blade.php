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
          @if ($errors->has('fault'))
          <div style="text-align: center;" class="alert alert-danger">
             <span class="help-block"> {{ $errors->first('fault') }}</span>
            </div>
           
        @endif
            <div class="col-8">
            <h1 >List of all Faults</h1>
            </div>

            <div class="col-4">

            
            <button type="button" style="margin-top: 20px" class="btn btn-primary btn-lg  pull-right" data-toggle="modal" data-target="#exampleModal">
               Create a Fault
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
                    <h3 align="center">Create Fault for a model</h3>
                    <hr>
            <div align="center">
            {!! Form::open(['route'=>'problems.store', 'class'=>'form-horizontal form-label-left'])!!}


             <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}" >
    			<select class="form-control" name="type" required>
	               <option class="default">Select Fault type</option>
	               <option>Software</option>
	               <option>Hardware</option>
             	</select>
             	@if ($errors->has('type'))
            <span class="help-block"> {{ $errors->first('type') }}</span>
        	@endif
             </div>
             <br>
             <div class="form-group{{ $errors->has('topic') ? ' has-error' : '' }}" >
             <input type="text" name="topic" class="form-control" placeholder="Enter Fault topic">
             @if ($errors->has('topic'))
            <span class="help-block"> {{ $errors->first('topic') }}</span>
        	@endif
         	</div>
             <br>
             <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}" >
             <textarea type="text" name="description" class="form-control" placeholder="Enter Fault description"></textarea>
             @if ($errors->has('description'))
            <span class="help-block"> {{ $errors->first('description') }}</span>
        	@endif
         	</div>
             <br>
             <div class="form-group{{ $errors->has('model_id') ? ' has-error' : '' }}" >
			<select class="form-control" name="model_id" placeholder="choose phone model">
                @foreach($models as $model)
                  <option value="{{ $model->id }}" >{{$model->name}}  </option>
                @endforeach
            </select>
            @if ($errors->has('model_id'))
            <span class="help-block"> {{ $errors->first('model_id') }}</span>
        	@endif
        	</div>
            <br>
             
        
         
         </div>
   		</div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
            <div align="right" class="form-group">

    		<input type="submit" class="btn btn-success" value="Save Fault">

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
          <div class="col-9 col-offset-1">
                <table class="table table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Model</th>
                            <th>Fault Topic</th>
                            <th>Fault Type</th>
                            <th>Fault Description</th>
                            <th>Action</th>

                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                           <th>S/N</th>
                            <th>Model</th>
                            <th>Fault Topic</th>
                            <th>Fault Type</th>
                            <th>Fault Description</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if (count($faults))
                        @foreach($faults as $fault)
                        <tr>
                            <td>{!! $loop->iteration !!}</td>
                            <td>{{ $fault->model->name }}<br><img height="100" width="70" src="/uploads/images/{{$fault->model->image}}"></td>
                           <td> {{ $fault->topic }}</td>
                           <td >{{ $fault->type}}</td>
                           <td style="text-align: justify;">{{$fault->description}}</td>
                                          
                                                             
                                 

                            
                            <td>
                                <a href="{{route('problems.destroy', $fault->id)}}" class="btn btn-danger btn-xs push-left">Delete</a>

                                <a href="{{ route('problems.show', $fault->id)}}" class="btn btn-info btn-xs pull-right">Show</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                {!! $faults->render() !!}
</div>
</div>
@endsection



