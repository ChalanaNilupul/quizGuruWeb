<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Guru</title>
    <link rel="shortcut icon" href="../assets/icon.ico" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>

    <?php include_once "./navBar.php" ?>

    <div class="container">
        <div class="cIn">
            <div class="left">
                <div class="lIn">
                    <h1>Quiz Guru</h1>
                    <p>Test your knowledge, unlock better grades, and master your subjects all in one app!</p>
                    <a href="../assets/app-release.apk"><button>Download APK</button></a>
                </div>
            </div>
            <div class="right">
                <img src="../assets/phone.png" alt="">
                <!-- <div class="blob"></div> -->
            </div>


        </div>
    </div>
    <div class="about" id="about">
        <div class="aIn">
            <div class="aleft">
                <h1>About the app</h1>
                <p>I'm Chalana Nilupul, co-founder of <a href="https://www.bycfs.com/src/vixo/client/src/" target="new">VIXO</a>, and I created this app to help Ordinary Level students
                    excel in their studies. The Quiz App offers subject-specific quizzes with real-time grading, making
                    learning engaging and effective. Please note that the current set of questions is sourced
                    externally, and I'm working hard to add new questionnaires as soon as possible. Stay
                    tuned for updates!</p>
            </div>
            <div class="aright">
                <img src="../assets/1.png" alt="">
                <img src="../assets/2.png" alt="">
                <img src="../assets/3.png" alt="">
            </div>
        </div>
    </div>
    <div class="footer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#536DFE" fill-opacity="1"
                d="M0,256L48,218.7C96,181,192,107,288,106.7C384,107,480,181,576,197.3C672,213,768,171,864,176C960,181,1056,235,1152,256C1248,277,1344,267,1392,261.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>


    <?php include_once "./footer.php" ?>

</body>

</html>