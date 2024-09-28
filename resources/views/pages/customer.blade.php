@extends('layout1.layout')

@section('content')

@include('Admin.customer.customer-details')
@include('Admin.customer.customer-list')
@include('Admin.customer.customer-delete')
@include('Admin.customer.customer-create')
@include('Admin.customer.customer-edit')




@endsection
