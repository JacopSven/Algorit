<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FörstaOrdet</title>
</head>
<body>
<script>
    function först(string) { // Skapar en function 
        array = string.split(" "); // Gör en array av listan där den splittar vid varje mellanslag
        array = array[0]; // Sätter arrayn till bara det första ordet i arrayn
        return array; // Skickar vidare det
    }

    document.write(först("Hej Mitt Namn Är Jacob")); // Skriver ut det första ordet ur stringen med hjälp av funktionen
</script> 
</body>
</html>