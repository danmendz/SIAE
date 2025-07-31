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
        <x-input-label for="original" :value="__('Original')" />
        <select id="original" name="original" class="mt-1 block w-full">
            <option value="1" {{ old('original', $documentacionEstudiantil?->original) == 1 ? 'selected' : '' }}>Sí</option>
            <option value="0" {{ old('original', $documentacionEstudiantil?->original) == 0 ? 'selected' : '' }}>No</option>
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('original')" />
    </div>
    
    <div>
        <x-input-label for="copia" :value="__('Copia')" />
        <select id="copia" name="copia" class="mt-1 block w-full">
            <option value="1" {{ old('copia', $documentacionEstudiantil?->copia) == 1 ? 'selected' : '' }}>Sí</option>
            <option value="0" {{ old('copia', $documentacionEstudiantil?->copia) == 0 ? 'selected' : '' }}>No</option>
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('copia')" />
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