@extends('layouts.nav')

@section('content')

    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Dash Info</h2>
        </div>
    </header>


    <section class="dashboard-counts no-padding-bottom">
        <div class="container-fluid">
            <div class="row bg-white has-shadow">
                <div class="col-xl-3 col-sm-6">
                </div>
                <div class="col-xl-6 col-sm-8">
                    <h1>Welcome to Project Edward.</h1>
                    <p align="center" ><strong>Dear {{$user}}</strong></p>
                </div>
            </div>
        </div>
    </section>


    @stop

