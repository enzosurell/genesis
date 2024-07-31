<x-general>
    <x-slot:body>
        <h1>Welcome</h1>
        <form action="/logout" method="POST">
            @csrf
            <button class="btn bg-primary"> Logout </button>
        </form>
    </x-slot:body>
</x-general>