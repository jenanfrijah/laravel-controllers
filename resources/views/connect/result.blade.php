<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All messages sent!</h1>
    @foreach ($contacts as $contact)
        Name:{{$contact['name']}}  <br>
        Email:{{$contact['email']}} <br>
        message: {{$contact['message']}} 
    @endforeach

{{-- 
    @isset($contacts)
        <p>contacts data exists</p>
    @endisset

    @empty($contacts)
        <p>no data found</p>

    @else
       @foreach ($contacts as $contact)
       @isset($contact['name'])
        Name:{{$contact['name']}}  <br>
       @endisset
        @isset($contact['email'])
       Email:{{$contact['email']}} <br>
       @endisset
        @isset($contact['message'])
        message: {{$contact['message']}} 
       @endisset
    @endforeach
    @endempty
    --}}

    


</body>
</html>