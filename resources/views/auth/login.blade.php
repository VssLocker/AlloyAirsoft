@extends('layouts.base')

@section('title', 'Log in')

@section('content')

<form action="{{ route('login_store') }}" method="POST" class="grid grid-rows-3 gap-2 m-auto pt-10">
    @csrf
    <input type="email" name="email" placeholder="E-mail" class="p-2 rounded-md bg-transparent ring-green ring-1">
    <input type="password" name="password" placeholder="Password" class="p-2 rounded-md bg-transparent ring-green ring-1">
    <input type="submit" value="Войти" class="cursor-pointer">
</form>

@endsection
