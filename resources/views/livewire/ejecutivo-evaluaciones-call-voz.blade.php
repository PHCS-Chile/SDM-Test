{{--
Plantilla: Ejecutivo-Evaluaciones Call Voz
Versión 3
--}}
<div>

    <script src="{{ asset('js/clipboard.js') }}" type="text/javascript"></script>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">


        <p class="font-bold p-4 bg-gray-200 text-gray-700">{{$asignacionfinal->agente->name}}</p>



        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ID Evaluación
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <p>Estado Evaluación</p>
                <div class="col-span-6 sm:col-span-3">

                    <select id="filtroEstado" name="filtroEstado" autocomplete="" wire:model="filtroEstado" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="0">Todos</option>
                        @foreach($estados as $estado)
                            <option value="{{$estado->id}}">{{$estado->name}}</option>
                        @endforeach
                    </select>
                </div>
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <p>Estado Grabación</p>
                <div class="col-span-6 sm:col-span-3">

                    <select id="filtroEstadoGrabacion" name="filtroEstadoGrabacion" autocomplete="" wire:model="filtroEstadoGrabacion" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="0">Todos</option>
                        @foreach($grabacionestados as $estado)
                            <option value="{{$estado->id}}">{{$estado->name}}</option>
                        @endforeach
                    </select>
                </div>
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-xs-sm focus:outline-none" type="search" name="search" placeholder="Fecha Grabación" wire:model="filtroFecha">
                </div>
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-xs-sm focus:outline-none" type="search" name="search" placeholder="Móvil" wire:model="searchMovil">
                </div>
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-xs-sm focus:outline-none" type="search" name="search" placeholder="ConnID" wire:model="filtroConnid">
                </div>
            </th>
            <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                VER
            </th>
            <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                GRABACIÓN
            </th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">

        @foreach($evaluaciones as $evaluacion)

            <tr class="
            @foreach($evaluacionescompletas as $evaluacioncompleta)
                @if($evaluacioncompleta->rut_ejecutivo == $evaluacion->rut_ejecutivo)
                    bg-yellow-50
                @if($filtroNoRecorridos == 1)
                    hidden
                @endif
            @endif
            @endforeach
                ">
                <td class="px-6 py-1 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                      {{$evaluacion->id}}
                    </span>
                </td>
                <td class="px-6 py-1 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ ( $evaluacion->estado->id == 2) ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                      {{$evaluacion->estado->name}}
                    </span>

                </td>
                <td class="px-6 py-1 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ ( $evaluacion->estado_conversacion == 8) ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                      {{$grabacionestados->firstWhere('id', $evaluacion->estado_conversacion)->name}}
                    </span>

                </td>
                <td class="px-6 py-1 whitespace-nowrap">

                    <input id="ctc_fecha_{{ $evaluacion->id }}" value="{{$evaluacion->fecha_grabacion}}" class="sr-only">
                    <button class="ctc mt-2 flex items-center text-sm text-gray-500 bg-gray-100 hover:bg-gray-200 rounded-xl p-1 shadow-md transition-all focus: border-transparent" data-clipboard-target="#ctc_fecha_{{ $evaluacion->id }}" onclick="CopyToClipboard('ctc_fecha_{{ $evaluacion->id }}')">
                        <!-- Heroicon name: currency-dollar -->
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentC   olor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                        </svg>
                         <span id="ctc_fecha_{{ $evaluacion->id }}" class="text-gray-500">{{$evaluacion->fecha_grabacion}}</span>
                    </button>

                    <div id="ctc_fecha_{{ $evaluacion->id }}_alert" class="transition duration-350 ease-in-out hidden shadow-md rounded-md flex fixed items-center bg-green-500 text-white text-sm px-3 py-3" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                        <p>Fecha copiada al portapapeles.</p>
                    </div>
                </td>
                <td class="px-6 py-1 whitespace-nowrap">
                    <input id="ctc_movil_{{ $evaluacion->id }}" value="{{$evaluacion->movil}}" class="sr-only">
                    <button class="ctc mt-2 flex items-center text-sm text-gray-500 bg-gray-100 hover:bg-gray-200 rounded-xl p-1 shadow-md transition-all focus: border-transparent" data-clipboard-target="#ctc_movil_{{ $evaluacion->id }}" onclick="CopyToClipboard('ctc_movil_{{ $evaluacion->id }}')">
                        <!-- Heroicon name: currency-dollar -->
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        Móvil:&nbsp; <span id="ctc_movil_{{ $evaluacion->id }}" class="text-gray-500">{{$evaluacion->movil}}</span>
                    </button>
                    <div id="ctc_movil_{{ $evaluacion->id }}_alert" class="transition duration-350 ease-in-out hidden shadow-md rounded-md flex fixed items-center bg-green-500 text-white text-sm px-3 py-3" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                        <p>Móvil copiado al portapapeles.</p>
                    </div>
                </td>

                <td class="px-6 py-1 whitespace-nowrap">
                    <input id="ctc_connid_{{ $evaluacion->id }}" value="{{$evaluacion->connid}}" class="sr-only">
                    <button class="ctc mt-2 flex items-center text-sm text-gray-500 bg-gray-100 hover:bg-gray-200 rounded-xl p-1 shadow-md transition-all focus: border-transparent" data-clipboard-target="#ctc_connid_{{ $evaluacion->id }}" onclick="CopyToClipboard('ctc_connid_{{ $evaluacion->id }}')">
                        <!-- Heroicon name: currency-dollar -->
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm2 2V5h1v1H5zM3 13a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1v-3zm2 2v-1h1v1H5zM13 3a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V4a1 1 0 00-1-1h-3zm1 2v1h1V5h-1z" clip-rule="evenodd" />
                            <path d="M11 4a1 1 0 10-2 0v1a1 1 0 002 0V4zM10 7a1 1 0 011 1v1h2a1 1 0 110 2h-3a1 1 0 01-1-1V8a1 1 0 011-1zM16 9a1 1 0 100 2 1 1 0 000-2zM9 13a1 1 0 011-1h1a1 1 0 110 2v2a1 1 0 11-2 0v-3zM7 11a1 1 0 100-2H4a1 1 0 100 2h3zM17 13a1 1 0 01-1 1h-2a1 1 0 110-2h2a1 1 0 011 1zM16 17a1 1 0 100-2h-3a1 1 0 100 2h3z" />
                        </svg>
                        ConnID:&nbsp;<span id="ctc_connid_{{ $evaluacion->id }}" class="text-gray-500">{{Str::limit($evaluacion->connid,30)}}</span>
                    </button>

                    <div id="ctc_connid_{{ $evaluacion->id }}_alert" class="transition duration-350 ease-in-out hidden shadow-md rounded-md flex fixed items-center bg-green-500 text-white text-sm px-3 py-3" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                        <p>ConnID copiado al portapapeles.</p>
                    </div>
                </td>
                <td class="px-6 py-1 whitespace-nowrap text-right text-sm font-medium">
                    <a class="inline-flex items-center h-8 px-2 m-2 text-sm text-indigo-100 transition-colors duration-150 bg-green-700 rounded focus:shadow-outline hover:bg-green-900" href="{{route('evaluacions.index', ['evaluacionid'=>$evaluacion->id])}}" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </a>
                </td>
                <td class="px-6 py-1 whitespace-nowrap text-right text-sm font-medium inline-flex">

                    <form method="post" action="{{ route('evaluacions.grabacion_no_evaluable', [$evaluacion->id]) }}" onsubmit="return confirm('Está a punto de marcar la grabación como NO EVALUABLE. Está de acuerdo?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="hover:opacity-100 opacity-70 inline-flex items-center h-8 px-2 m-0.5 text-sm text-indigo-100 transition-colors duration-150 bg-red-800 rounded-md focus:shadow-outline disabled:opacity-20" {{ $evaluacion->estado_conversacion == 10 ? 'disabled' : '' }}>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                            </svg>
                        </button>
                    </form>
                    @if($evaluacion->estado_conversacion == 7 || $evaluacion->estado_conversacion == 9 || $evaluacion->estado_conversacion == 10)
                        <form method="post" action="{{ route('evaluacions.sin_grabacion', [$evaluacion->id]) }}" onsubmit="return confirm('Está a punto de marcar la evaluación como SIN GRABACIÓN. Está de acuerdo?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="hover:opacity-100 opacity-70 inline-flex items-center h-8 px-2 m-0.5 text-sm text-indigo-100 transition-colors duration-150 bg-red-800 rounded-md focus:shadow-outline disabled:opacity-20" {{ $evaluacion->estado_conversacion == 9 ? 'disabled' : '' }}>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </form>
                    @endif
                </td>

            </tr>

        @endforeach

        <!-- More items... -->
        </tbody>
    </table>
    <script>
        function esconderAlerta(containerid) {
            document.getElementById(containerid + "_alert").style.display = "none";
        }

        function CopyToClipboard(containerid) {
            document.getElementById(containerid + "_alert").style.display = "flex";
            setTimeout(function() {
                esconderAlerta(containerid);
            }, 1000);
        }
        new ClipboardJS('.ctc');
    </script>
</div>


