@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent
t'es le meilleur wâdJa

Thanks,<br>
{{ config('app.name') }}
@endcomponent
