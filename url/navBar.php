<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav Bar</title>
    <link rel="stylesheet" href="../css/nav.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/nav.js"></script>

</head>

<body>

    <div class="mainNav">
        <div class="navIn">
            <a onclick="home()" href="" id="Logo"><img src="../assets/logo.png" alt=""></a>
            <ul id="dokstop">
                <li><a href="./index.php" class="hM" onclick="menu()">Home</a></li>
                <li><a href="#about" class="aM" onclick="menu()">About</a></li>
            </ul>
            <div id="menu" onclick="menu()">
                <div class="bar1"></div>
                <div class="bar2"></div>
            </div>
        </div>
    </div>

    <div class="mobNav" id="mobNav">
        <div class="links" id="mobLinks">
            <ul>
                <li><a href="./index.php" class="hM" onclick="menu()">Home</a></li>
                <li><a href="#about" class="aM" onclick="menu()">About</a></li>
            </ul>
        </div>
    </div>


    <script>


        $(document).ready(function () {




        });

    </script>

</body>

</html>