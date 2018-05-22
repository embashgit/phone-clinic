@extends('layouts.manage')

@section('content')
    <div  class="row">
    
        <div style="margin-left: 0px; margin-right: 0px; padding: 0px" class="col-sm-12">
            @include('_includes/carousel')
      
        
    </div>
    <hr>
    <div class="row">
      
          <a href="#problem" > <div class="col-sm-4" style="border-left: 6px solid black; border-bottom: 5px solid black;margin-left: 30%; border-radius:5px;  background: grey; color: white; margin-bottom: 20px"><h3 style="text-align: center">Simple Ways to fix your phone</h3></div></a> 
       </div>
       <div  id="content" class="row">
       <div id="problem" class="container">
              <div class="page">
                <h3 style="text-align: center; text-shadow: rgb(4000, 2000, 3565)5px, 2px, 3px;"><i>Here are some likely solutions to fix your phone</i></h3>
                <ul id="items">
                     @foreach($solutions as $solution)
                     <a href="{{ route('solutions.show', ['id' => $solution->id]) }}"></a><h2><li style="text-align: justify;">{{ $solution->description }} 
                        </li>
                    </h2>
                     <form method="post" action="{{ route('solution.comment', ['id' => $solution->id]) }}"  >
                        {{ csrf_field() }}
                      <DIV class="row">
                        <div style="margin-top: 4px; margin-left:0px" class="col-sm-2">
                          <img src="/uploads/avater.png" class="pull-right" width="60px" height="60px">
                        </div>
                         <div class="form-group col-sm-8">
                          <label id="post" for="post" class="control-label">Add Comment:
                          </label>
                          <input type="text" name="post" class="form-control">
                         </div>
                          <div style="margin-top: 25px" class="form-group col-sm-2">
                           {!! Form::submit('Comment', ['class'=>'btn btn-success glyphicon glyphicon-chevron-right'])!!}
                        </div>
                    
                      </DIV>
                        
                    </form>
                    @forelse($solution->comments as $comments)
                      <h4 style="text-align: justify;" >{{ $comments->post }} <span style="color: grey"> by: anonymous</span></h4>
                      @empty

                    @endforelse
                    <hr>
                     @endforeach      
                </ul>
               
               
              
            </div>
       </div>  

    </div>
@endsection
