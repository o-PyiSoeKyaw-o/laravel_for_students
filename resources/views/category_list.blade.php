@extends("layouts.base")

@section("block body")

<div class="w-8/10 mx-auto mt-15">
    <a href="{{ route('categories.create') }}" class="p-2 bg-gray-400 rounded-md hover:bg-gray-300 duration-150">Category Create</a>

    <div class="overflow-x-auto shadow-md rounded-lg mt-5">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead class="bg-gray-100 border-b border-gray-200">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">#</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Title</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Date</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($categories as $category)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4">{{ $category->title }}</td>
                    <td class="px-6 py-4">{{ $category->created_at->diffForHumans() }}</td>
                    <td class="px-6 py-4 space-x-2">
                        <a href="{{ route('categories.edit', $category->id) }}" class="px-3 py-1.5 bg-amber-500 text-white rounded-md hover:bg-amber-400 transition duration-150 text-xs">Update</a>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Do you want to delete this category?')" class="px-3 py-1.5 bg-red-600 text-white rounded-md hover:bg-red-500 transition duration-150 text-xs">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-6 text-center text-gray-500">
                        No categories found
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>


</div>
@endsection