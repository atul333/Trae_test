@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Publisher Dashboard') }}</div>

                <div class="card-body">
                    <h2>Welcome to Publisher Dashboard</h2>
                    <p>You are logged in as a Publisher.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection