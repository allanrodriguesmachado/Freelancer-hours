<div class="min-h-screen p-4 sm:p-6 lg:p-8">
    <div class="max-w-7xl mx-auto">

        <h1 class="text-3xl font-bold text-slate-100 mb-8">Projetos Disponíveis</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

            @forelse($this->projects as $project)
                <div class="bg-slate-900 border border-none rounded-lg shadow-sm flex flex-col transition-all duration-300 ">

                    <div class="p-6 border-b border-slate-400">
                        <div class="flex justify-between items-start gap-4">
                            <div>
                                <h2 class="text-lg font-bold text-slate-100 leading-tight">
                                    <a href="{{ route('project.show', $project->id) }}" class="hover:text-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded">
                                        {{ $project->title }}
                                    </a>
                                </h2>
                                <p class="text-sm text-slate-400 mt-1">
                                    Publicado {{ $project->created_at->diffForHumans() }}
                                </p>
                            </div>

                            @php
                                $statusSlug = Str::slug($project->status->label());
                                $statusClasses = [
                                    'aceitando-propostas' => 'bg-green-950 text-green-300 ring-1 ring-inset ring-green-500/20',
                                    'fechado' => 'bg-red-950 text-red-300 ring-1 ring-inset ring-red-500/20',
                                    'em-andamento' => 'bg-blue-950 text-blue-300 ring-1 ring-inset ring-blue-500/20',
                                ][$statusSlug] ?? 'bg-slate-700 text-slate-300 ring-1 ring-inset ring-slate-500/20';
                            @endphp
                            <span class="shrink-0 px-3 py-1 text-xs font-semibold rounded-full {{ $statusClasses }}">
                                {{ $project->status->label() }}
                            </span>
                        </div>
                    </div>

                    <div class="p-6 space-y-4">
                        <div>
                            <p class="text-sm text-slate-300 line-clamp-3">
                                {{ strip_tags($project->description) }}
                            </p>
                        </div>

                        <div>
                            <h3 class="text-xs font-bold uppercase text-slate-500 mb-2">Tecnologias</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach($project->tack_stack as $tech)
                                    <span class="bg-slate-700 text-slate-200 text-xs font-medium px-2.5 py-1 rounded-full">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="mt-auto p-6 bg-slate-800/50 rounded-b-lg border-t border-slate-700">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ $project->author->avatar }}" alt="{{ $project->author->name }}">
                                <div>
                                    <p class="text-sm font-semibold text-slate-100">{{ $project->author->name }}</p>
                                    <div class="flex items-center">
                                        @for ($i = 0; $i < 5; $i++)
                                            <svg class="h-4 w-4 {{ $i < $project->author->stars ? 'text-yellow-400' : 'text-slate-600' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.38 2.454a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.197-1.539-1.118l1.287-3.97a1 1 0 00-.364-1.118L2.04 9.397c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.97z"/></svg>
                                        @endfor
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('project.show', $project->id) }}" class="inline-block bg-blue-600 text-white font-semibold text-sm px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Ver Detalhes
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-16">
                    <p class="text-slate-400">Nenhum projeto encontrado.</p>
                </div>
            @endforelse

        </div>
    </div>
</div>
