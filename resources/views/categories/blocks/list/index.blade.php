<div class="card">
    <div class="card-body">
        <div class="row mb-2">
            <div class="col-md-12">
                <a href="{{route('categories.create')}}" class="btn btn-success">Создать категорию</a>
                <button class="btn btn-primary non-button">Найдено <span class="badge badge-light">{{$categories->total()}}</span></button>
            </div>
        </div>
        <table class="table table-striped table-bordered mb-2">
            @include('categories.blocks.list.header', ['categories' => $categories])
            <tbody>
            @foreach($categories as $key => $category)
                @include('categories.blocks.list.item', ['category' => $category, 'idx' => $categories->firstItem() + $key])
            @endforeach
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>
</div>
