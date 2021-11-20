@extends('layouts.app')

@section('content')
    <div>
        <form class="mwi-form" action="/contacts" method="POST">
            @csrf
            <h2>Create Contact</h2>
            <div class="mwi-fields-container">
                <input
                    type="text"
                    name="first_name"
                    placeholder="First Name..."
                />
                <input
                    type="text"
                    name="last_name"
                    placeholder="Last Name..."
                />
                <input
                    type="text"
                    name="email"
                    placeholder="Email..."
                />
                <input
                    type="text"
                    name="title"
                    placeholder="Title..."
                />
                <input
                    type="text"
                    name="message"
                    placeholder="Message..."
                />
                <div class="mwi-toolbar">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection