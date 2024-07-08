<!-- resources/views/home.blade.php -->
@extends('app')

@section('title', 'Home')

@section('content')
    <x-card
        title="Card 1"
        content="This is content od the card"
        link="https://google.com"
    />

    <x-card
        title="Card 2"
        content="This is content od the card"
        link="https://google.com"
    />

    <x-card
        title="Card 2"
        content="This is content od the card"
        link="https://google.com"
    />
@endsection
