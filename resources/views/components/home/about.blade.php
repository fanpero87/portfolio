<!-- ====== About Section Start -->
<section id="about" class="overflow-hidden pt-20 pb-12 dark:bg-slate-800 lg:pt-[120px] lg:pb-[90px]">
    <div class="container">
        <div class="flex flex-wrap items-center justify-between -mx-4">
            <div class="w-full px-4 lg:w-6/12">
                <div class="flex items-center -mx-3 sm:-mx-4">
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="py-3 sm:py-4">
                            <img src="{{ url('/img/zelda.jpg') }}" alt="" class="w-full rounded-2xl" />
                        </div>
                        <div class="py-3 sm:py-4">
                            <img src="{{ url('/img/images.jpg') }}" alt="" class="w-full rounded-2xl" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="relative z-10 my-4">
                            <img src="{{ url('/img/download.jpg') }}" alt="" class="w-full rounded-2xl" />
                            <x-about-dots></x-about-dots>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                <div class="mt-10 lg:mt-0">
                    <span class="block mb-2 text-lg font-semibold text-primary">
                        <blockquote class="px-3 py-2 text-sm italic text-gray-500 border-l-4 border-amber-500">
                            "The minners of today is the house of tomorrow"
                        </blockquote>
                    </span>
                    <h2 class="mb-8 text-3xl font-bold dark:text-gray-200 sm:text-4xl">
                        About Me
                    </h2>
                    <p class="mb-8 text-base dark:text-gray-400">
                        I have been working as a DevOpe and Software Developer for 1+ years. <br />
                        <span class="font-bold text-amber-500">Laravel</span> and the <span
                            class="font-bold text-amber-500">TALL Stack</span> are the tools I'm more comfortable with.
                        I also love Docker, Kubernetes and Automation tools like Ansible just to name a few.
                        Working as DevOps System Administration has been awesome and I'm learning every day. <br />
                    </p>

                    <x-button-link href="https://youtube.com/fanpero87" variant="red" target="_blank">
                        View Youtube my channel
                    </x-button-link>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== About Section End -->
