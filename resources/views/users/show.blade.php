@extends('pages.master')

@section('title')
    {{$user->firstname}} {{$user->lastname}}
@stop

@section('header')
    PickerToApply {{$user->firstname}} {{$user->lastname}}
@stop

@section('data')
    <div>
        <table name="usertable">
            @foreach($user->toArray() as $key=>$value)
                <tr>
                    <td>
                        {{$key}}
                    </td>
                    <td>
                        {{$value}}
                    </td>
                </tr>
                @endforeach
        </table>
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