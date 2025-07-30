<div class="space-y-6">
    
    <div>
        <x-input-label for="matricula" :value="__('Matricula')"/>
        <x-text-input id="matricula" name="matricula" type="text" class="mt-1 block w-full" :value="old('matricula', $promedioEstudiante?->matricula)" autocomplete="matricula" placeholder="Matricula"/>
        <x-input-error class="mt-2" :messages="$errors->get('matricula')"/>
    </div>
    <div>
        <x-input-label for="promedio_cuatrimestral" :value="__('Promedio Cuatrimestral')"/>
        <x-text-input id="promedio_cuatrimestral" name="promedio_cuatrimestral" type="text" class="mt-1 block w-full" :value="old('promedio_cuatrimestral', $promedioEstudiante?->promedio_cuatrimestral)" autocomplete="promedio_cuatrimestral" placeholder="Promedio Cuatrimestral"/>
        <x-input-error class="mt-2" :messages="$errors->get('promedio_cuatrimestral')"/>
    </div>
    <div>
        <x-input-label for="promedio_general" :value="__('Promedio General')"/>
        <x-text-input id="promedio_general" name="promedio_general" type="text" class="mt-1 block w-full" :value="old('promedio_general', $promedioEstudiante?->promedio_general)" autocomplete="promedio_general" placeholder="Promedio General"/>
        <x-input-error class="mt-2" :messages="$errors->get('promedio_general')"/>
    </div>
    <div>
        <x-input-label for="periodo_id" :value="__('Periodo Id')"/>
        <x-text-input id="periodo_id" name="periodo_id" type="text" class="mt-1 block w-full" :value="old('periodo_id', $promedioEstudiante?->periodo_id)" autocomplete="periodo_id" placeholder="Periodo Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('periodo_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>