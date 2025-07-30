<div class="space-y-6">
    
    <div>
        <x-input-label for="matricula" :value="__('Matricula')"/>
        <x-text-input id="matricula" name="matricula" type="text" class="mt-1 block w-full" :value="old('matricula', $estudiante?->matricula)" autocomplete="matricula" placeholder="Matricula"/>
        <x-input-error class="mt-2" :messages="$errors->get('matricula')"/>
    </div>
    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $estudiante?->nombre)" autocomplete="nombre" placeholder="Nombre"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombre')"/>
    </div>
    <div>
        <x-input-label for="carrera" :value="__('Carrera')"/>
        <x-text-input id="carrera" name="carrera" type="text" class="mt-1 block w-full" :value="old('carrera', $estudiante?->carrera)" autocomplete="carrera" placeholder="Carrera"/>
        <x-input-error class="mt-2" :messages="$errors->get('carrera')"/>
    </div>
    <div>
        <x-input-label for="cuatrimestre" :value="__('Cuatrimestre')"/>
        <x-text-input id="cuatrimestre" name="cuatrimestre" type="text" class="mt-1 block w-full" :value="old('cuatrimestre', $estudiante?->cuatrimestre)" autocomplete="cuatrimestre" placeholder="Cuatrimestre"/>
        <x-input-error class="mt-2" :messages="$errors->get('cuatrimestre')"/>
    </div>
    <div>
        <x-input-label for="grado" :value="__('Grado')"/>
        <x-text-input id="grado" name="grado" type="text" class="mt-1 block w-full" :value="old('grado', $estudiante?->grado)" autocomplete="grado" placeholder="Grado"/>
        <x-input-error class="mt-2" :messages="$errors->get('grado')"/>
    </div>
    <div>
        <x-input-label for="grupo" :value="__('Grupo')"/>
        <x-text-input id="grupo" name="grupo" type="text" class="mt-1 block w-full" :value="old('grupo', $estudiante?->grupo)" autocomplete="grupo" placeholder="Grupo"/>
        <x-input-error class="mt-2" :messages="$errors->get('grupo')"/>
    </div>
    <div>
        <x-input-label for="situacion" :value="__('Situacion')"/>
        <x-text-input id="situacion" name="situacion" type="text" class="mt-1 block w-full" :value="old('situacion', $estudiante?->situacion)" autocomplete="situacion" placeholder="Situacion"/>
        <x-input-error class="mt-2" :messages="$errors->get('situacion')"/>
    </div>
    <div>
        <x-input-label for="turno" :value="__('Turno')"/>
        <x-text-input id="turno" name="turno" type="text" class="mt-1 block w-full" :value="old('turno', $estudiante?->turno)" autocomplete="turno" placeholder="Turno"/>
        <x-input-error class="mt-2" :messages="$errors->get('turno')"/>
    </div>
    <div>
        <x-input-label for="periodo_inscrito" :value="__('Periodo Inscrito')"/>
        <x-text-input id="periodo_inscrito" name="periodo_inscrito" type="text" class="mt-1 block w-full" :value="old('periodo_inscrito', $estudiante?->periodo_inscrito)" autocomplete="periodo_inscrito" placeholder="Periodo Inscrito"/>
        <x-input-error class="mt-2" :messages="$errors->get('periodo_inscrito')"/>
    </div>
    <div>
        <x-input-label for="estatus_academico" :value="__('Estatus Academico')"/>
        <x-text-input id="estatus_academico" name="estatus_academico" type="text" class="mt-1 block w-full" :value="old('estatus_academico', $estudiante?->estatus_academico)" autocomplete="estatus_academico" placeholder="Estatus Academico"/>
        <x-input-error class="mt-2" :messages="$errors->get('estatus_academico')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>