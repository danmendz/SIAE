<div class="space-y-6">
    
    <div>
        <x-input-label for="matricula" :value="__('Matricula')"/>
        <x-text-input id="matricula" name="matricula" type="text" class="mt-1 block w-full" :value="old('matricula', $calificacionEstudiante?->matricula)" autocomplete="matricula" placeholder="Matricula"/>
        <x-input-error class="mt-2" :messages="$errors->get('matricula')"/>
    </div>
    <div>
        <x-input-label for="periodo_calificaciones" :value="__('Periodo Calificaciones')"/>
        <x-text-input id="periodo_calificaciones" name="periodo_calificaciones" type="text" class="mt-1 block w-full" :value="old('periodo_calificaciones', $calificacionEstudiante?->periodo_calificaciones)" autocomplete="periodo_calificaciones" placeholder="Periodo Calificaciones"/>
        <x-input-error class="mt-2" :messages="$errors->get('periodo_calificaciones')"/>
    </div>
    <div>
        <x-input-label for="materia" :value="__('Materia')"/>
        <x-text-input id="materia" name="materia" type="text" class="mt-1 block w-full" :value="old('materia', $calificacionEstudiante?->materia)" autocomplete="materia" placeholder="Materia"/>
        <x-input-error class="mt-2" :messages="$errors->get('materia')"/>
    </div>
    <div>
        <x-input-label for="profesor" :value="__('Profesor')"/>
        <x-text-input id="profesor" name="profesor" type="text" class="mt-1 block w-full" :value="old('profesor', $calificacionEstudiante?->profesor)" autocomplete="profesor" placeholder="Profesor"/>
        <x-input-error class="mt-2" :messages="$errors->get('profesor')"/>
    </div>
    <div>
        <x-input-label for="p1" :value="__('P1')"/>
        <x-text-input id="p1" name="p1" type="text" class="mt-1 block w-full" :value="old('p1', $calificacionEstudiante?->p1)" autocomplete="p1" placeholder="P1"/>
        <x-input-error class="mt-2" :messages="$errors->get('p1')"/>
    </div>
    <div>
        <x-input-label for="aro1_1" :value="__('Aro1 1')"/>
        <x-text-input id="aro1_1" name="aro1_1" type="text" class="mt-1 block w-full" :value="old('aro1_1', $calificacionEstudiante?->aro1_1)" autocomplete="aro1_1" placeholder="Aro1 1"/>
        <x-input-error class="mt-2" :messages="$errors->get('aro1_1')"/>
    </div>
    <div>
        <x-input-label for="p2" :value="__('P2')"/>
        <x-text-input id="p2" name="p2" type="text" class="mt-1 block w-full" :value="old('p2', $calificacionEstudiante?->p2)" autocomplete="p2" placeholder="P2"/>
        <x-input-error class="mt-2" :messages="$errors->get('p2')"/>
    </div>
    <div>
        <x-input-label for="aro2_1" :value="__('Aro2 1')"/>
        <x-text-input id="aro2_1" name="aro2_1" type="text" class="mt-1 block w-full" :value="old('aro2_1', $calificacionEstudiante?->aro2_1)" autocomplete="aro2_1" placeholder="Aro2 1"/>
        <x-input-error class="mt-2" :messages="$errors->get('aro2_1')"/>
    </div>
    <div>
        <x-input-label for="p3" :value="__('P3')"/>
        <x-text-input id="p3" name="p3" type="text" class="mt-1 block w-full" :value="old('p3', $calificacionEstudiante?->p3)" autocomplete="p3" placeholder="P3"/>
        <x-input-error class="mt-2" :messages="$errors->get('p3')"/>
    </div>
    <div>
        <x-input-label for="aro3_1" :value="__('Aro3 1')"/>
        <x-text-input id="aro3_1" name="aro3_1" type="text" class="mt-1 block w-full" :value="old('aro3_1', $calificacionEstudiante?->aro3_1)" autocomplete="aro3_1" placeholder="Aro3 1"/>
        <x-input-error class="mt-2" :messages="$errors->get('aro3_1')"/>
    </div>
    <div>
        <x-input-label for="ti" :value="__('Ti')"/>
        <x-text-input id="ti" name="ti" type="text" class="mt-1 block w-full" :value="old('ti', $calificacionEstudiante?->ti)" autocomplete="ti" placeholder="Ti"/>
        <x-input-error class="mt-2" :messages="$errors->get('ti')"/>
    </div>
    <div>
        <x-input-label for="cf" :value="__('Cf')"/>
        <x-text-input id="cf" name="cf" type="text" class="mt-1 block w-full" :value="old('cf', $calificacionEstudiante?->cf)" autocomplete="cf" placeholder="Cf"/>
        <x-input-error class="mt-2" :messages="$errors->get('cf')"/>
    </div>
    <div>
        <x-input-label for="are1" :value="__('Are1')"/>
        <x-text-input id="are1" name="are1" type="text" class="mt-1 block w-full" :value="old('are1', $calificacionEstudiante?->are1)" autocomplete="are1" placeholder="Are1"/>
        <x-input-error class="mt-2" :messages="$errors->get('are1')"/>
    </div>
    <div>
        <x-input-label for="calificacion_cuatrimestral" :value="__('Calificacion Cuatrimestral')"/>
        <x-text-input id="calificacion_cuatrimestral" name="calificacion_cuatrimestral" type="text" class="mt-1 block w-full" :value="old('calificacion_cuatrimestral', $calificacionEstudiante?->calificacion_cuatrimestral)" autocomplete="calificacion_cuatrimestral" placeholder="Calificacion Cuatrimestral"/>
        <x-input-error class="mt-2" :messages="$errors->get('calificacion_cuatrimestral')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>