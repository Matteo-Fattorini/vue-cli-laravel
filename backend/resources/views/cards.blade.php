@extends('layouts.app')

@section('content')
   
   @foreach ($users as $user )
    <reg title = {{ $user->name }} subtitle = {{ $user->email}}>
    </reg>
       
   @endforeach
    
@endsection