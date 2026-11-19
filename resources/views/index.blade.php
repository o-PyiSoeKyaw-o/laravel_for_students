@extends("layouts.base")

@section("block body")
<div class="max-w-4xl mx-auto mt-16 px-4 text-center">
    <div class="bg-white rounded-xl shadow-md p-10 border border-gray-100">
        <!-- <span class="inline-block px-3 py-1 text-xs font-semibold text-blue-600 bg-blue-50 rounded-full mb-4">
            Welcome
        </span> -->

        <h1 class="text-4xl font-bold text-gray-900 mb-4">
            Simple Product Management
        </h1>

        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('products.index') }}" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-500 transition duration-150">
                View Products
            </a>

            <a href="{{ route('products.create') }}" class="px-6 py-3 bg-gray-100 text-gray-800 font-medium rounded-lg hover:bg-gray-200 transition duration-150">
                + Add Product
            </a>
        </div>
    </div>
</div>
@endsection