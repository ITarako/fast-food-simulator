<div class="card">
    <div class="card-body">
        <table class="table table-striped table-bordered">
            @include('categories.blocks.list.header', ['categories' => $categories])
            <tbody>
            @each('categories.blocks.list.item', $categories, 'category')
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>
</div>
