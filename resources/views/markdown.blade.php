<x-mail::message>
# Introduction

I am glade to send this message to you.
@php($url = 'google.com')
<x-mail::button :url="$url">
Search Online
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
