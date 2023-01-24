<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
<script>
    let array = [111, 222, 382, 400, 520, 610, 7731, 8333, 9312, 1000]; // Sätter en variabel array med 10st nummer
    let sum = 0; // Sätter en variablel sum till 0 i början

    array.forEach(number => { // En script som loopar för varje nummer i arrayn och lägger till det nummret till variablem sum.
        sum += number;
    });
    
    console.log(sum/10); // Här printar vi ut varablen sum och delar den på antalet nummer för att få ut medelvärdet
</script>
</body>
</html>