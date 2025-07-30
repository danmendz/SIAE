<div class="space-y-6">
    
    <div>
        <x-input-label for="mes_inicio" :value="__('Mes Inicio')"/>
        <x-text-input id="mes_inicio" name="mes_inicio" type="text" class="mt-1 block w-full" :value="old('mes_inicio', $periodo?->mes_inicio)" autocomplete="mes_inicio" placeholder="Mes Inicio"/>
        <x-input-error class="mt-2" :messages="$errors->get('mes_inicio')"/>
    </div>
    <div>
        <x-input-label for="mes_fin" :value="__('Mes Fin')"/>
        <x-text-input id="mes_fin" name="mes_fin" type="text" class="mt-1 block w-full" :value="old('mes_fin', $periodo?->mes_fin)" autocomplete="mes_fin" placeholder="Mes Fin"/>
        <x-input-error class="mt-2" :messages="$errors->get('mes_fin')"/>
    </div>
    <div>
        <x-input-label for="anio" :value="__('Anio')"/>
        <x-text-input id="anio" name="anio" type="text" class="mt-1 block w-full" :value="old('anio', $periodo?->anio)" autocomplete="anio" placeholder="Anio"/>
        <x-input-error class="mt-2" :messages="$errors->get('anio')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>