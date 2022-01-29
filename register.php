<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulk Result Downloader</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container" id="container">
        <!-- <div class="container container-dark" id="container"> -->

        <h1 id="form">Bulk Result Downloader</h1>
        <hr>

        <!-- Add Data  -->
        <div class="containerform" id="adddata">
            <div class="containerform" id="containerform">
                <form action="php/regi.php" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name='email' placeholder="Enter email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"  name='pass' placeholder="Password">
                        </div>
                    </div>
                    <br>
                    <div class="row float-right">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>




</body>

</html>