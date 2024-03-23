@extends('layouts.main')
@section('content')
@include('backend.inc.projects-list',['title'=>'Ongoing Projects',$projects])

@endsection
