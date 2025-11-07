<x-layout title="Registration">
    <x-section title="Registration">
        <form action="{{ route('register') }}" class="space-y-6 max-w-md mx-auto bg-white p-8 rounded-lg shadow-md" method="POST">
            @csrf
            
            <x-form.div title="Name">
                <input type="text" 
                       id="name" 
                       name="name" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                       required
                       value="{{ old('name') }}"
                       placeholder="Enter your name">
                @error('name')
                     <x-form.error>{{ $message }}</x-form.error>
                @enderror
            </x-form.div>
            
            <x-form.div title="Surname">
                <input type="text" 
                       id="surname" 
                       name="surname" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                       required
                       value="{{ old('surname') }}"
                       placeholder="Enter your surname">
                @error('surname')
                     <x-form.error>{{ $message }}</x-form.error>
                @enderror
            </x-form.div>
            
            <x-form.div title="Patronymic">
                <input type="text" 
                       id="patronymic" 
                       name="patronymic"  
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                       value="{{ old('patronymic') }}"
                       placeholder="Enter your patronymic (optional)">
                @error('patronymic')
                     <x-form.error>{{ $message }}</x-form.error>
                @enderror
            </x-form.div>
            
            <x-form.div title="Login">
                <input type="text" 
                       id="login" 
                       name="login" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                       required
                       value="{{ old('login') }}"
                       placeholder="Enter your login">
                @error('login')
                     <x-form.error>{{ $message }}</x-form.error>
                @enderror
            </x-form.div>
            
            <x-form.div title="Email">
                <input type="email" 
                       id="email" 
                       name="email" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                       required
                       value="{{ old('email') }}"
                       placeholder="Enter your email">
                @error('email')
                     <x-form.error>{{ $message }}</x-form.error>
                @enderror
            </x-form.div>
            
            <x-form.div title="Password">
                <input type="password" 
                       id="password" 
                       name="password" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                       required
                       placeholder="Enter your password (min 6 characters)">
                @error('password')
                    <x-form.error>{{ $message }}</x-form.error>
                @enderror
            </x-form.div>
            
            <x-form.div title="Confirm Password">
                <input type="password" 
                       id="password_confirmation" 
                       name="password_confirmation" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                       required
                       placeholder="Confirm your password">
            </x-form.div>
            
            <x-form.div>
                <div class="flex items-center">
                    <input type="checkbox" 
                           id="rules" 
                           name="rules"  
                           class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                           required
                           {{ old('rules') ? 'checked' : '' }}>
                    <label for="rules" class="ml-2 block text-sm text-gray-900">
                        Согласие с правилами регистрации
                    </label>
                </div>
                @error('rules')
                    <x-form.error>{{ $message }}</x-form.error>
                @enderror
            </x-form.div>
            
            <x-form.div>
                <x-form.button>
                    Register
                </x-form.button>
            </x-form.div>
        </form>
    </x-section>
</x-layout>