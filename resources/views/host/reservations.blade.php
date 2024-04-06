@extends('host.layout')

@section('body')
    <div class="container">
        <div class="h3">
            Welcome, {{Session::get('LoginId')->fullname}}.
        </div>
        <div class="py-4 row">
            
        </div>
    </div>
@endsection