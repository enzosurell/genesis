<x-general>
    <x-slot:body>
        <x-login-signup-form action="/login" method="post">
            <x-slot:title>
                Sign in to your account
            </x-slot:title>
            <x-slot:fields>
                <div>
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Username or Email</label>
                    <div class="mt-2">
                        <x-input-field id="name" name="name" type="name" autocomplete="name" :value="old('name')" required />
                    </div>
                </div>
    
                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Password</label>
                    <div class="mt-2">
                        <x-input-field id="password" name="password" type="password" autocomplete="current-password" :value="old('name')" required />
                    </div>
                </div>
    
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>

                <p class="mt-10 text-center text-sm text-gray-500 dark:text-gray-300">
                    Not a member?
                <a href="/signup" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign Up for free</a>
                </p>
            </x-slot:fields>
        </x-login-signup-form>
    </x-slot:body>
</x-general>