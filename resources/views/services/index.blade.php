<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Services</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>description</th>
                <th>availability</th>
                <th>price</th>
                <th>category id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->service_name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>{{ $service->availability }}</td>
                    <td>{{ $service->price }}</td>
                    <td>{{ $service->category_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>