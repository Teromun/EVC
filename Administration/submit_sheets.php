<?php
session_start();

require_once('../data/databaseconnect.php');

$postData = $_POST;

//Vérification du formulaire soumis
if (
    empty($postData['name_part'])
    || empty($postData['author'])
    || empty($postData['categorie'])
    || empty($postData['name_doc'])
    || empty($postData['voices'])
    || trim(strip_tags($postData['name_part'])) === ''
    || trim(strip_tags($postData['author'])) === ''
    || trim(strip_tags($postData['categorie'])) === ''
    || trim(strip_tags($postData['name_doc'])) === ''
    || trim(strip_tags($postData['voices'])) === ''
) {
    echo 'Il faut a minima : Nom, Nom fichier, Auteur et Catégorie pour valider l/ajout';
    return;
}

$name_part = trim(strip_tags($postData['name_part']));
$author = trim(strip_tags($postData['author']));
$categorie = trim(strip_tags($postData['categorie']));
$name_doc = trim(strip_tags($postData['name_doc']));
$voices = trim(strip_tags($postData['voices']));
$name_record = "<iframe width=\"560\" height=\"315\" src=\"".($postData['name_record'])."\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>";
if (empty($postData['name_record']) == false) {$record = "1";}
else {$record = "1";};
if (empty($postData['pdf']) == false) {$pdf = "1";}
else {$pdf = "0";};
if (empty($postData['odt']) == false) {$odt = "1";}
else {$odt = "0";};
if (empty($postData['odtpupitre']) == false) {$odtpupitre = "1";}
else {$odtpupitre = "0";};



//Ajout dans la base de données
$insertSheet = $mysqlClient->prepare('INSERT INTO partitions(categorie, name_part, author, voices, name_doc, name_record, record, pdf, odt, odtpupitre) VALUES (:categorie, :name_part, :author, :voices, :name_doc, :name_record, :record, :pdf, :odt, :odtpupitre)');
$insertSheet->execute([
    'categorie' => $categorie,
    'name_part' => $name_part,
    'author' => $author,
    'voices' => $voices,
    'name_doc' => $name_doc,
    'name_record' => $name_record,
    'record' => $record,
    'pdf' => $pdf,
    'odt' => $odt,
    'odtpupitre' => $odtpupitre,
]);

//Ajout des fichiers dans les documents
$uploads = '../upload/';
$extensions = array('.odt', '.pdf', '.mid', '.mp3', '.mp4');

//$uploadPdfFile = '../fichierPDF/' . basename($_FILES['pdf']['name']);
//$uploadMidiFile = '../fichierMIDI/' . basename($_FILES['midi']['name']);
//$uploadOdtFile = '../fichierODT/' . basename($_FILES['odt']['name']);

foreach ($_FILES['pdf'] as $file) {
    $fichierPdf = basename($_FILES['pdf']['name']);
    $extension = strrchr($_FILES['pdf']['name'], '.');
    if (!in_array($extension, $extensions)) {
        $erreur = 'Vous devez uploader un fichier de type .pdf';
    }
    else {
        move_uploaded_file($fichierPdf, $uploads);
    }
}
foreach ($_FILES['odt'] as $file) {
    $fichierOdt = basename($_FILES['odt']['name']);
    $extension = strrchr($_FILES['odt']['name'], '.');
    if (!in_array($extension, $extensions)) {
        $erreur = 'Vous devez uploader un fichier de type .odt';
    }
    else {
        move_uploaded_file($fichierOdt, $uploads);
    }
}
foreach ($_FILES['midi'] as $file) {
    $fichierMidi = basename($_FILES['midi']['name']);
    $extension = strrchr($_FILES['midi']['name'], '.');
    if (!in_array($extension, $extensions)) {
        $erreur = 'Vous devez uploader un fichier de type .midi';
    }
    else {
        move_uploaded_file($fichierMidi, $uploads);
    }
}
//    if ($error == UPLOAD_ERR_OK) {
//        move_uploaded_file($$_FILES['pdf']['name'][$key], $uploadPdfFile);
//    }
//}
//foreach ($_FILES['midi']['error'] as $key => $error) {
//    if ($error == UPLOAD_ERR_OK) {
//        move_uploaded_file($$_FILES['midi']['name'][$key], $uploadMidiFile);
//    }
//}
//foreach ($_FILES['odt']['error'] as $key => $error) {
//    if ($error == UPLOAD_ERR_OK) {
//        move_uploaded_file($$_FILES['odt']['name'][$key], $uploadOdtFile);
//    }
//}
//?>