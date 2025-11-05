<x-layout title="Авторизация">
    <x-section title="Авторизация">
        <form action="{{ route('login') }}" class="space-y-6 max-w-md mx-auto bg-white p-8 rounded-lg shadow-md" method="POST">
            @csrf
            
            <x-form.div title="Login">
                <input type="text" 
                       id="login" 
                       name="login" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                       required
                       autocomplete="login">
                @error('login')
                    <x-form.error>{{ $message }}</x-form.error>
                @enderror
            </x-form.div>
            
            <x-form.div title="Password">
                <input type="password" 
                       id="password" 
                       name="password" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                       required
                       autocomplete="current-password">
                @error('password')
                    <x-form.error>{{ $message }}</x-form.error>
                @enderror
            </x-form.div>
            
            <x-form.div>
                <x-form.button>
                    Войти
                </x-form.button>
            </x-form.div>
        </form>
    </x-section>
</x-layout>
