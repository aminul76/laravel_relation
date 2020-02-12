@extends('layouts.app')

@section('content')
<div class="container">
   <center>Many To One Relationship</center>
    <div class="row justify-content-center">

    @foreach($tag->post as $many)
    <div class="card" style="width: 18rem;">

        <div class="card-body">
            <div class="card-title"><h3>{{ $many}}</h3></div>
            <div class="card-text">
             <b>{{ $many->tname }}</b><br />
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
@endsection

