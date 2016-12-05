@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in {!! Auth::user()->email /*это обращение на прямую к классу авторизации*/ !!}!
                    {!! $myname !!}
                    <h3>{!! $age !!}</h3>
                    <h3>{!! $auth->name /*это обращение через сервис провайдер к классу авторизации. см. класс сервис провайдер*/ !!}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
