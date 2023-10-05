
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Gasy-Tech</title>
</head>
<body>
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Fillières</th>
            <th scope="col">Telephone</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($Informateur as $Informateur)
          <tr>
            <td>{{$Informateur->id}}</td>
            <td>{{$Informateur->nom}}</td>
            <td>{{$Informateur->Filliere}}</td>
            <td>{{$Informateur->Contact}}</td>
        </tbody>

          @endforeach
      </table>
      <hr>
      <a href="/ajouterInformateur"  type="button" class="btn btn-primary" value="ajouterEtudiant">Ajouter un Etudiant</a>
     <a href="/acceuil" type="button" class="btn btn-danger">Revenir à l'Acceuil</a>
      <hr>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>