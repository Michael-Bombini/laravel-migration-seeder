<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prenotazioni treno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di Partenza</th>
                    <th scope="col">Stazione di Arrivo</th>
                    <th scope="col">Orario Partenza</th>
                    <th scope="col">Orario Arrivo</th>
                    <th scope="col">Num Carrozze</th>
                    <th scope="col">In Orario?</th>
                    <th scope="col">CANCELLATO</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($trains as $item)
                <tr>
                    <th scope="row">{{$item["codice_treno"]}}</th>
                    <td>{{$item["nome_azienda"]}}</td>
                    <td>{{$item["stazione_partenza"]}}</td>
                    <td>{{$item["stazione_arrivo"]}}</td>
                    <td>{{$item["orario_partenza"]}}</td>
                    <td>{{$item["orario_arrivo"]}}</td>
                    <td>{{$item["num_carrozze"]}}</td>
                    <td>{{$item["in_orario"]}}</td>
                    <td>{{$item["is_cancellato"]}}</td>
                </tr>
                @endforeach
             
                
            </tbody>
        </table>
    </div>

</body>

</html>
