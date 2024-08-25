@extends('layouts.main')

@push('pageHeader')
  Job List
@endpush

@section('content')
  @include('includes.header')
  @include('includes.job')
@endsection

