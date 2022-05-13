@component('mail::message')
# Hello

You have been successfully subscribed to the Chain App Newsletter. If you this email was sent in error please click the unsubscribe button below.

@component('mail::button', ['url' => 'https://wutdafuk.com'])
Unsubscribe
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
