@extends('layouts.app')
@section('content')
@include('frontend.inc.projects',['name'=>'completed',$projects])
@endsection
