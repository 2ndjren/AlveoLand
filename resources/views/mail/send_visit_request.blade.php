<x-mail::message>
    <p style="text-align: center">Incoming Visitation Request</p>
    <p>Client Information</p>
    <span>Fullname: {{ $mail['fullname'] }}</span><br>
    <span>Contact: {{ $mail['contact'] }}</span><br>
    <span>Email: {{ $mail['email'] }}</span><br>
    <hr>
    <br>
    <p style="text-align: center">Property Details</p>
    <span>Property : {{ $mail['property'] }}</span><br>
    <span>City : {{ $mail['city'] }}</span><br>
    <span>Category: {{ $mail['for'] }}</span><br>
    <span>Code: {{ $mail['code'] }}</span><br>
    <span>type: {{ $mail['type'] }}</span><br>
    <span>price: {{ $mail['price'] }}</span><br>
    <hr>
    <br>
    <p style="text-align: center">Visit Information</p>
    <span>Date: {{ $mail['date'] }}</span><br>
    <span>Time: {{ $mail['time'] }}</span><br>
    <br>
    <span style="text-align: center"><a style="color:white;background: green"
            href="{{ url('/accepted-appointments', $mail['token']) }}">Accept</a> | <a
            style="color:white;background: red"
            href="{{ url('/declined-appointments', $mail['token']) }}">Decline</a></span>

</x-mail::message>
