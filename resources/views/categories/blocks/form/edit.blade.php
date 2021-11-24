<form action="{{ route('categories.update', ['category' => $category]) }}" method="POST">
    <div class="card">
        <div class="card-body">
            @csrf
            @method('PUT')
            @include('categories.blocks.form.fields')
        </div>
        <div class="card-footer">
            <a href="{{route('categories.index')}}" class="btn btn-default">Назад</a>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </div>
    </div>
</form>
