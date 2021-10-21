{{--
Plantilla: Pauta Call Voz
Versión 5
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
        <div class="mb-10">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="mt-5 md:mt-0 md:col-span-1 ">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <p class="font-bold text-xl">Gestión 1</p>
                            <div class="mt-4">
                                <span class="text-gray-700 text-sm">Motivo del Llamado</span>
                                <div class="mt-2 text-sm">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="motivo" wire:model.defer="motivo" value="Reclamo" {{ $motivo == "Reclamo" ? 'checked' : '' }}>
                                        <p class="ml-2">Reclamo</p>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio" name="motivo" wire:model.defer="motivo" value="Consulta" {{ $motivo == "Consulta" ? 'checked' : '' }}>
                                        <p class="ml-2">Consulta</p>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio" name="motivo" wire:model.defer="motivo" value="Requerimiento" {{ $motivo == "Requerimiento" ? 'checked' : '' }}>
                                        <p class="ml-2">Requerimiento</p>
                                    </label>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('motivo') }}</small>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="tipogestion1" class="block text-sm font-medium text-gray-700">Tipo de Gestión</label>
                                <select id="tipogestion1" name="tipogestion1" wire:model.defer="tipogestion1" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option></option>
                                    @foreach($gestiones as $gestion)
                                        <option value="{{$gestion->name}}" {{ ( $gestion->name == $tipogestion1) ? 'selected' : '' }}>
                                            {{$gestion->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <small class="text-red-600 font-bold">{{ $errors->first('tipogestion1') }}</small>
                            <div class="mt-4">
                                <span class="text-gray-700 text-sm">Detección de necesidades/sondeo/analisis/revisión</span>
                                <div class="mt-2 text-sm">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="deteccion1" wire:model.lazy="deteccion1" value="Si" {{ $deteccion1 == "Si" ? 'checked' : '' }}>
                                        <p class="ml-2">Sí</p>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio" name="deteccion1" wire:model.lazy="deteccion1" value="No" {{ $deteccion1 == "No" ? 'checked' : '' }}>
                                        <p class="ml-2">No</p>
                                    </label>
                                </div>
                            </div>
                            <small class="text-red-600 font-bold">{{ $errors->first('deteccion1') }}</small>
                            <div class="mt-4">
                                <span class="text-gray-700 text-sm">Entrega de información correcta y completa</span>
                                <div class="mt-2 text-sm">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="infocorrecta1" wire:model.lazy="infocorrecta1" value="Si" {{ $infocorrecta1 == "Si" ? 'checked' : '' }}>
                                        <p class="ml-2">Sí</p>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio" name="infocorrecta1" wire:model.lazy="infocorrecta1" value="No" {{ $infocorrecta1 == "No" ? 'checked' : '' }}>
                                        <p class="ml-2">No</p>
                                    </label>
                                </div>
                            </div>
                            <small class="text-red-600 font-bold">{{ $errors->first('infocorrecta1') }}</small>
                            <div class="mt-4">
                                <span class="text-gray-700 text-sm">Gestiona según proced. en sistema</span>
                                <div class="mt-2 text-sm">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="gestiona1" wire:model.lazy="gestiona1" value="Si" {{ $gestiona1 == "Si" ? 'checked' : '' }}>
                                        <p class="ml-2">Sí</p>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio" name="gestiona1" wire:model.lazy="gestiona1" value="No" {{ $gestiona1 == "No" ? 'checked' : '' }}>
                                        <p class="ml-2">No</p>
                                    </label>
                                </div>
                            </div>
                            <small class="text-red-600 font-bold">{{ $errors->first('gestiona1') }}</small>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="resolucion1" class="block text-sm font-medium text-gray-700">Ejecutivo Resuelve el problema de origen en línea</label>
                                <select id="resolucion1" name="resolucion1" wire:model.defer="resolucion1" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option></option>
                                    @foreach($resoluciones as $resolucion)
                                        <option value="{{$resolucion->name}}" {{ ( $resolucion->name == $resolucion1) ? 'selected' : '' }}>
                                            {{$resolucion->name}}
                                        </option>
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
                                <select id="tipogestion2" name="tipogestion2" wire:model.defer="tipogestion2" wire:change="xgestion2" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option></option>
                                    @foreach($gestiones as $gestion)
                                        <option value="{{$gestion->name}}" {{ ( $gestion->name == $tipogestion2) ? 'selected' : '' }}>
                                            {{$gestion->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <small class="text-red-600 font-bold">{{ $errors->first('tipogestion2') }}</small>
                            <div class="mt-4">
                                <span class="text-gray-700 text-sm">Detección de necesidades/sondeo/analisis/revisión</span>
                                <div class="mt-2 text-sm">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="deteccion2" wire:model.lazy="deteccion2" wire:change="xgestion2" value="Si" {{ $deteccion2 == "Si" ? 'checked' : '' }}>
                                        <p class="ml-2">Sí</p>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio" name="deteccion2" wire:model.lazy="deteccion2" wire:change="xgestion2" value="No" {{ $deteccion2 == "No" ? 'checked' : '' }}>
                                        <p class="ml-2">No</p>
                                    </label>
                                </div>
                            </div>
                            <small class="text-red-600 font-bold">{{ $errors->first('deteccion2') }}</small>
                            <div class="mt-4">
                                <span class="text-gray-700 text-sm">Entrega de información correcta y completa</span>
                                <div class="mt-2 text-sm">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="infocorrecta2" wire:model.lazy="infocorrecta2" wire:change="xgestion2" value="Si" {{ $infocorrecta2 == "Si" ? 'checked' : '' }}>
                                        <p class="ml-2">Sí</p>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio" name="infocorrecta2" wire:model.lazy="infocorrecta2" wire:change="xgestion2" value="No" {{ $infocorrecta2 == "No" ? 'checked' : '' }}>
                                        <p class="ml-2">No</p>
                                    </label>
                                </div>
                            </div>
                            <small class="text-red-600 font-bold">{{ $errors->first('infocorrecta2') }}</small>
                            <div class="mt-4">
                                <span class="text-gray-700 text-sm">Gestiona según proced. en sistema</span>
                                <div class="mt-2 text-sm">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="gestiona2" wire:model.lazy="gestiona2" wire:change="xgestion2" value="Si" {{ $gestiona2 == "Si" ? 'checked' : '' }}>
                                        <p class="ml-2">Sí</p>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio" name="gestiona2" wire:model.lazy="gestiona2" wire:change="xgestion2" value="No" {{ $gestiona2 == "No" ? 'checked' : '' }}>
                                        <p class="ml-2">No</p>
                                    </label>
                                </div>
                            </div>
                            <small class="text-red-600 font-bold">{{ $errors->first('gestiona2') }}</small>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="resolucion2" class="block text-sm font-medium text-gray-700">Ejecutivo Resuelve el problema de origen en línea</label>
                                <select id="resolucion2" name="resolucion2" wire:model.defer="resolucion2" wire:change="xgestion2" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option></option>
                                    @foreach($resoluciones as $resolucion)
                                        <option value="{{$resolucion->name}}" {{ ( $resolucion->name == $resolucion2) ? 'selected' : '' }}>
                                            {{$resolucion->name}}
                                        </option>
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
                                <select id="tipogestion3" name="tipogestion3" wire:model.defer="tipogestion3" wire:change="xgestion3" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option></option>
                                    @foreach($gestiones as $gestion)
                                        <option value="{{$gestion->name}}" {{ ( $gestion->name == $tipogestion3) ? 'selected' : '' }}>
                                            {{$gestion->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <small class="text-red-600 font-bold">{{ $errors->first('tipogestion3') }}</small>
                            <div class="mt-2">
                                <span class="text-gray-700 text-sm">Detección de necesidades/sondeo/analisis/revisión</span>
                                <div class="mt-1 text-sm">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="deteccion3" wire:model.lazy="deteccion3" wire:change="xgestion3" value="Si" {{ $deteccion3 == "Si" ? 'checked' : '' }}>
                                        <p class="ml-2">Sí</p>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio" name="deteccion3" wire:model.lazy="deteccion3" wire:change="xgestion3" value="No" {{ $deteccion3 == "No" ? 'checked' : '' }}>
                                        <p class="ml-2">No</p>
                                    </label>
                                </div>
                            </div>
                            <small class="text-red-600 font-bold">{{ $errors->first('deteccion3') }}</small>
                            <div class="mt-1">
                                <span class="text-gray-700 text-sm">Entrega de información correcta y completa</span>
                                <div class="mt-1 text-sm">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="infocorrecta3" wire:model.lazy="infocorrecta3" wire:change="xgestion3" value="Si" {{ $infocorrecta3 == "Si" ? 'checked' : '' }}>
                                        <p class="ml-2">Sí</p>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio" name="infocorrecta3" wire:model.lazy="infocorrecta3" wire:change="xgestion3" value="No" {{ $infocorrecta3 == "No" ? 'checked' : '' }}>
                                        <p class="ml-2">No</p>
                                    </label>
                                </div>
                            </div>
                            <small class="text-red-600 font-bold">{{ $errors->first('infocorrecta3') }}</small>
                            <div class="mt-1">
                                <span class="text-gray-700 text-sm">Gestiona según proced. en sistema</span>
                                <div class="mt-1 text-sm">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="gestiona3" wire:model.lazy="gestiona3" wire:change="xgestion3" value="Si" {{ $gestiona3 == "Si" ? 'checked' : '' }}>
                                        <p class="ml-2">Sí</p>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio" name="gestiona3" wire:model.lazy="gestiona3" wire:change="xgestion3" value="No" {{ $gestiona3 == "No" ? 'checked' : '' }}>
                                        <p class="ml-2">No</p>
                                    </label>
                                </div>
                            </div>
                            <small class="text-red-600 font-bold">{{ $errors->first('gestiona3') }}</small>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="resolucion3" class="block text-sm font-medium text-gray-700">Ejecutivo Resuelve el problema de origen en línea</label>
                                <select id="resolucion3" name="resolucion3" wire:model.defer="resolucion3" wire:change="xgestion3" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option></option>
                                    @foreach($resoluciones as $resolucion)
                                        <option value="{{$resolucion->name}}" {{ ( $resolucion->name == $resolucion3) ? 'selected' : '' }}>
                                            {{$resolucion->name}}
                                        </option>
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
                                        <legend class="text-base font-medium text-gray-900">1 - Protocolo de Saludo y Despedida - ({{$saludo1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="saludo2" name="saludo2" wire:model.defer="saludo2" wire:click="xsaludo" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$saludo2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="saludo2" class="font-medium text-gray-700">No hace Bienvenida</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="saludo3" name="saludo3" wire:model.defer="saludo3" wire:click="xsaludo" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$saludo3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="saludo3" class="font-medium text-gray-700">No se despide</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="saludo4" name="saludo4" wire:model.defer="saludo4" wire:click="xsaludo" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$saludo4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="saludo4" class="font-medium text-gray-700">No utiliza contexto</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">2 - Disposición para la atención - ({{$disposicion1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="disposicion2" name="disposicion2" wire:model.defer="disposicion2" wire:click="xdisposicion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$disposicion2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="disposicion2" class="font-medium text-gray-700">Interrumpe</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="disposicion3" name="disposicion3" wire:model.defer="disposicion3" wire:click="xdisposicion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$disposicion3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="disposicion3" class="font-medium text-gray-700">No retiene información</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">3 - Cordialidad y reducción de conflicto - ({{$cordialidad1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="cordialidad2" name="cordialidad2" wire:model.defer="cordialidad2" wire:click="xcordialidad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cordialidad2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="cordialidad2" class="font-medium text-gray-700">No muestra interés</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="cordialidad3" name="cordialidad3" wire:model.defer="cordialidad3" wire:click="xcordialidad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cordialidad3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="cordialidad3" class="font-medium text-gray-700">No reduce conflicto</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="cordialidad4" name="cordialidad4" wire:model.defer="cordialidad4" wire:click="xcordialidad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cordialidad4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="cordialidad4" class="font-medium text-gray-700">No manifiesta disposición</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="cordialidad5" name="cordialidad5" wire:model.defer="cordialidad5" wire:click="xcordialidad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cordialidad5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="cordialidad5" class="font-medium text-gray-700">No pide disculpas</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">4 - Manejo de Silencios - ({{$manejosilencios1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="manejosilencios2" name="manejosilencios2" wire:model.defer="manejosilencios2" wire:click="xmanejosilencios" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$manejosilencios2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="manejosilencios2" class="font-medium text-gray-700">No informa Pausa/Hold</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="manejosilencios3" name="manejosilencios3" wire:model.defer="manejosilencios3" wire:click="xmanejosilencios" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$manejosilencios3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="manejosilencios3" class="font-medium text-gray-700">No interactua</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="manejosilencios4" name="manejosilencios4" wire:model.defer="manejosilencios4" wire:click="xmanejosilencios" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$manejosilencios4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="manejosilencios4" class="font-medium text-gray-700">No agradece espera</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">5 - Seguridad y Dominio en la conversación con el Cliente - ({{$seguridad1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="seguridad2" name="seguridad2" wire:model.defer="seguridad2" wire:click="xseguridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$seguridad2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="seguridad2" class="font-medium text-gray-700">Inseguridad en conocimientos</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="seguridad3" name="seguridad3" wire:model.defer="seguridad3" wire:click="xseguridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$seguridad3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="seguridad3" class="font-medium text-gray-700">Mal manejo de la información</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="seguridad4" name="seguridad4" wire:model.defer="seguridad4" wire:click="xseguridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$seguridad4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="seguridad4" class="font-medium text-gray-700">Se contradice y autocorrige</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="seguridad5" name="seguridad5" wire:model.defer="seguridad5" wire:click="xseguridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$seguridad5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="seguridad5" class="font-medium text-gray-700">No informa el motivo de uso de datos personales</label>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">6 - Comunicación simple y empática - ({{$comunicacion1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="comunicacion2" name="comunicacion2" wire:model.defer="comunicacion2" wire:click="xcomunicacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$comunicacion2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="comunicacion2" class="font-medium text-gray-700">Trato cercano y cordial</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="comunicacion3" name="comunicacion3" wire:model.defer="comunicacion3" wire:click="xcomunicacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$comunicacion3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="comunicacion3" class="font-medium text-gray-700">Palabras coloquiales</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="comunicacion4" name="comunicacion4" wire:model.defer="comunicacion4" wire:click="xcomunicacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$comunicacion4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="comunicacion4" class="font-medium text-gray-700">Usa tecnicismos</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">7 - Educar al Cliente en Canales de Autotención - ({{$educacliente1}})</legend>
                                        <div class="hidden mt-4">
                                            <span class="text-gray-700">Educar al Cliente Padre</span>
                                            <div class="mt-1 text-sm">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="educacliente1" wire:model.defer="educacliente1" value="Si" {{ $educacliente1 == "Si" ? 'checked' : '' }}>
                                                    <p class="ml-2">Si</p>
                                                </label>
                                                <label class="inline-flex items-center ml-6">
                                                    <input type="radio" class="form-radio" name="educacliente1" wire:model.defer="educacliente1" value="No" {{ $educacliente1 == "No" ? 'checked' : '' }}>
                                                    <p class="ml-2">No</p>
                                                </label>
                                                <label class="inline-flex items-center ml-6">
                                                    <input type="radio" class="form-radio" name="educacliente1" wire:model.defer="educacliente1" value="No Aplica" {{ $educacliente1 == "No Aplica" ? 'checked' : '' }}>
                                                    <p class="ml-2">No Aplica</p>
                                                </label>
                                            </div>
                                        </div>
                                        <small class="text-red-600 font-bold">{{ $errors->first('educacliente1') }}</small>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="educacliente2" name="educacliente2" wire:model.defer="educacliente2" wire:click="xeducacliente" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$educacliente2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="educacliente2" class="font-medium text-gray-700">No menciona otros canales</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="educacliente3" name="educacliente3" wire:model.defer="educacliente3" wire:click="xeducacliente" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$educacliente3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="educacliente3" class="font-medium text-yellow-500">No Aplica - Por posible molestia</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="educacliente4" name="educacliente4" wire:model.defer="educacliente4" wire:click="xeducacliente" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$educacliente4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="educacliente4" class="font-medium text-yellow-500">No Aplica - Sin opciones</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">8 - Aseguramiento - ({{$aseguramiento1}})</legend>
                                        <div class="hidden mt-4">
                                            <span class="text-gray-700">Aseguramiento Padre</span>
                                            <div class="mt-1 text-sm">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="aseguramiento1" wire:model.defer="aseguramiento1" value="Si" {{ $aseguramiento1 == "Si" ? 'checked' : '' }}>
                                                    <p class="ml-2">Si</p>
                                                </label>
                                                <label class="inline-flex items-center ml-6">
                                                    <input type="radio" class="form-radio" name="aseguramiento1" wire:model.defer="aseguramiento1" value="No" {{ $aseguramiento1 == "No" ? 'checked' : '' }}>
                                                    <p class="ml-2">No</p>
                                                </label>
                                                <label class="inline-flex items-center ml-6">
                                                    <input type="radio" class="form-radio" name="aseguramiento1" wire:model.defer="aseguramiento1" value="No Aplica" {{ $aseguramiento1 == "No Aplica" ? 'checked' : '' }}>
                                                    <p class="ml-2">No Aplica</p>
                                                </label>
                                            </div>
                                        </div>
                                        <small class="text-red-600 font-bold">{{ $errors->first('aseguramiento1') }}</small>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="aseguramiento2" name="aseguramiento2" wire:model.defer="aseguramiento2" wire:click="xaseguramiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$aseguramiento2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="aseguramiento2" class="font-medium text-gray-700">No valida información entregada</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="aseguramiento3" name="aseguramiento3" wire:model.defer="aseguramiento3" wire:click="xaseguramiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$aseguramiento3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="aseguramiento3" class="font-medium text-yellow-500">N/A por transfer/Callback</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="aseguramiento4" name="aseguramiento4" wire:model.defer="aseguramiento4" wire:click="xaseguramiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$aseguramiento4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="aseguramiento4" class="font-medium text-yellow-500">N/A canal incorrecto</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="aseguramiento5" name="aseguramiento5" wire:model.defer="aseguramiento5" wire:click="xaseguramiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$aseguramiento5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="aseguramiento5" class="font-medium text-yellow-500">N/A por posible molestia</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="aseguramiento6" name="aseguramiento6" wire:model.defer="aseguramiento6" wire:click="xaseguramiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$aseguramiento6}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="aseguramiento6" class="font-medium text-yellow-500">N/A cliente asegura info</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">9 - Ofrecimiento Comercial - ({{$ofrecimientocomercial1}})</legend>
                                        <div class="hidden mt-4">
                                            <span class="text-gray-700">Ofrecimiento Comercial Padre</span>
                                            <div class="mt-1 text-sm">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="ofrecimientocomercial1" wire:model.defer="ofrecimientocomercial1" value="Si" {{ $ofrecimientocomercial1 == "Si" ? 'checked' : '' }}>
                                                    <p class="ml-2">Si</p>
                                                </label>
                                                <label class="inline-flex items-center ml-6">
                                                    <input type="radio" class="form-radio" name="ofrecimientocomercial1" wire:model.defer="ofrecimientocomercial1" value="No" {{ $ofrecimientocomercial1 == "No" ? 'checked' : '' }}>
                                                    <p class="ml-2">No</p>
                                                </label>
                                                <label class="inline-flex items-center ml-6">
                                                    <input type="radio" class="form-radio" name="ofrecimientocomercial1" wire:model.defer="ofrecimientocomercial1" value="No Aplica" {{ $ofrecimientocomercial1 == "No Aplica" ? 'checked' : '' }}>
                                                    <p class="ml-2">No Aplica</p>
                                                </label>
                                            </div>
                                        </div>
                                        <small class="text-red-600 font-bold">{{ $errors->first('ofrecimientocomercial1') }}</small>

                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="ofrecimientocomercial2" name="ofrecimientocomercial2" wire:model.defer="ofrecimientocomercial2" wire:click="xofrecimientocomercial" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ofrecimientocomercial2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="ofrecimientocomercial2" class="font-medium text-gray-700">No Asesora</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="ofrecimientocomercial3" name="ofrecimientocomercial3" wire:model.defer="ofrecimientocomercial3" wire:click="xofrecimientocomercial" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ofrecimientocomercial3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="ofrecimientocomercial3" class="font-medium text-gray-700">No Ofrece Acorde</label>
                                                </div>
                                            </div>


                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="ofrecimientocomercial4" name="ofrecimientocomercial4" wire:model.defer="ofrecimientocomercial4" wire:click="xofrecimientocomercial" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ofrecimientocomercial4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="ofrecimientocomercial4" class="font-medium text-yellow-500">No Aplica - Plataforma Especialista</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="ofrecimientocomercial5" name="ofrecimientocomercial5" wire:model.defer="ofrecimientocomercial5" wire:click="xofrecimientocomercial" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ofrecimientocomercial5}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="ofrecimientocomercial5" class="font-medium text-yellow-500">No Aplica - Cliente Indispuesto</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="ofrecimientocomercial6" name="ofrecimientocomercial6" wire:model.defer="ofrecimientocomercial6" wire:click="xofrecimientocomercial" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ofrecimientocomercial6}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="ofrecimientocomercial6" class="font-medium text-yellow-500">No Aplica - No es titular o usuario registrado</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="ofrecimientocomercial7" name="ofrecimientocomercial7" wire:model.defer="ofrecimientocomercial7" wire:click="xofrecimientocomercial" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ofrecimientocomercial7}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="ofrecimientocomercial7" class="font-medium text-yellow-500">No Aplica - Sin Factibilidad Comercial</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="ofrecimientocomercial8" name="ofrecimientocomercial8" wire:model.defer="ofrecimientocomercial8" wire:click="xofrecimientocomercial" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ofrecimientocomercial8}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="ofrecimientocomercial8" class="font-medium text-yellow-500">No Aplica - Sin Factibilidad Técnica</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="ofrecimientocomercial9" name="ofrecimientocomercial9" wire:model.defer="ofrecimientocomercial9" wire:click="xofrecimientocomercial" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ofrecimientocomercial9}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="ofrecimientocomercial9" class="font-medium text-yellow-500">No Aplica - Problemas Técnicos</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="ofrecimientocomercial10" name="ofrecimientocomercial10" wire:model.defer="ofrecimientocomercial10" wire:click="xofrecimientocomercial" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ofrecimientocomercial10}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="ofrecimientocomercial10" class="font-medium text-yellow-500">No Aplica - Otros</label>
                                                </div>
                                            </div>



                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">10 - Frases de Enganche y Argumentación - ({{$frasesenganche1}})</legend>
                                        <div class="hidden mt-4">
                                            <span class="text-gray-700">Ofrecimiento Padre</span>
                                            <div class="mt-1 text-sm">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="frasesenganche1" wire:model.defer="frasesenganche1" value="Si" {{ $frasesenganche1 == "Si" ? 'checked' : '' }}>
                                                    <p class="ml-2">Si</p>
                                                </label>
                                                <label class="inline-flex items-center ml-6">
                                                    <input type="radio" class="form-radio" name="frasesenganche1" wire:model.defer="frasesenganche1" value="No" {{ $frasesenganche1 == "No" ? 'checked' : '' }}>
                                                    <p class="ml-2">No</p>
                                                </label>
                                                <label class="inline-flex items-center ml-6">
                                                    <input type="radio" class="form-radio" name="frasesenganche1" wire:model.defer="frasesenganche1" value="No Aplica" {{ $frasesenganche1 == "No Aplica" ? 'checked' : '' }}>
                                                    <p class="ml-2">No Aplica</p>
                                                </label>
                                            </div>
                                        </div>
                                        <small class="text-red-600 font-bold">{{ $errors->first('frasesenganche1') }}</small>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="frasesenganche2" name="frasesenganche2" wire:model.defer="frasesenganche2" wire:click="xfrasesenganche" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$frasesenganche2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="frasesenganche2" class="font-medium text-gray-700">No argumenta</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="frasesenganche3" name="frasesenganche3" wire:model.defer="frasesenganche3" wire:click="xfrasesenganche" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$frasesenganche3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="frasesenganche3" class="font-medium text-gray-700">Usa argumentos erroneos</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="frasesenganche4" name="frasesenganche4" wire:model.defer="frasesenganche4" wire:click="xfrasesenganche" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$frasesenganche4}}>
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
                                                    <input id="pecu_deteccion" name="pecu_deteccion" wire:model.lazy="pecu_deteccion" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_deteccion}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_deteccion" class="font-medium text-gray-700">Error grave en la detección de necesidades y en el analisis de la información</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_gestionincorrecta" name="pecu_gestionincorrecta" wire:model.lazy="pecu_gestionincorrecta" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_gestionincorrecta}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_gestionincorrecta" class="font-medium text-gray-700">Error grave en la gestión por Info incorrecta o incompleta</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_noresuelve" name="pecu_noresuelve" wire:model.lazy="pecu_noresuelve" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_noresuelve}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_noresuelve" class="font-medium text-gray-700">Error grave en la gestión por no resolver o resolver de forma errónea</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_atenciongrosera" name="pecu_atenciongrosera" wire:model.defer="pecu_atenciongrosera" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_atenciongrosera}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_atenciongrosera" class="font-medium text-gray-700">Atendió de forma grosera</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_pocoprofesional" name="pecu_pocoprofesional" wire:model.defer="pecu_pocoprofesional" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_pocoprofesional}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_pocoprofesional" class="font-medium text-gray-700">Se desentiende o es poco profesional</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_manipulacliente" name="pecu_manipulacliente" wire:model.defer="pecu_manipulacliente" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_manipulacliente}}>
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
                                                    <input id="pecn_nosondea" name="pecn_nosondea" wire:model.defer="pecn_nosondea" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_nosondea}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_nosondea" class="font-medium text-gray-700">No sondea motivo de renuncia o no Retiene</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_descalificaentel" name="pecn_descalificaentel" wire:model.defer="pecn_descalificaentel" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_descalificaentel}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_descalificaentel" class="font-medium text-gray-700">Descalificó a ENTEL</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_beneficiofueraproc" name="pecn_beneficiofueraproc" wire:model.defer="pecn_beneficiofueraproc" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_beneficiofueraproc}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_beneficiofueraproc" class="font-medium text-gray-700">Entrega Beneficio o Excepción comercial fuera de Procedimiento</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_fraude" name="pecn_fraude" wire:model.defer="pecn_fraude" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_fraude}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_fraude" class="font-medium text-gray-700">Fraude</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_noliberalinea" name="pecn_noliberalinea" wire:model.defer="pecn_noliberalinea" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_noliberalinea}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_noliberalinea" class="font-medium text-gray-700">No libera la línea una vez finalizada la llamada</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_factibilidad" name="pecn_factibilidad" wire:model.defer="pecn_factibilidad" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_factibilidad}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_factibilidad" class="font-medium text-gray-700">Validación de Factibilidad Técnica y Comercial</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_notipificasistema" name="pecn_notipificasistema" wire:model.defer="pecn_notipificasistema" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_notipificasistema}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_notipificasistema" class="font-medium text-gray-700">Ingreso a Sistema</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_otragestion" name="pecn_otragestion" wire:model.defer="pecn_otragestion" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_otragestion}}>
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
                                                    <input id="pecc_niegaescalamiento" name="pecc_niegaescalamiento" wire:model.defer="pecc_niegaescalamiento" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_niegaescalamiento}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecc_niegaescalamiento" class="font-medium text-gray-700">Niega Escalamiento o Ingreso de Reclamo</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecc_omiteinformacion" name="pecc_omiteinformacion" wire:model.defer="pecc_omiteinformacion" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_omiteinformacion}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecc_omiteinformacion" class="font-medium text-gray-700">Omite o Indica erróneamente información que es regulada legalmente</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecc_infoconfidencial" name="pecc_infoconfidencial" wire:model.defer="pecc_infoconfidencial" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_infoconfidencial}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecc_infoconfidencial" class="font-medium text-gray-700">Entregó información confidencial</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecc_cierrenegocios" name="pecc_cierrenegocios" wire:model.defer="pecc_cierrenegocios" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_cierrenegocios}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecc_cierrenegocios" class="font-medium text-gray-700">Cierre de negocios</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecc_novalidadatos" name="pecc_novalidadatos" wire:model.defer="pecc_novalidadatos" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_novalidadatos}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecc_novalidadatos" class="font-medium text-gray-700">No Valida correctamente los datos personales del cliente</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecc_despacho" name="pecc_despacho" wire:model.defer="pecc_despacho" wire:change="xatributospec" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_despacho}}>
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
                                            <select id="pec_responsable" name="pec_responsable" wire:model.defer="pec_responsable" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option></option>
                                                @foreach($pecresponsables as $pecresponsable)
                                                    <option value="{{$pecresponsable->name}}" {{ ( $pecresponsable->name == $pec_responsable) ? 'selected' : '' }}>
                                                        {{$pecresponsable->name}}
                                                    </option>
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
                                            <select id="otro_ruidoenllamada" name="otro_ruidoenllamada" wire:model.defer="otro_ruidoenllamada" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option></option>
                                                @foreach($ruidos as $ruido)
                                                    <option value="{{$ruido->name}}" {{ ( $ruido->name == $otro_ruidoenllamada) ? 'selected' : '' }}>
                                                        {{$ruido->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <small class="text-red-600 font-bold">{{ $errors->first('otro_ruidoenllamada') }}</small>
                                        <div class="mt-4">
                                            <span class="text-gray-700 text-sm">Uso de frases tipo o scripts para la comunicación</span>
                                            <div class="mt-1 text-sm">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="otro_frasesyscripts" wire:model.lazy="otro_frasesyscripts" value="Si" {{ $otro_frasesyscripts == "Si" ? 'checked' : '' }}>
                                                    <p class="ml-2">Sí</p>
                                                </label>
                                                <label class="inline-flex items-center ml-6">
                                                    <input type="radio" class="form-radio" name="otro_frasesyscripts" wire:model.lazy="otro_frasesyscripts" value="No" {{ $otro_frasesyscripts == "No" ? 'checked' : '' }}>
                                                    <p class="ml-2">No</p>
                                                </label>
                                            </div>
                                            <small class="text-red-600 font-bold">{{ $errors->first('otro_frasesyscripts') }}</small>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="otro_tiponegocio" class="block text-sm font-medium text-gray-700">Tipo de Negocio</label>
                                            <select id="otro_tiponegocio" name="otro_tiponegocio" wire:model.defer="otro_tiponegocio" wire:change="xotronegocio" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option></option>
                                                @foreach($tiposnegocio as $tiponegocio)
                                                    <option value="{{$tiponegocio->name}}" {{ ( $tiponegocio->name == $otro_tiponegocio) ? 'selected' : '' }}>
                                                        {{$tiponegocio->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <small class="text-red-600 font-bold">{{ $errors->first('otro_tiponegocio') }}</small>
                                        <div class="mt-4">
                                            <span class="text-gray-700 text-sm">Ofrecimiento de más de una Línea</span>
                                            <div class="mt-1 text-sm">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="otro_ofrecimientomultilinea" wire:model.lazy="otro_ofrecimientomultilinea" value="Si" {{ $otro_ofrecimientomultilinea == "Si" ? 'checked' : '' }}>
                                                    <p class="ml-2">Sí</p>
                                                </label>
                                                <label class="inline-flex items-center ml-6">
                                                    <input type="radio" class="form-radio" name="otro_ofrecimientomultilinea" wire:model.lazy="otro_ofrecimientomultilinea" value="No" {{ $otro_ofrecimientomultilinea == "No" ? 'checked' : '' }}>
                                                    <p class="ml-2">No</p>
                                                </label>
                                            </div>
                                            <small class="text-red-600 font-bold">{{ $errors->first('otro_ofrecimientomultilinea') }}</small>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-gray-700 text-sm">Ofrecimiento de equipo</span>
                                            <div class="mt-1 text-sm">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="otro_ofrecimientoequipo" wire:model.lazy="otro_ofrecimientoequipo" value="Si" {{ $otro_ofrecimientoequipo == "Si" ? 'checked' : '' }}>
                                                    <p class="ml-2">Sí</p>
                                                </label>
                                                <label class="inline-flex items-center ml-6">
                                                    <input type="radio" class="form-radio" name="otro_ofrecimientoequipo" wire:model.lazy="otro_ofrecimientoequipo" value="No" {{ $otro_ofrecimientoequipo == "No" ? 'checked' : '' }}>
                                                    <p class="ml-2">No</p>
                                                </label>
                                            </div>
                                            <small class="text-red-600 font-bold">{{ $errors->first('otro_ofrecimientoequipo') }}</small>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-gray-700 text-sm">Ofrecimiento de accesorios</span>
                                            <div class="mt-1 text-sm">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="otro_ofrecimientoaccesorio" wire:model.lazy="otro_ofrecimientoaccesorio" value="Si" {{ $otro_ofrecimientoaccesorio == "Si" ? 'checked' : '' }}>
                                                    <p class="ml-2">Sí</p>
                                                </label>
                                                <label class="inline-flex items-center ml-6">
                                                    <input type="radio" class="form-radio" name="otro_ofrecimientoaccesorio" wire:model.lazy="otro_ofrecimientoaccesorio" value="No" {{ $otro_ofrecimientoaccesorio == "No" ? 'checked' : '' }}>
                                                    <p class="ml-2">No</p>
                                                </label>
                                            </div>
                                            <small class="text-red-600 font-bold">{{ $errors->first('otro_ofrecimientoaccesorio') }}</small>
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
