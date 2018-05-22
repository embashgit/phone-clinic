@extends('layouts.manage')

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
            <h1 >List of Available Phones</h1>
            </div>

            <div class="col-4">

            
            <button type="button" style="margin-top: 20px" class="btn btn-primary btn-lg  pull-right" data-toggle="modal" data-target="#exampleModal">
               Create a new Phone
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
                    <h3 align="center">Create a new phone</h3>
                    <hr>
            <div align="center">
            {!! Form::open(['route'=>'phones.store', 'class'=>'form-horizontal form-label-left'])!!}


             <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}" >
    
        
             <input type="text" name="brand" class="form-control" placeholder="enter Phone brand">

        
         @if ($errors->has('brand'))
            <span class="help-block"> {{ $errors->first('brand') }}</span>
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
          </div>
        </div>
        <hr>
          <div class="row">
          <div class="col-8 col-offset-2">
                <table class="table table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Phone</th>
                            <th>Action</th>

                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                           <th>S/N</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if (count($phones))
                        @foreach($phones as $phone)
                        <tr>
                            <td>{!! $loop->iteration !!}</td>
                           <td> <a class="btn btn-info btn-secondary" href="{{ route('phones.edit', ['id' => $phone->id]) }}"> {{ $phone->brand }} </a></td>               
                                                             
                                 

                            
                            <td>
                                <a href="{{ route('phones.destroy', ['id' => $phone->id]) }}" class="btn btn-danger btn-xs">Delete</a>
                                <a href="{{ route('phones.show', ['id' => $phone->id]) }}" class="btn btn-info btn-xs pull-right">Show</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                {!! $phones->render() !!}
</div>
</div>
@endsection



