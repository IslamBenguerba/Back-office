<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @vite(['resources/scss/app.scss']) 
    <title> @yield('title')</title>
</head>

<body>
    <h1>Grazie {{$contact['name']}} per avermi contattato ti risponderò il prima possibile</h1>
</body>

</html>
