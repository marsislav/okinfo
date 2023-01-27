<?php
  //Текущ период
  function tekusht_period() {
    $date = date('Ym');
    $tekusht_period = date('Ym', strtotime($date. ' -1 month'));
    echo $tekusht_period;
  }