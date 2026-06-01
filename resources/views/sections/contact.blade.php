<!-- CONTACT SECTION -->
<section id="contact" class="bg-[#050816] text-white py-28 px-6 md:px-20 relative overflow-hidden">

    <!-- Glow -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-cyan-500/20 blur-[180px] rounded-full"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/20 blur-[180px] rounded-full"></div>

    <div class="max-w-7xl mx-auto relative z-10">

        <!-- Heading -->
        <div class="text-center mb-20">

            <p class="text-cyan-400 uppercase tracking-[0.4em] mb-5">
                Contact Me
            </p>

            <h2 class="text-5xl md:text-6xl font-bold">
                Let’s Work Together
            </h2>

        </div>

        <!-- Layout -->
        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <!-- Left -->
            <div>

                <h3 class="text-4xl font-bold leading-tight mb-8">
                    Have a project idea or want to collaborate?
                </h3>

                <p class="text-gray-400 leading-9 text-lg mb-12">
                    I’m always open to discussing new opportunities, creative ideas, and modern web development projects.
                </p>

                <!-- Contact Info -->
                <div class="space-y-6">

                    <!-- Email -->
                    <div class="flex items-center gap-5 bg-white/5 border border-white/10 rounded-2xl p-5 backdrop-blur-xl hover:border-cyan-400 transition duration-300">

                        <div class="w-14 h-14 rounded-2xl bg-cyan-400/10 flex items-center justify-center text-cyan-400 text-2xl">
                            📧
                        </div>

                        <div>
                            <p class="text-gray-400 text-sm">
                                Email
                            </p>

                            <a href="mailto:srushtibawane349@gmail.com" class="text-lg font-semibold">
                                srushtibawane349@gmail.com
                            </a>
                        </div>

                    </div>

                    <!-- Phone -->
                    <div class="flex items-center gap-5 bg-white/5 border border-white/10 rounded-2xl p-5 backdrop-blur-xl hover:border-cyan-400 transition duration-300">

                        <div class="w-14 h-14 rounded-2xl bg-cyan-400/10 flex items-center justify-center text-cyan-400 text-2xl">
                            📞
                        </div>

                        <div>
                            <p class="text-gray-400 text-sm">
                                Phone
                            </p>

                            <a href="tel:+918698224026" class="text-lg font-semibold">
                                +91 8698224026
                            </a>
                        </div>

                    </div>

                    <!-- Location -->
                    <div class="flex items-center gap-5 bg-white/5 border border-white/10 rounded-2xl p-5 backdrop-blur-xl hover:border-cyan-400 transition duration-300">

                        <div class="w-14 h-14 rounded-2xl bg-cyan-400/10 flex items-center justify-center text-cyan-400 text-2xl">
                            📍
                        </div>

                        <div>
                            <p class="text-gray-400 text-sm">
                                Location
                            </p>

                            <h4 class="text-lg font-semibold">
                                Nagpur, India
                            </h4>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Right Form -->
            <div class="bg-white/5 border border-white/10 rounded-[35px] p-8 md:p-10 backdrop-blur-2xl hover:border-cyan-400 transition duration-500">
                
                
               <form action="https://api.web3forms.com/submit" method="POST" class="space-y-6">

                 <!-- Web3Forms Key -->
                <input type="hidden" 
                    name="access_key" 
                    value="894ce71b-08bc-4851-9236-65ed1cb1b84e">
                    
                <input type="checkbox" 
                    name="botcheck" 
                    class="hidden" 
                    style="display: none;">

                <!-- Optional -->
                <input type="hidden" 
                    name="subject" 
                    value="New Portfolio Contact Message">

                <input type="hidden" 
                    name="redirect" 
                    value="https://your-vercel-domain.vercel.app/">

                <!-- Name -->
                <div>

                    <label class="text-gray-400 mb-3 block">
                        Full Name
                    </label>

                    <input type="text" 
                        name="name"
                        required
                        placeholder="Enter your name"
                        class="w-full bg-[#0f172a] border border-white/10 rounded-2xl px-5 py-4 focus:border-cyan-400 focus:outline-none transition duration-300">

                 </div>

                <!-- Email -->
                <div>

                        <label class="text-gray-400 mb-3 block">
                            Email Address
                        </label>

                        <input type="email" 
                            name="email"
                            required
                            placeholder="Enter your email"
                            class="w-full bg-[#0f172a] border border-white/10 rounded-2xl px-5 py-4 focus:border-cyan-400 focus:outline-none transition duration-300">

                    </div>

                    <!-- Message -->
                    <div>

                        <label class="text-gray-400 mb-3 block">
                            Message
                        </label>

                        <textarea rows="6" 
                                name="message"
                                required
                                placeholder="Write your message..."
                                class="w-full bg-[#0f172a] border border-white/10 rounded-2xl px-5 py-4 focus:border-cyan-400 focus:outline-none transition duration-300 resize-none"></textarea>

                    </div>

                    <!-- Button -->
                    <button type="submit"
                        class="w-full py-4 rounded-2xl bg-cyan-400 text-black font-semibold hover:scale-[1.02] transition duration-300 shadow-[0_0_40px_rgba(34,211,238,0.3)]">

                        Send Message

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>