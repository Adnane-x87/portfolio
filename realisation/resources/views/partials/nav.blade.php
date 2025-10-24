<nav class="fixed top-0 w-full bg-gray-900 bg-opacity-95 backdrop-blur-md z-50 shadow-lg">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <div class="flex-shrink-0">
        <a href="{{ route('home') }}" class="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-teal-500 bg-clip-text text-transparent">
          Portfolio
        </a>
      </div>
      <div class="hidden md:block">
        <div class="ml-10 flex items-baseline space-x-8">
          <a href="{{ route('home') }}" class="text-white hover:text-cyan-400 px-3 py-2 font-medium transition duration-300 @if(Request::routeIs('home')) text-cyan-400 @endif">Home</a>
          <a href="{{ route('about') }}" class="text-white hover:text-cyan-400 px-3 py-2 font-medium transition duration-300 @if(Request::routeIs('about')) text-cyan-400 @endif">About</a>
          <a href="{{ route('about') }}" class="text-white hover:text-cyan-400 px-3 py-2 font-medium transition duration-300 @if(Request::routeIs('technologies')) text-cyan-400 @endif">Technologies</a>
          <a href="{{ route('projects.index') }}" class="text-white hover:text-cyan-400 px-3 py-2 font-medium transition duration-300 @if(Request::routeIs('projects.index') || Request::routeIs('projects.show')) text-cyan-400 @endif">Projects</a>
          <a href="{{ route('about') }}" class="text-white hover:text-cyan-400 px-3 py-2 font-medium transition duration-300">Contact</a>
        </div>
      </div>
      <div class="md:hidden">
        <button id="mobile-menu-button" class="text-gray-300 hover:text-white focus:outline-none">
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>
  <div id="mobile-menu" class="hidden md:hidden bg-gray-800">
    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
      <a href="{{ route('home') }}" class="text-white hover:text-cyan-400 block px-3 py-2 font-medium @if(Request::routeIs('home')) text-cyan-400 @endif">Home</a>
      <a href="{{ route('about') }}" class="text-white hover:text-cyan-400 block px-3 py-2 font-medium @if(Request::routeIs('about')) text-cyan-400 @endif">About</a>
      <a href="{{ route('about') }}" class="text-white hover:text-cyan-400 block px-3 py-2 font-medium @if(Request::routeIs('technologies')) text-cyan-400 @endif">Technologies</a>
      <a href="{{ route('projects.index') }}" class="text-white hover:text-cyan-400 block px-3 py-2 font-medium @if(Request::routeIs('projects.index') || Request::routeIs('projects.show')) text-cyan-400 @endif">Projects</a>
      <a href="{{ route('about') }}" class="text-white hover:text-cyan-400 block px-3 py-2 font-medium">Contact</a>
    </div>
  </div>
</nav>


