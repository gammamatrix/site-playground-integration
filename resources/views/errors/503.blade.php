@extends('playground::layouts.site')

@section('title', __('Service Unavailable'))

@section('breadcrumbs')
    <nav aria-label="breadcrumb" class="m-3">
        <ol class="breadcrumb">
            @if (Route::has('home'))
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">{{ __('Home') }}</a>
                </li>
            @endif
            <li class="breadcrumb-item active" aria-current="page">
                503
            </li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>
                    <small class="text-body-secondary">503</small>
                    {{ __('Service Unavailable') }}
                </h1>
            </div>
            <div class="card-body bg-warning">
                <p class="lead text-danger">
                    {{ __($exception->getMessage() ?: 'Service Unavailable') }}
                </p>
            </div>
            @if (url()->previous() === url()->current())
                <div class="card-footer">
                    <a class="btn btn-info float-end" href="{{ url()->previous() }}">
                        {{ __('Go back') }}
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection
