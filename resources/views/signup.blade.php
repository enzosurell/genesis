<x-general>
    <x-slot:body>
        <x-login-signup-form>
            <x-slot:title>
                SIGNUP
            </x-slot:title>
            <x-slot:action>
                /register
            </x-slot:action>
            <x-slot:fields>
                <input type="text" name="name" class="form-control mb-3" placeholder="Username">
                <input type="text" name="email" class="form-control mb-3" placeholder="E-mail">
                <input type="password" name="password" class="form-control mb-3" placeholder="Password">
                <button name="register" class="btn btn-primary form-control mb-2">Register</button>
                <a type="button" class="btn btn-secondary form-control mb-2" href="/">back</a>
            </x-slot:fields>
        </x-login-signup-form>
    </x-slot:body>
</x-general>