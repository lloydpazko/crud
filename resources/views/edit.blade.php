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
                                    {{ __("Product Details") }}
                                    <header>
                                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                            {{ __("Update Product Information.") }}
                                        </p>
                                    </header>
                                    <form class="mt-6 space-y-6" action="{{route('ProductList.update',$product->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div>
                                            <x-input-label for="name" :value="__('Product name')" />
                                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"  value="{{$product->name}}" autofocus autocomplete="name" />
                                            <x-input-error class="mt-2" :messages="$errors->get('name')"/>
                                        </div>
                                        <div>
                                            <x-input-label for="price" :value="__('Price')" />
                                            <x-text-input id="price" name="price" type="text" class="mt-1 block w-full"  value="{{$product->price}}" autofocus autocomplete="price" />
                                            <x-input-error class="mt-2" :messages="$errors->get('price')"/>
                                        </div>
                                        <div>
                                            <x-input-label for="quantity" :value="__('Quantity')" />
                                            <x-text-input id="quantity" name="quantity" type="text" class="mt-1 block w-full" value="{{$product->quantity}}"  autofocus autocomplete="quantity" />
                                            <x-input-error class="mt-2" :messages="$errors->get('quantity')"/>
                                        </div>
                                        <div>
                                            <x-input-label for="description" :value="__('Description')" />
                                            <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" value="{{$product->description}}" autofocusautocomplete="description" />
                                            <x-input-error class="mt-2" :messages="$errors->get('description')"/>
                                        </div>
                                        <div class="flex items-center gap-4">
                                            <x-primary-button>
                                                {{ __('Update') }}
                                        </x-primary-button>
                                    </form>
                                </div>
                            </div>
                    </div>
</div>
</x-app-layout>
