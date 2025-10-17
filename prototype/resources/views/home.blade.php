@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white rounded-xl shadow-md p-6">
    <h2 class="text-2xl font-bold mb-2">{{ $developer['name'] }}</h2>
    <p class="text-blue-500 mb-2">{{ $developer['role'] }}</p>
    <p class="mb-4">{{ $developer['bio'] }}</p>
    <p class="text-gray-600"><strong>Email:</strong> {{ $developer['email'] }}</p>
</div>
@endsection
