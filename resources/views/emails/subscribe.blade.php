@extends('emails.layout')

@section('title', env('APP_NAME').' - '.__('content.email.subscribe.subject'))

@section('content')

    <p>{{ __('content.email.subscribe.content') }}</p>
    <p><strong>{{ __('labels.contact.form.email') }}:</strong> {{ $contact_email }}</p>

@endsection