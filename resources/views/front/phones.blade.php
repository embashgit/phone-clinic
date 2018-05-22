@extends('layouts.manage')

@section('content')
<div  class="row">
    <div class="col-12">
    <div class="col-sm-12">
        @include('_includes/carousel')
    </div>
        
    </div>
    
</div>

<div  class="container">
    <div class="row">
        <div ><h4 style="margin-left: 45%">Select Product</h4>
        </div>     
    </div>
    <div class="row">

        @foreach($random_phones as $rphone) 
   
        
          <a  href="{{ route('models.show', ['id' => $rphone->id]) }}"><button class="btn btn-primary btn-info col-md-3">{{ $rphone->brand }}</button>

        @endforeach
    
    </div>
    <hr>
    <div class="row">
       <div class="col-md-3">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="createbutton"><button  type = "button" class="btn btn-lg btn-block btn-info">More Phones<span class="caret"></span></button></a>
        <ul class="dropdown-menu">
            @foreach($phones as $phone)
            <li>
                <a href="{{ route('models.show', ['id' => $phone->id]) }}"><ul>{{ $phone->brand }}</ul>

            </li>
            @endforeach
        </ul><!-- end dropdown-menu -->
        </div><!--close-3--> 
    </div>
</div>
@endsection