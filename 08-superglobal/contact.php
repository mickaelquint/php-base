<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"
        integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">


</head>

<body>
    <?php
     if (!empty($_POST)) {
    $email=$_POST['email'];
    $sujet=$_POST['sujet'];
    $message=$_POST['message'];

    if (false == filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $email= ('Cet email n\'est pas valide');
    }
    if (strlen($sujet) == 0) {
        $sujet='Votre nom ne doit pas être vide';
    }
    if (strlen($message) < 15) {
        $message='votre nombre n\'obtient pas 15 caractères';
    }
}


?>
    <div class="container">
        <form form action="" method="post">

            <div class="form-group row text-center">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" placeholder="email@example.com"
                        name="email" value="<?php echo $email ?? ''; ?>">
                </div>
            </div>
            <div class="form-group row text-center">
                <label for="inputsujet" class="col-sm-2 col-form-label">sujet</label>
                <div class="col-sm-10">
                    <input type="sujet" class="form-control" id="inputsujet" placeholder="sujet" name="sujet"
                        value="<?php echo $sujet ?? ''; ?>">
                </div>
            </div>
            <div class="form-group row text-center">
                <label for="inputmessage" class="col-sm-2 col-form-label ">message</label>
                <div class="col-sm-10">
                    <input type="message" class="form-control" id="inputmessage" placeholder="message" name="message"
                        value="<?php echo $message ?? ''; ?>">
                </div>
            </div>
            <div class="text-center">
            <button class="btn btn-primary ">Envoyer</button>
            </div>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"
        integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous">
    </script>

</body>

</html>