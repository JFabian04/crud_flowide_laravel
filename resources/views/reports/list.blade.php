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

        th,
        td {
            text-align: center;
            border: 1px solid gray;
            padding: 7px
        }

        thead {
            background-color: rgb(142, 240, 142)
        }

        h2 {
            text-align: center;
            padding: 10px;
            border: 1px solid gray
        }
    </style>
</head>

<body>
    <h2>Listado de Usuarios </h2>

    <table>
        <thead>
            <tr>
                <th class="">
                    Nombre
                </th>
                <th class="">
                    Indentificación
                </th>
                <th class="">
                    Dirección
                </th>
                <th class="">
                    Teléfono
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="">
                    <td class="">
                        {{ $user->name }}
                    </td>
                    <td class="">
                        {{ $user->identification }}
                    </td>
                    <td class="">
                        {{ $user->address }}
                    </td>
                    <td class="">
                        {{ $user->phone }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
