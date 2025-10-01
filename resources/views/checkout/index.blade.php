@extends('layouts.app')

@section('title', 'Checkout - sbarron.com')

@php
    $hideNav = true;
    $hideFooter = true;
@endphp

@section('content')
    @livewire('checkout')
@endsection
