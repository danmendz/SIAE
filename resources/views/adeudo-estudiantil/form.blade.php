<div class="space-y-6">
    
    <div>
        <x-input-label for="matricula" :value="__('Matricula')"/>
        <x-text-input id="matricula" name="matricula" type="text" class="mt-1 block w-full" :value="old('matricula', $adeudoEstudiantil?->matricula)" autocomplete="matricula" placeholder="Matricula"/>
        <x-input-error class="mt-2" :messages="$errors->get('matricula')"/>
    </div>
    <div>
        <x-input-label for="area" :value="__('Area')"/>
        <x-text-input id="area" name="area" type="text" class="mt-1 block w-full" :value="old('area', $adeudoEstudiantil?->area)" autocomplete="area" placeholder="Area"/>
        <x-input-error class="mt-2" :messages="$errors->get('area')"/>
    </div>
    <div>
        <x-input-label for="tipo_adeudo" :value="__('Tipo Adeudo')"/>
        <x-text-input id="tipo_adeudo" name="tipo_adeudo" type="text" class="mt-1 block w-full" :value="old('tipo_adeudo', $adeudoEstudiantil?->tipo_adeudo)" autocomplete="tipo_adeudo" placeholder="Tipo Adeudo"/>
        <x-input-error class="mt-2" :messages="$errors->get('tipo_adeudo')"/>
    </div>
    <div>
        <x-input-label for="descripcion" :value="__('Descripcion')"/>
        <x-text-input id="descripcion" name="descripcion" type="text" class="mt-1 block w-full" :value="old('descripcion', $adeudoEstudiantil?->descripcion)" autocomplete="descripcion" placeholder="Descripcion"/>
        <x-input-error class="mt-2" :messages="$errors->get('descripcion')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>