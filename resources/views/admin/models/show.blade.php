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
        		<div align="center
        		" class="panel">
        			<div class="panel-heading">
        				<h4>{{$model->name}}</h4>
        			</div>
        			<div class="panel-body">
        				@if($model->image)
        					<img src="/uploads/images/{{ $model->image }}">
        				@else 
        				<img src="uploads/images/avater.png">
        				@endif
        			</div>
        			<div  style="height: 40px" class="panel-footer">
        				<div class="col-4">{{strtoupper($model->os)}}</div>
        				<div class="col-4">{{strtoupper($model->category)}}</div>
        				<div class="col-4">{{strtoupper($model->number)}}</div>
        			</div>
        		</div>
        	</div>
        </div>

        <h3 class="col4 col-offset-4">Available Faults</h3>
          <div class="row">
          <div class="col-8 col-offset-2">
                <table class="table table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Fault type</th>
                            <th>Fault topic</th>
                        	<th>Fault Description</th>
                            <th>Action</th>

                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                           <th>S/N</th>
                            <th>Fault type</th>
                            <th>Fault type</th>
                            <th>Fault description</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        @forelse($model->problems as $problem)
                        <tr>
                            <td>{!! $loop->iteration !!}</td>
                           <td> <a class="btn btn-info btn-secondary" href="{{ route('problems.edit', ['id' => $problem->id]) }}"> {{ $problem->type }} </a></td>
                           <td>{{ $problem->topic}}</td>
                           <td>{{$problem->description}}</td>               
                                                             
                                 

                            
                            <td>
                                <a href="{{ route('problems.destroy', ['id' => $problem->id]) }}" class="btn btn-danger btn-xs">Delete</a>
                                <br>
                                <a href="{{ route('problems.show', ['id' => $problem->id]) }}" class="btn btn-info btn-xs">Show Solution</a>
                            </td>
                        </tr>
                        @empty
                        <h3>No Fault Recoded for {{$model->name}}</h3>
                        @endforelse
                     	
                    </tbody>
                </table>
                
</div>
</div>
@endsection
