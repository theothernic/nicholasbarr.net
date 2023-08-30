@extends('layouts.subpage')
@section('title', $page->title)
@section('journal.title', $page->title)

@section('content')
    @if(is_null($record))
        <div>There are no journal entries to display at the moment.</div>
    @endif
@endsection
