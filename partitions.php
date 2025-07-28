<?php foreach ($sheet as $sheets) : ?>

    <?php $voices = $sheets['voices']; ?>
    <p id=<?php echo $sheets['name_doc'];?> class="title"><?php echo $sheets['name_part']?> : 
    <?php if ($_SESSION['LOGGED_USER']['admin']='1') : ?>
        <?php if ($sheets['next_concert'] == '0' ) : ?>
            <input type="checkbox" class="nextConcert" id="nextConcert" />
        <?php elseif ($sheets['next_concert'] == '1' ) : ?>
            <input type="checkbox" class="nextConcert" id="nextConcert" checked />
        <?php endif ; ?>
    <?php endif ; ?></p>


<section class="table">

<div class="pdfmidi">

<!-- AFFICHAGE PDF -->
    <div class="grid pdf">
        <?php if ($sheets['pdf']) : ?>
        <a target="_blank" href="../fichierPDF/<?php echo $sheets['name_doc']; ?>.pdf"><img src="../images/PDF.webp" class="pdf"></img></a>
        <?php endif ; ?>
    </div>
          
          
    <?php if ($sheets['midi']) : ?>
    
<!-- LISTE PUPITRES -->
    <?php if (str_contains($voices,'F')) : ?>
        <div class="grid pupitre femmes">Femmes</div>
    <?php endif ; ?>
    <?php if (str_contains($voices,'S')) : ?>
        <div class="grid pupitre soprano">Soprano</div>
    <?php endif ; ?>
    <?php if (str_contains($voices,'A')) : ?>
        <div class="grid pupitre alto">Alto</div>
    <?php endif ; ?>
    <?php if (str_contains($voices,'H')) : ?>
        <div class="grid pupitre hommes">Hommes</div>
    <?php endif ; ?>
    <?php if (str_contains($voices,'T')) : ?>
        <div class="grid pupitre tenor">Ténor</div>
    <?php endif ; ?>
    <?php if (str_contains($voices,'B')) : ?>
        <div class="grid pupitre basse">Basse</div>
    <?php endif ; ?>
        <div class="grid pupitre tutti">Tutti</div>

<!-- AFFICHAGE FICHIERS MIDI -->

    <!-- FEMMES -->
    <?php if (str_contains($voices,"F")) : ?>
        <div class="grid midi1 femmes">
            <a target="_blank" href="../fichierMIDI/<?php echo $sheets['name_doc']?>F<?php echo $sheets['format']?>"><img src="../images/midi.png"></img></a>
        </div>

    <!-- SOPRANO -->
    <?php elseif (str_contains($voices,'S1S2')) : ?>
        <div class="grid midi1 soprano">
        <a target="_blank" href="../fichierMIDI/<?php echo $sheets['name_doc']?>S1<?php echo $sheets['format']?>"><img src="../images/midi.png"></img></a>
        </div>
        <div class="grid midi2 soprano">
            <a target="_blank" href="../fichierMIDI/<?php echo $sheets['name_doc']?>S2<?php echo $sheets['format']?>"><img src="../images/midi.png"></img></a>
        </div>
    <?php elseif (str_contains($voices,"S")) : ?>
        <div class="grid midi1 soprano">
            <a target="_blank" href="../fichierMIDI/<?php echo $sheets['name_doc']?>S<?php echo $sheets['format']?>"><img src="../images/midi.png"></img></a>
        </div> 
    <?php endif ; ?>

    <!-- ALTO -->
    <?php if (str_contains($voices,'A1A2')) : ?>
        <div class="grid midi1 alto">
            <a target="_blank" href="../fichierMIDI/<?php echo $sheets['name_doc']?>A1<?php echo $sheets['format']?>"><img src="../images/midi.png"></img></a>
        </div>
        <div class="grid midi2 alto">
            <a target="_blank" href="../fichierMIDI/<?php echo $sheets['name_doc']?>A2<?php echo $sheets['format']?>"><img src="../images/midi.png"></img></a>
        </div>
    <?php elseif (str_contains($voices,"A")) : ?>
        <div class="grid midi1 alto">
            <a target="_blank" href="../fichierMIDI/<?php echo $sheets['name_doc']?>A<?php echo $sheets['format']?>"><img src="../images/midi.png"></img></a>
        </div> 
    <?php endif ; ?>

    <!-- HOMMES -->
    <?php if (str_contains($voices,"H")) : ?>
        <div class="grid midi1 hommes">
            <a target="_blank" href="../fichierMIDI/<?php echo $sheets['name_doc']?>H<?php echo $sheets['format']?>"><img src="../images/midi.png"></img></a>
        </div>

    <!-- TENOR -->
    <?php elseif (str_contains($voices,'T1T2')) : ?>
        <div class="grid midi1 tenor">
            <a target="_blank" href="../fichierMIDI/<?php echo $sheets['name_doc']?>T1<?php echo $sheets['format']?>"><img src="../images/midi.png"></img></a>
        </div>
        <div class="grid midi2 tenor">
             <a target="_blank" href="../fichierMIDI/<?php echo $sheets['name_doc']?>T2<?php echo $sheets['format']?>"><img src="../images/midi.png"></img></a>
        </div>
    <?php elseif (str_contains($voices,"T")) : ?>
        <div class="grid midi1 tenor">
            <a target="_blank" href="../fichierMIDI/<?php echo $sheets['name_doc']?>T<?php echo $sheets['format']?>"><img src="../images/midi.png"></img></a>
        </div> 
    <?php endif ; ?>

    <!-- BASSES -->
    <?php if (str_contains($voices,'B1B2')) : ?>
        <div class="grid midi1 basse">
            <a target="_blank" href="../fichierMIDI/<?php echo $sheets['name_doc']?>B1<?php echo $sheets['format']?>"><img src="../images/midi.png"></img></a>
        </div>
        <div class="grid midi2 basse">
            <a target="_blank" href="../fichierMIDI/<?php echo $sheets['name_doc']?>B2<?php echo $sheets['format']?>"><img src="../images/midi.png"></img></a>
        </div>
    <?php elseif (str_contains($voices,"B")) : ?>
        <div class="grid midi1 basse">
            <a target="_blank" href="../fichierMIDI/<?php echo $sheets['name_doc']?>B<?php echo $sheets['format']?>"><img src="../images/midi.png"></img></a>
        </div> 
    <?php endif ; ?>
    
    <!-- TUTTI -->
    <div class="grid midi1 tutti"><a target="_blank" href="../fichierMIDI/<?php echo $sheets['name_doc']?>SATB<?php echo $sheets['format']?>"><img src="../images/midi.png"></img></a></div>

    
    <?php endif ; ?>
    
<!-- AFFICHAGE PAROLES -->

        <?php if ($sheets['odt']) : ?>
    <div class="grid plus">
        <a target="_blank" href="../fichierODT/<?php echo $sheets['name_doc']?>.odt">Paroles</a>
    </div>
        <?php endif ; ?>
        
        <?php if ($sheets['odtpupitre']) : ?>
    <div class="grid plus soprano">
        <a target="_blank" href="../fichierODT/<?php echo $sheets['name_doc']?>S.odt">Paroles</a>
    </div>
    <div class="grid plus alto">
        <a target="_blank" href="../fichierODT/<?php echo $sheets['name_doc']?>A.odt">Paroles</a>
    </div>
    <div class="grid plus tenor">
        <a target="_blank" href="../fichierODT/<?php echo $sheets['name_doc']?>T.odt">Paroles</a>
    </div>
    <div class="grid plus basse">
        <a target="_blank" href="../fichierODT/<?php echo $sheets['name_doc']?>B.odt">Paroles</a>
    </div>
        <?php endif ; ?>
        
</div>

<!-- AFFICHAGE ENREGISTREMENTS -->

    <div class="youtube">
        <?php if ($sheets['record']) {
            echo $sheets['name_record'];
        } ?>
    </div>

    </section>

<?php endforeach; ?>

<script> function Check(value) {
        <?php $ProchainConcert = $mysqlClient->prepare('SELECT next_concert FROM partitions WHERE sheet_id=$sheets[sheet_id]'); ?>
        <?php $ProchainConcert->execute([`next_concert` => '1']); ?>
        };
    </script>