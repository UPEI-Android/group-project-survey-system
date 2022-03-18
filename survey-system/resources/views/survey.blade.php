
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">

    @livewireStyles
</head>
<body>
    
<button type="button" class="btn btn-md btn-#1EABE4"><h1>Survey.Blade</h1></button>

    <hr>
    @livewire('survey-construction')
    @livewireScripts
</body>
</html>


