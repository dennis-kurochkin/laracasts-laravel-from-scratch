@component('mail::message')

# Heading

Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam similique quas id officiis quaerat? Quidem nulla distinctio fugiat! Voluptas accusantium iste magnam molestias consequuntur inventore, quod in nulla? Totam, unde.

* List item 1
* List item 2
* List item 3

## Topic: {{ $topic }}

@component('mail::button', ['url' => 'http://yandex.ru'])
    Visit Yandex
@endcomponent

@endcomponent
