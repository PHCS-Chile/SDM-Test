{{--
Plantilla: Pauta Digital
Versión 2 (10/06/2021)
--}}
<div>
    <form wire:submit.prevent="save">

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-2 md:gap-6">
                <div class="mt-5 md:mt-0 md:col-span-1 ">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-green-50 space-y-6 sm:p-6">
                            <p class="font-bold text-xl">Atributos PENC</p>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">1 - Cumple con Scripts de saludo y despedida - ({{$saludo6}})</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="saludo1" name="saludo1" wire:model.defer="saludo1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$saludo1}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="saludo1" class="font-medium text-gray-700">No saluda o indica nombre al iniciar la conversación</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="saludo2" name="saludo2" wire:model.defer="saludo2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$saludo2}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="saludo2" class="font-medium text-gray-700">No usa preguntas o frases de conexión inicial</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="saludo3" name="saludo3" wire:model.defer="saludo3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$saludo3}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="saludo3" class="font-medium text-gray-700">No Valida contexto indicado previamente</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="saludo4" name="saludo4" wire:model.defer="saludo4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$saludo4}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="saludo4" class="font-medium text-gray-700">No se despide y/o realiza de forma poco cordial</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="saludo5" name="saludo5" wire:model.defer="saludo5" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$saludo5}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="saludo5" class="font-medium text-gray-700">No agradece contacto al despedirse</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">2 - Se comunica de forma simple y cercana - ({{$frases5}})</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="frases1" name="frases1" wire:model.defer="frases1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$frases1}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="frases1" class="font-medium text-gray-700">Utiliza frases formales y/o poco cercanas</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="frases2" name="frases2" wire:model.defer="frases2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$frases2}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="frases2" class="font-medium text-gray-700">Utiliza conceptos técnicos</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="frases3" name="frases3" wire:model.defer="frases3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$frases3}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="frases3" class="font-medium text-gray-700">Utiliza frases coloquiales y/o abreviaturas</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="frases4" name="frases4" wire:model.defer="frases4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$frases4}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="frases4" class="font-medium text-gray-700">Utiliza más de un emoticón por comentario</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">3 - Utiliza Frases de Cordialidad y de reducción de conflicto - ({{$cordialidad5}})</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="cordialidad1" name="cordialidad1" wire:model.defer="cordialidad1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cordialidad1}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="cordialidad1" class="font-medium text-gray-700">No utiliza frases para expresar disposición para atender</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="cordialidad2" name="cordialidad2" wire:model.defer="cordialidad2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cordialidad2}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="cordialidad2" class="font-medium text-gray-700">No utiliza frases para manifestar interés frente a dificultades</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="cordialidad3" name="cordialidad3" wire:model.defer="cordialidad3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cordialidad3}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="cordialidad3" class="font-medium text-gray-700">No pide disculpas en caso de reclamos de nuestra responsabilidad</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="cordialidad4" name="cordialidad4" wire:model.defer="cordialidad4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$cordialidad4}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="cordialidad4" class="font-medium text-gray-700">No reduce el conflicto frente a cliente alterados</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">4 - Gestión de información y uso de Plantillas - ({{$gestionplantillas5}})</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="gestionplantillas1" name="gestionplantillas1" wire:model.defer="gestionplantillas1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$gestionplantillas1}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="gestionplantillas1" class="font-medium text-gray-700">No Entrega la información de manera ordenada</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="gestionplantillas2" name="gestionplantillas2" wire:model.defer="gestionplantillas2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$gestionplantillas2}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="gestionplantillas2" class="font-medium text-gray-700">Vuelve a solicitar la misma información mas de una vez</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="gestionplantillas3" name="gestionplantillas3" wire:model.defer="gestionplantillas3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$gestionplantillas3}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="gestionplantillas3" class="font-medium text-gray-700">Usa plantillas o imágenes en exceso</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="gestionplantillas4" name="gestionplantillas4" wire:model.defer="gestionplantillas4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$gestionplantillas4}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="gestionplantillas4" class="font-medium text-gray-700">Usa plantillas o información irrelevantes para la gestión</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">5 - Mantiene una buena redacción y ortografía - ({{$ortografia7}})</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ortografia1" name="ortografia1" wire:model.defer="ortografia1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ortografia1}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ortografia1" class="font-medium text-gray-700">Errores semánticos y/o sintácticos</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ortografia2" name="ortografia2" wire:model.defer="ortografia2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ortografia2}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ortografia2" class="font-medium text-gray-700">Mal uso de reglas de puntuación (puntos y coma)</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ortografia3" name="ortografia3" wire:model.defer="ortografia3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ortografia3}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ortografia3" class="font-medium text-gray-700">Errores de escrituras y aplicación de reglas ortográficas (español)</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ortografia4" name="ortografia4" wire:model.defer="ortografia4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ortografia4}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ortografia4" class="font-medium text-gray-700">Escritura incorrecta de palabras técnicas o de origen extranjero</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ortografia5" name="ortografia5" wire:model.defer="ortografia5" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ortografia5}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ortografia5" class="font-medium text-gray-700">Mal uso del acento diacrítico</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ortografia6" name="ortografia6" wire:model.defer="ortografia6" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ortografia6}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ortografia6" class="font-medium text-gray-700">Uso incorrecto de Mayúsculas/Minúsculas</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">6 - Se refiere al Cliente por su nombre - ({{$personalizacion4}})</legend>
                                <div class="hidden mt-4">
                                    <span class="text-gray-700">Personalizacion Padre</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="personalizacion4" wire:model.defer="personalizacion4" value="Si" {{ $personalizacion4 == "Si" ? 'checked' : '' }}>
                                            <p class="ml-2">Si</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="personalizacion4" wire:model.defer="personalizacion4" value="No" {{ $personalizacion4 == "No" ? 'checked' : '' }}>
                                            <p class="ml-2">No</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="personalizacion4" wire:model.defer="personalizacion4" value="No Aplica" {{ $personalizacion4 == "No Aplica" ? 'checked' : '' }}>
                                            <p class="ml-2">No Aplica</p>
                                        </label>
                                    </div>
                                    <small class="text-red-600 font-bold">{{ $errors->first('personalizacion4') }}</small>
                                </div>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="personalizacion1" name="personalizacion1" wire:model.defer="personalizacion1" wire:click="xpersonalizacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$personalizacion1}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="personalizacion1" class="font-medium text-gray-700">No personaliza durante la conversación</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="personalizacion2" name="personalizacion2" wire:model.defer="personalizacion2" wire:click="xpersonalizacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$personalizacion2}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="personalizacion2" class="font-medium text-gray-700">Trata al cliente por un nombre/usuario erróneo</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="personalizacion3" name="personalizacion3" wire:model.defer="personalizacion3" wire:click="xpersonalizacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$personalizacion3}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="personalizacion3" class="font-medium text-yellow-500">No Aplica</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">7 - Proyecta seguridad y dominio de la información - ({{$seguridad3}})</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="seguridad1" name="seguridad1" wire:model.defer="seguridad1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$seguridad1}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="seguridad1" class="font-medium text-gray-700">Proyecta inseguridad o falta de conocimientos</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="seguridad2" name="seguridad2" wire:model.defer="seguridad2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$seguridad2}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="seguridad2" class="font-medium text-gray-700">Se autocorrige o se contradice en la conversación</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="seguridad4" name="seguridad4" wire:model.defer="seguridad4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$seguridad4}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="seguridad4" class="font-medium text-gray-700">No informa el motivo de uso de datos personales</label>
                                        </div>
                                    </div>

                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">8 - Maneja correctamente los tiempos de espera - ({{$manejosilencios4}})</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="manejosilencios1" name="manejosilencios1" wire:model.defer="manejosilencios1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$manejosilencios1}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="manejosilencios1" class="font-medium text-gray-700">No menciona la necesidad de dejar en espera</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="manejosilencios2" name="manejosilencios2" wire:model.defer="manejosilencios2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$manejosilencios2}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="manejosilencios2" class="font-medium text-gray-700">No retoma la conversación en los tiempos definidos</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="manejosilencios3" name="manejosilencios3" wire:model.defer="manejosilencios3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$manejosilencios3}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="manejosilencios3" class="font-medium text-gray-700">No agradece el tiempo de espera</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">9 - Realiza aseguramiento de lo informado - ({{$aseguramiento3}})</legend>
                                <div class="hidden mt-4">
                                    <span class="text-gray-700">Aseguramiento Padre</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="aseguramiento3" wire:model.defer="aseguramiento3" value="Si" {{ $aseguramiento3 == "Si" ? 'checked' : '' }}>
                                            <p class="ml-2">Si</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="aseguramiento3" wire:model.defer="aseguramiento3" value="No" {{ $aseguramiento3 == "No" ? 'checked' : '' }}>
                                            <p class="ml-2">No</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="aseguramiento3" wire:model.defer="aseguramiento3" value="No Aplica" {{ $aseguramiento3 == "No Aplica" ? 'checked' : '' }}>
                                            <p class="ml-2">No Aplica</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('aseguramiento3') }}</small>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="aseguramiento1" name="aseguramiento1" wire:model.defer="aseguramiento1" wire:click="xaseguramiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$aseguramiento1}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="aseguramiento1" class="font-medium text-gray-700">No realiza aseguramiento de lo informado</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="aseguramiento2" name="aseguramiento2" wire:model.defer="aseguramiento2" wire:click="xaseguramiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$aseguramiento2}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="aseguramiento2" class="font-medium text-yellow-500">No Aplica</label>
                                        </div>
                                    </div>

                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">10 - Ofrece nuevos productos/servicios - ({{$ofrecimiento5}})</legend>
                                <div class="hidden mt-4">
                                    <span class="text-gray-700">Ofrecimiento Padre</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="ofrecimiento5" wire:model.defer="ofrecimiento5" value="Si" {{ $ofrecimiento5 == "Si" ? 'checked' : '' }}>
                                            <p class="ml-2">Si</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="ofrecimiento5" wire:model.defer="ofrecimiento5" value="No" {{ $ofrecimiento5 == "No" ? 'checked' : '' }}>
                                            <p class="ml-2">No</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="ofrecimiento5" wire:model.defer="ofrecimiento5" value="No Aplica" {{ $ofrecimiento5 == "No Aplica" ? 'checked' : '' }}>
                                            <p class="ml-2">No Aplica</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('ofrecimiento5') }}</small>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ofrecimiento1" name="ofrecimiento1" wire:model.defer="ofrecimiento1" wire:click="xofrecimiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ofrecimiento1}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ofrecimiento1" class="font-medium text-gray-700">No realiza ofrecimiento comercial a titular</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ofrecimiento2" name="ofrecimiento2" wire:model.defer="ofrecimiento2" wire:click="xofrecimiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ofrecimiento2}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ofrecimiento2" class="font-medium text-gray-700">No argumenta o intenta revertir objeciones</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ofrecimiento3" name="ofrecimiento3" wire:model.defer="ofrecimiento3" wire:click="xofrecimiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ofrecimiento3}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ofrecimiento3" class="font-medium text-gray-700">Realiza ofrecimiento comercial a usuario no autorizado</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ofrecimiento4" name="ofrecimiento4" wire:model.defer="ofrecimiento4" wire:click="xofrecimiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$ofrecimiento4}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ofrecimiento4" class="font-medium text-yellow-500">No Aplica</label>
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
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecu_deteccion" name="pecu_deteccion" wire:model.lazy="pecu_deteccion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_deteccion}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecu_deteccion" class="font-medium text-gray-700">Error grave en la detección de necesidades y en el analisis de la información</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecu_infocorrecta" name="pecu_infocorrecta" wire:model.lazy="pecu_infocorrecta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_infocorrecta}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecu_infocorrecta" class="font-medium text-gray-700">Error grave en la gestión por Info incorrecta o incompleta</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecu_procedimiento" name="pecu_procedimiento" wire:model.lazy="pecu_procedimiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_procedimiento}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecu_procedimiento" class="font-medium text-gray-700">Error grave en la gestión por no resolver o resolver de forma errónea</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecu_pocoprofesional" name="pecu_pocoprofesional" wire:model.defer="pecu_pocoprofesional" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_pocoprofesional}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecu_pocoprofesional" class="font-medium text-gray-700">Atención Irrespetuosa y Gestión poco Profesional</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecu_manipulacliente" name="pecu_manipulacliente" wire:model.defer="pecu_manipulacliente" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_manipulacliente}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecu_manipulacliente" class="font-medium text-gray-700">Manipula al Cliente para concretar venta</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecu_cierreinteraccion" name="pecu_cierreinteraccion" wire:model.defer="pecu_cierreinteraccion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_cierreinteraccion}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecu_cierreinteraccion" class="font-medium text-gray-700">Cierre anticipado de la Interacción</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecu_provocacierre" name="pecu_provocacierre" wire:model.defer="pecu_provocacierre" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecu_provocacierre}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecu_provocacierre" class="font-medium text-gray-700">Provoca o incita el cierre por inactividad</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">Negocio</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecn_beneficio" name="pecn_beneficio" wire:model.defer="pecn_beneficio" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_beneficio}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecn_beneficio" class="font-medium text-gray-700">Entrega Beneficio o Excepción comercial fuera de Procedimiento</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecn_fraude" name="pecn_fraude" wire:model.defer="pecn_fraude" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_fraude}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecn_fraude" class="font-medium text-gray-700">Fraude</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecn_nosondea" name="pecn_nosondea" wire:model.defer="pecn_nosondea" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_nosondea}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecn_nosondea" class="font-medium text-gray-700">No Sondea motivo de renuncia o no Retiene</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecn_tipificacion" name="pecn_tipificacion" wire:model.defer="pecn_tipificacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_tipificacion}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecn_tipificacion" class="font-medium text-gray-700">No Tipifica en sistema o lo realiza de manera incorrecta.</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecn_factibilidad" name="pecn_factibilidad" wire:model.defer="pecn_factibilidad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_factibilidad}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecn_factibilidad" class="font-medium text-gray-700">Validación de Factibilidad Técnica y Comercial</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecn_otragestion" name="pecn_otragestion" wire:model.defer="pecn_otragestion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecn_otragestion}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecn_otragestion" class="font-medium text-gray-700">Otra Gestión Indebida</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">Cumplimiento</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecc_infoconfidencial" name="pecc_infoconfidencial" wire:model.defer="pecc_infoconfidencial" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_infoconfidencial}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecc_infoconfidencial" class="font-medium text-gray-700">Entrega información confidencial</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecc_novalidadatos" name="pecc_novalidadatos" wire:model.defer="pecc_novalidadatos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_novalidadatos}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecc_novalidadatos" class="font-medium text-gray-700">No valida correctamente los datos personales del Cliente</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecc_cierre" name="pecc_cierre" wire:model.defer="pecc_cierre" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_cierre}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecc_cierre" class="font-medium text-gray-700">No realiza cierre de negocio según procedimiento</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecc_infoerronea" name="pecc_infoerronea" wire:model.defer="pecc_infoerronea" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$pecc_infoerronea}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecc_infoerronea" class="font-medium text-gray-700">Omite o Indica erróneamente información que es regulada legalmente</label>
                                        </div>
                                    </div>

                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="pt-6"></div>
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-blue-50 space-y-6 sm:p-6">
                            <p class="font-bold text-xl">Caracterización Complementaria</p>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">Asistente Virtual</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="asistentevirtual1" name="asistentevirtual1" wire:model.defer="asistentevirtual1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$asistentevirtual1}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="asistentevirtual1" class="font-medium text-gray-700">No comprende el motivo del Cliente</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="asistentevirtual2" name="asistentevirtual2" wire:model.defer="asistentevirtual2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$asistentevirtual2}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="asistentevirtual2" class="font-medium text-gray-700">Cliente insiste mas de una vez en contacto con ejecutivo</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="asistentevirtual3" name="asistentevirtual3" wire:model.defer="asistentevirtual3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$asistentevirtual3}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="asistentevirtual3" class="font-medium text-gray-700">Deriva de forma incorrecta al ejecutivo</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">Gestiones anteriores</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="gestionesanteriores1" name="gestionesanteriores1" wire:model.defer="gestionesanteriores1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$gestionesanteriores1}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="gestionesanteriores1" class="font-medium text-gray-700">Abandonos previos por parte de otros ejecutivos</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="gestionesanteriores2" name="gestionesanteriores2" wire:model.defer="gestionesanteriores2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$gestionesanteriores2}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="gestionesanteriores2" class="font-medium text-gray-700">Abandonos previos por parte del Cliente</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="gestionesanteriores3" name="gestionesanteriores3" wire:model.defer="gestionesanteriores3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$gestionesanteriores3}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="gestionesanteriores3" class="font-medium text-gray-700">Más de una conversación reciente por el mismo motivo (NO FCR)</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">Usuarios</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="usuarios1" name="usuarios1" wire:model.defer="usuarios1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$usuarios1}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="usuarios1" class="font-medium text-gray-700">Cliente molesto por la atención de la asistente virtual</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="usuarios2" name="usuarios2" wire:model.defer="usuarios2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$usuarios2}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="usuarios2" class="font-medium text-gray-700">Cliente molesto por la atención de los ejecutivos del canal</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="usuarios3" name="usuarios3" wire:model.defer="usuarios3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$usuarios3}}>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="usuarios3" class="font-medium text-gray-700">Cliente solicita ser contactado telefónicamente</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>




                        </div>

                    </div>
                    <div class="pt-6">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div>
                                    <label for="comentario_interno" class="block text-sm font-medium text-gray-700">
                                        Comentario Interno
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="comentario_interno" name="comentario_interno" wire:model.defer="comentario_interno" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-30 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí la descripción del caso">{{$comentario_interno}}</textarea>
                                    </div>
                                </div>


                                <div>
                                    <label for="retroalimentacion" class="block text-sm font-medium text-gray-700">
                                        Retroalimentación
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="retroalimentacion" name="retroalimentacion" wire:model.defer="retroalimentacion" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-48 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí la retroalimentación">{{$retroalimentacion}}</textarea>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('retroalimentacion') }}</small>
                                
                                    <div>
                                        <label for="comentario_calidad" class="block text-sm font-medium text-gray-700">
                                            Comentario Calidad
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="comentario_calidad" name="comentario_calidad" wire:model.defer="comentario_calidad" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-48 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí el comentario de calidad">{{$comentario_calidad}}</textarea>
                                        </div>
                                    </div>
                                
                                <div></div>
                                <button type="submit"  wire:click="save" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <!-- Heroicon name: check -->
                                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    Guardar Evaluación
                                </button>
                                @if(Auth::user()->perfil  == 1 && $marca_ici == 0)
                                    <div>
                                        <button type="submit"  wire:click="ici" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <!-- Heroicon name: check -->
                                            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                            </svg>
                                            Discrepancia %
                                        </button>
                                    </div>
                                @endif

                                <div wire:loading>
                                    Guardando...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="mb-10 pt-6">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="mt-5 md:mt-0 md:col-span-1 ">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <p class="font-bold text-xl">Gestión 1</p>
                                <div class="mt-4">
                                    <span class="text-gray-700">Motivo del Llamado</span>
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
                                    <label for="gestion1" class="block text-sm font-medium text-gray-700">Tipo de Gestión</label>
                                    <select id="gestion1" name="gestion1" wire:model.defer="gestion1" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        @foreach($gestiones as $gestion)
                                            <option value="{{$gestion->name}}" {{ ( $gestion->name == $gestion1) ? 'selected' : '' }}>
                                                {{$gestion->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('gestion1') }}</small>
                                <div class="mt-4">
                                    <span class="text-gray-700">Detección de necesidades/sondeo/analisis/revisión</span>
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
                                    <span class="text-gray-700">Entrega de información correcta y completa</span>
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
                                    <span class="text-gray-700">Gestiona según proced. en sistema</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="procedimiento1" wire:model.lazy="procedimiento1" value="Si" {{ $procedimiento1 == "Si" ? 'checked' : '' }}>
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="procedimiento1" wire:model.lazy="procedimiento1" value="No" {{ $procedimiento1 == "No" ? 'checked' : '' }}>
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('procedimiento1') }}</small>
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
                                    <label for="gestion2" class="block text-sm font-medium text-gray-700">Tipo de Gestión</label>
                                    <select id="gestion2" name="gestion2" wire:model.defer="gestion2" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        @foreach($gestiones as $gestion)
                                            <option value="{{$gestion->name}}" {{ ( $gestion->name == $gestion2) ? 'selected' : '' }}>
                                                {{$gestion->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('gestion2') }}</small>
                                <div class="mt-4">
                                    <span class="text-gray-700">Detección de necesidades/sondeo/analisis/revisión</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="deteccion2" wire:model.lazy="deteccion2" value="Si" {{ $deteccion2 == "Si" ? 'checked' : '' }}>
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="deteccion2" wire:model.lazy="deteccion2" value="No" {{ $deteccion2 == "No" ? 'checked' : '' }}>
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('deteccion2') }}</small>
                                <div class="mt-4">
                                    <span class="text-gray-700">Entrega de información correcta y completa</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="infocorrecta2" wire:model.lazy="infocorrecta2" value="Si" {{ $infocorrecta2 == "Si" ? 'checked' : '' }}>
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="infocorrecta2" wire:model.lazy="infocorrecta2" value="No" {{ $infocorrecta2 == "No" ? 'checked' : '' }}>
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('infocorrecta2') }}</small>
                                <div class="mt-4">
                                    <span class="text-gray-700">Gestiona según proced. en sistema</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="procedimiento2" wire:model.lazy="procedimiento2" value="Si" {{ $procedimiento2 == "Si" ? 'checked' : '' }}>
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="procedimiento2" wire:model.lazy="procedimiento2" value="No" {{ $procedimiento2 == "No" ? 'checked' : '' }}>
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('procedimiento2') }}</small>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="resolucion2" class="block text-sm font-medium text-gray-700">Ejecutivo Resuelve el problema de origen en línea</label>
                                    <select id="resolucion2" name="resolucion2" wire:model.defer="resolucion2" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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
                                    <label for="gestion3" class="block text-sm font-medium text-gray-700">Tipo de Gestión</label>
                                    <select id="gestion3" name="gestion3" wire:model.defer="gestion3" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        @foreach($gestiones as $gestion)
                                            <option value="{{$gestion->name}}" {{ ( $gestion->name == $gestion3) ? 'selected' : '' }}>
                                                {{$gestion->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('gestion3') }}</small>
                                <div class="mt-4">
                                    <span class="text-gray-700">Detección de necesidades/sondeo/analisis/revisión</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="deteccion3" wire:model.lazy="deteccion3" value="Si" {{ $deteccion3 == "Si" ? 'checked' : '' }}>
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="deteccion3" wire:model.lazy="deteccion3" value="No" {{ $deteccion3 == "No" ? 'checked' : '' }}>
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('deteccion3') }}</small>
                                <div class="mt-4">
                                    <span class="text-gray-700">Entrega de información correcta y completa</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="infocorrecta3" wire:model.lazy="infocorrecta3" value="Si" {{ $infocorrecta3 == "Si" ? 'checked' : '' }}>
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="infocorrecta3" wire:model.lazy="infocorrecta3" value="No" {{ $infocorrecta3 == "No" ? 'checked' : '' }}>
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('infocorrecta3') }}</small>
                                <div class="mt-4">
                                    <span class="text-gray-700">Gestiona según proced. en sistema</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="procedimiento3" wire:model.lazy="procedimiento3" value="Si" {{ $procedimiento3 == "Si" ? 'checked' : '' }}>
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="procedimiento3" wire:model.lazy="procedimiento3" value="No" {{ $procedimiento3 == "No" ? 'checked' : '' }}>
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold">{{ $errors->first('procedimiento3') }}</small>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="resolucion3" class="block text-sm font-medium text-gray-700">Ejecutivo Resuelve el problema de origen en línea</label>
                                    <select id="resolucion3" name="resolucion3" wire:model.defer="resolucion3" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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
        </div>
    </form>
</div>
