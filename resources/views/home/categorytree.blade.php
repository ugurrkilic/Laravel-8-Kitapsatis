@foreach($children as $subcategory)
    @if(count($subcategory->children))
            <li class="label2">
                <a href="{{route('categoryproducts',['id'=>$subcategory->id, 'slug'=>$subcategory->title ])}}">{{$subcategory->title}} <span class="caret"></span></a>
                  <ul>
                    @include('home.categorytree',['children' => $subcategory->children])
                  </ul>
            </li>
    @else
        <li>
            <a href="{{route('categoryproducts',['id'=>$subcategory->id, 'slug'=>$subcategory->title ])}}">{{$subcategory->title}}</a>
        </li>
    @endif
@endforeach