@extends('pages.master')

@section('title')
    Users
    @stop

@section('header')
    PickerToApply Users
    @stop

@section('data')
    <div>
        @foreach($users as $user)
            <h2><a href="{{route('showuser', [$user->id])}}">{{$user->firstname}} {{$user->lastname}}</a></h2>
            @endforeach
    </div>
    <div class="links">
        <a href="#">Email</a>
        <a href="https://twitter.com">Twitter</a>
        <a href="https://facebook.com">Facebook</a>
        <a href="https://developer.apple.com/app-store">iOS app</a>
    </div>
    @stop

@section('footer')
    <hr>
    Thank you for using PickerToApply
    </hr>
    @stop