{{--
Plantilla: Pauta Call Voz
Versión 6
--}}
<div>

    {{--
Plantilla: Header resumen para Call Voz
Versión 8
--}}
    @if(Auth::user()->perfil == 1 || Auth::user()->perfil == 2)
        <data></data>
        <script src="{{ asset('js/clipboard.js') }}" type="text/javascript"></script>
        <div class="p-6">
            <div class=" p-5 bg-white  shadow-xl sm:rounded-lg ">
                <div class="md:grid md:grid-cols-1 md:gap-6">

                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="lg:flex lg:items-center lg:justify-between">
                        <div class="flex-1 min-w-0">
                            <div class="flex">
                                <div class="w-1/4">
                                    <div class="flex flex-col">

                                        <div class="flex-1 w-4/4 bg-red sm:rounded-lg">
                                            <h2 class="text-xl font-bold leading-7 text-gray-900 sm:text-xl sm:truncate">
                                                {{ \App\Models\Evaluacion::servicioHabilidad($evaluacion_id, " ", "Monitoreo") }}
                                            </h2>
                                        </div>
                                        <div class="mt-1 flex items-center text-xs text-gray-500">
                                            <!-- Heroicon name: briefcase -->
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd" />
                                            </svg>
                                            ID Evaluación: {{ $evaluacion['id'] }}
                                        </div>
                                        <div class="hidden mt-1 flex items-center text-xs text-gray-500">
                                            <!-- Heroicon name: briefcase -->
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd" />
                                            </svg>
                                            Centro/Habilidad: {{ \App\Models\Evaluacion::servicioHabilidad($evaluacion_id, " - ") }}
                                        </div>
                                        <div class="block">
                                            <input id="ctc_movil" value="{{ $evaluacion['movil'] }}" class="sr-only">
                                            <button class="ctc mt-1 flex items-center text-xs text-gray-500 bg-gray-100 hover:bg-gray-200 rounded-xl p-1 shadow-md transition-all focus: border-transparent" data-clipboard-target="#ctc_movil" onclick="CopyToClipboard('ctc_movil')">
                                                <!-- Heroicon name: location-marker -->
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                </svg>
                                                Movil:&nbsp; <span id="ctc_movil" class="text-gray-500">{{ $evaluacion['movil'] }}</span>
                                            </button>
                                            <div id="ctc_movil_alert" class="transition duration-350 ease-in-out hidden shadow-md rounded-md flex fixed items-center bg-green-500 text-white text-xs px-3 py-3" role="alert">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                                </svg>
                                                <p>Teléfono copiado al portapapeles.</p>
                                            </div>
                                        </div>
                                        <div class="block">
                                            <input id="ctc_connid" value="{{ $evaluacion['connid'] }}" class="sr-only">
                                            <button class="ctc mt-1 flex items-center text-xs text-gray-500 bg-gray-100 hover:bg-gray-200 rounded-xl p-1 shadow-md transition-all focus: border-transparent" data-clipboard-target="#ctc_connid" onclick="CopyToClipboard('ctc_connid')">
                                                <!-- Heroicon name: currency-dollar -->
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm2 2V5h1v1H5zM3 13a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1v-3zm2 2v-1h1v1H5zM13 3a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V4a1 1 0 00-1-1h-3zm1 2v1h1V5h-1z" clip-rule="evenodd" />
                                                    <path d="M11 4a1 1 0 10-2 0v1a1 1 0 002 0V4zM10 7a1 1 0 011 1v1h2a1 1 0 110 2h-3a1 1 0 01-1-1V8a1 1 0 011-1zM16 9a1 1 0 100 2 1 1 0 000-2zM9 13a1 1 0 011-1h1a1 1 0 110 2v2a1 1 0 11-2 0v-3zM7 11a1 1 0 100-2H4a1 1 0 100 2h3zM17 13a1 1 0 01-1 1h-2a1 1 0 110-2h2a1 1 0 011 1zM16 17a1 1 0 100-2h-3a1 1 0 100 2h3z" />
                                                </svg>
                                                ConnID:&nbsp; <span id="ctc_connid" class="text-gray-500">{{ Str::limit($evaluacion['connid'],30) }}</span>
                                            </button>
                                            <div id="ctc_connid_alert" class="transition duration-350 ease-in-out hidden shadow-md rounded-md flex fixed items-center bg-green-500 text-white text-xs px-3 py-3" role="alert">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                                </svg>
                                                <p>CONNID copiado al portapapeles.</p>
                                            </div>
                                        </div>
                                        <div class="mt-1 flex items-center text-xs text-gray-500">
                                            <!-- Heroicon name: calendar -->
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                            </svg>
                                            Fecha Grabación: {{ $evaluacion['fecha_grabacion'] }}
                                        </div>
                                        @if(Auth::user()->perfil == 2)
                                            <div class="mt-1 flex items-center text-xs text-gray-500">
                                                <!-- Heroicon name: calendar -->
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                                <p class="text-gray-500 font-bold">Estado de Evaluación: </p>&nbsp <p> {{ $evaluacion['estado_id'] }}</p>&nbsp&nbsp
                                            </div>

                                        @endif
                                        @if(Auth::user()->perfil  == 1)
                                            <div class="flex items-center text-xs text-gray-500">
                                                <!-- Heroicon name: calendar -->
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                                <form action="{{route('evaluacions.guardaeval', $evaluacion['id'])}}" method="POST">
                                                    @csrf
                                                    <div class="flex flex-row inline-flex items-center border-1">
                                                        <h2 class="font-bold text-sm mt-2">Estado:</h2>
                                                        {{--                                                <div><p class="text-gray-600 font-bold">Cambia de estado: &nbsp&nbsp</p></div>--}}
                                                        <div class="text-xs text-gray-500">
                                                            <select id="cambioestado" wire:model="evaluacion.estado_id" name="cambioestado" class="mt-1 block w-full py-1 px-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-xs">
                                                                @foreach($estados_evaluacion as $estado)
                                                                    <option value="{{ $estado->id }}">{{ $estado->name }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                        &nbsp&nbsp
                                                        <div>
                                                            <button type="submit" name="form3" class="inline-flex items-center px-2 py-1 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="w-1/2 px-5 py-1">
                                    <div class="p-3 border border-solid border-gray-200 rounded-md bg-gray-50 shadow-md">
                                        <div class="flex">
                                            <div class="w-2/4">
                                                <div class="flex flex-col">
                                                    <h2 class="font-bold text-base">Audio de la conversacion</h2>

                                                    @if(!isset($grabaciones) || count($grabaciones->where('url', NULL)) > 0)
                                                        <audio src="" controls id="reproductor">
                                                            {{--                                        <source src="{{ asset('storage/uploads/' . $grabacion_activa->nombre) }}" type="audio/mpeg">--}}
                                                            Your browser does not support the audio element.
                                                        </audio>
                                                    @else
                                                        <i class="text-gray-500">Sin grabación.</i>
                                                    @endif
                                                </div>
                                                <div class="flex flex-col mt-3">
                                                    <h3 class="font-bold text-sm">Link externo</h3>
                                                    @livewire('vinculos', ['evaluacionId' => $evaluacion['id']])
                                                </div>
                                            </div>

                                            <div class="w-2/4">
                                                <div class="flex flex-col">
                                                    @if(count($grabaciones->where('nombre', '<>', '')) > 0)
                                                        <h2 class="font-bold text-sm">Grabaciones:</h2>
                                                        <div class="">
                                                            <form class="flex space-x-2" action="{{ route('evaluacions.eliminar_grabacion', [$evaluacion['id']]) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres eliminar la grabación? ESTA ACCIÓN ES IRREVERSIBLE!');">
                                                                @method("DELETE")
                                                                @csrf

                                                                <select name="grabacionActiva" id="grabacionActiva" class="text-sm py-0 w-2/4 border border-gray-300 rounded-md shadow-sm focus:outline-none">
                                                                    @foreach($grabaciones->all() as $posicion => $grabacion)
                                                                        <option class="grabacion" value="{{ $posicion . "_" . $grabacion->id }}">Grabación {{ $posicion + 1 }}</option>
                                                                    @endforeach
                                                                </select>
                                                                <script src="{{ asset('js/scripts.js') }}"></script>
                                                                <script>
                                                                    grabaciones = [
                                                                            @foreach($grabaciones->all() as $grabacion)
                                                                        ["{{ asset('storage/uploads/' . $grabacion->nombre) }}"],
                                                                        @endforeach
                                                                    ];
                                                                    reproductor();
                                                                    function reproductor() {
                                                                        $('#reproductor')[0].src = grabaciones[0];
                                                                    }
                                                                    $('#grabacionActiva').change(function () {
                                                                        $('#reproductor')[0].src = grabaciones[$("#grabacionActiva").val().substring(0, $("#grabacionActiva").val().indexOf("_"))]
                                                                    });
                                                                </script>

                                                                <div class="w-2/4 text-right">

                                                                    <button class="items-center px-2 py-1.5 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-red-700 hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                                                        </svg>
                                                                    </button>


                                                                </div>
                                                            </form>

                                                        </div>
                                                    @endif


                                                    <h2 class="font-bold text-sm mt-2">Agregar nueva:</h2>
                                                    <div class="flex flex-row content-evenly">
                                                        <form  class="flex" action="{{ route('evaluacions.grabacion', [$evaluacion['id']]) }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="evaluacionid" value="{{ $evaluacion['id'] }}">
                                                            <input class="w-64 inline-flex text-sm py-1" type="file" name="grabacion" id="grabacion" accept=".mp3,.wav,.ogg,.m4a">
                                                            <button type="submit"  class="inline-flex items-center px-4 py-0 border border-transparent rounded-md shadow-sm text-xs text-white bg-green-700 hover:bg-green-500 focus:outline-none transition-colors duration-150 sm:text-xs font-medium">
                                                                Subir
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-1/4 text-right">

                                    <div class="flex flex-col">
                                        <div>
                                            @if(Auth::user()->perfil  == 1)
                                                <div class="inline-flex gap-1 items-center">
                                                    <div class="text-xs">Volver:</div>
                                                    <div class="w-px-150 pb-0.5">
                                                        <form action="{{ route('evaluacions.atras_desbloqueando', $evaluacion['id']) }}" method="GET">
                                                            <input type="hidden" name="url" value="{{ url()->previous() }}">
                                                            <input type="hidden" name="formulario" value="2">
                                                            <button type="submit" role="button" class="inline-flex items-center px-2 py-0.5 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                                Base Agente
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="w-px-150 pb-0.5">
                                                        <form action="{{ route('evaluacions.atras_desbloqueando', $evaluacion['id']) }}" method="GET">
                                                            <input type="hidden" name="url" value="{{ url()->previous() }}">
                                                            <input type="hidden" name="formulario" value="3">
                                                            <button type="submit" role="button" class="inline-flex items-center px-2 py-0.5 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                                Calidad
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="w-px-150 pb-0.5">
                                                        <form action="{{ route('evaluacions.atras_desbloqueando', $evaluacion['id']) }}" method="GET">
                                                            <input type="hidden" name="url" value="{{ url()->previous() }}">
                                                            <input type="hidden" name="formulario" value="4">
                                                            <button type="submit" role="button" class="inline-flex items-center px-2 py-0.5 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                                Reportes
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="w-px-150 pb-0.5">
                                                        <form action="{{ route('evaluacions.atras_desbloqueando', $evaluacion['id']) }}" method="GET">
                                                            <input type="hidden" name="url" value="{{ url()->previous() }}">
                                                            <input type="hidden" name="formulario" value="5">
                                                            <button type="submit" role="button" class="inline-flex items-center px-2 py-0.5 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                                Avances
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="w-px-150 p-0.5">
                                                    <form action="{{ route('evaluacions.atras_desbloqueando', $evaluacion['id']) }}" method="GET">
                                                        <input type="hidden" name="url" value="{{ url()->previous() }}">
                                                        <input type="hidden" name="formulario" value="2">
                                                        <button type="submit" role="button" class="inline-flex items-center px-2 py-1 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                                                            </svg>
                                                            Volver a Base del Agente
                                                        </button>
                                                    </form>
                                                </div>
                                            @endif

                                            <div class="flex flex-row space-x-2 w-80 mt-4 items-center text-center">
                                                <span class="bg-gray-300 h-px flex-row t-2 top-2"></span>
                                            </div>

                                            <div class="w-px-150 pb-0.5">
                                                <button modal-target="historial" class="modal-open inline-flex items-center px-2 py-1 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    Historial
                                                </button>
                                            </div>
                                            @if(Auth::user()->perfil  == 1)
                                                <div class="w-px-150 p-0.5">
                                                    <button modal-target="respuestas-centro" class="modal-open inline-flex items-center px-2 py-1 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                        Respuestas del centro
                                                    </button>
                                                </div>
                                            @endif
                                            <form action="{{route('evaluacions.guardaeval', $evaluacion['id'])}}" method="POST">
                                                @csrf
                                                @if(Auth::user()->perfil  == 1)
                                                    <div class="w-px-150 pb-0.5">
                                                        <button type="submit" name="descartarEval" class="inline-flex items-center px-2 py-1 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                                            <!-- Heroicon name: check -->

                                                            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                                            </svg>
                                                            Descartar Evaluación
                                                        </button>
                                                    </div>
                                                @endif
                                                @if(Auth::user()->perfil  == 2)
                                                    @if($evaluacion['estado_id'] > 1)
                                                        <div class="w-px-150 pb-0.5">
                                                            <button type="submit" name="enviarRevision" class="inline-flex items-center px-2 py-1 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                                                <!-- Heroicon name: check -->
                                                                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                </svg>
                                                                Enviar a Revisión
                                                            </button>
                                                        </div>
                                                    @endif
                                                @endif
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($evaluacion['user_completa'])
                                <div class="align-baseline text-left w-full -mb-4 text-gray-800 text-xs">Evaluada por <strong>{{ $evaluacion['user_completa'] }}</strong> el <strong>{{ date('d-m-Y H:i', strtotime($evaluacion['fecha_completa'])) }}</strong></div>
                            @endif
                            <div class="align-baseline text-right w-full -mb-4 text-gray-800 text-xs">Bloqueada para <strong>{{ App\Models\User::find($bloqueo->user_id)->name }}</strong> hasta las <strong>{{ $bloqueo->created_at->add(new DateInterval('PT' . \App\Models\Bloqueo::DURACION . 'M'))->format('H:i') }}</strong></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Modal -->
{{--        @include('evaluacions.voz.modal_historial', ['modal' => $modales[0]])--}}
        {{--        @include('evaluacions.voz.modal_centro', ['modal' => $modales[1], 'respuestas_ph' => $evaluacionfinal->respuestas])--}}


    <!-- Inicializacion de campos 'copy to clipboard' -->
        <script>
            new ClipboardJS('.ctc');
        </script>

    @endif

    <div class="flex space-x-4 pt-6 px-6">
        <div class="flex-1 w-1/4 py-8 px-6 bg-white shadow-xl sm:rounded-lg overflow-y-scroll h-screen">
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div>
                        <label for="comentario_interno" class="block text-sm font-medium text-gray-700">
                            Comentario Interno
                            <svg xmlns="http://www.w3.org/2000/svg" class="@if($respuestas[177]) opacity-100 @else opacity-0 @endif text-green-500 inline h-5 w-5 transition-all" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </label>
                        <div class="mt-1">
                            <textarea id="comentario_interno" name="comentario_interno" wire:model.lazy="respuestas.177" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-30 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí el comentario interno"></textarea>
                        </div>
                    </div>
                    <div>
                        <label for="descripcion_caso" class="block text-sm font-medium text-gray-700">
                            Descripción del Caso
                            <svg xmlns="http://www.w3.org/2000/svg" class="@if($respuestas[199]) opacity-100 @else opacity-0 @endif text-green-500 inline h-5 w-5 transition-all" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </label>
                        <div class="mt-1">
                            <textarea id="descripcion_caso" name="descripcion_caso" wire:model.lazy="respuestas.199" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-30 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí la descripción del caso"></textarea>
                        </div>
                    </div>
                    <div>
                        <label for="respuesta_ejecutivo" class="block text-sm font-medium text-gray-700">
                            Respuesta del Ejecutivo
                            <svg xmlns="http://www.w3.org/2000/svg" class="@if($respuestas[200]) opacity-100 @else opacity-0 @endif text-green-500 inline h-5 w-5 transition-all" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </label>
                        <div class="mt-1">
                            <textarea id="respuesta_ejecutivo" name="respuesta_ejecutivo" wire:model.lazy="respuestas.200" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-30 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí la Respuesta del Ejecutivo"></textarea>
                        </div>
                    </div>
                    <small class="text-red-600 font-bold">{{ $errors->first('respuesta_ejecutivo') }}</small>
                    <div>
                        <label for="retroalimentacion" class="block text-sm font-medium text-gray-700">
                            Retroalimentación
                            <svg xmlns="http://www.w3.org/2000/svg" class="@if($respuestas[176]) opacity-100 @else opacity-0 @endif text-green-500 inline h-5 w-5 transition-all" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </label>
                        <div class="mt-1">
                            <textarea id="retroalimentacion" name="retroalimentacion" wire:model.lazy="respuestas.176" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-48 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí la retroalimentación"></textarea>
                        </div>
                    </div>
                    <small class="text-red-600 font-bold">{{ $errors->first('retroalimentacion') }}</small>
                    <div></div>
                    <div>
                        <label for="comentario_calidad" class="block text-sm font-medium text-gray-700">
                            Comentario Calidad
                            <svg xmlns="http://www.w3.org/2000/svg" class="@if($evaluacion['comentario_calidad']) opacity-100 @else opacity-0 @endif text-green-500 inline h-5 w-5 transition-all" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </label>
                        <div class="mt-1">
                            <textarea id="comentario_calidad" name="comentario_calidad" wire:model.lazy="evaluacion.comentario_calidad" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-48 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí el comentario de calidad"></textarea>
                        </div>
                    </div>
                    <small class="text-red-600 font-bold">{{ $errors->first('comentario_calidad') }}</small>
                    <div></div>
                    <button wire:click="save" type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <!-- Heroicon name: check -->
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Guardar
                    </button>
                    @if(Auth::user()->perfil  == 1 && $marca_ici == 0)
                        <button type="submit"  wire:click="ici" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <!-- Heroicon name: check -->
                            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            Discrepancia
                        </button>
                    @endif

                    <div wire:loading>
                        Guardando...
                    </div>
                </div>
            </div>


            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                </svg>
                Fecha Grabación Adjunta: {{ $grabaciones->first() ? $grabacion->created_at : '-'}}
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                </svg>
                Fecha Evaluación: {{ $evaluacion['created_at'] ?? ""}}
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                </svg>
                Fecha Modificación: {{ $evaluacion['updated_at'] ?? "" }}
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                </svg>
                PENC: {{ $evaluacion['penc'] ?? "No calculado" }}
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                </svg>
                PEC Usuario: {{ $evaluacion['pecu'] ?? "No calculado" }}
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                </svg>
                PEC Negocio: {{ $evaluacion['pecn'] ?? "No calculado" }}
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                </svg>
                PEC Cumplimiento: {{ $evaluacion['pecc'] ?? "No calculado" }}
            </div>


            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                </svg>
                % de Discrepancia: {{ $evaluacion->ici ?? "No calculado" }}
            </div>
            {{--            <p class="text-gray-500 font-bold">% de Discrepancia: </p>&nbsp <p> {{$evaluacion->ici}}</p>--}}
        </div>

        <div class="w-3/4 p-6 bg-gray-50 overflow-hidden shadow-xl sm:rounded-lg overflow-y-scroll h-screen">
            <div class="mb-10">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="mt-5 md:mt-0 md:col-span-1 ">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <p class="font-bold text-xl">Gestión 1</p>

                                @include('componentes.formularios.pauta_checkbox', ['titulo' => 'Motivo del Llamado', 'atributo_id' => 179, 'opciones' => $escalas['motivo']['escalas']])

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tipogestion1" class="block text-sm font-medium text-gray-700">Tipo de Gestión</label>
                                    <select id="tipogestion1" name="tipogestion1" wire:model="respuestas.180" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        @foreach($escalas['gestiones']['escalas'] as $escala)
                                            <option value="{{ $escala->id }}">{{ $escala->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('tipogestion1') }}</small>
                                <div class="mt-4">
                                    <span class="text-gray-700 text-sm">Detección de necesidades/sondeo/analisis/revisión</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="deteccion1" wire:model="respuestas.183" value="Si">
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="deteccion1" wire:model="respuestas.183" value="No">
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('deteccion1') }}</small>
                                <div class="mt-4">
                                    <span class="text-gray-700 text-sm">Entrega de información correcta y completa</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="infocorrecta1" wire:model="respuestas.187" value="Si">
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="infocorrecta1" wire:model="respuestas.187" value="No">
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('infocorrecta1') }}</small>
                                <div class="mt-4">
                                    <span class="text-gray-700 text-sm">Gestiona según proced. en sistema</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="gestiona1" wire:model="respuestas.191" value="Si">
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="gestiona1" wire:model="respuestas.191" value="No">
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('gestiona1') }}</small>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="resolucion1" class="block text-sm font-medium text-gray-700">Ejecutivo Resuelve el problema de origen en línea</label>
                                    <select id="resolucion1" name="resolucion1" wire:model="respuestas.195" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        @foreach($escalas['resoluciones']['escalas'] as $escala)
                                            <option value="{{ $escala->id }}">{{ $escala->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('resolucion1') }}</small>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-1 ">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <p class="font-bold text-xl">Gestión 2</p>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tipogestion2" class="block text-sm font-medium text-gray-700">Tipo de Gestión</label>
                                    <select id="tipogestion2" name="tipogestion2" wire:model="respuestas.181" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        @foreach($escalas['gestiones']['escalas'] as $escala)
                                            <option value="{{ $escala->id }}">{{ $escala->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('tipogestion2') }}</small>
                                <div class="mt-4">
                                    <span class="text-gray-700 text-sm">Detección de necesidades/sondeo/analisis/revisión</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="deteccion2" wire:model="respuestas.184" value="Si">
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="deteccion2" wire:model="respuestas.184" value="No">
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('deteccion2') }}</small>
                                <div class="mt-4">
                                    <span class="text-gray-700 text-sm">Entrega de información correcta y completa</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="infocorrecta2" wire:model="respuestas.188" value="Si">
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="infocorrecta2" wire:model="respuestas.188" value="No">
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('infocorrecta2') }}</small>
                                <div class="mt-4">
                                    <span class="text-gray-700 text-sm">Gestiona según proced. en sistema</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="gestiona2" wire:model="respuestas.192" value="Si">
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="gestiona2" wire:model="respuestas.192" value="No">
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('gestiona2') }}</small>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="resolucion2" class="block text-sm font-medium text-gray-700">Ejecutivo Resuelve el problema de origen en línea</label>
                                    <select id="resolucion2" name="resolucion2" wire:model="respuestas.196" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        @foreach($escalas['resoluciones']['escalas'] as $escala)
                                            <option value="{{ $escala->id }}">{{ $escala->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('resolucion2') }}</small>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-1 ">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <p class="font-bold text-xl">Gestión 3</p>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tipogestion3" class="block text-sm font-medium text-gray-700">Tipo de Gestión</label>
                                    <select id="tipogestion3" name="tipogestion3" wire:model="respuestas.182" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        @foreach($escalas['gestiones']['escalas'] as $escala)
                                            <option value="{{ $escala->id }}">{{ $escala->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('tipogestion3') }}</small>
                                <div class="mt-2">
                                    <span class="text-gray-700 text-sm">Detección de necesidades/sondeo/analisis/revisión</span>
                                    <div class="mt-1 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="deteccion3" wire:model="respuestas.185" value="Si">
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="deteccion3" wire:model="respuestas.185" value="No">
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('deteccion3') }}</small>
                                <div class="mt-1">
                                    <span class="text-gray-700 text-sm">Entrega de información correcta y completa</span>
                                    <div class="mt-1 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="infocorrecta3" wire:model="respuestas.189" value="Si">
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="infocorrecta3" wire:model="respuestas.189" value="No">
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('infocorrecta3') }}</small>
                                <div class="mt-1">
                                    <span class="text-gray-700 text-sm">Gestiona según proced. en sistema</span>
                                    <div class="mt-1 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="gestiona3" wire:model="respuestas.193" value="Si">
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="gestiona3" wire:model="respuestas.193" value="No">
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('gestiona3') }}</small>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="resolucion3" class="block text-sm font-medium text-gray-700">Ejecutivo Resuelve el problema de origen en línea</label>
                                    <select id="resolucion3" name="resolucion3" wire:model="resolucion3" autocomplete="respuestas.197" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        @foreach($escalas['resoluciones']['escalas'] as $escala)
                                            <option value="{{ $escala->id }}">{{ $escala->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('resolucion3') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <form wire:submit.prevent="save">

                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-2 md:gap-6">
                            <div class="mt-5 md:mt-0 md:col-span-1 ">
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-green-50 space-y-6 sm:p-6">
                                        <p class="font-bold text-xl">Atributos PENC</p>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">1 - Protocolo de Saludo y Despedida - ({{ $respuestas[97] }})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="saludo2" name="saludo2" wire:model="respuestas.98" wire: type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="saludo2" class="font-medium text-gray-700">No hace Bienvenida</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="saludo3" name="saludo3" wire:model="respuestas.99" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="saludo3" class="font-medium text-gray-700">No se despide</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="saludo4" name="saludo4" wire:model="respuestas.100" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="saludo4" class="font-medium text-gray-700">No utiliza contexto</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">2 - Disposición para la atención - ({{ $respuestas[101] }})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="disposicion2" name="disposicion2" wire:model="respuestas.102" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="disposicion2" class="font-medium text-gray-700">Interrumpe</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="disposicion3" name="disposicion3" wire:model="respuestas.103" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="disposicion3" class="font-medium text-gray-700">No retiene información</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">3 - Cordialidad y reducción de conflicto - ({{ $respuestas[104] }})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="cordialidad2" name="cordialidad2" wire:model="respuestas.105" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="cordialidad2" class="font-medium text-gray-700">No muestra interés</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="cordialidad3" name="cordialidad3" wire:model="respuestas.106" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="cordialidad3" class="font-medium text-gray-700">No reduce conflicto</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="cordialidad4" name="cordialidad4" wire:model="respuestas.107" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="cordialidad4" class="font-medium text-gray-700">No manifiesta disposición</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="cordialidad5" name="cordialidad5" wire:model="respuestas.108" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="cordialidad5" class="font-medium text-gray-700">No pide disculpas</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">4 - Manejo de Silencios - ({{ $respuestas[109] }})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="manejosilencios2" name="manejosilencios2" wire:model="respuestas.110" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="manejosilencios2" class="font-medium text-gray-700">No informa Pausa/Hold</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="manejosilencios3" name="manejosilencios3" wire:model="respuestas.111" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="manejosilencios3" class="font-medium text-gray-700">No interactua</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="manejosilencios4" name="manejosilencios4" wire:model="respuestas.112" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="manejosilencios4" class="font-medium text-gray-700">No agradece espera</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">5 - Seguridad y Dominio en la conversación con el Cliente - ({{ $respuestas[113] }})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="seguridad2" name="seguridad2" wire:model="respuestas.114" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="seguridad2" class="font-medium text-gray-700">Inseguridad en conocimientos</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="seguridad3" name="seguridad3" wire:model="respuestas.115" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="seguridad3" class="font-medium text-gray-700">Mal manejo de la información</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="seguridad4" name="seguridad4" wire:model="respuestas.116" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="seguridad4" class="font-medium text-gray-700">Se contradice y autocorrige</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="seguridad5" name="seguridad5" wire:model="respuestas.117" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="seguridad5" class="font-medium text-gray-700">No informa el motivo de uso de datos personales</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">6 - Comunicación simple y empática - ({{ $respuestas[118] }})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="comunicacion2" name="comunicacion2" wire:model="respuestas.119" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="comunicacion2" class="font-medium text-gray-700">Trato cercano y cordial</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="comunicacion3" name="comunicacion3" wire:model="respuestas.120" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="comunicacion3" class="font-medium text-gray-700">Palabras coloquiales</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="comunicacion4" name="comunicacion4" wire:model="respuestas.121" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="comunicacion4" class="font-medium text-gray-700">Usa tecnicismos</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>



                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">7 - Educar al Cliente en Canales de Autotención - ({{ $respuestas[122] }})</legend>
                                            <div class="hidden mt-4">
                                                <span class="text-gray-700">Educar al Cliente Padre</span>
                                                <div class="mt-1 text-sm">
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" class="form-radio" name="educacliente1" wire:model="respuestas.122" value="Si">
                                                        <p class="ml-2">Si</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="educacliente1" wire:model="respuestas.122" value="No">
                                                        <p class="ml-2">No</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="educacliente1" wire:model="respuestas.122" value="No Aplica">
                                                        <p class="ml-2">No Aplica</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <small class="text-red-600 font-bold">{{ $errors->first('educacliente1') }}</small>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="educacliente2" name="educacliente2" wire:model="respuestas.123" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="educacliente2" class="font-medium text-gray-700">No menciona otros canales</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="educacliente3" name="educacliente3" wire:model="respuestas.124" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="educacliente3" class="font-medium text-yellow-500">No Aplica - Por posible molestia</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="educacliente4" name="educacliente4" wire:model="respuestas.125" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="educacliente4" class="font-medium text-yellow-500">No Aplica - Sin opciones</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>


                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">8 - Aseguramiento - ({{ $respuestas[126] }})</legend>
                                            <div class="hidden mt-4">
                                                <span class="text-gray-700">Aseguramiento Padre</span>
                                                <div class="mt-1 text-sm">
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" class="form-radio" name="aseguramiento1" wire:model="respuestas.126" value="Si">
                                                        <p class="ml-2">Si</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="aseguramiento1" wire:model="respuestas.126" value="No">
                                                        <p class="ml-2">No</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="aseguramiento1" wire:model="respuestas.126" value="No Aplica">
                                                        <p class="ml-2">No Aplica</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <small class="text-red-600 font-bold">{{ $errors->first('aseguramiento1') }}</small>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="aseguramiento2" name="aseguramiento2" wire:model="respuestas.127" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="aseguramiento2" class="font-medium text-gray-700">No valida información entregada</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="aseguramiento3" name="aseguramiento3" wire:model="respuestas.128" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="aseguramiento3" class="font-medium text-yellow-500">N/A por transfer/Callback</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="aseguramiento4" name="aseguramiento4" wire:model="respuestas.129" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="aseguramiento4" class="font-medium text-yellow-500">N/A canal incorrecto</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="aseguramiento5" name="aseguramiento5" wire:model="respuestas.130" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="aseguramiento5" class="font-medium text-yellow-500">N/A por posible molestia</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="aseguramiento6" name="aseguramiento6" wire:model="respuestas.131" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="aseguramiento6" class="font-medium text-yellow-500">N/A cliente asegura info</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">9 - Ofrecimiento Comercial - ({{ $respuestas[132] }})</legend>
                                            <div class="hidden mt-4">
                                                <span class="text-gray-700">Ofrecimiento Comercial Padre</span>
                                                <div class="mt-1 text-sm">
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" class="form-radio" name="ofrecimientocomercial1" wire:model="respuestas.132" value="Si">
                                                        <p class="ml-2">Si</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="ofrecimientocomercial1" wire:model="respuestas.132" value="No">
                                                        <p class="ml-2">No</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="ofrecimientocomercial1" wire:model="respuestas.132" value="No Aplica">
                                                        <p class="ml-2">No Aplica</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <small class="text-red-600 font-bold">{{ $errors->first('ofrecimientocomercial1') }}</small>

                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="ofrecimientocomercial2" name="ofrecimientocomercial2" wire:model="respuestas.133" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="ofrecimientocomercial2" class="font-medium text-gray-700">No Asesora</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="ofrecimientocomercial3" name="ofrecimientocomercial3" wire:model="respuestas.134" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="ofrecimientocomercial3" class="font-medium text-gray-700">No Ofrece Acorde</label>
                                                    </div>
                                                </div>


                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="ofrecimientocomercial4" name="ofrecimientocomercial4" wire:model="respuestas.135" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="ofrecimientocomercial4" class="font-medium text-yellow-500">No Aplica - Plataforma Especialista</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="ofrecimientocomercial5" name="ofrecimientocomercial5" wire:model="respuestas.136" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="ofrecimientocomercial5" class="font-medium text-yellow-500">No Aplica - Cliente Indispuesto</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="ofrecimientocomercial6" name="ofrecimientocomercial6" wire:model="respuestas.137" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="ofrecimientocomercial6" class="font-medium text-yellow-500">No Aplica - No es titular o usuario registrado</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="ofrecimientocomercial7" name="ofrecimientocomercial7" wire:model="respuestas.138" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="ofrecimientocomercial7" class="font-medium text-yellow-500">No Aplica - Sin Factibilidad Comercial</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="ofrecimientocomercial8" name="ofrecimientocomercial8" wire:model="respuestas.139" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="ofrecimientocomercial8" class="font-medium text-yellow-500">No Aplica - Sin Factibilidad Técnica</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="ofrecimientocomercial9" name="ofrecimientocomercial9" wire:model="respuestas.140" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="ofrecimientocomercial9" class="font-medium text-yellow-500">No Aplica - Problemas Técnicos</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="ofrecimientocomercial10" name="ofrecimientocomercial10" wire:model="respuestas.141" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="ofrecimientocomercial10" class="font-medium text-yellow-500">No Aplica - Otros</label>
                                                    </div>
                                                </div>



                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">10 - Frases de Enganche y Argumentación - ({{ $respuestas[142] }})</legend>
                                            <div class="hidden mt-4">
                                                <span class="text-gray-700">Ofrecimiento Padre</span>
                                                <div class="mt-1 text-sm">
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" class="form-radio" name="frasesenganche1" wire:model="respuestas.142" value="Si">
                                                        <p class="ml-2">Si</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="frasesenganche1" wire:model="respuestas.142" value="No">
                                                        <p class="ml-2">No</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="frasesenganche1" wire:model="respuestas.142" value="No Aplica">
                                                        <p class="ml-2">No Aplica</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <small class="text-red-600 font-bold">{{ $errors->first('frasesenganche1') }}</small>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="frasesenganche2" name="frasesenganche2" wire:model="respuestas.143" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="frasesenganche2" class="font-medium text-gray-700">No argumenta</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="frasesenganche3" name="frasesenganche3" wire:model="respuestas.144" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="frasesenganche3" class="font-medium text-gray-700">Usa argumentos erroneos</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="frasesenganche4" name="frasesenganche4" wire:model="respuestas.145" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="frasesenganche4" class="font-medium text-yellow-500">No Aplica - Sin ofrecimiento comercial</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 md:mt-0 md:col-span-1 ">
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-yellow-50 space-y-6 sm:p-6">
                                        <p class="font-bold text-xl">Atributos PEC</p>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">Usuario</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecu_deteccion" name="pecu_deteccion" wire:model="respuestas.146" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecu_deteccion" class="font-medium text-gray-700">Error grave en la detección de necesidades y en el analisis de la información</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecu_gestionincorrecta" name="pecu_gestionincorrecta" wire:model="respuestas.147" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecu_gestionincorrecta" class="font-medium text-gray-700">Error grave en la gestión por Info incorrecta o incompleta</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecu_noresuelve" name="pecu_noresuelve" wire:model="respuestas.148" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecu_noresuelve" class="font-medium text-gray-700">Error grave en la gestión por no resolver o resolver de forma errónea</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecu_atenciongrosera" name="pecu_atenciongrosera" wire:model="respuestas.149" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecu_atenciongrosera" class="font-medium text-gray-700">Atendió de forma grosera</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecu_pocoprofesional" name="pecu_pocoprofesional" wire:model="respuestas.150" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecu_pocoprofesional" class="font-medium text-gray-700">Se desentiende o es poco profesional</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecu_manipulacliente" name="pecu_manipulacliente" wire:model="respuestas.151" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecu_manipulacliente" class="font-medium text-gray-700">Manipula al Cliente para concretar venta</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">Negocio</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecn_nosondea" name="pecn_nosondea" wire:model="respuestas.152" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecn_nosondea" class="font-medium text-gray-700">No sondea motivo de renuncia o no Retiene</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecn_descalificaentel" name="pecn_descalificaentel" wire:model="respuestas.153" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecn_descalificaentel" class="font-medium text-gray-700">Descalificó a ENTEL</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecn_beneficiofueraproc" name="pecn_beneficiofueraproc" wire:model="respuestas.154" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecn_beneficiofueraproc" class="font-medium text-gray-700">Entrega Beneficio o Excepción comercial fuera de Procedimiento</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecn_fraude" name="pecn_fraude" wire:model="respuestas.155" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecn_fraude" class="font-medium text-gray-700">Fraude</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecn_noliberalinea" name="pecn_noliberalinea" wire:model="respuestas.156" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecn_noliberalinea" class="font-medium text-gray-700">No libera la línea una vez finalizada la llamada</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecn_factibilidad" name="pecn_factibilidad" wire:model="respuestas.157" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecn_factibilidad" class="font-medium text-gray-700">Validación de Factibilidad Técnica y Comercial</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecn_notipificasistema" name="pecn_notipificasistema" wire:model="respuestas.158" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecn_notipificasistema" class="font-medium text-gray-700">Ingreso a Sistema</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecn_otragestion" name="pecn_otragestion" wire:model="respuestas.159" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecn_otragestion" class="font-medium text-gray-700">Otra Gestión Indebida</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">Cumplimiento</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecc_niegaescalamiento" name="pecc_niegaescalamiento" wire:model="respuestas.160" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecc_niegaescalamiento" class="font-medium text-gray-700">Niega Escalamiento o Ingreso de Reclamo</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecc_omiteinformacion" name="pecc_omiteinformacion" wire:model="respuestas.161" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecc_omiteinformacion" class="font-medium text-gray-700">Omite o Indica erróneamente información que es regulada legalmente</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecc_infoconfidencial" name="pecc_infoconfidencial" wire:model="respuestas.162" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecc_infoconfidencial" class="font-medium text-gray-700">Entregó información confidencial</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecc_cierrenegocios" name="pecc_cierrenegocios" wire:model="respuestas.163" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecc_cierrenegocios" class="font-medium text-gray-700">Cierre de negocios</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecc_novalidadatos" name="pecc_novalidadatos" wire:model="respuestas.164" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecc_novalidadatos" class="font-medium text-gray-700">No Valida correctamente los datos personales del cliente</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecc_despacho" name="pecc_despacho" wire:model="respuestas.165" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecc_despacho" class="font-medium text-gray-700">No coordina correctamente Despacho/Entrega/Instalación</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="pec_responsable" class="block text-sm font-medium text-gray-700">Responsable PEC</label>
                                                <select id="pec_responsable" name="pec_responsable" wire:model="respuestas.166" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option></option>
                                                    @foreach($escalas['pecresponsables']['escalas'] as $escala)
                                                        <option value="{{ $escala->id }}">{{ $escala->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <small class="text-red-600 font-bold">{{ $errors->first('pec_responsable') }}</small>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="pt-6"></div>
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-blue-50 space-y-6 sm:p-6">
                                        <p class="font-bold text-xl">Caracterización Complementaria</p>
                                        <fieldset>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="otro_ruidoenllamada" class="block text-sm font-medium text-gray-700">Ruidos o problemas de calidad en el audio</label>
                                                <select id="otro_ruidoenllamada" name="otro_ruidoenllamada" wire:model="respuestas.168" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option></option>
                                                    @foreach($escalas['ruidos']['escalas'] as $escala)
                                                        <option value="{{ $escala->id }}">{{ $escala->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <small class="text-red-600 font-bold">{{ $errors->first('otro_ruidoenllamada') }}</small>
                                            <div class="mt-4">
                                                <span class="text-gray-700 text-sm">Uso de frases tipo o scripts para la comunicación</span>
                                                <div class="mt-1 text-sm">
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" class="form-radio" name="otro_frasesyscripts" wire:model="respuestas.169" value="Si">
                                                        <p class="ml-2">Sí</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="otro_frasesyscripts" wire:model="respuestas.169" value="No">
                                                        <p class="ml-2">No</p>
                                                    </label>
                                                </div>
                                                <small class="text-red-600 font-bold">{{ $errors->first('otro_frasesyscripts') }}</small>
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="otro_tiponegocio" class="block text-sm font-medium text-gray-700">Tipo de Negocio</label>
                                                <select id="otro_tiponegocio" name="otro_tiponegocio" wire:model="respuestas.171" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option></option>
                                                    @foreach($escalas['tiposnegocio']['escalas'] as $escala)
                                                        <option value="{{ $escala->id }}">{{ $escala->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <small class="text-red-600 font-bold">{{ $errors->first('otro_tiponegocio') }}</small>
                                            <div class="mt-4">
                                                <span class="text-gray-700 text-sm">Ofrecimiento de más de una Línea</span>
                                                <div class="mt-1 text-sm">
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" class="form-radio" name="otro_ofrecimientomultilinea" wire:model="respuestas.172" value="Si">
                                                        <p class="ml-2">Sí</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="otro_ofrecimientomultilinea" wire:model="respuestas.172" value="No">
                                                        <p class="ml-2">No</p>
                                                    </label>
                                                </div>
                                                <small class="text-red-600 font-bold">{{ $errors->first('otro_ofrecimientomultilinea') }}</small>
                                            </div>
                                            <div class="mt-4">
                                                <span class="text-gray-700 text-sm">Ofrecimiento de equipo</span>
                                                <div class="mt-1 text-sm">
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" class="form-radio" name="otro_ofrecimientoequipo" wire:model="respuestas.173" value="Si">
                                                        <p class="ml-2">Sí</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="otro_ofrecimientoequipo" wire:model="respuestas.173" value="No">
                                                        <p class="ml-2">No</p>
                                                    </label>
                                                </div>
                                                <small class="text-red-600 font-bold">{{ $errors->first('otro_ofrecimientoequipo') }}</small>
                                            </div>
                                            <div class="mt-4">
                                                <span class="text-gray-700 text-sm">Ofrecimiento de accesorios</span>
                                                <div class="mt-1 text-sm">
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" class="form-radio" name="otro_ofrecimientoaccesorio" wire:model="respuestas.174" value="Si">
                                                        <p class="ml-2">Sí</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="otro_ofrecimientoaccesorio" wire:model="respuestas.174" value="No">
                                                        <p class="ml-2">No</p>
                                                    </label>
                                                </div>
                                                <small class="text-red-600 font-bold">{{ $errors->first('otro_ofrecimientoaccesorio') }}</small>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="pt-6"></div>
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="pt-4 bg-red-50 space-y-2 sm:p-6">
                                        <p class="font-bold text-xl">Ingresa Reclamos a plataforma Back Office</p>
                                        <fieldset>
                                            <div>
                                                <div class="text-sm">
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" class="form-radio" name="reclamos1" wire:model="respuestas.322" value="Si">
                                                        <p class="ml-2">Sí</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="reclamos1" wire:model="respuestas.322" value="No">
                                                        <p class="ml-2">No</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="reclamos1" wire:model="respuestas.322" value="No Aplica">
                                                        <p class="ml-2">No Aplica</p>
                                                    </label>
                                                </div>
                                                <small class="text-red-600 font-bold">{{ $errors->first('reclamos1') }}</small>
                                            </div>
                                            <div class="@if($respuestas[322] == 'No Aplica') hidden @endif">
                                                <div class="mt-4">
                                                    <span class="text-gray-700 text-sm">Valida correctamente los datos para derivar correctamente al back</span>
                                                    <div class="mt-1 text-sm">
                                                        <label class="inline-flex items-center">
                                                            <input type="radio" class="form-radio" name="reclamos2" wire:model="respuestas.323" value="Si">
                                                            <p class="ml-2">Sí</p>
                                                        </label>
                                                        <label class="inline-flex items-center ml-6">
                                                            <input type="radio" class="form-radio" name="reclamos2" wire:model="respuestas.323" value="No">
                                                            <p class="ml-2">No</p>
                                                        </label>
                                                        <label class="inline-flex items-center ml-6 hidden">
                                                            <input type="radio" class="form-radio" name="reclamos2" wire:model="respuestas.323" value="No Aplica">
                                                            <p class="ml-2">No Aplica</p>
                                                        </label>
                                                    </div>
                                                    <small class="text-red-600 font-bold">{{ $errors->first('reclamos2') }}</small>
                                                </div>
                                                <div class="mt-1">
                                                    <span class="text-gray-700 text-sm">Ingresa ticket y observaciones según procedimiento</span>
                                                    <div class="mt-1 text-sm">
                                                        <label class="inline-flex items-center">
                                                            <input type="radio" class="form-radio" name="reclamos3" wire:model="respuestas.324" value="Si">
                                                            <p class="ml-2">Sí</p>
                                                        </label>
                                                        <label class="inline-flex items-center ml-6">
                                                            <input type="radio" class="form-radio" name="reclamos3" wire:model="respuestas.324" value="No">
                                                            <p class="ml-2">No</p>
                                                        </label>
                                                        <label class="inline-flex items-center ml-6 hidden">
                                                            <input type="radio" class="form-radio" name="reclamos3" wire:model="respuestas.324" value="No Aplica">
                                                            <p class="ml-2">No Aplica</p>
                                                        </label>
                                                    </div>
                                                    <small class="text-red-600 font-bold">{{ $errors->first('reclamos3') }}</small>
                                                </div>
                                                <div class="mt-1">
                                                    <span class="text-gray-700 text-sm">Informa correctamente plazos de respuesta</span>
                                                    <div class="mt-1 text-sm">
                                                        <label class="inline-flex items-center">
                                                            <input type="radio" class="form-radio" name="reclamos4" wire:model="respuestas.325" value="Si">
                                                            <p class="ml-2">Sí</p>
                                                        </label>
                                                        <label class="inline-flex items-center ml-6">
                                                            <input type="radio" class="form-radio" name="reclamos4" wire:model="respuestas.325" value="No">
                                                            <p class="ml-2">No</p>
                                                        </label>
                                                        <label class="inline-flex items-center ml-6 hidden">
                                                            <input type="radio" class="form-radio" name="reclamos4" wire:model="respuestas.325" value="No Aplica">
                                                            <p class="ml-2">No Aplica</p>
                                                        </label>
                                                    </div>
                                                    <small class="text-red-600 font-bold">{{ $errors->first('reclamos4') }}</small>
                                                </div>
                                                <div class="mt-1">
                                                    <span class="text-gray-700 text-sm">Indica número de reclamo</span>
                                                    <div class="mt-1 text-sm">
                                                        <label class="inline-flex items-center">
                                                            <input type="radio" class="form-radio" name="reclamos5" wire:model="respuestas.326" value="Si">
                                                            <p class="ml-2">Sí</p>
                                                        </label>
                                                        <label class="inline-flex items-center ml-6">
                                                            <input type="radio" class="form-radio" name="reclamos5" wire:model="respuestas.326" value="No">
                                                            <p class="ml-2">No</p>
                                                        </label>
                                                        <label class="inline-flex items-center ml-6 hidden">
                                                            <input type="radio" class="form-radio" name="reclamos5" wire:model="respuestas.326" value="No Aplica">
                                                            <p class="ml-2">No Aplica</p>
                                                        </label>
                                                    </div>
                                                    <small class="text-red-600 font-bold">{{ $errors->first('reclamos5') }}</small>
                                                    <div class="mt-1">
                                                        <span class="text-gray-700 text-sm">Menciona canales de consulta para el reclamo</span>
                                                        <div class="mt-1 text-sm">
                                                            <label class="inline-flex items-center">
                                                                <input type="radio" class="form-radio" name="reclamos6" wire:model="respuestas.327" value="Si">
                                                                <p class="ml-2">Sí</p>
                                                            </label>
                                                            <label class="inline-flex items-center ml-6">
                                                                <input type="radio" class="form-radio" name="reclamos6" wire:model="respuestas.327" value="No">
                                                                <p class="ml-2">No</p>
                                                            </label>
                                                            <label class="inline-flex items-center ml-6 hidden">
                                                                <input type="radio" class="form-radio" name="reclamos6" wire:model="respuestas.327" value="No Aplica">
                                                                <p class="ml-2">No Aplica</p>
                                                            </label>
                                                        </div>
                                                        <small class="text-red-600 font-bold">{{ $errors->first('reclamos6') }}</small>

                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="fixed @if($evaluacion['estado_id'] == 20) visible opacity-100 @else hidden opacity-0 @endif bottom-1 right-1 bg-yellow-100 border border border-yellow-500 text-yellow-700 px-4 py-1 shadow-lg transition-all">
        <p class="font-bold text-sm">Tienes progreso autoguardado sin enviar.</p>
        <p class="text-sm">La evaluación no se marcará como "Completada" hasta que se presione el botón "Guardar".</p>
    </div>

</div>
