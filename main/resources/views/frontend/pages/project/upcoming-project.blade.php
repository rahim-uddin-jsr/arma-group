@extends('layouts.app')
@section('content')
@include('frontend.inc.projects',['name'=>'upcoming',$projects])
@endsection
