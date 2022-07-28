@extends("layout")

@section("content")
    @include("partials._search")
    @include("partials._hero")
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
    @unless(count($listings) == 0)
        @foreach ($listings as $listing)
            <x-listing-card :listing="$listing"/>
        @endforeach
    @else
        <p>No listing found</p>
    @endunless
    </div>
@endsection
