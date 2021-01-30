<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
<div class="col-md-12">
    <img src="/assets/img/Spoten+Logo.png" style="width: 141px; margin-left: 6px; padding: 7px;">
</div>
<div class="col-md-6" style="float: left">
    <div class="card" style="margin-top: 10px">
        <div class="card-body">
            <h4 class="card-title">Pré-requisitos</h4>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">PHP 7.2 ou superior</li>
            <li class="list-group-item">Composer</li>
            <li class="list-group-item">MySql</li>
            <li class="list-group-item">Laravel 6 ou superior</li>
            <li class="list-group-item">Postman</li>
        </ul>
    </div>
</div>
<div class="col-md-6" style="float: right">
    <div class="card" style="margin-top: 10px">
        <div class="card-body">
            <h4 class="card-title">Compreendendo o aplicativo</h4>
            <p class="card-text">API terá os seguintes endpoints:</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><span style="font-weight: bold">GET /api/show-all </span> Retornará todos os filmes.</li>
            <li class="list-group-item"><span style="font-weight: bold">GET /api/show-id/{ind} </span> Retornará um registro do filme referenciando o id</li>
            <li class="list-group-item"><span style="font-weight: bold">GET /api/show-all-reviews </span> Retornará todas as avalizações</li>
            <li class="list-group-item"><span style="font-weight: bold">GET /api/show-reviews-id/{param} </span> Retornará um registro de avalização referenciando o id</li>
            <li class="list-group-item"><span style="font-weight: bold">POST /api/create-review </span> Criará um novo registro de avaliação</li>
        </ul>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
