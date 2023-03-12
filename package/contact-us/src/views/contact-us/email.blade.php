<x-mail::message>
# Introduction

A new query from {{ $name }},

Query : {{ $query }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
