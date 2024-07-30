<x-general>
    <x-slot:body>
        <x-login-signup-form action="/login" method="post">
            <x-slot:title>
                LOGIN
            </x-slot:title>
            <x-slot:fields>
                <input type="text" name="name" class="form-control mb-3" placeholder="Username" required>
                    @error('name')
                        <p class="text-danger small" style="font-style: italic">{{ $message }}</p>
                    @enderror
                <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
                    @error('password')
                        <p class="text-danger small" style="font-style: italic">{{ $message }}</p>
                    @enderror
                <button name="login" class="btn btn-primary form-control mb-2">Login</button>
                <a href="/signup">Signup</a>
            </x-slot:fields>
        </x-login-signup-form>
    </x-slot:body>
</x-general>