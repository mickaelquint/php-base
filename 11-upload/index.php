<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Formulaire d'upload</title>
</head>

<body>
    <div class="container">
        <h1>Upload en PHP</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <button class="btn btn-primary">Uploader</button>
        </form>

        <?php
            var_dump($_FILES);
            
            //on vérifie que le fichier a bien été uploadé
            if(!empty($_FILES['image'])){
                //on récupére le fichier temporaire
                $tmpFile=$_FILES['image']['tmp_name'];
                //on déplace le fichier à l'endroit désiré
                $fileName = $_FILES['image']['name'];
                //générer un nom de fichier unique : rasta.jpg ->  om131993_rasta.jpg
                 
                $fileName = substr(md5(time()),0,8) . '_' . $fileName;
                //on déplace le fichier à l'endroit désiré
                move_uploaded_file($tmpFile, __DIR__.'/upload/'.$fileName);
            }

             //j'ouvre le dossier "upload"
             $folder = opendir('./upload');
             var_dump($folder);
             //on regarde tous les fichiers  dans le dossier 
             while (($file= readdir($folder)) !==false ){
                 // on exclut les dossier '.' et '..'
                 if($file !== '.' && $file !== '..'){
                     echo '<img src="upload/'.$file.'">';

                 } 
             }

        ?>


    </div>



















    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

</body>

</html>