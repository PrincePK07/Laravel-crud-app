<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <div style="border:3px solid black">
        <h1>Registration</h1>
        <form action="/register" method="post">
            @csrf <!-- Add the CSRF token -->
    
            <input  type="text" name="name" placeholder="name"> 
            <input  type="text" name="email" placeholder="email"> 
            <input  type="text" name="phone" placeholder="mobile">
            <input  type="password" name="password" placeholder="password"> 
            <button  type="submit">Register</button>
        </form>
       </div>
</body>
</html>