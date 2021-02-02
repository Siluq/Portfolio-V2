@extends('base.base')
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/admin') }}">Admin</a>
                    @else
                    @endauth
                </div>
            @endif
@extends('base.head')