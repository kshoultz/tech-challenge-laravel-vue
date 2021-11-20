@extends('layouts.app')

@section('content')

    <div>
        <div>
            <h1>Contacts</h1>
        </div>
        <div>
            <a href="contacts/create">Add a new Contact &rarr;</a>
        </div>
        <div >
            @foreach ($contacts as $contact)
                <div>
                    <div>
                        <a href="/contacts/{{ $contact->id }}/edit">Edit Contact &rarr;</a>
                        <form action="/contacts/{{ $contact->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete Contact &rarr;</button>
                        </form>
                    </div>
                    <h2>
                        <a href="/contacts/{{ $contact->id }}">{{ $contact->last_name }}, {{ $contact->first_name }}</a>
                    </h2>
                    <h3>
                        {{ $contact->title }}<br/>
                        {{ $contact->created_at }}
                    </h3>
                    <p>
                        {{ $contact->message }}
                    </p>
                    <hr />
                </div>
            @endforeach
        </div>
    </div>

@endsection