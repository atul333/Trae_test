@extends('layouts.app')

@section('content')
<div class="welcome-section">
    <div class="container">
        <h1>Welcome to Your Dashboard</h1>
        <p class="lead text-muted mb-5">Manage your telegram ads and campaigns all in one place</p>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="welcome-card">
                    <h3 class="h5 mb-3">Create Campaigns</h3>
                    <p class="text-muted">Design and launch effective telegram advertising campaigns with ease.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="welcome-card">
                    <h3 class="h5 mb-3">Track Performance</h3>
                    <p class="text-muted">Monitor your campaign metrics and optimize for better results.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="welcome-card">
                    <h3 class="h5 mb-3">Manage Budget</h3>
                    <p class="text-muted">Control your advertising spend and maximize ROI effectively.</p>
                </div>
            </div>
        </div>

        @if (session('status'))
            <div class="alert alert-success mt-4" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
</div>
@endsection
