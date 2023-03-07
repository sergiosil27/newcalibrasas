<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              

                <table class="table table-dark table-striped mt-4">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Permisos</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $rol)
                      <tr>
                          <td>{{$rol->id}}</td>
                          <td>{{$rol->name}}</td>
                          <td>
                              @foreach ($rol->permissions as $permiso)   
                            {{$permiso->name}}
                            @endforeach
                          </td>
                          <td></td>        
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
