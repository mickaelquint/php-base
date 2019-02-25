<?php

/**
 * Ce fichier va nous permettre d'ajouter un film en base de données.
 * 
 * On affichera d'abord un formulaire correctement configuré pour faire de l'upload.
 * Le formulaire contiendra 5 champs :
 * - Le titre: champ de type text
 * - La date: champ de type date
 * - La description: champ textarea
 * - La jaquette: champ de type file
 * - La catégorie: champ select avec toutes les catégories de la BDD en option. Le value de l'option sera l'id de la catégorie. "<option value="1">Film de gangsters</option>"
 * 
 * Quand le formulaire sera soumis, on récupère tous les champs du formulaire en PHP. On les vérifie et s'ils sont corrects, on exécute la requête SQL pour insérer le film en BDD. Optionnellement, on pourra également faire l'upload de la jaquette.
 */

require_once __DIR__ . '/../partials/header.php';

// Traitement du formulaire
if (!empty($_POST)) {
    
}

?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6 offset-3">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Titre</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="date">Date de sortie</label>
                    <input type="date" name="date" id="date" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="cover">Jaquette</label>
                    <input type="file" name="cover" id="cover" class="form-control">
                </div>

                <div class="form-group">
                    <label for="category_id">Catégorie</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <?php
                            $query = $db->query('SELECT * FROM category');
                            $categories = $query->fetchAll();
                            foreach ($categories as $category) {
                                echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
                            }
                        ?>
                    </select>
                </div>

                <button class="btn btn-primary btn-block">Ajouter le film</button>
            </form>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../partials/footer.php';