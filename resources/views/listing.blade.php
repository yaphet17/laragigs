@if(!empty($listing))
    <p>{{$listing["id"]}}</p>
    <p>{{$listing["title"]}}</p>
    <p>{{$listing["description"]}}</p>
@else
    <p>Invalid id</p>
@endif
