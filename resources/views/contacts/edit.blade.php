@extends('layouts.app')

@section('content')
    <div>
        <form class="mwi-form" action="/contacts/{{ $contact->id }}" method="POST">
            @csrf
            @method('PUT')
            <h2>Update Contact</h2>
            <div class="mwi-fields-container">
                <input
                    type="text"
                    name="first_name"
                    placeholder="First Name..."
                    value="{{ $contact->first_name }}"
                />
                <input
                    type="text"
                    name="last_name"
                    placeholder="Last Name..."
                    value="{{ $contact->last_name }}"
                />
                <input
                    type="text"
                    name="email"
                    placeholder="Email..."
                    value="{{ $contact->email }}"
                />
                <input
                    type="text"
                    name="title"
                    placeholder="Title..."
                    value="{{ $contact->title }}"
                />
                <input
                    type="text"
                    name="message"
                    placeholder="Message..."
                    value="{{ $contact->message }}"
                />
                <div class="mwi-toolbar">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection