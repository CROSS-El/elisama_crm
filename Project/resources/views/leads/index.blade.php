<!DOCTYPE html>
<html>
<head>
    <title>Manage Leads</title>
</head>
<body>
    <h1>Leads List</h1>
    <a href="{{ route('leads.create') }}">Add New Lead</a>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        @foreach($leads as $lead)
        <tr>
            <td>{{ $lead->name }}</td>
            <td>{{ $lead->email }}</td>
            <td>{{ $lead->phone }}</td>
            <td>
                <a href="{{ route('leads.edit', $lead) }}">Edit</a> |
                <form action="{{ route('leads.destroy', $lead) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>