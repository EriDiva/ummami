@extends('layouts.app')

@section('content')

<div class="login-container">

    <div class="login-card">

        <h1>Login Admin</h1>

        @if(session('error'))
            <p class="error-text">
                {{ session('error') }}
            </p>
        @endif

        <form action="/admin/login" method="POST">

            @csrf

            <input
                type="email"
                name="email"
                placeholder="Email"
                required>

            <input
                type="password"
                name="password"
                placeholder="Password"
                required>

            <button type="submit">
                Login
            </button>

        </form>

    </div>

</div>

@endsection