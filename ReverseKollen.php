<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReverseKollen</title>
</head>
<body>
<script>

    let string = "racecar"; // Gör en variabel string med text 
    let baklänges = string.split("").reverse().join(""); // Gör en variabel som är string fast baklänges

    if(string == baklänges) { // Skapar en if statement där den kollar ifall string variablen är likadan som baklänges variablen
        document.write("TRUE"); // Skriver ut TRUE ifall det stämmer
    } else {
        document.write("FALSE"); // Skriver ut FALSE ifall det inte stämmer
    }

</script>
</body>
</html>