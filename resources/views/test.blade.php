@extends('master')

@section('style')

@endsection
@section('content')

    @foreach($med as $md)

    {{$md->name}}
    @endforeach

    @endsection