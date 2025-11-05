<x-layout title="Регистрация">
    <x-section title="Регистрация">
        <form action="{{ route('register') }}" class="space-y-6 max-w-md mx-auto bg-white p-8 rounded-lg shadow-md" method="POST">
            @csrf
            
            <x-form.div title="Name">
                <input type="text" 
                       id="name" 
                       name="name" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                       required>
                @error('name')
                     <x-form.error>{{ $message }}</x-form.error>
                @enderror
            </x-form.div>
            
            <x-form.div title="Sumname">
                <input type="text" 
                       id="surname" 
                       name="surname" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                       required>
                @error('surname')
                     <x-form.error>{{ $message }}</x-form.error>
                @enderror
            </x-form.div>
            
            <x-form.div title="Patronys">
                <input type="text" 
                       id="patronymic" 
                       name="patronymic"  
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('patronymic')
                     <x-form.error>{{ $message }}</x-form.error>
                @enderror
            </x-form.div>
            
            <x-form.div title="Email">
                <input type="email" 
                       id="email" 
                       name="email" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                       required>
                @error('email')
                     <x-form.error>{{ $message }}</x-form.error>
                @enderror
            </x-form.div>
            
            <x-form.div title="Password">
                <input type="password" 
                       id="password" 
                       name="password" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                       required>
                @error('password')
                    <x-form.error>{{ $message }}</x-form.error>
                @enderror
            </x-form.div>
            
            <x-form.div title="Password confirmation">
                <input type="password" 
                       id="password_confirmation" 
                       name="password_confirmation" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                       required>
            </x-form.div>
            <x-form.div title="согласие с правилами регистрации">
                <input type="checkbox" name="rules"  
                       class="border border-gray-200 p-2"
                       required>
            </x-form.div>
            
            <x-form.div>
                <x-form.button>
                    Зарегистрироваться
                </x-form.button>
            </x-form.div>
        </form>
    </x-section>
</x-layout>
