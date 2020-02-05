@extends ('layouts.app')

@section('content')
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Liste de compétences</title>
</head>
<body>
<h1> Skills</h1>
<table>
    @foreach ($skills as $skill)
    <tr>
        <td>
            <ul>
                <li> {{ $skill -> name}} </li>
                <li> {{ $skill -> id}} </li>
            </ul>
        </td>
        <td> <a href="/skill_user/{{$skill->id}} "> Ajouter </a> </td>
        <td> <a href="/skill_user_delete/{{$skill->id} "> Supprimer </a> </td>
        <td> <a href="/skill_user_update/{{$skill->id} "> Modifier </a> </td>
    </tr>
    @endforeach
</table>
</body>
</html>
@endsection