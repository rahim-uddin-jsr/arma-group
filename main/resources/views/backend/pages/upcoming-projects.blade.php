@extends('layouts.main')
@section('content')
@include('backend.inc.projects-list',['title'=>'Upcomimg Projects',$projects])
@endsection
