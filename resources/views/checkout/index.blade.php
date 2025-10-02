@extends('layouts.app')

@section('title', 'Checkout - sbarron.com')

@php
    $hideFooter = true;
@endphp

@section('content')
    @livewire('checkout')
@endsection
