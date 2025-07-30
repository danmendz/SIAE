<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $calificacionEstudiante->name ?? __('Show') . " " . __('Calificacion Estudiante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Show') }} Calificacion Estudiante</h1>
                            <p class="mt-2 text-sm text-gray-700">Details of {{ __('Calificacion Estudiante') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('calificacion-estudiantes.index') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <div class="mt-6 border-t border-gray-100">
                                    <dl class="divide-y divide-gray-100">
                                        
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Matricula</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $calificacionEstudiante->matricula }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Periodo Calificaciones</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $calificacionEstudiante->periodo_calificaciones }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Materia</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $calificacionEstudiante->materia }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Profesor</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $calificacionEstudiante->profesor }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">P1</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $calificacionEstudiante->p1 }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Aro1 1</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $calificacionEstudiante->aro1_1 }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">P2</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $calificacionEstudiante->p2 }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Aro2 1</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $calificacionEstudiante->aro2_1 }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">P3</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $calificacionEstudiante->p3 }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Aro3 1</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $calificacionEstudiante->aro3_1 }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Ti</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $calificacionEstudiante->ti }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Cf</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $calificacionEstudiante->cf }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Are1</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $calificacionEstudiante->are1 }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Calificacion Cuatrimestral</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $calificacionEstudiante->calificacion_cuatrimestral }}</dd>
                                </div>

                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
