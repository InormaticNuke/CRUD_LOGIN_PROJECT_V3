<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User • QPromotor</title>
</head>
<body>

    <form action="/Bcknd/addUserScript.php" method="post">
        <label for="rut">Rut:</label>
        <input type="text" id="Rut" name="Rut" required><br><br>
        
        <label for="nombres">Names</label>
        <input type="text" id="nombres" name="nombres" required><br><br>
        
        <label for="apellido1">LastName1</label>
        <input type="text" id="apellido1" name="apellido1" required><br><br>
        
        <label for="apellido2">LastName2</label>
        <input type="text" id="apellido2" name="apellido2" required><br><br>
        
        <label for="direccion">Adress:</label>
        <input type="text" id="direccion" name="direccion" required><br><br>
        
        <label for="fono">Phone:</label>
        <input type="tel" id="fono" name="fono" required><br><br>
        
        <label for="clave">Password:</label>
        <input type="password" id="clave" name="clave" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>