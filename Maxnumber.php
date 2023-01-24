<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxnumber</title>
</head>
<body>
<script>
    let array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; // Skapar en array med 10 st nummer.

    document.write(Math.max.apply(null, array)); // detta printar ut det största talet i arrayn med hjälp av math.max och apply
</script>
</body>
</html>