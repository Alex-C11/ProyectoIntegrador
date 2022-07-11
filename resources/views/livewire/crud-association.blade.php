<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <button wire:click="create()"
            class="bg-purple-600 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded my-3">
            Crear Nueva Categoria</button>
            @if($isOpen)
                @include('livewire.association_create')
            @endif
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="w-full divide-y divide-gray-200 table-auto">
                  <thead class="bg-indigo-500 text-white">
                    <tr class="text-left text-xs font-bold  uppercase">
                      <td scope="col" class="px-6 py-3 cursor-pointer">ID</td>
                      <td scope="col" class="px-6 py-3 cursor-pointer">Nombre</td>
                      <td scope="col" class="px-6 py-3 cursor-pointer">Fecha</td>
                      <td scope="col" class="px-6 py-3">Localizacion</td>
                      <td wire:click="order('number')" scope="col" class="px-6 py-3">Opciones</td>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200">
                    @foreach ($categories as $category)
                    <tr class="text-sm font-medium text-gray-900">
                      <td class="px-6 py-4">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                          {{$category->id}}
                        </span>
                      </td>
                      <td class="px-6 py-4">{{$category->name}}</td>
                      <td class="px-6 py-4">{{$category->creationDate}}</td>
                      <td class="px-6 py-4">{{$category->location}}</td>
                      <td class="px-6 py-4">
                        <button wire:click="edit({{ $category }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                        <button wire:click="delete({{ $category }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

