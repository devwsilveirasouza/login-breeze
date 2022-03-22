@extends('site.layout')
@section('title', 'Dashboard')
@section('content')

    <ul id="slide-out" class="sidenav sidenav-fixed">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="{{ asset('img/lrvl.jpeg') }}">
                </div>
                <a href="#name"><span class="white-text name">{{ $user->name }}</span></a>
                <a href="#email"><span class="white-text email">{{ $user->email }}</span></a>
            </div>
        </li>
        <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
        <li><a href="#!">Second Link</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="subheader">Subheader</a></li>
        <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    </ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

    <main>
        <div class="row">
            <div class="col s12">
                <p class="flow-text">Dashboard</p>
            </div>
        </div>
    </main>

@endsection
