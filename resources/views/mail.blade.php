@component('mail::message')
# Dear Earth citizen

You are invited to join a brainstorming session.

@component('mail::button', ['url' => $url])
Join
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
