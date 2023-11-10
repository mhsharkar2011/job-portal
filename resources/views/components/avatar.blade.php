@props(['user'])

@if ($user)
    <img src="{{ asset('storage/avatars/'.$user) }}" {{ $attributes }} alt="Avatar">
@else
    <img src="{{ asset('storage/avatars/avatar.png') }}" alt="{{ $user }}'s avatar" {{ $attributes }} >
@endif