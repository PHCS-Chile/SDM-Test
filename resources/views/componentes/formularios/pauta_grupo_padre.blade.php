<div>
    <fieldset>
        <legend class="text-base font-medium text-gray-900">{{ $grupo['padre']['titulo'] }} - ({{ $respuestas[$grupo['padre']['id']] }})</legend>
        <div class="mt-2 space-y-2">
            @foreach($grupo['hijos'] as $hijo)
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="{{ $hijo['name_interno'] }}" name="{{ $hijo['name_interno'] }}" wire:model="respuestas.{{ $hijo['id'] }}" wire: type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                </div>
                <div class="ml-3 text-sm">
                    <label for="{{ $hijo['name_interno'] }}" class="font-medium @if($hijo['no_aplica']) text-yellow-500 @else text-gray-700 @endif">{{ $hijo['name'] }}</label>
                </div>
            </div>
            @endforeach
        </div>
    </fieldset>
</div>
