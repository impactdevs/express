@component('mail::message')
# Hello {{ $name }},

Your admin account has been created successfully.

**Email:** {{ $email }}

**Password:** 123456 (Please change this after logging in)

Thank you!

@component('mail::button', ['url' => 'admin/login'])
Login to Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
