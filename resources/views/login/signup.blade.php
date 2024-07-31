<x-general>
    <x-slot:body>
        <x-login-signup-form action="/register" method="post">
            <x-slot:title>
                SIGNUP
            </x-slot:title>
            <x-slot:fields>
                <x-input-field type="text" name="fname" placeholder="First Name" :value="old('fname')" required/>
                <x-input-field type="text" name="lname" placeholder="Last Name" :value="old('lname')" required/>
                <x-input-field type="email" name="email" placeholder="E-mail" :value="old('email')" required/>
                <x-input-field type="text" name="name" placeholder="Username" :value="old('name')" required/>
                <x-input-field type="password" name="password" placeholder="Password" required/>
                <x-input-field type="password" name="password_confirmation" placeholder="Password" required/>
                <button name="register" class="btn btn-primary form-control mb-2">Register</button>
                <a type="button" class="btn btn-secondary form-control mb-2" href="/">back</a>
            </x-slot:fields>
        </x-login-signup-form>
    </x-slot:body>
</x-general>