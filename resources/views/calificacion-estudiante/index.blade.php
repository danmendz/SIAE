<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Calificacion Estudiantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Calificacion Estudiantes') }}</h1>
                            <p class="mt-2 text-sm text-gray-700">A list of all the {{ __('Calificacion Estudiantes') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('calificacion-estudiantes.create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add new</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <table class="w-full divide-y divide-gray-300">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">No</th>
                                        
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Matricula</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Periodo Calificaciones</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Materia</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Profesor</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">P1</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Aro1 1</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">P2</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Aro2 1</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">P3</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Aro3 1</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Ti</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Cf</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Are1</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Calificacion Cuatrimestral</th>

                                        <th scope="col" class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach ($calificacionEstudiantes as $calificacionEstudiante)
                                        <tr class="even:bg-gray-50">
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900">{{ ++$i }}</td>
                                            
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $calificacionEstudiante->matricula }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $calificacionEstudiante->periodo_calificaciones }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $calificacionEstudiante->materia }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $calificacionEstudiante->profesor }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $calificacionEstudiante->p1 }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $calificacionEstudiante->aro1_1 }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $calificacionEstudiante->p2 }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $calificacionEstudiante->aro2_1 }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $calificacionEstudiante->p3 }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $calificacionEstudiante->aro3_1 }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $calificacionEstudiante->ti }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $calificacionEstudiante->cf }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $calificacionEstudiante->are1 }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $calificacionEstudiante->calificacion_cuatrimestral }}</td>

                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                <form action="{{ route('calificacion-estudiantes.destroy', $calificacionEstudiante->id) }}" method="POST">
                                                    <a href="{{ route('calificacion-estudiantes.show', $calificacionEstudiante->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Show') }}</a>
                                                    <a href="{{ route('calificacion-estudiantes.edit', $calificacionEstudiante->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('calificacion-estudiantes.destroy', $calificacionEstudiante->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Delete') }}</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <div class="mt-4 px-4">
                                    {!! $calificacionEstudiantes->withQueryString()->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>