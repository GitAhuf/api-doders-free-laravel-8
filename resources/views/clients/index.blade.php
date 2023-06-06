<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Clientes
        </h2>
    </x-slot>

    <x-container class="py-8">
       <x-form-section>
        <x-slot name="title">
            Crear un nuevo cliente
        </x-slot>
        <x-slot name="description">
            Ingrese los datos solicitados para poder crear un nuevo cliente
        </x-slot>
        <div class="grid grid-cols-6 gap-6">        
            <div class="col-span-6 sm:col-span-4">
                <x-label>
                    Nombre
                </x-label>

                <x-input type="text" class="w-full mt-1"/>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label>
                    URL de redirección
                </x-label>

                <x-input type="text" class="w-full mt-1"/>
            </div>
        </div>

        <x-slot name="actions">
            <x-button>Crear</x-button>

        </x-slot>            
    
        </x-form-section>        
    </x-container>

</x-app-layout>