@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
@section('button')
    <a href="/" class="btn btn-warning">Go Back Home</a>
@endsection
