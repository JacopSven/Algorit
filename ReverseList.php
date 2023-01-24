<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RverseList</title>
</head>
<body>
<script>
    function Reverse(array) { // Skapar en funktion som reverse array listan med hjälp av reverse()
        array = array.reverse();
        return array;
    }

    document.write(Reverse(["Bäst", "Är", "David"])); // Skriver ut listan av ord i reverse.
</script>
</body>
</html>