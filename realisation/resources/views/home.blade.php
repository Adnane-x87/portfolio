@extends('layouts.app')

@section('title', 'Home - Portfolio')

@section('content')

  <section class="min-h-screen flex items-center pt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div class="space-y-6 animate-fade-in">
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
            Hi, I'm <span class="bg-gradient-to-r from-cyan-400 to-teal-500 bg-clip-text text-transparent">{{ $profile['name'] }}</span>
          </h1>
          <p class="text-2xl md:text-3xl text-gray-300 font-light">{{ $profile['title'] }}</p>
          <p class="text-lg md:text-xl text-gray-400 leading-relaxed">
            I create beautiful and functional web experiences that make a difference.
          </p>
          <div class="pt-4">
            <a href="{{ route('projects.index') }}" class="inline-block bg-gradient-to-r from-cyan-400 to-teal-500 text-white font-semibold px-8 py-3 rounded-full hover:shadow-lg hover:shadow-cyan-500/50 transition duration-300 transform hover:-translate-y-1">
              View My Work
            </a>
          </div>
        </div>

        <div class="flex justify-center animate-fade-in">
          <div class="relative">
            <img src="/images/profile.webp" alt="Profile" class="w-72 h-72 md:w-80 md:h-80 rounded-full object-cover border-4 border-cyan-400 shadow-2xl shadow-cyan-500/50 hover:scale-105 transition duration-300">
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection