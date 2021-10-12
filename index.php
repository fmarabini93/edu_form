<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under 19 Academy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/flags.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php 
        include "db/create_db.php";
        include "db/db_connection.php";
    ?>
    <div class="under19-main">

        <!-- Navbar -->
        <section>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-11">
                        <nav class="navbar navbar-light bg-transparent py-4 px-0">
                            <a class="navbar-brand" href="#">
                                <img src="./img/logo_green 1.svg" alt="">
                            </a>
                            <div class="nav-btn text-center">
                                <button class="btn btn-dark ">LOG IN</button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <div class="paddingBottom120px bgBottomCircle">

            <!-- Under 19 academy -->
            <div class="under19">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <div class="under19back mt-5 pt-4">
                                <div class="row">

                                    <div class="col-lg-12">

                                        <div class="under19-text text-center mt-3">
                                            <h3>Canditatura per Edusogno Academy</h3>
                                            <p class="mt-3">Ci vogliono meno di 2 minuti. Scoprirai subito se avrai superato la selezione!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row mt-3 line-margin justify-content-center">
                                        <div class="col-md-7 col-lg-7 col-10">
                                            <div class="steps d-flex align-items-center justify-content-between">
                                                <div class="firstStep">
                                                    <div class="listing active" id="Div11">
                                                        <span class="circle"></span>
                                                    </div>
                                                    <p class="line-text under-line">1. Inserisci le tue generalità</p>
                                                    <div class="line"></div>
                                                </div>
                                                <div class="secondStep">
                                                    <div class="listing rightSide" id="Div22">
                                                        <span class="circle"></span>
                                                    </div>
                                                    <p class="line-text under-line">2. Rispondi ad alcune domande</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="form1" id="Div1">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 fb col-md-10 col-sm-10 col-11">
                            <div class="form-back">
                                <div class="form-heading p-4 pb-0">
                                    <h1>
                                        Inserisci i tuoi dati e invia la tua <br> candidatura! 🎓
                                    </h1>
                                </div>
                                <div class="form11 pt-0">
                                    <div class="row">
                                        <div class="col-6 formInputs">
                                            <div class="form-group mb-0">
                                                <label for="">Qual è il tuo nome?</label>
                                                <input type="text" class="form-control w-75 shadow-none" name="name" id="name">
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="" class="mt-3">Qual è il tuo cognome?</label>
                                                <input type="text" class="form-control w-75 shadow-none" name="surname" id="surname">
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="" class="mt-3">Qual è il tuo indirizzo email?</label>
                                                <input type="text" class="form-control w-75 shadow-none" name="email" id="email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="checkb mt-3 mb-0">
                                                <label class="customcheckboxContainer mb-0">
                                                    <span class="customCheckBox">
                                                        <input type="checkbox" id="coursename" name="options">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <small class="mt-2">Compilando il form accetto la <b style="text-decoration: underline;">privacy policy </b></small>
                                                </label>
                                                <!-- <label class="customcheckboxContainer mb-0 ml-4">
                                                    <span class="customCheckBox">
                                                        <input type="checkbox" id="coursename" name="options" checked>
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <small class="mt-2">Compilando il form accetto la <b style="text-decoration: underline;">privacy policy </b></small>
                                                </label> -->
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" name="Submit1" class="btn btn-success shadow-none mt-3 mb-5" id="nextStep" value="CONTINUA">
                                </div>
                                <?php
                                    if (isset($_POST['Submit1'])) {
                                        $_SESSION['name'] = $_POST['name'];
                                        $_SESSION['surname'] = $_POST['surname'];
                                        $_SESSION['email'] = $_POST['email'];
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- form 2 -->
            <div class="form1" id="Div2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 fb col-md-10 col-sm-10 col-11">
                            <div class="form-back">
                                <div class="form-heading p-4">
                                    <h1>
                                        Luca, rispondi alle ultime domande e<br> scopri se hai superato la selezione! 🎓
                                    </h1>
                                </div>
                                <form method="post" action="db/db_insert.php" class="form11 pt-0">
                                    <div class="row">
                                        <div class="col-6 formInputs">
                                            <div class="form-group mb-0">
                                                <label for="">Qual è il tuo numero di telefono?</label>
                                                <input id="phone" name="phone" type="tel" class="form-control w-75 shadow-none">
                                                <span id="valid-msg" class="hide text-success">Valid</span>
                                                <span id="error-msg" class="hide text-danger">Invalid number</span>
                                                <!-- <input type="text" class="form-control w-75 shadow-none"> -->
                                            </div>
                                            <div class="form-group mb-0">
                                                <?php
                                                    $regions = [];
                                                    $sql = "SELECT * FROM regions";
                                                    $result = mysqli_query($conn, $sql);
                                                    while ($row = $result->fetch_assoc()) {
                                                        $regions[] = $row['name'];
                                                    };
                                                ?>
                                                <label for="" class="mt-3">In quale regione si trova la tua scuola?</label>
                                                <select name="region" class="form-control w-75 shadow-none" required>
                                                    <?php
                                                        foreach($regions as $region) {
                                                            echo "<option value='$region'>$region</option>";
                                                        } 
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="" class="mt-3">In quale provincia si trova la tua scuola?</label>
                                                <select name="province" class="form-control w-75 shadow-none">
                                                    <option value="Seleziona">Seleziona</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="" class="mt-3">In quale comune si trova la tua scuola?</label>
                                                <select name="municipality" class="form-control w-75 shadow-none">
                                                    <option value="Seleziona">Seleziona</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="" class="mt-3">Come si chiama la tua scuola?</label>
                                                <input type="text" name="school" class="form-control w-75 shadow-none" required>
                                            </div>
                                            <div class="radio1 mr-3">
                                                <label for="" class="mt-3 d-block">A quale anno scolastico sei?</label>
                                                <label class="customcheckboxContainer">
                                                    <span class="customCheckBox">
                                                        <input type="radio" id="schoolyear" name="Numberoptions" value="1" required>
                                                        <span class="checkmark rounded-circle borderGrn"></span>
                                                    </span>
                                                    <small class="mt-2 ml-4">1°</small>
                                                </label>
                                                <label class="customcheckboxContainer ml-2">
                                                    <span class="customCheckBox">
                                                        <input type="radio" id="schoolyear" name="Numberoptions" value="2">
                                                        <span class="checkmark rounded-circle borderGrn"></span>
                                                    </span>
                                                    <small class="mt-2 ml-4">2°</small>
                                                </label>
                                                <label class="customcheckboxContainer ml-2">
                                                    <span class="customCheckBox">
                                                        <input type="radio" id="schoolyear" name="Numberoptions" value="3">
                                                        <span class="checkmark rounded-circle borderGrn"></span>
                                                    </span>
                                                    <small class="mt-2 ml-4">3°</small>
                                                </label>
                                                <label class="customcheckboxContainer ml-2">
                                                    <span class="customCheckBox">
                                                        <input type="radio" id="schoolyear" name="Numberoptions" value="4">
                                                        <span class="checkmark rounded-circle borderGrn"></span>
                                                    </span>
                                                    <small class="mt-2 ml-4">4°</small>
                                                </label>
                                                <label class="customcheckboxContainer ml-2">
                                                    <span class="customCheckBox">
                                                        <input type="radio" id="schoolyear" name="Numberoptions" value="5">
                                                        <span class="checkmark rounded-circle borderGrn"></span>
                                                    </span>
                                                    <small class="mt-2 ml-4">5°</small>
                                                </label>
                                            </div>
                                            <div class="form-group-mb-0">
                                                <label for="" class="mt-3">Media voti della pagella precedente</label>
                                                <input type="text" name="avg_vote" class="form-control w-75 shadow-none" required>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="" class="mt-3">Hai delle passioni/attività extracurricolari di cui ci vuoi parlare?</label> <br>
                                                <textarea name="passions" id="" cols="30" rows="6" class="form-control w-75 shadow-none" required></textarea>
                                            </div>
                                            <div class="form-group-mb-0">
                                                <label for="" class="mt-3">Scrivici un contatto mail di uno dei tuoi genitori</label>
                                                <input type="email" name="parent_mail" class="form-control w-75 shadow-none" required>
                                            </div>

                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-success shadow-none mt-4 mb-5" value="INVIA">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/intlTelInput.min.js"></script>
    <script src="js/jquery.flagstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>