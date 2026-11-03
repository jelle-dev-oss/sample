<!DOCTYPE html>
<html>
<head>
    <title>Library Members</title>
</head>
<body>
    <h1>Library Members</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Student ID</th>
            <th>Address</th>
            <th>Contact Number</th>
        </tr>

        @foreach ($members as $member)
            <tr>
                <td>{{ $member->name }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->profile?->student_id ?? 'No profile' }}</td>
                <td>{{ $member->profile?->address ?? 'N/A' }}</td>
                <td>{{ $member->profile?->contact_number ?? 'N/A' }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
