<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You are Succesfully logged in!") }}
                </div>
            </div>
        </div>
<!-- new update modified for CRUD -->
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    {{ __("Import Product Here") }}
                                    <header>
                                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                            {{ __("Product Information and Details.") }}
                                        </p>
                                    </header>
    <form method="POST" action="{{ route('store') }}" class="mt-6 space-y-6">
        @csrf
        @method('POST')
        <div>
            <x-input-label for="name" :value="__('Product Name')"  />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"    autofocus autocomplete="" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="price" :value="__('Price')" />
            <x-text-input id="price" name="price" type="text" class="mt-1 block w-full"   autofocus autocomplete="price" />
            <x-input-error class="mt-2" :messages="$errors->get('price')"/>
        </div>

        <div>
            <x-input-label for="quantity" :value="__('quantity')" />
            <x-text-input id="quantity" name="quantity" type="text" class="mt-1 block w-full"   autocomplete="quantity" />
            <x-input-error class="mt-2" :messages="$errors->get('quantity')"/>
        </div>

        <div>
            <x-input-label for="description" :value="__('description')" />
            <x-text-input id="description" name="description" type="text" class="mt-1 block w-full"   autofocus autocomplete="description" />
            <x-input-error class="mt-2" :messages="$errors->get('description')"/>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </div>
</div>
</div>

<!-- End additional set up CRUD -->
</x-app-layout>
