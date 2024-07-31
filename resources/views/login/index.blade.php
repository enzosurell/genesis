<x-general>
    <x-slot:body>
        <x-login-signup-form action="/login" method="post">
            <x-slot:title>
                LOGIN
            </x-slot:title>
            <x-slot:fields>
                <x-input-field type="text" name="name" placeholder="Username" :value="old('name')" required/>
                <x-input-field type="password" name="password" placeholder="Password" :value="old('password')" required/>
                <button name="login" class="btn btn-primary form-control mb-2">Login</button>
                <a href="/signup">Signup</a>
            </x-slot:fields>
        </x-login-signup-form>
    </x-slot:body>
</x-general>