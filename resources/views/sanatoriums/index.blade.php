{{-- @extends('layouts.app')

@section('content')
<div id="with-image-gallery-and-expandable-details">
    <with-image-gallery-and-expandable-details/>
</div>
@endsection --}}

@extends('layouts.app')

@section('content')
<div id="with-image-gallery-and-expandable-details"
     data-sanatorium='@json($sanatorium)'>
    <with-image-gallery-and-expandable-details />
</div>
@endsection