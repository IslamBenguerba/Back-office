<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/scss/app.scss'])
    <title> @yield('title')</title>
</head>
<h1>Sei stato contattato da {{ $contact['name'] }}</h1>
<h2>la sua email è {{ $contact['email'] }}</h2>
<h3>il suo messaggio:</h3>
<p>{{ $contact['message'] }}</p>

<body>
</body>

</html>
