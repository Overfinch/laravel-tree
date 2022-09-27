<ul>
    @foreach($categories as $category)
        <li>
            {{$category->name}}
            @if($category->categories->isNotEmpty())
                @include('tree2',['categories' => $category->categories])
            @endif
        </li>
    @endforeach
</ul>
