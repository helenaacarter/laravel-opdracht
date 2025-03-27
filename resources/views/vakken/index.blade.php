<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docenten en hun Vakken</title>
</head>
<body>
<h1>Vakken en hun docenten</h1>
<ul>
@foreach($vakken as $vak)
    <li>
        <strong>{{ $vak->naam }}</strong>: {{ $vak->beschrijving }}
        <br>Docent: {{ $vak->docent->naam }}
    </li>
@endforeach
</ul>
</body>
</html>