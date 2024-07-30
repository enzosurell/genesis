<x-general>
    <x-slot:body>
        <x-login-signup-form action="/register" method="post">
            <x-slot:title>
                SIGNUP
            </x-slot:title>
            <x-slot:fields>
                <input type="text" name="fname" class="form-control mb-3" placeholder="First Name" required>
                    @error('fname')
                        <p class="text-danger small" style="font-style: italic">{{ $message }}</p>
                    @enderror
                <input type="text" name="lname" class="form-control mb-3" placeholder="Last Name" required>
                    @error('lname')
                        <p class="text-danger small" style="font-style: italic">{{ $message }}</p>
                    @enderror
                <input type="email" name="email" class="form-control mb-3" placeholder="E-mail" required>
                    @error('email')
                        <p class="text-danger small" style="font-style: italic">{{ $message }}</p>
                    @enderror
                <input type="text" name="name" class="form-control mb-3" placeholder="Username" required>
                    @error('name')
                        <p class="text-danger small" style="font-style: italic">{{ $message }}</p>
                    @enderror
                <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
                    @error('password')
                        <p class="text-danger small" style="font-style: italic">{{ $message }}</p>
                    @enderror
                <button name="register" class="btn btn-primary form-control mb-2">Register</button>
                <a type="button" class="btn btn-secondary form-control mb-2" href="/">back</a>
            </x-slot:fields>
        </x-login-signup-form>
    </x-slot:body>
</x-general>