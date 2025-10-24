@extends('layouts.app')

@section('title', 'Projects - Portfolio')

@section('content')

  <section class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-4xl md:text-5xl font-bold text-center mb-16">My Projects</h2>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
        
        @foreach($projects as $project)
          <div class="bg-gray-800 rounded-xl shadow-xl overflow-hidden transform hover:scale-[1.02] transition duration-300 group flex flex-col">
            
            <div class="h-48 overflow-hidden">
              <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover transition duration-500 group-hover:opacity-80">
            </div>

            <div class="p-6 flex flex-col flex-grow">
              
              <h3 class="text-2xl font-semibold mb-3 text-cyan-400 group-hover:text-cyan-300 transition duration-300">
                {{ $project['title'] }}
              </h3>
              
              <p class="text-gray-400 mb-4 line-clamp-3 flex-grow">
                {{ $project['description'] }}
              </p>

              <div class="mb-4 flex flex-wrap gap-2 mt-auto">
                @foreach($project['technologies'] as $tech)
                  <span class="bg-cyan-500/10 border border-cyan-500/50 text-cyan-400 px-2.5 py-1 rounded-md text-xs font-medium">
                    {{ $tech }}
                  </span>
                @endforeach
              </div>
              
              <div class="flex gap-3 mt-4">
                
                <a href="#" class="flex-1 bg-gradient-to-r from-cyan-500 to-teal-500 hover:from-cyan-600 hover:to-teal-600 transition-colors py-2 px-4 rounded-md text-center text-sm font-medium shadow-sm shadow-cyan-500/30">
                  Details
                </a>
                
                <a href="{{ $project['github'] }}" target="_blank" class="flex-1 border border-cyan-500 text-cyan-400 hover:bg-cyan-500 hover:text-gray-900 transition-colors py-2 px-4 rounded-md text-center text-sm font-medium">
                  GitHub
                </a>
              </div>
            </div>
          </div>
        @endforeach
        </div>
    </div>
  </section>

@endsection