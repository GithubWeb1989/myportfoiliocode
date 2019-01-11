<!DOCTPE html>
<html>
    <head>
        <title>View Locations</title>
    </head>
    <body>
        <table border = "1">
            <tr>
                <td>Id</td>
                <td>IpAdress</td>
                <td>Visit Date</td>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->ipaddress }}</td>
                <td>{{ $user->visitdate }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>