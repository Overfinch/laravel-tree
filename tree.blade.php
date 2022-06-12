<ul>
    @foreach($categories as $category)
        <li>
            {{$category->name}}
            @if($category->sub->count())
                @include('tree', ['categories' => $category->sub])
            @endif
        </li>
    @endforeach
</ul>
