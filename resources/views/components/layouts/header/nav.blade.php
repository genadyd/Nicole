@props(['nav'=>$nav])
<nav {{$attributes}}>
  @foreach($nav as $index => $element)
      <a @class(['text-amber-50', 'active' =>$element['isActive'] ?? false] ) href="{{$element['href']}}">{{$index}}</a>
  @endforeach
</nav>
