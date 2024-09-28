@extends('layout1.layout')

@section('content')

@include('Admin.cars.carlist')
@include('Admin.cars.carcreate')
@include('Admin.cars.cardetails')
@include('Admin.cars.caredit')
@include('Admin.cars.cardelete')


@endsection
