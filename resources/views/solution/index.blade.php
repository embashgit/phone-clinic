@extends('layouts.manage')
@section('content')
<div class="container">
    <div class="row" style="margin-top: 100px">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Solutions </strong> Dashboard</div>
                <div class="pane-body">
              		  <ol>
                	@forelse($solutions as $solution)
                	<a style="text-decoration: none;" href="{{ route('solutions.show',  ['id' => $solution->id])  }}"><li>{{ $solution->description }}

                	</li></a>
                	@empty
                	<h4>no solution registered</h4>
                	@endforelse
                </ol>
                 	
                </div>
              
            </div>
        </div>
    </div>
</div>
@endsection

