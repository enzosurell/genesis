<x-general>
    <x-slot:body>
        <x-login-signup-form action="/register" method="post">
            <x-slot:title>
                Register an account
            </x-slot:title>
            <x-slot:fields>
                <x-input-field type="text" name="fname" placeholder="First Name" :value="old('fname')" required/>
                <x-input-field type="text" name="lname" placeholder="Last Name" :value="old('lname')" required/>
                <x-input-field type="email" name="email" placeholder="E-mail" :value="old('email')" required/>
                <x-input-field type="text" name="name" placeholder="Username" :value="old('name')" required/>
                <x-input-field type="password" name="password" placeholder="Password" required/>
                <x-input-field type="password" name="password_confirmation" placeholder="Password" required/>

                <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700" >
                
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                </div>
                <div>
                    <a type="button" href="/" class="flex w-full justify-center rounded-md bg-slate-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-slate-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600">Cancel</a>
                </div>
            </x-slot:fields>
        </x-login-signup-form>
    </x-slot:body>
</x-general>