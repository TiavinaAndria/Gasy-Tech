<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gasy-Tech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <H1 class="col-4">Ajout d'un Informateur</H1>
    <hr>
    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        
    @endif

   <ul>
    @foreach ($errors->all as $error)
    <li class="alert alert-danger">{{$error}}</li>
@endforeach
   </ul>
    <form action="/ajouterInformateur/Traitement" method="POST" >
        @csrf
        <div class="container col-4">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control">
            </div>
            <div class="mb-3">
                <label for="Filliere" class="form-label">Fillières</label>
                <input type="text" name="Filliere" id="Filliere" class="form-control">
            </div>
            <div class="mb-3">
                <label for="Contact" class="form-label">Contact</label>
                <input type="text" name="Contact" id="Contact" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter </button>
            <a href="/information" class="btn btn-danger"> Revenir au Liste</a>
        
        </div>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>