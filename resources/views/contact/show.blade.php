@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>Contact Form</h1>

        <form method="POST" action="{{ route('contact.store') }}">
            @csrf

            @if (session('message'))
                <div>{{ session('message') }}</div>
            @endif

            <p>
                <input
                    type="email"
                    name="email"
                    class="input @error('email') has-error @enderror"
                    placeholder="Email"
                    required
                    value="{{ old('email') }}">
            </p>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit">Send</button>

        </form>
    </div>
</div>
@endsection
