@extends('layouts.app')
@section('content')
@include('frontend.inc.projects',['name'=>'ongoing',$projects])
@endsection
