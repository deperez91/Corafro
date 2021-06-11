@extends('layouts.app')
    @section('content')
        @if(session('success'))
            <div class = "alert alert-succes">
                {{session('success')}}
            </div>
    @endif
@endsection