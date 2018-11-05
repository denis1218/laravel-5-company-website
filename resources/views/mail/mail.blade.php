@component('mail::message')
    FROM :
    {{ $username }} , {{ $lastname }}

    TITLE
    {{ $title }}
@component('mail::panel')
    MESSAGE :

    {{ $content }}
    @endcomponent



    @endcomponent