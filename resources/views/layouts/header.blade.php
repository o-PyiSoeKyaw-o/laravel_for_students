<nav class="w-full h-[70px] bg-gray-100 shadow-md flex items-center justify-center">
    <div class="w-8/10 flex items-center justify-between">
        <a href="#" class="text-3xl font-bold">LARAVEL</a>

        <ul class="flex gap-5">
            <li><a href="/" class="p-2 hover:bg-gray-400 hover:text-amber-50 rounded-md duration-200">Home</a></li>
            <li><a href="{{ route('products.index') }}" class="p-2 hover:bg-gray-400 hover:text-amber-50 rounded-md duration-200">Product</a></li>
            <li><a href="{{ route('categories.index') }}" class="p-2 hover:bg-gray-400 hover:text-amber-50 rounded-md duration-200">Category</a></li>
        </ul>
    </div>
</nav>