<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
</head>
<body class="bg-black text-white">
     <nav class="bg-black shadow-2xl rounded-xl px-12 py-6 w-[85%] mx-auto">
  
            <div class="flex items-center justify-between">

                <!-- Logo -->
                <div>
                    <img src="{{ asset('images/logo1.png') }}" alt="Logo" class="h-10 w-auto">
                    <p class="text-white text-xs tracking-wide">
                        Freelancer
                    </p>
                </div>

                <!-- Nav Links -->
                <ul class="hidden md:flex items-center gap-10 text-white font-medium">
                <li>
                    <a href="#home" class="text-cyan-400 hover:text-cyan-400 transition">
                    Home
                    </a>
                </li>

                <li>
                    <a href="#about" class="hover:text-cyan-400 transition">
                    About
                    </a>
                </li>

                <li>
                    <a href="#skills" class="hover:text-cyan-400 transition">
                    Skills
                    </a>
                </li>

                <li>
                    <a href="#projects" class="hover:text-cyan-400 transition">
                    Projects
                    </a>
                </li>
                <li>
                    <a href="#resume" class="hover:text-cyan-400 transition">
                    Resume
                    </a>
                </li>

                <li>
                    <a href="#contact" class="hover:text-cyan-400 transition">
                    Contact
                    </a>
                </li>
                </ul>

                <!-- Button -->
               
                <a href="mailto:srushtihajare93@gmail.com" target="_blank" class="border-2 border-cyan-400 text-white px-7 py-3 rounded-lg hover:bg-cyan-400 hover:text-black transition duration-300 hidden md:flex">
                         Hire Me
                </a>

                <!-- Mobile Toggle Button -->
                <button id="menu-btn"
                        class="md:hidden text-white focus:outline-none">

                    <!-- Hamburger Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-8 w-8"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>

                </button>

            </div>

             <!-- Mobile Menu -->
            <div id="mobile-menu"
                class="hidden md:hidden mt-5 bg-black border border-gray-800 rounded-xl p-5">

                <ul class="flex flex-col gap-5 text-sm font-medium">

                    <li>
                        <a href="#home" class="hover:text-cyan-400 transition">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#about" class="hover:text-cyan-400 transition">
                            About
                        </a>
                    </li>

                    <li>
                        <a href="#skills" class="hover:text-cyan-400 transition">
                            Skills
                        </a>
                    </li>

                    <li>
                        <a href="#projects" class="hover:text-cyan-400 transition">
                            Projects
                        </a>
                    </li>

                    <li>
                        <a href="#resume" class="hover:text-cyan-400 transition">
                            Resume
                        </a>
                    </li>

                    <li>
                        <a href="#contact" class="hover:text-cyan-400 transition">
                            Contact
                        </a>
                    </li>

                    <!-- Mobile Button -->
                    <li>
                        <a href="mailto:srushtihajare93@gmail.com"
                        class="inline-block border border-cyan-400 text-cyan-400 px-5 py-2 rounded-xl hover:bg-cyan-400 hover:text-black transition">

                            Hire Me
                        </a>
                    </li>

                </ul>

            </div>

        </nav>

        <!-- Toggle Script -->
        <script>
            const menuBtn = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        </script>
            @yield('content')
    

</body>