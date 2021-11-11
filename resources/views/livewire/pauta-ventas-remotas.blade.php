{{--
Plantilla: Pauta Ventas Remotas
Versión 3
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
            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
            </svg>
            PENC: {{$evaluacion->penc}}
        </div>
        <div class="mt-2 flex items-center text-sm text-gray-500">
            <!-- Heroicon name: calendar -->
            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
            </svg>
            PEC: {{$evaluacion->pecu}}
        </div>


        @if($evaluacion->ici)
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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
                    <div class="md:grid md:grid-cols-1 md:gap-6">
                        <div class="mt-5 md:mt-0 md:col-span-1 ">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-green-50 space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Conquistar</p>
                                    <div class="md:grid md:grid-cols-3 md:gap-6">
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">1 - Presentación del Ejecutivo - ({{$presentacion1}})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="presentacion2" name="presentacion2" wire:model.defer="presentacion2" wire:click="xpresentacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$presentacion2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="presentacion2" class="font-medium text-gray-700">No Saluda cordialmente</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="presentacion3" name="presentacion3" wire:model.defer="presentacion3" wire:click="xpresentacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$presentacion3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="presentacion3" class="font-medium text-gray-700">No se identifica frente al Cliente</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">2 - Frases de Enganche y Conexión - ({{$frasesenganche1}})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="frasesenganche2" name="frasesenganche2" wire:model.defer="frasesenganche2" wire:click="xfrasesenganche" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$frasesenganche2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="frasesenganche2" class="font-medium text-gray-700">No realiza frase de conexión</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="frasesenganche3" name="frasesenganche3" wire:model.defer="frasesenganche3" wire:click="xfrasesenganche" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$frasesenganche3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="frasesenganche3" class="font-medium text-gray-700">No realiza frase de enganche</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">3 - Personalización - ({{$personalizacion1}})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="personalizacion2" name="personalizacion2" wire:model.defer="personalizacion2" wire:click="xpersonalizacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$personalizacion2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="personalizacion2" class="font-medium text-gray-700">No Personaliza</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="personalizacion3" name="personalizacion3" wire:model.defer="personalizacion3" wire:click="xpersonalizacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$personalizacion3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="personalizacion3" class="font-medium text-gray-700">Personaliza incorrectamente</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-1 ">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-green-50 space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Conocer</p>
                                    <div class="md:grid md:grid-cols-3 md:gap-6">
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">4 - Detección de Necesidades - ({{$deteccion1}})</legend>
                                            <div class="hidden mt-4">
                                                <span class="text-gray-700">Detección de Necesidades Padre</span>
                                                <div class="mt-1 text-sm">
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" class="form-radio" name="deteccion1" wire:model.defer="deteccion1" value="Si" {{ $deteccion1 == "Si" ? 'checked' : '' }}>
                                                        <p class="ml-2">Si</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="deteccion1" wire:model.defer="deteccion1" value="No" {{ $deteccion1 == "No" ? 'checked' : '' }}>
                                                        <p class="ml-2">No</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="deteccion1" wire:model.defer="deteccion1" value="No Aplica" {{ $deteccion1 == "No Aplica" ? 'checked' : '' }}>
                                                        <p class="ml-2">No Aplica</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="deteccion2" name="deteccion2" wire:model.defer="deteccion2" wire:click="xdeteccion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$deteccion2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="deteccion2" class="font-medium text-yellow-500">No Aplica</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="deteccion3" name="deteccion3" wire:model.defer="deteccion3" wire:click="xdeteccion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$deteccion3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="deteccion3" class="font-medium text-gray-700">No Valida las necesidades del Cliente</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="deteccion4" name="deteccion4" wire:model.defer="deteccion4" wire:click="xdeteccion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$deteccion4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="deteccion4" class="font-medium text-red-600">No sondea posibilidad de hacer negocio con multilínea</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">5 - Evaluación Comercial / Técnica - ({{$evaluacion1}})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="evaluacion2" name="deteccion2" wire:model.defer="evaluacion2" wire:click="xevaluacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$evaluacion2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="evaluacion2" class="font-medium text-gray-700">No Comprueba Restricciones Comerciales</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="evaluacion3" name="evaluacion3" wire:model.defer="evaluacion3" wire:click="xevaluacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$evaluacion3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="evaluacion3" class="font-medium text-gray-700">No Comprueba Factibilidad Técnica</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="evaluacion4" name="evaluacion4" wire:model.defer="evaluacion4" wire:click="xevaluacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$evaluacion4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="evaluacion4" class="font-medium text-red-600">Continua con negocio a pesar que el Cliente no califica</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="evaluacion5" name="evaluacion5" wire:model.defer="evaluacion5" wire:click="xevaluacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$evaluacion5}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="evaluacion5" class="font-medium text-red-600">Entrega Información confidencial de los sistema de evaluación comercial</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="evaluacion6" name="evaluacion6" wire:model.defer="evaluacion6" wire:click="xevaluacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$evaluacion6}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="evaluacion6" class="font-medium text-red-600">Manipula la información para lograr una evaluación positiva en NEC</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-1 ">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-green-50 space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Convencer</p>
                                    <div class="md:grid md:grid-cols-3 md:gap-6">
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">6 - Ofrece la mejor alternativa - ({{$mejoralternativa1}})</legend>
                                            <div class="hidden mt-4">
                                                <span class="text-gray-700">Mejor Alternativa Padre</span>
                                                <div class="mt-1 text-sm">
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" class="form-radio" name="mejoralternativa1" wire:model.defer="mejoralternativa1" value="Si" {{ $mejoralternativa1 == "Si" ? 'checked' : '' }}>
                                                        <p class="ml-2">Si</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="mejoralternativa1" wire:model.defer="mejoralternativa1" value="No" {{ $mejoralternativa1 == "No" ? 'checked' : '' }}>
                                                        <p class="ml-2">No</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="mejoralternativa1" wire:model.defer="mejoralternativa1" value="No Aplica" {{ $mejoralternativa1 == "No Aplica" ? 'checked' : '' }}>
                                                        <p class="ml-2">No Aplica</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="mejoralternativa2" name="mejoralternativa2" wire:model.defer="mejoralternativa2" wire:click="xmejoralternativa" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$mejoralternativa2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="mejoralternativa2" class="font-medium text-yellow-500">No Aplica</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="mejoralternativa3" name="mejoralternativa3" wire:model.defer="mejoralternativa3" wire:click="xmejoralternativa" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$mejoralternativa3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="mejoralternativa3" class="font-medium text-gray-700">No asesorar en la mejor alternativa</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">7 - Argumentación - ({{$argumentacion1}})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="argumentacion2" name="argumentacion2" wire:model.defer="argumentacion2" wire:click="xargumentacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$argumentacion2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="argumentacion2" class="font-medium text-gray-700">Ejecutivo usa argumentos no comprobados</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="argumentacion3" name="argumentacion3" wire:model.defer="argumentacion3" wire:click="xargumentacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$argumentacion3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="argumentacion3" class="font-medium text-red-600">Usa argumentos que van en contra de la permanencia</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="argumentacion4" name="argumentacion4" wire:model.defer="argumentacion4" wire:click="xargumentacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$argumentacion4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="argumentacion4" class="font-medium text-red-600">Manipula información o procedimiento para concretar venta</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">8 - Rebate de Objeciones - ({{$objeciones1}})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="objeciones2" name="objeciones2" wire:model.defer="objeciones2" wire:click="xobjeciones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$objeciones2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="objeciones2" class="font-medium text-yellow-500">No Aplica</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="objeciones3" name="objeciones3" wire:model.defer="objeciones3" wire:click="xobjeciones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$objeciones3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="objeciones3" class="font-medium text-gray-700">El ejecutivo usa argumento no comprobados</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="objeciones4" name="objeciones4" wire:model.defer="objeciones4" wire:click="xobjeciones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$objeciones4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="objeciones4" class="font-medium text-red-600">No rebate objeciones</label>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="objeciones5" name="objeciones5" wire:model.defer="objeciones5" wire:click="xobjeciones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$objeciones5}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="objeciones5" class="font-medium text-red-600">Manipula información o procedimiento para concretar venta</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-1 ">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-green-50 space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Concretar</p>
                                    <div class="md:grid md:grid-cols-3 md:gap-6">
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">8 - Condiciones Especificas del Plan Contratado - ({{$condiciones1}})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="condiciones2" name="condiciones2" wire:model.defer="condiciones2" wire:click="xcondiciones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$condiciones2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="condiciones2" class="font-medium text-gray-700">No indica correctamente el cargo fijo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="condiciones3" name="condiciones3" wire:model.defer="condiciones3" wire:click="xcondiciones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$condiciones3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="condiciones3" class="font-medium text-gray-700">No indica correctamente los minutos incluidos/saldo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="condiciones4" name="condiciones4" wire:model.defer="condiciones4" wire:click="xcondiciones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$condiciones4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="condiciones4" class="font-medium text-gray-700">No indica correctamente la cuota de datos/velocidad</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="condiciones5" name="condiciones5" wire:model.defer="condiciones5" wire:click="xcondiciones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$condiciones5}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="condiciones5" class="font-medium text-gray-700">No indica correctamente las apps ilimitadas incluidas</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="condiciones6" name="condiciones6" wire:model.defer="condiciones6" wire:click="xcondiciones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$condiciones6}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="condiciones6" class="font-medium text-gray-700">No indica correctamente las restricciones de minutos/mb ilimitados</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="condiciones7" name="condiciones7" wire:model.defer="condiciones7" wire:click="xcondiciones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$condiciones7}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="condiciones7" class="font-medium text-gray-700">No indica correctamente el saldo mínimo para bolsas SMS</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="condiciones8" name="condiciones8" wire:model.defer="condiciones8" wire:click="xcondiciones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$condiciones8}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="condiciones8" class="font-medium text-red-600">Omite o Entrega información incorrecta que afectara al cliente</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="condiciones9" name="condiciones9" wire:model.defer="condiciones9" wire:click="xcondiciones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$condiciones9}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="condiciones9" class="font-medium text-red-600">Ingresa erróneamente en sistema plan informado</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">9 - Promociones asociadas al negocio - ({{$promociones1}})</legend>
                                            <div class="hidden mt-4">
                                                <span class="text-gray-700">Promociones asociadas al negocio Padre</span>
                                                <div class="mt-1 text-sm">
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" class="form-radio" name="promociones1" wire:model.defer="promociones1" value="Si" {{ $promociones1 == "Si" ? 'checked' : '' }}>
                                                        <p class="ml-2">Si</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="promociones1" wire:model.defer="promociones1" value="No" {{ $promociones1 == "No" ? 'checked' : '' }}>
                                                        <p class="ml-2">No</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="promociones1" wire:model.defer="promociones1" value="No Aplica" {{ $promociones1 == "No Aplica" ? 'checked' : '' }}>
                                                        <p class="ml-2">No Aplica</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="promociones2" name="promociones2" wire:model.defer="promociones2" wire:click="xpromociones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$promociones2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="promociones2" class="font-medium text-yellow-500">No Aplica</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="promociones3" name="promociones3" wire:model.defer="promociones3" wire:click="xpromociones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$promociones3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="promociones3" class="font-medium text-gray-700">Indica erróneamente beneficios asociados</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="promociones4" name="promociones4" wire:model.defer="promociones4" wire:click="xpromociones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$promociones4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="promociones4" class="font-medium text-gray-700">Indica erróneamente vigencia</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="promociones5" name="promociones5" wire:model.defer="promociones5" wire:click="xpromociones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$promociones5}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="promociones5" class="font-medium text-red-600">No realiza ofrecimiento de equipo según campaña</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="promociones6" name="promociones6" wire:model.defer="promociones6" wire:click="xpromociones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$promociones6}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="promociones6" class="font-medium text-red-600">Omite o Entrega información incorrecta que afectara al cliente</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="promociones7" name="promociones7" wire:model.defer="promociones7" wire:click="xpromociones" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$promociones7}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="promociones7" class="font-medium text-red-600">Ingresa erróneamente en sistema oferta entregada</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-1 ">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-yellow-50 space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Ingreso de Negocio</p>
                                    <div class="md:grid md:grid-cols-3 md:gap-6">
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">10 - Facturación - ({{$facturacion1}})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="facturacion2" name="facturacion2" wire:model.defer="facturacion2" wire:click="xfacturacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$facturacion2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="facturacion2" class="font-medium text-gray-700">No Indica/gestiona medio de notificación</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="facturacion3" name="facturacion3" wire:model.defer="facturacion3" wire:click="xfacturacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$facturacion3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="facturacion3" class="font-medium text-gray-700">No Informa el cargo proporcional en boleta</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="facturacion4" name="facturacion4" wire:model.defer="facturacion4" wire:click="xfacturacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$facturacion4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="facturacion4" class="font-medium text-gray-700">No Indica ciclo de facturación y fecha de vencimiento</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="facturacion5" name="facturacion5" wire:model.defer="facturacion5" wire:click="xfacturacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$facturacion5}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="facturacion5" class="font-medium text-red-600">Omite o Entrega información incorrecta que afectara al cliente</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="facturacion6" name="facturacion6" wire:model.defer="facturacion6" wire:click="xfacturacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$facturacion6}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="facturacion6" class="font-medium text-red-600">Ingresa erróneamente en sistema datos para la fact.</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">11 - Cargos de Habilitación - ({{$cargos1}})</legend>
                                            <div class="hidden mt-4">
                                                <span class="text-gray-700">Cargos de Habilitación Padre</span>
                                                <div class="mt-1 text-sm">
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" class="form-radio" name="cargos1" wire:model.defer="cargos1" value="Si" {{ $cargos1 == "Si" ? 'checked' : '' }}>
                                                        <p class="ml-2">Si</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="cargos1" wire:model.defer="cargos1" value="No" {{ $cargos1 == "No" ? 'checked' : '' }}>
                                                        <p class="ml-2">No</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="cargos1" wire:model.defer="cargos1" value="No Aplica" {{ $cargos1 == "No Aplica" ? 'checked' : '' }}>
                                                        <p class="ml-2">No Aplica</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="cargos2" name="cargos2" wire:model.defer="cargos2" wire:click="xcargos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cargos2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="cargos2" class="font-medium text-yellow-500">No Aplica</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="cargos3" name="cargos3" wire:model.defer="cargos3" wire:click="xcargos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cargos3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="cargos3" class="font-medium text-gray-700">Indica erróneamente los cargos de equipo/sim</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="cargos4" name="cargos4" wire:model.defer="cargos4" wire:click="xcargos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cargos4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="cargos4" class="font-medium text-gray-700">Indica erróneamente los cargos de instalación</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="cargos5" name="cargos5" wire:model.defer="cargos5" wire:click="xcargos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cargos5}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="cargos5" class="font-medium text-gray-700">Indica erróneamente la forma de pago</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="cargos6" name="cargos6" wire:model.defer="cargos6" wire:click="xcargos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cargos6}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="cargos6" class="font-medium text-red-600">Omite o Entrega información incorrecta que afectara al cliente</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="cargos7" name="cargos7" wire:model.defer="cargos7" wire:click="xcargos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cargos7}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="cargos7" class="font-medium text-red-600">Ingresa erróneamente en sistema los cargos de habilitación</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">12 - Equipo - ({{$equipos1}})</legend>
                                            <div class="hidden mt-4">
                                                <span class="text-gray-700">Cargos de Habilitación Padre</span>
                                                <div class="mt-1 text-sm">
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" class="form-radio" name="equipos1" wire:model.defer="equipos1" value="Si" {{ $equipos1 == "Si" ? 'checked' : '' }}>
                                                        <p class="ml-2">Si</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="equipos1" wire:model.defer="equipos1" value="No" {{ $equipos1 == "No" ? 'checked' : '' }}>
                                                        <p class="ml-2">No</p>
                                                    </label>
                                                    <label class="inline-flex items-center ml-6">
                                                        <input type="radio" class="form-radio" name="equipos1" wire:model.defer="equipos1" value="No Aplica" {{ $equipos1 == "No Aplica" ? 'checked' : '' }}>
                                                        <p class="ml-2">No Aplica</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="equipos2" name="equipos2" wire:model.defer="equipos2" wire:click="xequipos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$equipos2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="equipos2" class="font-medium text-yellow-500">No Aplica</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="equipos3" name="equipos3" wire:model.defer="equipos3" wire:click="xequipos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$equipos3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="equipos3" class="font-medium text-gray-700">No informa correctamente el modelo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="equipos4" name="equipos4" wire:model.defer="equipos4" wire:click="xequipos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$equipos4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="equipos4" class="font-medium text-gray-700">No informa correctamente las características</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="equipos5" name="equipos5" wire:model.defer="equipos5" wire:click="xequipos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$equipos5}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="equipos5" class="font-medium text-red-600">Omite o Entrega información incorrecta que afectara al cliente</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">13 - Validación de Datos del Cliente - ({{$validacion1}})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="validacion2" name="validacion2" wire:model.defer="validacion2" wire:click="xvalidacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$validacion2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="validacion2" class="font-medium text-gray-700">Rut</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="validacion3" name="validacion3" wire:model.defer="validacion3" wire:click="xvalidacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$validacion3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="validacion3" class="font-medium text-gray-700">Nombre Completo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="validacion4" name="validacion4" wire:model.defer="validacion4" wire:click="xvalidacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$validacion4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="validacion4" class="font-medium text-gray-700">Fecha de Nacimiento</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="validacion5" name="validacion5" wire:model.defer="validacion5" wire:click="xvalidacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$validacion5}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="validacion5" class="font-medium text-gray-700">Dirección Postal</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="validacion6" name="validacion6" wire:model.defer="validacion6" wire:click="xvalidacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$validacion6}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="validacion6" class="font-medium text-gray-700">Correo eletrónico</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="validacion7" name="validacion7" wire:model.defer="validacion7" wire:click="xvalidacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$validacion7}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="validacion7" class="font-medium text-gray-700">Teléfono a portar</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="validacion8" name="validacion8" wire:model.defer="validacion8" wire:click="xvalidacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$validacion8}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="validacion8" class="font-medium text-gray-700">Serie CI</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="validacion9" name="validacion9" wire:model.defer="validacion9" wire:click="xvalidacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$validacion9}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="validacion9" class="font-medium text-gray-700">Empresa donadora</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="validacion10" name="validacion10" wire:model.defer="validacion10" wire:click="xvalidacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$validacion10}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="validacion10" class="font-medium text-gray-700">Imei</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="validacion11" name="validacion11" wire:model.defer="validacion11" wire:click="xvalidacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$validacion11}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="validacion11" class="font-medium text-gray-700">Dirección despacho</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="validacion12" name="validacion12" wire:model.defer="validacion12" wire:click="xvalidacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$validacion12}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="validacion12" class="font-medium text-gray-700">Dos Teléfono de contacto</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="validacion13" name="validacion13" wire:model.defer="validacion13" wire:click="xvalidacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$validacion13}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="validacion13" class="font-medium text-red-600">No valida datos críticos para el negocio</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="validacion14" name="validacion14" wire:model.defer="validacion14" wire:click="xvalidacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$validacion14}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="validacion14" class="font-medium text-red-600">Ingresa erróneamente en sistema datos personales del cliente</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">14 - Coordinación Despacho/Activación/Instalación - ({{$despacho1}})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="despacho2" name="despacho2" wire:model.defer="despacho2" wire:click="xdespacho" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$despacho2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="despacho2" class="font-medium text-gray-700">Indica erróneamente horario de entrega/instalación</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="despacho3" name="despacho3" wire:model.defer="despacho3" wire:click="xdespacho" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$despacho3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="despacho3" class="font-medium text-gray-700">Informa plazos y procedimiento de portabilidad</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="despacho4" name="despacho4" wire:model.defer="despacho4" wire:click="xdespacho" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$despacho4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="despacho4" class="font-medium text-gray-700">No indica documentación necesaria</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="despacho5" name="despacho5" wire:model.defer="despacho5" wire:click="xdespacho" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$despacho5}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="despacho5" class="font-medium text-red-600">No valida datos críticos para el negocio</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="despacho6" name="despacho6" wire:model.defer="despacho6" wire:click="xdespacho" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$despacho6}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="despacho6" class="font-medium text-red-600">Ingresa erróneamente en sistema datos personales del cliente</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="despacho7" name="despacho7" wire:model.defer="despacho7" wire:click="xdespacho" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$despacho7}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="despacho7" class="font-medium text-red-600">No valida información para entrega de terceros</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">15 - Scripts Obligatorios y legales - ({{$scripts1}})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="scripts2" name="scripts2" wire:model.defer="scripts2" wire:click="xscripts" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$scripts2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="scripts2" class="font-medium text-red-600">No lee el extracto u omite algún párrafo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="scripts3" name="scripts3" wire:model.defer="scripts3" wire:click="xscripts" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$scripts3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="scripts3" class="font-medium text-red-600">Altera de manera importante el contexto y/o el sentido</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="scripts4" name="scripts4" wire:model.defer="scripts4" wire:click="xscripts" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$scripts4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="scripts4" class="font-medium text-red-600">Lo realiza a una persona distinta al titular</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="scripts5" name="scripts5" wire:model.defer="scripts5" wire:click="xscripts" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$scripts5}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="scripts5" class="font-medium text-red-600">No realiza pregunta de aceptación explicita del negocio</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">16 - Despedida e información de cierre - ({{$despedida1}})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="despedida2" name="despedida2" wire:model.defer="despedida2" wire:click="xdespedida" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$despedida2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="despedida2" class="font-medium text-gray-700">No informa Canales de postventa consulta/reclamo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="despedida3" name="despedida3" wire:model.defer="despedida3" wire:click="xdespedida" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$despedida3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="despedida3" class="font-medium text-gray-700">No informa canales de reagendamiento de visita</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="despedida4" name="despedida4" wire:model.defer="despedida4" wire:click="xdespedida" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$despedida4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="despedida4" class="font-medium text-gray-700">No indica pasos para ingresar a hbo max</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="despedida5" name="despedida5" wire:model.defer="despedida5" wire:click="xdespedida" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$despedida5}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="despedida5" class="font-medium text-gray-700">No se despide de manera cordial</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-1 ">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-blue-50 space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Habilidades Blandas</p>
                                    <div class="md:grid md:grid-cols-3 md:gap-6">

                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">17 - Atención Respetuosa - ({{$atencion1}})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="atencion2" name="atencion2" wire:model.defer="atencion2" wire:click="xatencion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$atencion2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="atencion2" class="font-medium text-gray-700">Irónico</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="atencion3" name="atencion3" wire:model.defer="atencion3" wire:click="xatencion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$atencion3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="atencion3" class="font-medium text-gray-700">Prepotente</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="atencion4" name="atencion4" wire:model.defer="atencion4" wire:click="xatencion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$atencion4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="atencion4" class="font-medium text-gray-700">Despectivo - poco profesional</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="atencion5" name="atencion5" wire:model.defer="atencion5" wire:click="xatencion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$atencion5}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="atencion5" class="font-medium text-gray-700">Realiza ruidos molestos</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="atencion6" name="atencion6" wire:model.defer="atencion6" wire:click="xatencion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$atencion6}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="atencion6" class="font-medium text-gray-700">Interrumpe</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="atencion7" name="atencion7" wire:model.defer="atencion7" wire:click="xatencion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$atencion7}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="atencion7" class="font-medium text-red-600">Actitud desafiante, conflictiva, despectiva, discriminatoria o arrogante al cliente</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">18 - Fluidez y Lenguaje - ({{$lenguaje1}})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="lenguaje2" name="lenguaje2" wire:model.defer="lenguaje2" wire:click="xlenguaje" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$lenguaje2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="lenguaje2" class="font-medium text-gray-700">Falta de ritmo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="lenguaje3" name="lenguaje3" wire:model.defer="lenguaje3" wire:click="xlenguaje" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$lenguaje3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="lenguaje3" class="font-medium text-gray-700">No ajusta volumen de voz</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="lenguaje4" name="lenguaje4" wire:model.defer="lenguaje4" wire:click="xlenguaje" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$lenguaje4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="lenguaje4" class="font-medium text-gray-700">No pronuncia correctamente</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="lenguaje5" name="lenguaje5" wire:model.defer="lenguaje5" wire:click="xlenguaje" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$lenguaje5}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="lenguaje5" class="font-medium text-gray-700">No utiliza correctamente el vocabulario/muletillas</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="lenguaje6" name="lenguaje6" wire:model.defer="lenguaje6" wire:click="xlenguaje" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$lenguaje6}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="lenguaje6" class="font-medium text-gray-700">Utiliza tecnicismos</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">19 - Claridad - ({{$claridad1}})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="claridad2" name="claridad2" wire:model.defer="claridad2" wire:click="xclaridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$claridad2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="claridad2" class="font-medium text-gray-700">No Entrega de información de manera ordenada lógicamente de acuerdo a la campaña. </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="claridad3" name="claridad3" wire:model.defer="claridad3" wire:click="xclaridad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$claridad3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="claridad3" class="font-medium text-gray-700">Vuelve a solicitar la misma información</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">20 - Manejo y Dominio en la conversación - ({{$dominio1}})</legend>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="dominio2" name="dominio2" wire:model.defer="dominio2" wire:click="xdominio" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$dominio2}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="dominio2" class="font-medium text-gray-700">Falta seguridad para vender</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="dominio3" name="dominio3" wire:model.defer="dominio3" wire:click="xdominio" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$dominio3}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="dominio3" class="font-medium text-gray-700">No manifiesta interés ni disposición con el Cliente</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 space-y-2">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="dominio4" name="dominio4" wire:model.defer="dominio4" wire:click="xdominio" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$dominio4}}>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="dominio4" class="font-medium text-gray-700">Falta de seguridad al responder preguntas</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
