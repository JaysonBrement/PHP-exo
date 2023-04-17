<?php
    $prix = (float)readline('prix HT :');
    $nbart = (int)readline('nombres darticles :');
    $TVA = (int)readline ('taux TVA :');
    $TVA = $TVA / 100;
    $ttl = ($prix * $nbart) * (1 + $TVA);
    echo "PRIX total: " . $ttl;
    ?>