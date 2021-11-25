<html>
    <head>
        <title>Registration form</title>
    </head>
    <body>
        @if (count($errors) > 0)
        <div class = "alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h2>Registration form</h2>
        <form method="POST" action="/validation">
            @csrf
            <div>
                <label>Name</label>
                <input name="name">
            </div>
            <div>
                <label>E-mail</label>
                <input type="email" name="email">
            </div>
            <div>
                <label>Address</label>
                <input name="address">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div>
                <input type="submit" value="Sign Up">
            </div>
        </form>
    </body>
</html>