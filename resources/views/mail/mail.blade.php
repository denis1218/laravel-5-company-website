@component('mail::message')
    firname and lastname of user
    {{ $username }} - {{ $lastname }}

    TITLE
    {{ $title }}
@component('mail::panel')
    content of message
    {{ $content }}
    @endcomponent


    @endcomponent