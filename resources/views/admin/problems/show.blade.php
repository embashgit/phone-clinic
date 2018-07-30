         @extends('layouts.app2')
         @section('content')
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
        <div class="row">
        	<div style="margin-top: 40px" class="col-4 col-offset-4 ">
        		<div align="center" class="panel">
                    <h2>{{ $problem->model->name }}</h2>
        			<i style="text-align: justify;">Problem: "{{$problem->description}}</i>"
        		</div>
        	</div>
        </div>
                 <div class="row">           
            <div align="right" class="col-4">

            
            <button type="button" style="margin-top: 20px" class="btn btn-primary btn-lg  pull-right" data-toggle="modal" data-target="#exampleModal">
               Add Solutions
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
                    <h3 align="center">Add new solution</h3>
                    <hr>
            <div align="center">
            {!! Form::open(['route'=>'solutions.store', 'class'=>'form-horizontal form-label-left'])!!}


             <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}" >
            <input type="hidden" name="problem_id" value="{{ $problem->id }}" />
        
             <textarea type="text" name="description" class="form-control" placeholder="Add Solution Steps here"></textarea>

        
             @if ($errors->has('description'))
                <span class="help-block"> {{ $errors->first('description') }}</span>
            @endif
         </div>
    
     
    </div>

                    </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
            <div align="right" class="form-group">

    <input type="submit" class="btn btn-success" value="Save Phone">

    </div> 
            {!! Form::close() !!}
          </div>
            </div>
            </div>
            </div>
         </div>
        <div align="left"><h3 class="col-8">Available Solution steps</h3></div>
     </div>

        
          <div class="row">
          <div class="col-8 col-offset-2">
                <table class="table table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th>Steps</th>
                        	<th>Description</th>
                            <th>Action</th>

                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                           <th>Steps</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        @foreach($solutions as $solution)
                        <tr>
                            <td>{!! $loop->iteration !!}</td>
                           
                           <td>{{$solution->description}}</td>               
                            <td>
                                <a href="{{ route('solutions.destroy', ['id' => $solution->id]) }}" class="btn btn-danger btn-xs">Delete</a>
                                <br>
                                
                            </td>
                        </tr>
                        @endforeach
                        

                     	
                    </tbody>
                </table>
                
</div>
</div>
@endsection
