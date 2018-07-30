@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row" style="margin-top:100px;">
    <div class="col-6 col-offset-3">
        <div class="col-8 col-offset-2">
         @if (session()->has('success_message'))
     <hr>
            <div class="alert alert-success">
                {{ Session::get('success_message') }}
            </div>
        @endif

            @if (session()->has('error_message'))
            <hr>

            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif
</div>

          </div>
        </div>
        <hr>
          <div class="row">
        <div class="col-8 col-offset-2">
          <div class="col-8 col-offset-2">
                <table class="table table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>phones</th>
                            <th>Action</th>

                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                           <th>S/N</th>
                            <th>phones</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if (count($phones))
                        @foreach($phones as $phone)
                        <tr>
                            <td>{!! $loop->iteration !!}</td>
                            <td>{{ $phone->brand }}</td>
                          
                            
                            
                            <td>
                                <a href="{{ route('phones.edit', ['id' => $phone->id]) }}" class="btn btn-success btn-xs">Edit</a>
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
</div>
</div>
@endsection
 


 
<!-- Modal -->
