<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $nb1 = $_POST['nb1'];
    $nb2=$_POST ['nb2'];
    $result=$nb1+$nb2;
    echo $result;
    
    ?>
    <div class="container">
        <form action="" method="post">
            <form action="AffRadioPost.php" method="POST" name="formulaire">
                je choisi ce que je veux
                <input type="radio" name="Genre" value="add"> +
                <input type="radio" name="Genre" value="sous"> -
                <input type="radio" name="Genre" value="div"> /
                <input type="radio" name="Genre" value="mult"> *
                <br>
                <input type="submit" value="Envoyer">
            </form>

            <div class="row">
                <div class="col ">

                    <input type="nb" name="nb1">
                    <div class="row">
                        <div class="col ">
                            <input type="nb" name="nb2">

                        </div>
                    </div>

                </div>
                <button>calculer</button>
        </form>
    </div>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"
        integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous">
    </script>

</body>

</html>