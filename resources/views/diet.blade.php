@extends('layouts.app')

@section('content')
    <diet-component :trans="{{ json_encode(__('general.pages.diet')) }}"
                    :genders="{{ $genders }}"
                    :activities="{{ $activities }}"
                    :routines="{{ $routines }}"
                    :meals="{{ $meals }}"
                    :categories="{{ $categories }}"
    ></diet-component>
@endsection
