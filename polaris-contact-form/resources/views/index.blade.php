<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
</head>
<body>
    <h1>Contact List</h1>
    <a href="{{ route('contact.create') }}"><button style="background-color: green;color:#ffffff;padding:10px;font-size:15px;border-radius:8px;">Add Contact</button></a><br><br>
    
    @if (session('success'))
    <div class="Polaris-Banner Polaris-Banner--statusSuccess">
        <p style="color: red;">{{ session('success') }}</p>
    </div>
    @endif
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr style="font-size: 20px;">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>
                        <a href="#">Edit</a> | 
                        <a href="#">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
