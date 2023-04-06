<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Mamber Details</h2>
    <ul class="list-group">
        <li class="list-group-item">ID : {{ $member->id }} </li>
        <li class="list-group-item">Name : {{ $member->name }}</li>
        <li class="list-group-item">Email : {{ $member->email }}</li>
        <li class="list-group-item">Created AT : {{ $member->created_at }}</li>
        <li class="list-group-item">Update AT : {{ $member->updated_at }}</li>
    </ul>
</div>

</body>
</html>

