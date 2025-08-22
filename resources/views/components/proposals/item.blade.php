@props([
    'proposal',
    'position'
])

<div class="flex items-center gap-x-3 border-b border-white/10 py-4">

    <div>
        <x-proposals.position :$position/>
    </div>

    <div class="flex-1">

        <div class="flex justify-between items-center">
            <p class="text-white text-sm font-semibold truncate" title="{{ $proposal->email }}">
                {{ $proposal->email }}
            </p>
            <button class="text-gray-500 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
            </button>
        </div>

        <div class="flex items-center gap-x-4 mt-1">
            <p class="text-[#8C8C9A] text-xs">
                Enviado {{ $proposal->created_at->diffForHumans() }}
            </p>
            <span class="flex items-center gap-x-1.5 bg-gray-500/20 text-gray-300 text-xs font-medium rounded-full px-2 py-0.5">
                <x-ui.icons.clock class="h-3 w-3"/>
                <span>{{ str_pad($proposal->time, 2, "0", STR_PAD_LEFT) }} HORAS</span>
            </span>
        </div>

    </div>
</div>
