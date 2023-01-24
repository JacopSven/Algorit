<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AntalOrd</title>
</head>
<body>
<script>

    let string = ("David är bäst (:"); // Sätter en variabel string till en text
    let words = 0; // skapar en variabel words med värdet 0

    array = string.split(" "); // Sätter texten i en array för att sen kunna använda arrayn och räkna antalet mellanslag i texten

    array.forEach(Number => { // Skapar en foreach som lägger till 1 till variablen words för varje ord i arrayn.
        words += 1;
    });

    document.write(words); // printar ut words variablen


</script>
</body>
</html>