<div class="space-y-6">
    
    <div>
        <x-input-label for="matricula" :value="__('Matricula')"/>
        <x-text-input id="matricula" name="matricula" type="text" class="mt-1 block w-full" :value="old('matricula', $documentacionEstudiantil?->matricula)" autocomplete="matricula" placeholder="Matricula"/>
        <x-input-error class="mt-2" :messages="$errors->get('matricula')"/>
    </div>
    <div>
        <x-input-label for="documento" :value="__('Documento')"/>
        <x-text-input id="documento" name="documento" type="text" class="mt-1 block w-full" :value="old('documento', $documentacionEstudiantil?->documento)" autocomplete="documento" placeholder="Documento"/>
        <x-input-error class="mt-2" :messages="$errors->get('documento')"/>
    </div>
    <div>
        <x-input-label for="observaciones" :value="__('Observaciones')"/>
        <x-text-input id="observaciones" name="observaciones" type="text" class="mt-1 block w-full" :value="old('observaciones', $documentacionEstudiantil?->observaciones)" autocomplete="observaciones" placeholder="Observaciones"/>
        <x-input-error class="mt-2" :messages="$errors->get('observaciones')"/>
    </div>
    <div>
        <x-input-label for="original" :value="__('Original')"/>
        <x-text-input id="original" name="original" type="text" class="mt-1 block w-full" :value="old('original', $documentacionEstudiantil?->original)" autocomplete="original" placeholder="Original"/>
        <x-input-error class="mt-2" :messages="$errors->get('original')"/>
    </div>
    <div>
        <x-input-label for="copia" :value="__('Copia')"/>
        <x-text-input id="copia" name="copia" type="text" class="mt-1 block w-full" :value="old('copia', $documentacionEstudiantil?->copia)" autocomplete="copia" placeholder="Copia"/>
        <x-input-error class="mt-2" :messages="$errors->get('copia')"/>
    </div>
    <div>
        <x-input-label for="notas" :value="__('Notas')"/>
        <x-text-input id="notas" name="notas" type="text" class="mt-1 block w-full" :value="old('notas', $documentacionEstudiantil?->notas)" autocomplete="notas" placeholder="Notas"/>
        <x-input-error class="mt-2" :messages="$errors->get('notas')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>