@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    <h2>Welcome to Admin Dashboard</h2>
                    <p>You are logged in as an Administrator.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection