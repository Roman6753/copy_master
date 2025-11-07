<x-layout title="Управление категориями">
    <x-section title="Управление категориями">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <h2 class="text-xl font-semibold mb-4">Добавить категорию</h2>
                <form action="{{ route('admin.categories') }}" method="POST" class="space-y-4">
                    @csrf
                    <x-form.div title="Название категории">
                        <input type="text" 
                               name="name" 
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                               required>
                    </x-form.div>
                    <x-form.button>
                        Добавить категорию
                    </x-form.button>
                </form>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Список категорий</h2>
                @if($categories->count() > 0)
                    <div class="space-y-3">
                        @foreach($categories as $category)
                            <div class="flex justify-between items-center p-3 border border-gray-200 rounded-lg">
                                <span class="font-medium">{{ $category->name }}</span>
                                <form action="{{ route('admin.categories', $category) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700 transition-colors"
                                            onclick="return confirm('Удалить категорию?')">
                                        Удалить
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500">Категории пока не добавлены.</p>
                @endif
            </div>
        </div>
    </x-section>
</x-layout>