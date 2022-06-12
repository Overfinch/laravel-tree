<ul>
    @foreach($categories as $category)
        <li>
            {{$category->name}}
            @if($category->sub->count())
                @include('index', ['categories' => $category->sub])
            @endif
        </li>
    @endforeach
</ul>
