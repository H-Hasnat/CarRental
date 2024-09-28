@extends('layout1.layout')

@section('content')

@include('Admin.rental.rental-list')
@include('Admin.rental.rental-details')
@include('Admin.rental.rental-create')
@include('Admin.rental.rental-delete')
@include('Admin.rental.rental-edit')


@endsection
