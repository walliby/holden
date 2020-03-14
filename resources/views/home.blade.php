@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Welcome to imabigdork.com!</h1>
                    <img src="https://ultimatepeter.com/wp-content/uploads/2013/06/GiantDork.gif">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
