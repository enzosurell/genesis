<div class="container p-5" style="max-width:600px; min-width:300px;">
    <div class="card" style="max-width: 600px; min-width: 300px;">
        <div class="card-header" style="text-align:center;">{{$title}}</div>
        <div class="card-body">
            <form action="{{$action}}" method="POST">
                @csrf
                {{$fields}}
            </form>
        </div>
        <div class="card-footer"></div>
    </div>
</div>
