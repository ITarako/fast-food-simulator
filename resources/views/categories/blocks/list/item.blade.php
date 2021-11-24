<?php
/**
 * @var \App\Models\RecipeCategory $category
 */

?>
<tr>
    <td>{{ $idx }}</td>
    <td>{{ $category->name }}</td>
    <td>{{ $category->getIsActiveLabel() }}</td>
    <td>
        <a href="{{ route('categories.show', ['category' => $category]) }}" class="btn btn-sm btn-info" title="Просмотр">
            <i class="fas fa-eye"></i>
        </a>
        <a href="{{ route('categories.edit', ['category' => $category]) }}" class="btn btn-sm btn-primary"
           title="Редактировать">
            <i class="fas fa-edit"></i>
        </a>
        <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" title="Удалить"><i class="fas fa-trash"></i></button>
        </form>
    </td>
</tr>
