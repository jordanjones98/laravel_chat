@component('mail::message')
# Thanks!

Thanks so much for registering. Make sure to post away!.

@component('mail::button', ['url' => 'localhost:8000/posts/create'])
Start Creating!
@endcomponent

@component('mail::panel', ['url' => ''])
Test Panel
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
