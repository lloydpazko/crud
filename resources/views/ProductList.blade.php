<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Inventory Items") }}
                </div>
            </div>
        </div>
<!-- End View Table Products -->
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
    </div>
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 15px;
        text-align: center;
        font-color: #f8f4f4
    }

    th {
        background-color: #1d1e1d;
        color: rgb(241, 233, 233);
    }

    tr:nth-child(even) {
        background-color: #1f1d1d;
    }

    tr:hover {
        background-color: #ddd;
    }
        </style>
    <div class="m-4">
        @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$Message}}</p>
        </div>
        @endif
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">{{ __("Product Name") }}</th>
                    <th scope="col">{{ __("Product Price") }}</th>
                    <th scope="col">{{ __("Product Quantity") }}</th>
                    <th scope="col">{{ __("Product Description") }}</th>
                    <th scope="col">{{ __("ACTION") }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <form action="{{ route('ProductList.destroy', $product->id)}}" method="post">
                            <x-primary-button>
                            <a class="btn btn-success" href="{{route('ProductList.edit', $product->id)}}">Edit</a>
                            </x-primary-button>
                            @csrf
                            @method('DELETE')
                            <x-danger-button class="ml-3">
                                {{ __('Delete') }}
                            </x-danger-button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<!-- End View Table Products -->
</x-app-layout>
