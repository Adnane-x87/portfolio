@extends('layouts.app')

@section('content')
<div class="container py-5 my-5">
    <div class="card shadow-lg mx-auto border-0 bg-white" style="max-width: 28rem;">
        <div class="card-body p-5">
            
            <h2 class="card-title h2 fw-bolder mb-2 text-dark">{{ $developer['name'] }}</h2>
            
            <p class="text-primary fw-semibold mb-3 border-bottom pb-2 border-opacity-25">{{ $developer['role'] }}</p>
            
            <p class="mb-4 text-secondary">{{ $developer['bio'] }}</p>
            
            <div class="pt-3 border-top">
                <p class="text-muted small mb-0">
                    <strong class="text-dark">Email:</strong> {{ $developer['email'] }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection