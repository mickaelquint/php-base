<?php require_once __DIR__ . '/../partials/header.php';
$_SESSION['user'] = 'matthieu';
require_once __DIR__ . '/../partials/footer.php';

    // Traitement du login
    $email = null;
    $password = null;
if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // On récupère l'utilisateur associé à l'email saisi
    $query = $db->prepare('SELECT * FROM user WHERE email = :email');
    $query->bindValue(':email', $email);
    $query->execute();
    $user = $query->fetch();
    if ($user) { // Si l'utilisateur existe, on va vérifier que le mot de passe est correct
        var_dump($user);
        var_dump($password);
        $hash = $user['password']; // On récupère le hash du user
        if (password_verify($password, $hash)) { // On vérifie si le mot de passe correspond au hash
            $_SESSION['user'] = $user;
            echo 'OK';
        } else {
            echo 'KO';
        }
    } else {
        echo 'L\'utilisateur n\'existe pas.';
    }
}