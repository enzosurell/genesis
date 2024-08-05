<x-general>
    <x-slot:body>
        <p class="text-9xl text-slate-900 dark:text-white">Welcome {{Auth::user()->fname}}</p>
        <form action="/logout" method="POST">
            @csrf
            <button> Logout </button>
        </form>
    </x-slot:body>
</x-general>