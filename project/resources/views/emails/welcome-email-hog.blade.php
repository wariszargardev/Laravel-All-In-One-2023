@component('mail::message')
# Introduction

You receive email using mailhog.

@component('mail::button', ['url' => ''])
Waris you received email using mailhog
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
