<nav
    class="border-[#1E1E2C] border-2 w-full py-[18px] relative bg-[#10101A]">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <a href="{{route('project.index')}}" class="text-white font-bold items-center flex gap-2">
            <x-ui.logo class="w-10"/>
            <span class="text-xl">FreelanceHours</span>
        </a>

        <ul class="hidden md:flex text-[#C3C3D1] items-center gap-2 text-[16px] font-medium">
            <li>
                <a href="{{route('project.index')}}"
                   class="py-2 px-4 rounded-lg hover:bg-[#2a2a3a] hover:text-white transition-colors duration-300">
                    Procurar um projeto
                </a>
            </li>
            <li>
                <a href="{{ route('how-it-works') }}"
                   class="py-2 px-4 rounded-lg hover:bg-[#2a2a3a] hover:text-white transition-colors duration-300">
                    Como funciona?
                </a>
            </li>
        </ul>
    </div>
</nav>
