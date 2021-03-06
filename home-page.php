<html>

<head>
    <title>SOBFLOUS - دور العجلة</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="images/fav-icon.png" />
    <link rel="stylesheet" type="text/css" media="all" href="home-style.css">
</head>

<body style="background-color:#593772">
    <div id="main-div1">
        <div class="img-div">
            <img src="images/004a44d9dbe3fc03.png">
        </div>
        <div class="btn-img1">
            <a href="#here"><input type="button" value="TOURNEZ LA ROUE" class="tourner-btn"> </a>
        </div>
    </div>

    <hr>
    <div id="here">
        <div id="main-div2">
            <div class="spin-div">
                <div class="flesh">
                    <img src="images/down-arrow.svg" alt="arrow">
                </div>
                <div id="mainbox" class="mainbox">
                    <div class="box">
                        <div class="box1">
                            <span class="span1"><b>100DT</b></span>
                            <span class="span2"><b>500DT</b></span>
                            <span class="span3"><b>NOGIFT</b></span>
                            <span class="span4"><b>700DT</b></span>
                        </div>
                        <div class="box2">
                            <span class="span5"><b>1000DT</b></span>
                            <span class="span6"><b>5000DT</b></span>
                            <span class="span7"><b>8000dt</b></span>
                            <span class="span8"><b>1500DT</b></span>
                        </div>
                    </div>
                    <div class="spin"></div>
                </div>
            </div>
            <div class="input-div">
                <div class="input-title">
                    <h2>Ne Perdez pas votre chance pour
                        gagner !</h2>
                </div>
                <div class="input-div-text">

                    <?php if (!isset($_COOKIE["login"])){ echo(isset($_COOKIE["login"]))?> 

                    <form id="form" name="myForm" method="POST" action="user.php">
                        <div class="input-group mb-3 space">
                            <input type="text" name="fname" class="form-control input-design" placeholder="Nom Complet"
                                aria-label="Nom Complet" aria-describedby="button-addon2">
                        </div>
                        <div class="input-group mb-3 space">
                            <input type="text" name="fphone" class="form-control input-design"
                                placeholder="Num du telephone" aria-label="Num du telephone"
                                aria-describedby="button-addon2">
                        </div>
                        <div class="input-group mb-3 space">
                            <input type="text" name="femail" class="form-control input-design"
                                placeholder="Adresse E-Mail" aria-label="Adresse E-Mail"
                                aria-describedby="button-addon2">
                        </div>
                        <div class="input-group mb-3 space">
                            <input type="password" name="fpassword" value="" id="myInput" class="form-control input-design"
                                placeholder="Mot de passe" aria-label="Mot de passe" aria-describedby="button-addon2">
                        </div>
                        <div class="input-group mb-3 space">
                            <a href="#btn-input"><input type="button" value="TOURNEZ" onclick="verif() "
                                    class="btn-input" id="btn-input"></a>
                        </div>
                    </form> 
                    <?php } 
                            else {  ?> 
                            <div class="btnss">
                            <div class="input-group mb-3 space">
                                    <a href="#btn-input"><input type="button" value="TOURNEZ" onclick="if (count < 3) {spin()} "
                                            class="btn-input" id="btn-input"></a>
                                </div>

                                <div class="input-group mb-3 space ">
                                    <a class="btn-input input_btnss"  href="logout.php">LogOut</a>
                                </div>
                                </div>
                                <?php } ?> 
                </div>
            </div>
        </div>
        <div class="felic-div">
            <div class="felic">
                <div class="felic-title">
                    <h1>Félicitations !</h1>
                </div>
                <div class="felic-txt">
                    <h2>Vous avez Gagner</h2>
                </div>
                <div class="felic-aff">

                </div>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>