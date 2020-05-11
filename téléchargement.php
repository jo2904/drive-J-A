<?php
$uploaddir = 'doc//';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Le fichier est valide, et a été téléchargé avec succès. ";
} else {
    echo "Attaque potentielle par téléchargement de fichiers. ";
}
?>
