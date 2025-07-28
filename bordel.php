<!-- partition.php ligne 4-->
<?php if ($_SESSION['LOGGED_USER']['admin']='1') : ?>
        <input type="checkbox" class="nextConcert" id="nextConcert" onchange="Check(this)" />
    <?php endif ; ?></p>

    <script> function Check(value) {
        <?php $ProchainConcert = $mysqlClient->prepare('SELECT next_concert FROM partitions WHERE sheet_id=$sheets[sheet_id]'); ?>
        <?php $ProchainConcert->execute([`next_concert` => '1']); ?>
        };
    </script>
