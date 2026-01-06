<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>All Feedbacks</h2>

@foreach($feedbacks as $feedback)
     <p>
        Name: {{ $feedback['name'] }} <br>
        Email: {{ $feedback['email'] }} <br>
        Message: {{ $feedback['message'] }}
    </p>
@endforeach

</body>
</html>