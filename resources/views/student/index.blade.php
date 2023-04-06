<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>Students List</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    @foreach($studentList as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->mobile }}</td>
            <td>{{ $student->email }}</td>
            <td>
                <ul>
                    <button><a href="{{URL('students/'.$student->id)}}">Details</a></button>
                </ul>
            </td>
        </tr>
    @endforeach


</table>

</body>
</html>

