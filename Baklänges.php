<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baklänges</title>
</head>
<body>
<script>
    let string = ("Fabian in da racecar"); // Detta sätter variablen string till en text
    let array = string.split(""); // Detta gör en variabel som heter string vilket är texten satt i en array
    let baklänges = array.reverse(); // Detta skapar en variable som är arrayn fast baklänges
    baklänges = array.toString(); // Detta gör baklänges variablen till en string istället
    baklänges = baklänges.split(",").join(""); // Detta splittar texten vid , och sen joinar in den igen

    document.write(baklänges); // Detta skriver ut texten
</script>
</body>
</html>