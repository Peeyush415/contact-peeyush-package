<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us Anytime 24*7</h1>
    <form action="{{ route('contact-us.contact-us.send') }}" method="post" >
        @csrf
        <table border="1">
            <tr>
                <th>Name</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <th>Query</th>
                <td><textarea name="query" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><button type="submit">Submit Query</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
