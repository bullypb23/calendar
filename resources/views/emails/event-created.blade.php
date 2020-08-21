@component('mail::message')
# Event created

You successfully created event!<br>
Event name: {{ $data['name'] }}.<br>
Date and time: {{ $data['date'] }} {{ $data['time'] }}.<br>
Phone number: {{ $data['phone'] }}.<br>

Thank you for using our application.<br>

Best regards,<br>
Your {{ config('app.name') }}
@endcomponent