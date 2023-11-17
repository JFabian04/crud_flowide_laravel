<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th{
            background-color: rgb(152, 248, 165); 
            width: 50%;
            text-align: left
        }

        th,
        td {
            border: 0.5px solid rgb(155, 155, 155);
            padding: 7px
        }
        h2{
            text-align: center;
            padding: 10px;
            border: 1px solid gray
        }

    </style>
</head>

<body>

    <h2>Información del Usuario </h2>

    <table>
        <tr>
            <th>
                Nombre
            </th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Número de Indetificación</th>
            <td>{{ $user->identification }}</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>{{ $user->address }}</td>
        </tr>
        <tr>
            <th>Telefono</th>
            <td>{{ $user->phone }}</td>
        </tr>
    </table>
</body>

</html>
