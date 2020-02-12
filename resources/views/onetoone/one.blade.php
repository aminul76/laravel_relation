@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @foreach($ones as $one)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>{{ $one->account_number}}</h3></div>
            <div class="card-text">
                Created By: <b>{{ $one->user->name }}</b><br />
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
@endsection

