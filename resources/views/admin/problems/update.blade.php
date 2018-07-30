@extends('layouts.app2')

@section('content')

{!! Form::open(['route'=>'problems.store', 'files'=>'true', 'class'=>'form-horizontal form-label-left'])!!}


             <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}" >
    			<select class="form-control" name="type" required>
	               <option class="default">Select Fault type</option>
	               <option>Software</option>
	               <option>Hardware</option>
             	</select>
             <br>
             <input type="text" name="topic" class="form-control" placeholder="Enter Fault topic">
             <br>
             <textarea type="text" name="description" class="form-control" placeholder="Enter Fault description"></textarea>
             <br>
			<select class="form-control" name="model_id" placeholder="choose phone model">
                @foreach($models as $model)
                  <option value="{{ $model->id }}" >{{$model->name}}  </option>
                @endforeach
            </select>
            <br>
             
        
         @if ($errors->has('model_id'))
            <span class="help-block"> {{ $errors->first('model_id') }}</span>
        @endif
         </div>
    
     
    </div>
    </div>      
    <div align="right" class="form-group">

    <input type="submit" class="btn btn-success" value="Save Fault">

    </div> 
    {!! Form::close() !!}
    </div>
    @endsection