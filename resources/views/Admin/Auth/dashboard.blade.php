<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome Icons -->
  <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->

<link href="{{asset('Front/css/all.min.css') }}" rel="stylesheet"  type="text/css"  >

  <!-- Theme style -->

<link href="{{asset('Front/css/adminlte.min.css') }}" rel="stylesheet"  type="text/css"  >

<link href="{{ asset('Front/css/Tos.index.css') }}" rel="stylesheet" type="text/css" >

<link href="{{ asset('Front/css/hint.min.css') }}" rel="stylesheet" type="text/css">

<link href="{{ asset('Front/css/Tos_Guide.css') }}" rel="stylesheet" type="text/css">

<link href="{{asset('Front/css/normalize.css') }}" rel="stylesheet"  type="text/css"  >

  <script src="{{ asset('Front/JS/table2excel.js') }}"></script>

   <link href="{{ asset('Front/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">

   <link href="{{ asset('Front/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">

  <title>TOS | crm-Dashboard</title>

</head>



<body onload='loading();'   class="hold-transition sidebar-mini">


@if (!(auth::guard('user')->check()))

 {{--  without middleware checkdata
  auth->guard('user')==auth::guard('user')  --}}
  <ul>

<h1>  defaultDS  <h1>

<script>   alert('you must login first');                </script>

{{--  <li>   you must login first  </li>     --}}

<meta http-equiv='refresh'  content='2,url={{route("Admin.Login")}}' />

{{--  <meta http-equiv='refresh'  content='0,url=404page' />  --}}

@else



@extends('Admin.Auth.crmtheme')



@section('Summary')


@include('Admin.Auth.Summary')

@stop



@section('activity_log')

@include('Admin.Auth.activity_log')

@stop



@section('price_offers')

@include('Admin.Auth.price_offers.index')

@stop


@section('users')

@include('Admin.Auth.users')

@stop

@section('permissions')

@include('Admin.Auth.permission.index')

@stop


@section('customers')

@include('Admin.Auth.customers.index')

@stop




@section('SalesReps')

@include('Admin.Auth.SalesReps.index')

@stop


@section('cash')

@include('Admin.Auth.cash_A-B_managment.C_Management.index')

@stop



@section('Cash_reports')

@include('Admin.Auth.cash_A-B_managment.C_report.index')

@stop

@section('Bank')

@include('Admin.Auth.Banking_A-B_managment.B_Management.index')

@stop

@section('Bank_reports')

@include('Admin.Auth.Banking_A-B_managment.B_report.index')

@stop


@section('Receipts')

@include('Admin.Auth.Accounting_transactions_Management.Receipts.index')

@stop




@section('Expenses')

@include('Admin.Auth.Accounting_transactions_Management.Expenses.index')

@stop



@section('journalentiry')

@include('Admin.Auth.Accounting_transactions_Management.journalentiry.index')

@stop


{{-- @section('projects')

@include('Admin.Auth.projects')

@stop --}}

 @endif


 <!-- <h1> @yield ('static') </h1> -->





