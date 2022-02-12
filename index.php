<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bulk Result Downloader</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php
    include "php/loginc.php";
    include "assets/svg.html";
    ?>
    <?php
    include "include/header.php";
    ?>
</head>

<body>


    <div class="container">


        <?php
        include "php/license.php";
        ?>
        <div class="row mt-5 ">


            <div class="col-sm uploder" id="">


                <h3 class="center pb-4">File Uploder</h3>

                <form action="fileuploader.php" method="post">

                    <div class="mb-4">
                        <input class="form-control" type="file" name="csv" id="formFile">
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>

                </form>

            </div>
            <div class="col-1 pb-4" id="">
            </div>
            <div class="col-sm  p-4 uploder" id="">


                <h3 class="center pb-4">Message By Admin</h3>

                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">G.C.E. A/L Result Just Released</h5>
                            <small>1 days ago</small>
                        </div>
                        <p class="mb-0">Upload CSV file to get result</p>
                        <!-- <small>And some small print.</small> -->
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">GCE A/L - Activeted</h5>
                            <small class="text-muted">2 days ago</small>
                        </div>
                        <p class="mb-0">You have 500 License</p>

                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Welcome</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-0">Welcome to Bulk Result Downloader (BrDr).</p>

                    </a>
                </div>

            </div>
        </div>

    </div>






    <script src="/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>