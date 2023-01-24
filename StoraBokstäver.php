<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoraBokstäver</title>
</head>
<body>
<script>
    function big(string) { // Skapar en funktion
        string = string.toUpperCase(); // Gör att alla bokstäver i stringen till stora bokstäver
        return string; // Returnar stringen
    }

    document.write(big("DaVid äR BäST")); // Skriver ut texten med alla stora bokstäver
</script>
</body>
</html>