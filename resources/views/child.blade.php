@extends('layouts.app')
@section('title', 'Page Title')
@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection
@section('content')
    <p>This is my body content.</p>
    Hello, {{ $name ?? "Dolly" }}.
    
    @isset($records)
        @if (is_array($records))
            @if (count($records) === 1)
                I have one record!
            @elseif (count($records) > 1)
                I have multiple records!
            @else
                I don't have any records!
            @endif
        @endif
    @endisset



@endsection

