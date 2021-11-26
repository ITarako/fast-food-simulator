<form action="{{ route('units.update', ['unit' => $unit]) }}" method="POST">
    <div class="card">
        <div class="card-body">
            @csrf
            @method('PUT')
            @include('units.blocks.form.fields')
        </div>
        <div class="card-footer">
            <a href="{{route('units.index')}}" class="btn btn-default">Назад</a>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </div>
    </div>
</form>
