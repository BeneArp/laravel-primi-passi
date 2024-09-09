<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    
    <h1>{{$title}}</h1>

    <h4>Elenco importantissmo</h4>

    @if(!empty($parole))

        <ul>
            @foreach($parole as $parola)
                <li>{{$parola}}</li>
            @endforeach
        </ul>
        <!-- @dump($parole); -->

    @else

        <span>Non ho cose intelligenti da scrivere</span>

    @endif

</body>
</html>