<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #404040;">
    <div style="max-width: 680px; margin: 40px auto 10px;">
        <div style="text-align: center;"><img src="{{ asset('assets/common/images/logo.png') }}" alt="{{ env('APP_NAME') }}" width="240" /></div>
        <hr style="margin: 30px 0 40px;">
        @yield('content')
        <hr style="margin: 30px 0;">
        <p style="font-size: 14px;">{{ __('content.common.address') }}</p>
        <p style="font-size: 14px;"><strong>{{ __('labels.common.globe') }}:</strong> {{ __('content.common.contact.globe') }}</p>
        <p style="font-size: 14px;"><strong>{{ __('labels.common.smart') }}:</strong> {{ __('content.common.contact.smart') }}</p>
        <p style="font-size: 14px;"><strong>{{ __('labels.common.email') }}:</strong> {{ __('content.common.email') }}</p>
    </div>
</body>
</html>