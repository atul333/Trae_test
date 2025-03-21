@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Select Your Role') }}</div>

                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-3">
                            <form action="{{ route('role.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="role" value="admin">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Admin') }}
                                </button>
                            </form>
                        </div>
                        <div class="col-md-4 mb-3">
                            <form action="{{ route('role.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="role" value="publisher">
                                <button type="submit" class="btn btn-success btn-block">
                                    {{ __('Publisher') }}
                                </button>
                            </form>
                        </div>
                        <div class="col-md-4 mb-3">
                            <form action="{{ route('role.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="role" value="advertiser">
                                <button type="submit" class="btn btn-info btn-block">
                                    {{ __('Advertiser') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection