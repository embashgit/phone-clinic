
@extends('layouts.manage')

@section('content')
    <div  class="row">
        <div class="col-12">
        <div style="margin-left: 0px; margin-right: 0px; padding: 0px" class="col-sm-12">
            @include('_includes/carousel')
        </div>

            
        </div>
        
    </div>
    <hr>
    <div class="row">
      
          <a href="#board" > <div class="col-sm-4" style="border-left: 6px solid black; border-bottom: 5px solid black;margin-left: 30%; border-radius:5px;  background: grey; color: white; margin-bottom: 20px"><h1 style="text-align: center">Possible Fault </h1></div></a> 
       </div>
       <div  id="content" class="row">
       <div id="board" class="container">
              <div class="well ">
                <ol id="items">
                     @forelse($problems as $problem)
                     <a href="{{ route('problem.solutions', ['id' => $problem->id]) }}"><h2><li><strong>{{ $problem->type }}</strong> 
                        </li>
                    </h2>
                    <h3>{{$problem->description}}</h3>
                    <hr></a>
                    @empty
                    <p>no fault registered</p>
                     @endforelse      
                </ol>
               
              
            </div>
       </div>  

    </div>
@endsection
