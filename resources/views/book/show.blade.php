@extends('layouts.master')

@section('title')
    Show book
@stop

@section('content')
    @if(isset($id))
        <h1>Show book: {{ $id }}.</h1>
    @else
        <h1>No book chosen.</h1>
    @endif
@stop
