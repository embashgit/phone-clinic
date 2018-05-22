@extends('layouts.manage')
@section('content')
<div class="container">
    <div class="row" style="margin-top: 100px">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Solutions </strong> Dashboard</div>
                <ol>
                	<li>{{ $solution->topic }}
                        <p>{{ $solution->description }}</p>
                
                	</li>
                </ol>
                <div class="panel-body">
                    You now have Access
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

