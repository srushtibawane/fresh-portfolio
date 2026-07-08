<!-- PROJECT SECTION -->
<section id="projects"
    class="bg-[#050816] text-white py-28 px-6 md:px-20 relative overflow-hidden">

    <!-- Glow Effects -->
    <div class="absolute top-0 left-0 w-80 h-80 bg-cyan-500/20 blur-[140px] rounded-full"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-blue-500/20 blur-[140px] rounded-full"></div>

    <div class="max-w-7xl mx-auto relative z-10">

        <!-- Heading -->
        <div class="text-center mb-20">

            <p class="text-cyan-400 uppercase tracking-[0.4em] mb-4">
                My Projects
            </p>

            <h2 class="text-5xl md:text-6xl font-bold leading-tight">
                Featured
                <span
                    class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                    Projects
                </span>
            </h2>

        </div>


<!-- Project Grid -->
        
        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">

            @foreach ($projects as $project)

            <!-- Project Card -->
            <div
                class="group relative overflow-hidden rounded-[35px]
                bg-white/5 border border-white/10 backdrop-blur-xl
                hover:border-cyan-400 transition-all duration-500
                hover:-translate-y-3
                hover:shadow-[0_0_35px_rgba(34,211,238,0.35)]">

                <!-- Glow Hover -->
                <div
                    class="absolute inset-0 bg-cyan-400/5 opacity-0
                    group-hover:opacity-100 transition duration-500">
                </div>

                <!-- Image -->
                <div class="overflow-hidden">

                    <img src="{{ asset($project['image']) }}"
                        alt="{{ $project['title'] }}"
                        class="w-full h-[260px] object-cover
                        group-hover:scale-110 transition duration-700">

                </div>

                <!-- Content -->
                <div class="p-6 relative z-10">

                    <!-- Technologies -->
                    <div class="flex gap-2 flex-wrap mb-4">

                        @foreach (($project['technologies'] ?? []) as $tech)

                        <span
                            class="px-3 py-1 text-xs rounded-full
                            bg-cyan-400/10 border border-cyan-400/20
                            text-cyan-300">

                            {{ $tech }}

                        </span>

                        @endforeach

                    </div>

                    <!-- Title -->
                    <h3 class="text-2xl font-bold mb-4">
                        {{ $project['title'] }}
                    </h3>

                    <!-- Description -->
                    <p class="text-gray-400 leading-7 mb-6 text-sm">

                        {{ $project['description'] }}

                    </p>

                    <!-- Buttons -->
                    <div class="flex gap-4">

                        <!-- Live Demo -->
                        <a href="{{ $project['live'] ?? '#' }}"
                            target="_blank"
                            class="flex-1 text-center
                            px-5 py-3 rounded-xl
                            bg-cyan-400 text-black font-semibold
                            hover:bg-cyan-300
                            transition duration-300">

                            Live Demo

                        </a>

                        <!-- GitHub -->
                        <a href="{{ $project['github'] ?? '#' }}"
                            target="_blank"
                            class="flex-1 text-center
                            px-5 py-3 rounded-xl
                            border border-cyan-400 text-cyan-400
                            hover:bg-cyan-400 hover:text-black
                            transition duration-300">

                            GitHub

                        </a>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>