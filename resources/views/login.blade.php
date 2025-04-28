@extends('layouts.master')

@section('title', 'Login - HAM Store')

@section('content')

<section class="login spad" style="min-height: 80vh; display: flex; align-items: center; justify-content: center; background-color: #111;">
    <div style="background: #222; padding: 40px; border-radius: 8px; width: 100%; max-width: 400px;">
        <h2 style="color: #fff; text-align: center; margin-bottom: 30px;">Sign In</h2>
        <form action="#" method="POST">
            @csrf
            <div style="margin-bottom: 20px;">
                <input type="email" name="email" placeholder="Email" required style="width: 100%; padding: 12px; border: none; border-radius: 5px; background: #333; color: #fff;">
            </div>
            <div style="margin-bottom: 20px;">
                <input type="password" name="password" placeholder="Password" required style="width: 100%; padding: 12px; border: none; border-radius: 5px; background: #333; color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 12px; background-color: #e53637; border: none; border-radius: 5px; color: white; font-weight: bold;">Login</button>
            <a href="{{ url('/register') }}" style="color: #e53637;">Register</a>
            </form>
    </div>
</section>

@endsection
