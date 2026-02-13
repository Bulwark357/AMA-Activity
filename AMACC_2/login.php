<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <h2>User Registration</h2>
    <form action="registration.php" method="POST">
        Username: <input type="text" name="username" required /> <br/><br/>
        
        Password: <input type="password" name="password" required /><br/><br/>
        
        Confirm Password: <input type="password" name="c_password" required /><br/><br/>
        
        Birth Year: <input type="number" name="birthdate" placeholder="e.g. 1995" required /><br/><br/>

        Role: 
        <select name="role">
            <option value="Encoder">Encoder</option>
            <option value="Admin">Admin</option>
        </select>
        <br/><br/>

        <button type="submit">Register</button>
    </form>
</body>
</html>