<ol class="dd-list">
    @foreach($categories as $category)
        <li class="dd-item" data-id="{{$category->id}}">
            <div class="dd-handle">{{$category->name}}</div>
            @if(!empty($category->categories))
                @include('tree2',['categories' => $category->categories])
            @endif
        </li>
    @endforeach
</ol>
