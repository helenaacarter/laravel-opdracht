<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docenten en hun Vakken</title>
</head>
<body>
    <h1>Docenten en hun vakken</h1>
    
    <ul>
    @foreach($docenten as $docent)
        <li>
            <strong>{{ $docent->naam }}</strong> (Hobby: {{ $docent->hobby ?? 'n.v.t.' }})
            <ul>
                @foreach($docent->vaks as $vak)
                    <li>{{ $vak->naam }} - {{ $vak->beschrijving }}</li>
                @endforeach
            </ul>
        </li>
    @endforeach
    </ul>
</body>
</html>
