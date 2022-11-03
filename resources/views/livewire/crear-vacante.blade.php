<form class="md:w-1/2 space-y-5" action="">

    <!-- Email Address -->
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />

        <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')" placeholder="Titulo Vacante"/>

        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="salario" :value="('Salario Mensual')" />
        <select name="salario" id="salario" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option>-- Seleccione --</option>
            @foreach ($salarios as $salario )
                <option value="{{$salario->id}}">{{$salario->salario}}</option>
            @endforeach
        </select>

    </div>

    <div>
        <x-input-label for="categoria" :value="('Categoría')" />
        <select name="categoria" id="categoria" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">

        </select>

    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />

        <x-text-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" :value="old('empresa')" placeholder="Empresa: ej. Netflix, Uber, Shopify"/>

    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Último Día para postularse')" />

        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="text" name="ultimo_dia" :value="old('ultimo_dia')" placeholder="Empresa: ej. Netflix, Uber, Shopify"/>

    </div>

    
    <div>
        <x-input-label for="ultimo_dia" :value="__('Último Día para postularse')" />

        <textarea id="ultimo_dia" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full h-72" type="text" name="ultimo_dia" :value="old('ultimo_dia')" placeholder="Empresa: ej. Netflix, Uber, Shopify"></textarea>

    </div>

    

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />

        <x-text-input id="imagen" class="block mt-1 w-full" type="file" name="imagen" :value="old('imagen')" placeholder="Empresa: ej. Netflix, Uber, Shopify"/>

    </div>

    <x-primary-button>
        Crear Vacante
    </x-primary-button>


</form>
