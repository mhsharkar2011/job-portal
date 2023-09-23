@props(['user'])

@if ($user)
    <img src="{{ asset('storage/logo/'.$user) }}" {{ $attributes }} alt="Avatar">
@else
    <img src="{{ asset('assets/images/logo.png') }}" alt="{{ $user }} avatar" {{ $attributes }} >
@endif