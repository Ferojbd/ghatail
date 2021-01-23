@extends('backend.layout.master')

@section('content')
    {!! Menu::render() !!}
@endsection
@push('scripts')
    {!! Menu::scripts() !!}
@endpush