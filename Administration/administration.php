<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Coin des admin</title>
        <link href="../styles/style.css" rel="stylesheet" media="screen">
        <link href="../styles/stylePartition.css" rel="stylesheet" media="screen">
        <script src="./Admin/checkboxpupitres.js"></script>
    </head>

    <body>
        <header>
            <div class="menu">
                <a href="../index.php">Accueil</a>
            </div>
            <div class="retour">
                <a href="https://site.ensemblevocalducastelas.com/ACCUEIL"> ⇨ Retour vers le site du choeur </a>
            </div>
        </header>

        <main>
            <h1>Coin des admin</h1>

            <section class="resetConcert">
                <form method="POST" action="./resetcheckbox.js">
                    <fieldset>
                        <legend>Réinitialiser la liste des chants pour le prochain concert</legend>
                        <label for="boxreset">Remise à zéro => </label>
                        <input type="checkbox" id="boxreset" class="boxreset"></input>
                    </fieldset>
                </form>

                    /!\ Ajout event listener -> checkbox change = modif ddb et refresh page
            </section>

            <section>
  <h2>Ajout nouvelle partition :</h2>
  <form method="POST" action="./submit_sheets.php" enctype="multipart/form-data">
    <fieldset>
      <legend>Envoyer les fichiers :</legend>
      <p><label for="name">Nom : </label><input type="text" class="name" id="name" name="name_part" required />
        <label for="name_doc">Nom fichier : </label><input type="text" class="nale_doc" id="name_doc" name="name_doc" required />
        </br><label for="author">Auteur : </label><input type="text" class="author" id="author" name="author"/>
        <label for="cat">Catégorie : </label>
        <select class="categorie" id="cat" name="categorie" required>
          <option value="">---</option>
          <option value="ABC">ABC</option>
          <option value="DEF">DEF</option>
          <option value="GHI">GHI</option>
          <option value="JKL">JKL</option>
          <option value="MNO">MNO</option>
          <option value="PQR">PQR</option>
          <option value="STU">STU</option>
          <option value="VWX">VWX</option>
          <option value="YZ...">YZ...</option>
        </select>
      </p>
      <label for="submitpdf">Fichier pdf :</label>
      <input type="file" class="submitpdf" id="submitpdf" name="pdf"/>
      <label for="submitodt">Fichier paroles :</label>
      <input type="file" class="submitodt" id="submitodt" name="odt"/>
      <fieldset>
        <legend>Les pupitres de cette partition (si différent de SATB):</legend>
        <input type="checkbox" class="midi S" id="midiS" /><label for="midiS">Soprane 1 et 2</label>
        <input type="checkbox" class="midi A" id="midiA" /><label for="midiA">Alti 1 et 2</label>
        <input type="checkbox" class="midi F" id="midiF" /><label for="midiF">Femmes</label>
        <input type="checkbox" class="midi T" id="midiT" /><label for="midiT">Ténor 1 et 2</label>
        <input type="checkbox" class="midi B" id="midiB" /><label for="midiB">Basse 1 et 2</label>
        <input type="checkbox" class="midi H" id="midiH" /><label for="midiH">Hommes</label>
        <input type="hidden" class="voices" id="voices" name="voices" value="SATB" />
      </fieldset>
      <fieldset>
        <legend>Les fichiers de travail</legend>

        <p class="submit midi">
          <label for="submitmidi">Insérer les fichiers midi ici :</label>
          <input type="file" class="submitmidi" id="submitmidi" name="midi" multiple />
          </br>(format "nom_de_la_partitionX(pupitre).format")</br>
          <label for="format">Format : </label>
          <select class="format" id="format" name="format">
            <option value="">--</option>
            <option value=".mid">mid</option>
            <option value=".mp3">mp3</option>
            <option value=".mp4">mp4</option>
          </select>
        </p>
        <p class="submit odt">
          <label for="submitodt">Insérer les fichiers paroles par pupitre ici :</label>
          <input type="file" class="submitodt" id="submitodt" name="submitodtpupitres" multiple />
          </br>(format "nom_de_la_partitionX(pupitre).odt")
        </p>
        <p class="submit media">
          <label for="submitmedia">Indiquer le lien YouTube ici :<label>
              <input type="text" class="submitmedia" id="submitmedia" name="name_record" />
        </p>
      </fieldset>
      <!--class midi, pdf, odt, record, odtpupitre à définir "si rempli,..."-->
      <button type="submit">Enregistrer la partition </button>
    </fieldset>
  </form>
</section>
        </main>

        <footer>
        </footer>
    </body>
</html>