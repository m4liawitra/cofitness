@extends('emails.layout')

@section('title', env('APP_NAME').' - '.__('content.email.contact.subject'))

@section('content')

    <p><strong>{{ __('labels.contact.form.fullname') }}:</strong> {{ $contact_name }}</p>
    <p><strong>{{ __('labels.contact.form.email') }}:</strong> {{ $contact_email }}</p>
    <p><strong>{{ __('labels.contact.form.message') }}:</strong>{{ $contact_message }}</p>

@endsection