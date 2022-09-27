<ul>
    @foreach($categories as $category)
        <li>
            {{$category->name}}
            @if(!empty($category->categories))
                @include('tree2',['categories' => $category->categories])
            @endif
        </li>
    @endforeach
</ul>
