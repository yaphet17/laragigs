<h1>{{$heading}}</h1>

@unless(count($listings) == 0)
@foreach ($listings as $listing)
    <a href="/listings/{{$listing["id"]}}">{{$listing['title']}}</a>
    <h2>{{$listing['description']}}</h2>
@endforeach
@else
 <p>No listing found</p>
@endunless
