@extends('layouts.app')
@section('content')
<div class="container">
    <h2>All Wires</h2>
    @foreach ($wires as $wire)
        <div class="wire">
            <h3>{{ $wire->type }}</h3>
            <p>{{ $wire->data }}</p>
            <p>By User: {{ $wire->user->name }}</p>
        </div>
    @endforeach
</div>

