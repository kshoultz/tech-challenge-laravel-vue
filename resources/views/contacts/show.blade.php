@extends('layouts.app')

@section('content')
    <div>
        <div>
            <h1>
                {{ $contact->last_name }}, {{ $contact->first_name }}
            </h1>
            <p>
                {{ $contact->email }}
            </p>
        </div>
    </div>
    <div>
        <div>
            <h3>
                {{ $contact->title }}
            </h3>
            <p>
                {{  $contact->message }}
            </p>

            <hr />
        </div>
    </div>
@endsection