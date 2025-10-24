@extends('layouts.app')

@section('title', 'About - Portfolio')

@section('content')

  <section class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-4xl md:text-5xl font-bold text-center mb-16">About Me</h2>

      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
          <p class="text-lg md:text-xl text-gray-300 leading-relaxed">
            {{ $profile['description'] }}
          </p>

          <div class="space-y-4 pt-4">
            <p class="text-lg">
              <i class="fa-solid fa-envelope text-cyan-400 mr-3"></i>
              Email: <a href="mailto:{{ $profile['email'] }}" class="text-cyan-400 hover:text-cyan-300 transition duration-300">{{ $profile['email'] }}</a>
            </p>
            <p class="text-lg">
              <i class="fa-solid fa-phone text-cyan-400 mr-3"></i>
              Phone: <a href="tel:{{ $profile['phone'] }}" class="text-cyan-400 hover:text-cyan-300 transition duration-300">{{ $profile['phone'] }}</a>
            </p>
          </div>
        </div>

        <div class="flex justify-center">
          <img src="/images/profile.webp" alt="About me" class="w-full max-w-md rounded-2xl shadow-2xl shadow-cyan-500/30">
        </div>
      </div>
    </div>
  </section>


@endsection