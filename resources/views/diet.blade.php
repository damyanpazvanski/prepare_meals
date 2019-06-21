@extends('layouts.app')

@section('content')
    <diet-component :trans="{{ json_encode(trans('general.pages.diet')) }}"></diet-component>
@endsection
