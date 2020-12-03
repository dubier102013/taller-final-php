<!DOCTYPE html>

<body>
    <h1> CONVERSOR DE MEDIDAS </h1>
    <br>
    
    <form name="form1" method="POST" action="Calcularconvertir.php">
        <p>Valor a convertir:<input type="text" id="txtvalor" name="txtvalor">
        <select name="selconversion">
            <option value="">Seleccione...</option>
            <option value="digito">Dijito Binario</option>
            <option value="byte">Byte</option>
            <option value="kilo">Kilobyte</option>
            <option value="mega">Megabyte</option>
            <option value="giga">Gigabyte</option>
            <option value="tera">Terabyte</option>
        </select>
        </p> 
        <p>Convertir a la medida de: </p>
        <p>
                <input type="radio" name="medidas"  value="digito">Dijito Binario
            <br><input type="radio" name="medidas"  value="byte">Byte
            <br><input type="radio" name="medidas" value="kilo">Kilobyte
            <br><input type="radio" name="medidas" value="mega">Megabyte
            <br><input type="radio" name="medidas" value="giga">Gigabyte
            <br><input type="radio" name="medidas" value="tera">Terabyte
        </p>
        <p><input type="submit" name="btncalcular" value="Calcular"></p>
    </form>
    <form name="form2" method="POST" action="index.php">

        <p><input type="submit" name="btnRegresar" value="Regresar"></p>

        <form name="form3" method="POST" action="Salir.php">
        
        <p><input type="submit" name="btnSalir" value="Salir"></p>
</body>
</html>