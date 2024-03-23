@extends('layouts.main')
@section('content')
@include('backend.inc.projects-list',['title'=>'Compleated Projects',$projects])
@endsection
