{{--
Plantilla: Pauta Back Office
Versión 2
--}}
<div class="flex space-x-4 pt-6 px-6">
    <div class="flex-1 w-1/4 py-8 px-6 bg-white shadow-xl sm:rounded-lg overflow-y-scroll h-screen">

            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div>
                        <label for="comentario_interno" class="block text-sm font-medium text-gray-700">
                            Comentario Interno
                        </label>
                        <div class="mt-1">
                            <textarea id="comentario_interno" name="comentario_interno" wire:model.defer="comentario_interno" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-30 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí el comentario interno">{{$comentario_interno}}</textarea>
                        </div>
                    </div>
                    <small class="text-red-600 font-bold">{{ $errors->first('comentario_interno') }}</small>
                    <div>
                        <label for="descripcion_caso" class="block text-sm font-medium text-gray-700">
                            Descripción del Caso
                        </label>
                        <div class="mt-1">
                            <textarea id="descripcion_caso" name="descripcion_caso" wire:model.defer="descripcion_caso" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-30 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí la descripción del caso">{{$descripcion_caso}}</textarea>
                        </div>
                    </div>
                    <div>
                        <label for="respuesta_ejecutivo" class="block text-sm font-medium text-gray-700">
                            Respuesta del Ejecutivo
                        </label>
                        <div class="mt-1">
                            <textarea id="respuesta_ejecutivo" name="respuesta_ejecutivo" wire:model.defer="respuesta_ejecutivo" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-30 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí la Respuesta del Ejecutivo">{{$respuesta_ejecutivo}}</textarea>
                        </div>
                    </div>
                    <small class="text-red-600 font-bold">{{ $errors->first('respuesta_ejecutivo') }}</small>
                    <div>
                        <label for="retroalimentacion" class="block text-sm font-medium text-gray-700">
                            Retroalimentación
                        </label>
                        <div class="mt-1">
                            <textarea id="retroalimentacion" name="retroalimentacion" wire:model.defer="retroalimentacion" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-48 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí la retroalimentación">{{$retroalimentacion}}</textarea>
                        </div>
                    </div>
                    <small class="text-red-600 font-bold">{{ $errors->first('retroalimentacion') }}</small>
                    <div></div>
                    <div>
                        <label for="comentario_calidad" class="block text-sm font-medium text-gray-700">
                            Comentario Calidad
                        </label>
                        <div class="mt-1">
                            <textarea id="comentario_calidad" name="comentario_calidad" wire:model.defer="comentario_calidad" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-48 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí el comentario de calidad">{{$comentario_calidad}}</textarea>
                        </div>
                    </div>
                    <small class="text-red-600 font-bold">{{ $errors->first('comentario_calidad') }}</small>
                    <div></div>
                    <button type="submit"  wire:click="save" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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

                    {{--                                @if(Auth::user()->perfil  == 1 && $marca_ici == 1)--}}
                    {{--                                    <div>--}}
                    {{--                                        <button wire:click="resetici" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">--}}
                    {{--                                            <!-- Heroicon name: check -->--}}


                    {{--                                            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
                    {{--                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />--}}
                    {{--                                            </svg>--}}
                    {{--                                            Reset Discrepancia--}}
                    {{--                                        </button>--}}
                    {{--                                    </div>--}}
                    {{--                                @endif--}}


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
            Fecha Grabación Adjunta: {{ $grabacion ? $grabacion->created_at : '-'}}
        </div>
        <div class="mt-2 flex items-center text-sm text-gray-500">
            <!-- Heroicon name: calendar -->
            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
            </svg>
            Fecha Evaluación: {{$evaluacion->created_at}}
        </div>
        <div class="mt-2 flex items-center text-sm text-gray-500">
            <!-- Heroicon name: calendar -->
            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
            </svg>
            Fecha Modificación: {{$evaluacion->updated_at}}
        </div>
        <div class="mt-2 flex items-center text-sm text-gray-500">
            <!-- Heroicon name: calendar -->
            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
            </svg>
            PENC: {{$evaluacion->penc}}
        </div>
        <div class="mt-2 flex items-center text-sm text-gray-500">
            <!-- Heroicon name: calendar -->
            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
            </svg>
            PEC Usuario: {{$evaluacion->pecu}}
        </div>
        <div class="mt-2 flex items-center text-sm text-gray-500">
            <!-- Heroicon name: calendar -->
            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
            </svg>
            PEC Negocio: {{$evaluacion->pecn}}
        </div>
        <div class="mt-2 flex items-center text-sm text-gray-500">
            <!-- Heroicon name: calendar -->
            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
            </svg>
            PEC Cumplimiento: {{$evaluacion->pecc}}
        </div>

        @if($evaluacion->ici)
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                </svg>
                % de Discrepancia: {{$evaluacion->ici}}
            </div>
{{--            <p class="text-gray-500 font-bold">% de Discrepancia: </p>&nbsp <p> {{$evaluacion->ici}}</p>--}}
        @endif
    </div>

    <div class="w-3/4 p-6 bg-gray-50 overflow-hidden shadow-xl sm:rounded-lg overflow-y-scroll h-screen">
        <div>
            <form wire:submit.prevent="save">

                <div class="mt-10 sm:mt-0">
                    <div class="md:grid md:grid-cols-2 md:gap-6">
                        <div class="mt-5 md:mt-0 md:col-span-1 ">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-green-50 space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Atributos PENC</p>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">1 - Cumple con Scripts de saludo y despedida - ({{$saludo1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="saludo2" name="saludo2" wire:model.defer="saludo2" wire:click="xsaludo" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$saludo2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="saludo2" class="font-medium text-gray-700">No realiza la presentación según script</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="saludo3" name="saludo3" wire:model.defer="saludo3" wire:click="xsaludo" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$saludo3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="saludo3" class="font-medium text-gray-700">No realiza la despedida según script</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">2 - Maneja los silencios y/o tiempos de espera - ({{$manejosilencios1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="manejosilencios2" name="manejosilencios2" wire:model.defer="manejosilencios2" wire:click="xmanejosilencios" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$manejosilencios2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="manejosilencios2" class="font-medium text-gray-700">Deja al cliente en espera sin retomar antes de X segundos</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="manejosilencios3" name="manejosilencios3" wire:model.defer="manejosilencios3" wire:click="xmanejosilencios" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$manejosilencios3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="manejosilencios3" class="font-medium text-gray-700">No informa previamente al cliente que necesita dejarlo en espera</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="manejosilencios4" name="manejosilencios4" wire:model.defer="manejosilencios4" wire:click="xmanejosilencios" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$manejosilencios4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="manejosilencios4" class="font-medium text-gray-700">No Agradece la espera en caso de Hold/Mute extendido</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">3 - Su expresión oral es acorde a la atención de clientes - ({{$expresionoral1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="expresionoral2" name="expresionoral2" wire:model.defer="expresionoral2" wire:click="xexpresionoral" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$expresionoral2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="expresionoral2" class="font-medium text-gray-700">Errores en el vocabulario utilizado (semántica)</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="expresionoral3" name="expresionoral3" wire:model.defer="expresionoral3" wire:click="xexpresionoral" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$expresionoral3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="expresionoral3" class="font-medium text-gray-700">Faltas en la modulación y/o adaptación del ritmo</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="expresionoral4" name="expresionoral4" wire:model.defer="expresionoral4" wire:click="xexpresionoral" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$expresionoral4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="expresionoral4" class="font-medium text-gray-700">Utiliza muletillas en exceso y/o es poco formal</label>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">4 - Demuestra seguridad y buen manejo de la información - ({{$seguridad1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            @if($evaluacion->sub_estudio == 'MovilHogar' || $evaluacion->sub_estudio == 'Subtel')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="seguridad2" name="seguridad2" wire:model.defer="seguridad2" wire:click="xseguridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$seguridad2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="seguridad2" class="font-medium text-gray-700">Falla durante la explicación de antecedentes</label>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($evaluacion->sub_estudio == 'Tecnico')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="seguridad3" name="seguridad3" wire:model.defer="seguridad3" wire:click="xseguridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$seguridad3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="seguridad3" class="font-medium text-gray-700">Falla durante la explicación del origen / diagnostico</label>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="seguridad4" name="seguridad4" wire:model.defer="seguridad4" wire:click="xseguridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$seguridad4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="seguridad4" class="font-medium text-gray-700">Falla durante la negociación de alternativas y/o soluciones</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="seguridad5" name="seguridad5" wire:model.defer="seguridad5" wire:click="xseguridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$seguridad5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="seguridad5" class="font-medium text-gray-700">Falla durante el acuerdo de cierre o resumen final</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">5 - Claridad para comunicarse y expresar ideas - ({{$claridad1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="claridad2" name="claridad2" wire:model.defer="claridad2" wire:click="xclaridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$claridad2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="claridad2" class="font-medium text-gray-700">Falla durante la explicación de antecedentes</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="claridad3" name="claridad3" wire:model.defer="claridad3" wire:click="xclaridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$claridad3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="claridad3" class="font-medium text-gray-700">Falla durante la negociación de alternativas y/o soluciones</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="claridad4" name="claridad4" wire:model.defer="claridad4" wire:click="xclaridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$claridad4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="claridad4" class="font-medium text-gray-700">Falla durante el acuerdo de cierre o resumen final</label>
                                                </div>
                                            </div>


                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">6 - Es Cordial y demuestra preocupación por el Cliente - ({{$cordialidad1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="cordialidad2" name="cordialidad2" wire:model.defer="cordialidad2" wire:click="xcordialidad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cordialidad2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="cordialidad2" class="font-medium text-gray-700">Es cortante, irónico o poco amable con el cliente</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="cordialidad3" name="cordialidad3" wire:model.defer="cordialidad3" wire:click="xcordialidad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cordialidad3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="cordialidad3" class="font-medium text-gray-700">No intenta reducir la emocionalidad negativa del cliente</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="cordialidad4" name="cordialidad4" wire:model.defer="cordialidad4" wire:click="xcordialidad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cordialidad4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="cordialidad4" class="font-medium text-gray-700">No retiene información o antecedentes entregados por el cliente</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="cordialidad5" name="cordialidad5" wire:model.defer="cordialidad5" wire:click="xcordialidad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cordialidad5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="cordialidad5" class="font-medium text-gray-700">No confirma que el cliente comprendió la información entregada</label>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>                                   
                                </div>
                            </div>
                            <div class="mt-5 shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-red-50 space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Errores Criticos que afectan a Entel</p>                                   
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">11 - Documentación de la respuesta y del cierre - ({{$pecn_documentacion1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="documentacion2" name="documentacion2" wire:model.defer="pecn_documentacion2" wire:click="xdocumentacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_documentacion2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="documentacion2" class="font-medium text-gray-700">Falla durante la incorporación de antecedentes del caso</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="documentacion3" name="documentacion3" wire:model.defer="pecn_documentacion3" wire:click="xdocumentacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_documentacion3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="documentacion3" class="font-medium text-gray-700">Falla en la descripción del acuerdo o compensación</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="documentacion4" name="documentacion4" wire:model.defer="pecn_documentacion4" wire:click="xdocumentacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_documentacion4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="documentacion4" class="font-medium text-gray-700">Falla en la especificar la resolución del reclamo</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="documentacion5" name="documentacion5" wire:model.defer="pecn_documentacion5" wire:click="xdocumentacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_documentacion5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="documentacion5" class="font-medium text-gray-700">Falla en la redacción u ortografía</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="documentacion6" name="documentacion6" wire:model.defer="pecn_documentacion6" wire:click="xdocumentacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_documentacion6}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="documentacion6" class="font-medium text-gray-700">No selecciona la plantilla de carta adecuada al caso</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="documentacion7" name="documentacion7" wire:model.defer="pecn_documentacion7" wire:click="xdocumentacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_documentacion7}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="documentacion7" class="font-medium text-gray-700">No cumple con los formatos establecidos en Carta respuesta</label>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">12 - Cumple los protocolos regulados por Subtel/Sernac - ({{$pecc_protocolosubtel1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="protocolosubtel2" name="protocolosubtel2" wire:model.defer="pecc_protocolosubtel2" wire:click="xprotocolosubtel" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_protocolosubtel2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="protocolosubtel2" class="font-medium text-gray-700">Cierra con una persona distinta al titular, solicitante o reclamante</label>
                                                </div>
                                            </div>
                                            @if($evaluacion->sub_estudio == 'Subtel')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="protocolosubtel3" name="protocolosubtel3" wire:model.defer="pecc_protocolosubtel3" wire:click="xprotocolosubtel" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_protocolosubtel3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="protocolosubtel3" class="font-medium text-gray-700">No adjunta respaldo en casilla SUBTEL o SERNAC</label>
                                                    </div>
                                                </div>

                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="protocolosubtel4" name="protocolosubtel4" wire:model.defer="pecc_protocolosubtel4" wire:click="xprotocolosubtel" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_protocolosubtel4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="protocolosubtel4" class="font-medium text-gray-700">No envía carta a Oficina de Mediación</label>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="protocolosubtel5" name="protocolosubtel5" wire:model.defer="pecc_protocolosubtel5" wire:click="xprotocolosubtel" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_protocolosubtel5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="protocolosubtel5" class="font-medium text-gray-700">No valida o comprueba RUT del Titular/Reclamante</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="protocolosubtel6" name="protocolosubtel6" wire:model.defer="pecc_protocolosubtel6" wire:click="xprotocolosubtel" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_protocolosubtel6}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="protocolosubtel6" class="font-medium text-gray-700">No valida o comprueba Número de Reclamo</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">13 - Cumple con los procedimientos establecidos por Entel - ({{$pecn_procedimientos1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="procedimientos2" name="procedimientos2" wire:model.defer="pecn_procedimientos2" wire:click="xprocedimientos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_procedimientos2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="procedimientos2" class="font-medium text-gray-700">Comete fraude al cliente y/o a Entel</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="procedimientos3" name="procedimientos3" wire:model.defer="pecn_procedimientos3" wire:click="xprocedimientos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_procedimientos3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="procedimientos3" class="font-medium text-gray-700">Descalifica o cuestiona a Entel frente al cliente</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="procedimientos4" name="procedimientos4" wire:model.defer="pecn_procedimientos4" wire:click="xprocedimientos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_procedimientos4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="procedimientos4" class="font-medium text-gray-700">Entrega información confidencial</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="procedimientos5" name="procedimientos5" wire:model.defer="pecn_procedimientos5" wire:click="xprocedimientos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_procedimientos5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="procedimientos5" class="font-medium text-gray-700">No registra el mal ingreso por parte del front</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="procedimientos6" name="procedimientos6" wire:model.defer="pecn_procedimientos6" wire:click="xprocedimientos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_procedimientos6}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="procedimientos6" class="font-medium text-gray-700">No registra en sistema de Entel gestiones realizadas</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="procedimientos7" name="procedimientos7" wire:model.defer="pecn_procedimientos7" wire:click="xprocedimientos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_procedimientos7}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="procedimientos7" class="font-medium text-gray-700">Omite o Registra erróneamente los intentos de contactos</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="procedimientos8" name="procedimientos8" wire:model.defer="pecn_procedimientos8" wire:click="xprocedimientos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_procedimientos8}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="procedimientos8" class="font-medium text-gray-700">Realiza descuento, carga o beneficio fuera de procedimiento</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="procedimientos9" name="procedimientos9" wire:model.defer="pecn_procedimientos9" wire:click="xprocedimientos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_procedimientos9}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="procedimientos9" class="font-medium text-gray-700">Otra gestión indebida</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">14 - Cumple con los protocolos de la plataforma - ({{$pecu_protocoloplataforma1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="protocoloplataforma2" name="protocoloplataforma2" wire:model.defer="pecu_protocoloplataforma2" wire:click="xprotocoloplataforma" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_protocoloplataforma2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="protocoloplataforma2" class="font-medium text-gray-700">Desatiende el llamado o es poco profesional</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="protocoloplataforma3" name="protocoloplataforma3" wire:model.defer="pecu_protocoloplataforma3" wire:click="xprotocoloplataforma" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_protocoloplataforma3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="protocoloplataforma3" class="font-medium text-gray-700">Es grosero con el cliente durante la atención</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="protocoloplataforma4" name="protocoloplataforma4" wire:model.defer="pecu_protocoloplataforma4" wire:click="xprotocoloplataforma" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_protocoloplataforma4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="protocoloplataforma4" class="font-medium text-gray-700">No realiza callback comprometido</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="protocoloplataforma5" name="protocoloplataforma5" wire:model.defer="pecu_protocoloplataforma5" wire:click="xprotocoloplataforma" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_protocoloplataforma5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="protocoloplataforma5" class="font-medium text-gray-700">Transfiere o deriva incorrectamente</label>
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
                                    <p class="font-bold text-xl">Gestiones</p>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">7 - Analiza correctamente los antecedentes - ({{$pecu_antecedentes1}})</legend>

                                        <div class="mt-2 space-y-2">
                                            @if($evaluacion->sub_estudio == 'MovilHogar' || $evaluacion->sub_estudio == 'Subtel')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="antecedentes2" name="antecedentes2" wire:model.defer="pecu_antecedentes2" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="antecedentes2" class="font-medium text-gray-700">Condiciones comerciales del plan/bolsa/vas</label>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($evaluacion->sub_estudio == 'Tecnico')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="antecedentes3" name="antecedentes3" wire:model.defer="pecu_antecedentes3" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="antecedentes3" class="font-medium text-gray-700">Estado de línea y Condiciones comerciales del plan/bolsa/vas</label>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($evaluacion->sub_estudio == 'MovilHogar' || $evaluacion->sub_estudio == 'Subtel')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="antecedentes4" name="antecedentes4" wire:model.defer="pecu_antecedentes4" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="antecedentes4" class="font-medium text-gray-700">Detalle de la información contenida en la boleta</label>
                                                    </div>
                                                </div>

                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="antecedentes5" name="antecedentes5" wire:model.defer="pecu_antecedentes5" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes5}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="antecedentes5" class="font-medium text-gray-700">Registro de cobros, pagos/nc o saldos</label>
                                                    </div>
                                                </div>

                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="antecedentes6" name="antecedentes6" wire:model.defer="pecu_antecedentes6" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes6}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="antecedentes6" class="font-medium text-gray-700">Ciclos de Facturación (periodos, fechas de emisión/venc)</label>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="antecedentes7" name="antecedentes7" wire:model.defer="pecu_antecedentes7" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes7}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="antecedentes7" class="font-medium text-gray-700">Contingencias</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="antecedentes8" name="antecedentes8" wire:model.defer="pecu_antecedentes8" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes8}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="antecedentes8" class="font-medium text-gray-700">Registros de acciones anteriores en sistema</label>
                                                </div>
                                            </div>
                                            @if($evaluacion->sub_estudio == 'Tecnico' || $evaluacion->sub_estudio == 'Subtel')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="antecedentes9" name="antecedentes9" wire:model.defer="pecu_antecedentes9" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes9}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="antecedentes9" class="font-medium text-gray-700">Cobertura</label>
                                                    </div>
                                                </div>

                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="antecedentes10" name="antecedentes10" wire:model.defer="pecu_antecedentes10" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes10}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="antecedentes10" class="font-medium text-gray-700">Parámetros de la línea (Vision360)</label>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="antecedentes11" name="antecedentes11" wire:model.defer="pecu_antecedentes11" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes11}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="antecedentes11" class="font-medium text-gray-700">No realiza indagación para complementar los antecedentes</label>
                                                </div>
                                            </div>
                                            @if($evaluacion->sub_estudio == 'MovilHogar' || $evaluacion->sub_estudio == 'Subtel')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="antecedentes12" name="antecedentes12" wire:model.defer="pecu_antecedentes12" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes12}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="antecedentes12" class="font-medium text-gray-700">No confirma el motivo, monto y periodo/documento impugnado</label>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">8 - Entrega información Completa - ({{$pecu_infocompleta1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_infocompleta2" name="pecu_infocompleta2" wire:model.defer="pecu_infocompleta2" wire:click="xinfocompleta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocompleta2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_infocompleta2" class="font-medium text-gray-700">Falla durante la explicación del origen</label>
                                                </div>
                                            </div>
                                            @if($evaluacion->sub_estudio == 'MovilHogar' || $evaluacion->sub_estudio == 'Subtel')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecu_infocompleta3" name="pecu_infocompleta3" wire:model.defer="pecu_infocompleta3" wire:click="xinfocompleta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocompleta3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecu_infocompleta3" class="font-medium text-gray-700">Falla durante la neg. de alternativas y/o soluciones</label>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($evaluacion->sub_estudio == 'Tecnico')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecu_infocompleta4" name="pecu_infocompleta4" wire:model.defer="pecu_infocompleta4" wire:click="xinfocompleta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocompleta4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecu_infocompleta4" class="font-medium text-gray-700">Falla durante la entrega de la solución</label>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_infocompleta5" name="pecu_infocompleta5" wire:model.defer="pecu_infocompleta5" wire:click="xinfocompleta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocompleta5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_infocompleta5" class="font-medium text-gray-700">Falla durante la explicación de desc. o compensaciones</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_infocompleta6" name="pecu_infocompleta6" wire:model.defer="pecu_infocompleta6" wire:click="xinfocompleta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocompleta6}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_infocompleta6" class="font-medium text-gray-700">Falla sobre las modificaciones comerciales</label>
                                                </div>
                                            </div>
                                            @if($evaluacion->sub_estudio == 'MovilHogar' || $evaluacion->sub_estudio == 'Subtel')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecu_infocompleta7" name="pecu_infocompleta7" wire:model.defer="pecu_infocompleta7" wire:click="xinfocompleta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocompleta7}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecu_infocompleta7" class="font-medium text-gray-700">Falla sobre la reprogramación de descuentos</label>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($evaluacion->sub_estudio == 'Tecnico')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecu_infocompleta8" name="pecu_infocompleta8" wire:model.defer="pecu_infocompleta8" wire:click="xinfocompleta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocompleta8}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecu_infocompleta8" class="font-medium text-gray-700">Falla sobre los pasos operativos que debe el Cliente realizar</label>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_infocompleta9" name="pecu_infocompleta9" wire:model.defer="pecu_infocompleta9" wire:click="xinfocompleta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocompleta9}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_infocompleta9" class="font-medium text-gray-700">Falla durante el acuerdo de cierre o resumen final</label>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">9 - Entrega información Correcta - ({{$pecu_infocorrecta1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="infocorrecta2" name="infocorrecta2" wire:model.defer="pecu_infocorrecta2" wire:click="xinfocorrecta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocorrecta2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="infocorrecta2" class="font-medium text-gray-700">Falla durante la explicación del origen</label>
                                                </div>
                                            </div>
                                            @if($evaluacion->sub_estudio == 'MovilHogar' || $evaluacion->sub_estudio == 'Subtel')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="infocorrecta3" name="infocorrecta3" wire:model.defer="pecu_infocorrecta3" wire:click="xinfocorrecta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocorrecta3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="infocorrecta3" class="font-medium text-gray-700">Falla durante la neg. de alternativas y/o soluciones</label>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($evaluacion->sub_estudio == 'Tecnico')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="infocorrecta4" name="infocorrecta4" wire:model.defer="pecu_infocorrecta4" wire:click="xinfocorrecta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocorrecta4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="infocorrecta4" class="font-medium text-gray-700">Falla durante la entrega de la solución</label>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="infocorrecta5" name="infocorrecta5" wire:model.defer="pecu_infocorrecta5" wire:click="xinfocorrecta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocorrecta5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="infocorrecta5" class="font-medium text-gray-700">Falla durante la explicación de desc. o compensaciones</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="infocorrecta6" name="infocorrecta6" wire:model.defer="pecu_infocorrecta6" wire:click="xinfocorrecta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocorrecta6}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="infocorrecta6" class="font-medium text-gray-700">Falla sobre las modificaciones comerciales</label>
                                                </div>
                                            </div>
                                            @if($evaluacion->sub_estudio == 'MovilHogar' || $evaluacion->sub_estudio == 'Subtel')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="infocorrecta7" name="infocorrecta7" wire:model.defer="pecu_infocorrecta7" wire:click="xinfocorrecta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocorrecta7}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="infocorrecta7" class="font-medium text-gray-700">Falla sobre la reprogramación de descuentos</label>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($evaluacion->sub_estudio == 'Tecnico')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="infocorrecta8" name="infocorrecta8" wire:model.defer="pecu_infocorrecta8" wire:click="xinfocorrecta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocorrecta8}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="infocorrecta8" class="font-medium text-gray-700">Falla sobre los pasos operativos que debe el Cliente realizar</label>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="infocorrecta9" name="infocorrecta9" wire:model.defer="pecu_infocorrecta9" wire:click="xinfocorrecta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocorrecta9}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="infocorrecta9" class="font-medium text-gray-700">Falla durante el acuerdo de cierre o resumen final</label>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">10 - Gestiona correctamente en sistema los cambios o solicitudes - ({{$pecu_gestiona1}})</legend>

                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="gestiona2" name="gestiona2" wire:model.defer="pecu_gestiona2" wire:click="xgestiona" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_gestiona2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="gestiona2" class="font-medium text-gray-700">Falla durante la generación de descuento o compensaciones</label>
                                                </div>
                                            </div>
                                            @if($evaluacion->sub_estudio == 'MovilHogar' || $evaluacion->sub_estudio == 'Subtel')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="gestiona3" name="gestiona3" wire:model.defer="pecu_gestiona3" wire:click="xgestiona" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_gestiona3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="gestiona3" class="font-medium text-gray-700">Falla durante la reprogramación de descuentos</label>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($evaluacion->sub_estudio == 'Tecnico')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="gestiona4" name="gestiona4" wire:model.defer="pecu_gestiona4" wire:click="xgestiona" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_gestiona4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="gestiona4" class="font-medium text-gray-700">Falla en ajuste de parámetros en Vision360/HLR</label>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="gestiona5" name="gestiona5" wire:model.defer="pecu_gestiona5" wire:click="xgestiona" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_gestiona5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="gestiona5" class="font-medium text-gray-700">Falla durante la modificación comercial</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="gestiona6" name="gestiona6" wire:model.defer="pecu_gestiona6" wire:click="xgestiona" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_gestiona6}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="gestiona6" class="font-medium text-gray-700">Falla durante el ingreso de tickets a otras áreas de Entel</label>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>




                                </div>
                            </div>
                            <div class="py-3"></div>
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-blue-50 space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Caracterización</p>


                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">15 - Caracterización de la Interacción</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="caracterizacion1" name="caracterizacion1" wire:model.defer="caracterizacion1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$claridad2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="caracterizacion1" class="font-medium text-gray-700">Reiteración de Reclamo (mismo motivo)</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="caracterizacion2" name="caracterizacion2" wire:model.defer="caracterizacion2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$claridad2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="caracterizacion2" class="font-medium text-gray-700">Otros Reclamos a Entel</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="caracterizacion3" name="caracterizacion3" wire:model.defer="caracterizacion3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$claridad2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="caracterizacion3" class="font-medium text-gray-700">Cliente Negativo o Agresivo o Notoriamente molesto</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="caracterizacion4" name="caracterizacion4" wire:model.defer="caracterizacion4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$claridad2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="caracterizacion4" class="font-medium text-gray-700">Menciona insistencia en otros canales</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="caracterizacion5" name="caracterizacion5" wire:model.defer="caracterizacion5" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$claridad2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="caracterizacion5" class="font-medium text-gray-700">Contacta sin entrega de resolución</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="caracterizacion6" name="caracterizacion6" wire:model.defer="caracterizacion6" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$claridad2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="caracterizacion6" class="font-medium text-gray-700">Cerrado Sin contacto</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="caracterizacion7" name="caracterizacion7" wire:model.defer="caracterizacion7" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$claridad2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="caracterizacion7" class="font-medium text-gray-700">Plazo de respuesta ya cumplido</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="caracterizacion8" name="caracterizacion8" wire:model.defer="caracterizacion8" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$claridad2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="caracterizacion8" class="font-medium text-gray-700">Mal Ingreso en 1° nivel </label>
                                                </div>
                                            </div>


                                        </div>
                                    </fieldset>


                                </div>
                            </div>

                        </div>


                    </div>
                
            </form>
        </div>
    </div>

</div>
