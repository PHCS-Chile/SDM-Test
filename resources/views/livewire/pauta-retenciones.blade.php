{{--
Plantilla: Pauta Retenciones
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
                                            @if($evaluacion->sub_estudio == 'N2')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="saludo2" name="saludo2" wire:model.defer="saludo2" wire:click="xsaludo" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$saludo2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="saludo2" class="font-medium text-gray-700">No agradece el tiempo de espera durante la transferencia desde el front</label>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="saludo3" name="saludo3" wire:model.defer="saludo3" wire:click="xsaludo" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$saludo3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="saludo3" class="font-medium text-gray-700">No realiza la presentación según script</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="saludo4" name="saludo4" wire:model.defer="saludo4" wire:click="xsaludo" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$saludo4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="saludo4" class="font-medium text-gray-700">No realiza la despedida según script</label>
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
                                                    <label for="manejosilencios2" class="font-medium text-gray-700">Deja al cliente en espera sin retomar antes de 30 segundos</label>
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
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="seguridad2" name="seguridad2" wire:model.defer="seguridad2" wire:click="xseguridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$seguridad2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="seguridad2" class="font-medium text-gray-700">Falla durante la explicación de antecedentes y/o cond. comerciales</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="seguridad3" name="seguridad3" wire:model.defer="seguridad3" wire:click="xseguridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$seguridad3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="seguridad3" class="font-medium text-gray-700">Falla durante la argumentación para retener</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="seguridad4" name="seguridad4" wire:model.defer="seguridad4" wire:click="xseguridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$seguridad4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="seguridad4" class="font-medium text-gray-700">Falla durante el acuerdo de cierre o pasos operacionales</label>
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
                                                    <label for="claridad2" class="font-medium text-gray-700">Falla durante la explicación de antecedentes y/o cond. comerciales</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="claridad3" name="claridad3" wire:model.defer="claridad3" wire:click="xclaridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$claridad3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="claridad3" class="font-medium text-gray-700">Falla durante la argumentación para retener</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="claridad4" name="claridad4" wire:model.defer="claridad4" wire:click="xclaridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$claridad4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="claridad4" class="font-medium text-gray-700">Falla durante el acuerdo de cierre o pasos operacionales</label>
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
                                <div class="px-4 py-5 bg-yellow-50 space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Errores Criticos que afectan a Entel</p>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">11 - Cumple los protocolos regulados por Subtel/Sernac - ({{$pecc_protocolosubtel1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecc_protocolosubtel2" name="pecc_protocolosubtel2" wire:model.defer="pecc_protocolosubtel2" wire:click="xprotocolosubtel" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_protocolosubtel2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecc_protocolosubtel2" class="font-medium text-gray-700">No valida o comprueba RUT del Titular</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecc_protocolosubtel3" name="pecc_protocolosubtel3" wire:model.defer="pecc_protocolosubtel3" wire:click="xprotocolosubtel" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_protocolosubtel3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecc_protocolosubtel3" class="font-medium text-gray-700">Realiza gestión con una persona distinta al titular</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecc_protocolosubtel4" name="pecc_protocolosubtel4" wire:model.defer="pecc_protocolosubtel4" wire:click="xprotocolosubtel" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_protocolosubtel4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecc_protocolosubtel4" class="font-medium text-gray-700">No indica reserva de número en caso de renunciar a la línea</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">12 - Cumple con los procedimientos establecidos por Entel - ({{$pecn_procedimientos1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_procedimientos2" name="pecn_procedimientos2" wire:model.defer="pecn_procedimientos2" wire:click="xprocedimientos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_procedimientos2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_procedimientos2" class="font-medium text-gray-700">Comete fraude al cliente y/o a Entel</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_procedimientos3" name="pecn_procedimientos3" wire:model.defer="pecn_procedimientos3" wire:click="xprocedimientos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_procedimientos3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_procedimientos3" class="font-medium text-gray-700">Descalifica o cuestiona a Entel frente al cliente</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_procedimientos4" name="pecn_procedimientos4" wire:model.defer="pecn_procedimientos4" wire:click="xprocedimientos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_procedimientos4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_procedimientos4" class="font-medium text-gray-700">Entrega información confidencial</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_procedimientos5" name="pecn_procedimientos5" wire:model.defer="pecn_procedimientos5" wire:click="xprocedimientos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_procedimientos5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_procedimientos5" class="font-medium text-gray-700">No registra ticket de mal ingreso por parte del front</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_procedimientos6" name="pecn_procedimientos6" wire:model.defer="pecn_procedimientos6" wire:click="xprocedimientos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_procedimientos6}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_procedimientos6" class="font-medium text-gray-700">No registra en sistema de Entel gestiones realizadas</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_procedimientos7" name="pecn_procedimientos7" wire:model.defer="pecn_procedimientos7" wire:click="xprocedimientos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_procedimientos7}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_procedimientos7" class="font-medium text-gray-700">No utiliza todas las herramientas de retencion disponibles</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_procedimientos8" name="pecn_procedimientos8" wire:model.defer="pecn_procedimientos8" wire:click="xprocedimientos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_procedimientos8}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_procedimientos8" class="font-medium text-gray-700">Realiza descuento, carga o beneficio fuera de procedimiento</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_procedimientos9" name="pecn_procedimientos9" wire:model.defer="pecn_procedimientos9" wire:click="xprocedimientos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_procedimientos9}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_procedimientos9" class="font-medium text-gray-700">No prioriza las herramientas de retención según procedimiento</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">13 - Cumple con los protocolos de la plataforma - ({{$pecu_protocoloplataforma1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_protocoloplataforma2" name="pecu_protocoloplataforma2" wire:model.defer="pecu_protocoloplataforma2" wire:click="xprotocoloplataforma" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_protocoloplataforma2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_protocoloplataforma2" class="font-medium text-gray-700">Desatiende el llamado o es poco profesional</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_protocoloplataforma3" name="pecu_protocoloplataforma3" wire:model.defer="pecu_protocoloplataforma3" wire:click="xprotocoloplataforma" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_protocoloplataforma3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_protocoloplataforma3" class="font-medium text-gray-700">Es grosero con el cliente durante la atención</label>
                                                </div>
                                            </div>
                                            @if($evaluacion->sub_estudio == 'N2')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecu_protocoloplataforma4" name="pecu_protocoloplataforma4" wire:model.defer="pecu_protocoloplataforma4" wire:click="xprotocoloplataforma" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_protocoloplataforma4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecu_protocoloplataforma4" class="font-medium text-gray-700">No libera la linea una vez finalizada la llamada</label>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_protocoloplataforma5" name="pecu_protocoloplataforma5" wire:model.defer="pecu_protocoloplataforma5" wire:click="xprotocoloplataforma" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_protocoloplataforma5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_protocoloplataforma5" class="font-medium text-gray-700">Transfiere o deriva incorrectamente</label>
                                                </div>
                                            </div>
                                            @if($evaluacion->sub_estudio == 'N3')
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="pecu_protocoloplataforma6" name="pecu_protocoloplataforma6" wire:model.defer="pecu_protocoloplataforma6" wire:click="xprotocoloplataforma" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_protocoloplataforma6}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="pecu_protocoloplataforma6" class="font-medium text-gray-700">No Realiza callback comprometido</label>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </fieldset>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-1 ">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-blue-50 space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Gestiones</p>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">7 - Analiza correctamente los antecedentes - ({{$pecu_antecedentes1}})</legend>

                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_antecedentes2" name="pecu_antecedentes2" wire:model.defer="pecu_antecedentes2" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_antecedentes2" class="font-medium text-gray-700">No valida correctamente las restricciones previas para gestionar</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_antecedentes3" name="pecu_antecedentes3" wire:model.defer="pecu_antecedentes3" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_antecedentes3" class="font-medium text-gray-700">Revisión incorrecta de condiciones comerciales del plan/bolsa/vas</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_antecedentes4" name="pecu_antecedentes4" wire:model.defer="pecu_antecedentes4" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_antecedentes4" class="font-medium text-gray-700">Revisión incorrecta de Nivel de Uso/Consumo y servicios asociados.</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_antecedentes5" name="pecu_antecedentes5" wire:model.defer="pecu_antecedentes5" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_antecedentes5" class="font-medium text-gray-700">Revisión incorrecta del detalle de la información contenida en la boleta</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_antecedentes6" name="pecu_antecedentes6" wire:model.defer="pecu_antecedentes6" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes6}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_antecedentes6" class="font-medium text-gray-700">Revisión incorrecta de gestiones anteriores</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_antecedentes7" name="pecu_antecedentes7" wire:model.defer="pecu_antecedentes7" wire:click="xantecedentes" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_antecedentes7}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_antecedentes7" class="font-medium text-gray-700">No valida o cumple con restricciones a la gestión de Renuncia/Retención</label>
                                                </div>
                                            </div>
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
                                                    <label for="pecu_infocompleta2" class="font-medium text-gray-700">Falla durante la explicación de condiciones comerciales actuales</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_infocompleta3" name="pecu_infocompleta3" wire:model.defer="pecu_infocompleta3" wire:click="xinfocompleta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocompleta3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_infocompleta3" class="font-medium text-gray-700">Falla durante la argumentación para retener</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_infocompleta4" name="pecu_infocompleta4" wire:model.defer="pecu_infocompleta4" wire:click="xinfocompleta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocompleta4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_infocompleta4" class="font-medium text-gray-700">Falla durante la explicación de desc. o compensaciones</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_infocompleta5" name="pecu_infocompleta5" wire:model.defer="pecu_infocompleta5" wire:click="xinfocompleta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocompleta5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_infocompleta5" class="font-medium text-gray-700">Falla sobre las modificaciones comerciales</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_infocompleta6" name="pecu_infocompleta6" wire:model.defer="pecu_infocompleta6" wire:click="xinfocompleta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocompleta6}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_infocompleta6" class="font-medium text-gray-700">Falla durante el acuerdo de cierre o resumen final</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">9 - Entrega información Correcta - ({{$pecu_infocorrecta1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_infocorrecta2" name="pecu_infocorrecta2" wire:model.defer="pecu_infocorrecta2" wire:click="xinfocorrecta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocorrecta2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_infocorrecta2" class="font-medium text-gray-700">Falla durante la explicación de condiciones comerciales actuales</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_infocorrecta3" name="pecu_infocorrecta3" wire:model.defer="pecu_infocorrecta3" wire:click="xinfocorrecta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocorrecta3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_infocorrecta3" class="font-medium text-gray-700">Falla durante la argumentación para retener</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_infocorrecta4" name="pecu_infocorrecta4" wire:model.defer="pecu_infocorrecta4" wire:click="xinfocorrecta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocorrecta4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_infocorrecta4" class="font-medium text-gray-700">Falla durante la explicación de desc. o compensaciones</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_infocorrecta5" name="pecu_infocorrecta5" wire:model.defer="pecu_infocorrecta5" wire:click="xinfocorrecta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocorrecta5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_infocorrecta5" class="font-medium text-gray-700">Falla sobre las modificaciones comerciales</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_infocorrecta6" name="pecu_infocorrecta6" wire:model.defer="pecu_infocorrecta6" wire:click="xinfocorrecta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocorrecta6}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_infocorrecta6" class="font-medium text-gray-700">Falla durante el acuerdo de cierre o resumen final </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">10 - Gestiona correctamente en sistema los cambios o solicitudes - ({{$pecu_gestiona1}})</legend>

                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_gestiona2" name="pecu_gestiona2" wire:model.defer="pecu_gestiona2" wire:click="xgestiona" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_gestiona2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_gestiona2" class="font-medium text-gray-700">Falla durante la generación de descuento o compensaciones</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_gestiona3" name="pecu_gestiona3" wire:model.defer="pecu_gestiona3" wire:click="xgestiona" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_gestiona3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_gestiona3" class="font-medium text-gray-700">Falla durante la modificación comercial</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_gestiona4" name="pecu_gestiona4" wire:model.defer="pecu_gestiona4" wire:click="xgestiona" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_gestiona4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_gestiona4" class="font-medium text-gray-700">Falla durante el ingreso de tickets a otras áreas de Entel</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="mt-5 shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-gray-50 space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Caracterización</p>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">14 - Caracterización de la Interacción</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="caracterizacion1" name="caracterizacion1" wire:model.defer="caracterizacion1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$caracterizacion1}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="caracterizacion1" class="font-medium text-gray-700">Cliente es retenido o desiste de continuar con la renunciar</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="caracterizacion2" name="caracterizacion2" wire:model.defer="caracterizacion2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$caracterizacion2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="caracterizacion2" class="font-medium text-gray-700">Cliente insatisfecho con Entel</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="caracterizacion3" name="caracterizacion3" wire:model.defer="caracterizacion3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$caracterizacion3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="caracterizacion3" class="font-medium text-gray-700">Cliente con oferta de la competencia</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="caracterizacion4" name="caracterizacion4" wire:model.defer="caracterizacion4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$caracterizacion4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="caracterizacion4" class="font-medium text-gray-700">Cliente justifica su renuncia por situación económica</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="caracterizacion5" name="caracterizacion5" wire:model.defer="caracterizacion5" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$caracterizacion5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="caracterizacion5" class="font-medium text-gray-700">Cliente menciona cambio en sus condiciones de vida y/o uso del servicio</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="caracterizacion6" name="caracterizacion6" wire:model.defer="caracterizacion6" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$caracterizacion6}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="caracterizacion6" class="font-medium text-gray-700">Cliente no tiene intención de renunciar sino que busca beneficios</label>
                                                </div>
                                            </div>

                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="caracterizacion7" name="caracterizacion7" wire:model.defer="caracterizacion7" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$caracterizacion7}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="caracterizacion7" class="font-medium text-gray-700">Mal Ingreso en 1° nivel</label>
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
