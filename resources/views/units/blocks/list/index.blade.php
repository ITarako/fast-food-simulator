<div class="card">
    <div class="card-body">
        <div class="row mb-2">
            <div class="col-md-12">
                <button class="btn btn-primary non-button">Найдено <span class="badge badge-light">{{$units->total()}}</span></button>
            </div>
        </div>
        <table class="table table-striped table-bordered mb-2">
            @include('units.blocks.list.header', ['units' => $units])
            <tbody>
            @foreach($units as $key => $unit)
                @include('units.blocks.list.item', ['unit' => $unit, 'idx' => $units->firstItem() + $key])
            @endforeach
            </tbody>
        </table>
        {{ $units->links() }}
    </div>
</div>
