{{--
Plantilla: livewire/notificaciones
Versión 1
--}}

<div class="flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8 pt-10">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="px-8">

            <strong class="block mr-10 mb-7" style="font-size: 26px; font-weight: 600">Notificaciones</strong>

            <div class="mb-4 inline-block float-right ml-2">
                <label for="leidas" class="opacity-0">Estado</label>
                <select id="leidas" name="leidas" wire:model="filtroLeida" class="mt-1 block w-auto py-2 pl-2 pr-7 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="0">No Leídas</option>
                    <option value="1">Leídas</option>
                    <option value="99">Todas</option>
                </select>
            </div>

            <div class="mb-4 inline-block float-right">
                <label for="pagination">Mostrar</label>
                <select id="pagination" name="pagination" autocomplete="" wire:model="pagination" class="mt-1 block w-auto py-2 pl-2 pr-7 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="25">10 Notificaciones</option>
                    <option value="50">25 Notificaciones</option>
                    <option value="100">50 Notificaciones</option>
                </select>
            </div>

            <div class="mb-4 inline-block">
                <label for="filtroEstudio">Estudio</label>
                <select id="filtroEstudio" name="filtroEstudio" wire:model="filtroEstudio" autocomplete=""  class="mt-1 block w-auto py-2 pl-2 pr-7 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="0">Todos</option>

                </select>
            </div>

        </div>

        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="pl-3 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                            Evaluación
                        </th>
                        <th scope="col" class="pl-3 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                            Estudio
                        </th>
                        <th scope="col" class="pl-4 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                            Estado
                        </th>
                        <th scope="col" class="pl-4 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                            Antiguedad
                        </th>
                        <th scope="col" class="pl-4 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">

                        </th>

                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($notificaciones as $notificacion)
                        <tr>
                            <td class="pl-3 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $notificacion->evaluacion_id }}
                                </div>
                            </td>
                            <td class="pl-4 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $notificacion->evaluacion->asignacion->estudio->name }}
                                </div>
                            </td>
                            <td class="pl-4 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $notificacion->evaluacion->estado->name }}
                                </div>
                            </td>
                            <td class="pl-4 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ diferenciaFechas($notificacion->updated_at) }}
                                </div>
                            </td>
                            <td class="pl-4 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    <a href="{{ route('evaluacions.index.notify', [$notificacion->evaluacion_id]) }}">[ VER ]</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <!-- More items... -->
                    </tbody>
                </table>
                <div class="mx-2">{{ $notificaciones->links('vendor.livewire.tailwind') }}</div>
            </div>
        </div>
    </div>
</div>

