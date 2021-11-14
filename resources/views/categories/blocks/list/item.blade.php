<?php /** @var \App\Models\RecipeCategory $category */ ?>
<tr>
    <td>{{ url(route('categories.show', ['category' => $category['id']]), $category['id']) }}</td>
    <td>{{ url(route('categories.show', ['category' => $category->id]), $category['name']) }}</td>
    <td>@date($category['created_at'])</td>
</tr>
