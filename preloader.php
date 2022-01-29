<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .bloader {
            position: fixed;
            padding-left: 40%;
            /* margin-right: 50%; */
            top: 0;
            left: 0;
            padding-top: 15%;
            width: 100%;
            height: 100%;
            
            background: white;
            /* border:5px red solid; */
        }

        #wrapperhid {
            display: none;
        }
        .bloaderhidden{
            display: none;
        }

        img {
            transform: scale(0.7);
            opacity: 1;
            animation-name: fadeInOpacity;
            animation-iteration-count: 1;
            animation-timing-function: ease-in;
            animation-duration: 2s;
        }

        @keyframes fadeInOpacity {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>


    <div class="bloader" id="ploader">
        <img src="img/preloader.gif" alt="" srcset=""> </img>
    </div>

</body>

</html>


