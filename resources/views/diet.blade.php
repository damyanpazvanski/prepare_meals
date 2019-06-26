@extends('layouts.app')

@section('content')
    <diet-component :trans="{{ json_encode(__('general.pages.diet')) }}"></diet-component>
@endsection
