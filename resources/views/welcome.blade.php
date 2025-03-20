<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
    @livewireStyles
</head>
<body class="bg-green-900 text-white">

    <!-- Header -->
    <div class="hero min-h-screen" style="background-image: url('/images/greenbg.jpg');">
        <div class="hero-content text-center">
          <div class="max-w-md">
            <h1 class="text-5xl font-bold">Hello, I'm Ezekiel!</h1>
            <p class="py-6">
                I'm a full-stack web developer with a strong foundation in MERN stack development. Recently, I&apos;ve been expanding my skills by working extensively with Laravel and Livewire, along with popular UI libraries like DaisyUI, MariUI, and Flux. I enjoy building dynamic, user-friendly applications and continuously explore new technologies to enhance my projects
            </p>
          </div>
        </div>
      </div>

     {{-- <!-- Blackjack Table Section -->
     <div class="hero min-h-screen bg-cover bg-center bg-no-repeat text-white" style="background-image: url('/images/greenbg.jpg');">
        
        <!-- Blackjack Table -->
        <div class="relative flex flex-col w-11/12 max-w-5xl h-[90vh] max-h-[600px] mx-auto bg-emerald-800 border-8 border-amber-900 rounded-[200px] shadow-2xl overflow-hidden">
            
            <!-- Logo Section (Top) -->
            <div class="flex justify-center mt-8">
                <div id="logo-container" class="overflow-hidden bg-white border-4 border-yellow-400 rounded-full cursor-pointer w-32 h-32 shadow-lg z-10">
                    <img src="{{ asset('images/profile.png') }}" alt="Table Logo" id="table-logo" class="object-cover w-full h-full">
                </div>
            </div>
            
            <!-- Arc Rule Lines -->
            <div class="flex flex-col items-center px-12 relative">
                <!-- Arc 1 (Top) -->
                <div class="w-full h-32 border-b-4 border-yellow-400 rounded-b-[100%] relative">
                </div>
                
                <!-- Arc 2 (Middle) -->
                <div class="w-4/5 h-32 border-b-4 border-yellow-400 rounded-b-[100%] relative -mt-16">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 bg-emerald-800 px-4 -mt-2">
                        <span class="text-yellow-400 font-bold text-lg" contenteditable="true">Hello I'm Ezekiel Kang</span>
                    </div>
                </div>
                
                <!-- Arc 3 (Bottom) -->
                <div class="w-3/5 h-32 border-b-4 border-yellow-400 rounded-b-[100%] relative -mt-16">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 bg-emerald-800 px-4 -mt-2">
                        <span class="text-yellow-400 font-bold text-lg" contenteditable="true">Explore my Projects!</span>
                    </div>
                </div>
            </div>
            
            <!-- Player Section -->
            <div class="flex justify-around px-12 mt-auto mb-12 relative">
                <div class="flex items-center justify-center w-24 h-24 font-bold text-white transition-all duration-300 bg-black bg-opacity-20 border-2 border-yellow-400 rounded-full cursor-pointer hover:bg-opacity-40 hover:scale-105" id="project-1">
                    PROJECT 1
                </div>
                <div class="flex items-center justify-center w-24 h-24 font-bold text-white transition-all duration-300 bg-black bg-opacity-20 border-2 border-yellow-400 rounded-full cursor-pointer hover:bg-opacity-40 hover:scale-105" id="project-2">
                    PROJECT 2
                </div>
                <div class="flex items-center justify-center w-24 h-24 font-bold text-white transition-all duration-300 bg-black bg-opacity-20 border-2 border-yellow-400 rounded-full cursor-pointer hover:bg-opacity-40 hover:scale-105" id="project-3">
                    PROJECT 3
                </div>
                <div class="flex items-center justify-center w-24 h-24 font-bold text-white transition-all duration-300 bg-black bg-opacity-20 border-2 border-yellow-400 rounded-full cursor-pointer hover:bg-opacity-40 hover:scale-105" id="project-4">
                    PROJECT 4
                </div>
                <div class="flex items-center justify-center w-24 h-24 font-bold text-white transition-all duration-300 bg-black bg-opacity-20 border-2 border-yellow-400 rounded-full cursor-pointer hover:bg-opacity-40 hover:scale-105" id="project-5">
                    PROJECT 5
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Projects Section -->
    <section id="projects" class="p-10 text-center">
        <h2 class="text-3xl font-bold mb-6">Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Example Project Cards -->
            <button onclick="Livewire.emit('openModal', 'projects.modals.project1-modal')" class="bg-green-700 p-4 rounded-lg">
                Project 1
            </button>
            <button onclick="Livewire.emit('openModal', 'projects.modals.project2-modal')" class="bg-green-700 p-4 rounded-lg">
                Project 2
            </button>
            <button onclick="Livewire.emit('openModal', 'projects.modals.project3-modal')" class="bg-green-700 p-4 rounded-lg">
                Project 3
            </button>
        </div>
    </section>

    <!-- About Me Section -->
    <section id="about" class="p-10 bg-green-800 text-center">
        <h2 class="text-3xl font-bold mb-4">About Me</h2>
        <p class="max-w-3xl mx-auto">I'm a full-stack developer with experience in Laravel, Livewire, and AWS. I love building scalable applications and experimenting with new technologies.</p>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="p-10 text-center">
        <h2 class="text-3xl font-bold mb-4">Contact</h2>
        <button onclick="copyEmail()" class="bg-yellow-500 text-black px-4 py-2 rounded-lg">
            Copy My Email
        </button>
    </section>

    <!-- Blackjack Game -->
    <section id="blackjack" class="p-10 text-center">
        <h2 class="text-3xl font-bold mb-4">Blackjack Game</h2>
        @include('livewire.games.blackjack') <!-- Load Blackjack game -->
    </section>

    <!-- Footer -->
    <footer class="p-6 text-center">
        <p>&copy; 2025 My Portfolio. All rights reserved.</p>
    </footer>

    @livewireScripts
    <script>
        function copyEmail() {
            const email = "your.email@example.com";
            navigator.clipboard.writeText(email).then(() => {
                alert("Email copied to clipboard!");
            });
        }
    </script>
</body>
</html>
