<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Java Script</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">



</head>

<body>



    <div class="container" id="container">
        <!-- <div class="container container-dark" id="container"> -->

        <h1 id="form">Result Sheet</h1>
        <hr>

        <!-- Add Data  -->
        <div class="containerform" id="adddata">
            <div class="containerform" id="containerform">
                <?php
                include "getdata_al.php" ;
                ?>
            </div>
        </div>
       

       
</body>

</html>