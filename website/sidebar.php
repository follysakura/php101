<aside id="sidebar">

  <div id="timeofday">

    <?php
    $date = getdate();
    $day = '';

    switch ($date['wday']) {
      case 0:
        $day = 'Sunday';
        break;
      case 1:
        $day = 'Monday';
        break;
      case 2:
        $day = 'Tuesday';
        break;
      case 3:
        $day = 'Wednesday';
        break;
      case 4:
        $day = 'Thursday';
        break;
      case 5:
        $day = 'Friday';
        break;
      case 6:
        $day = 'Saturday';
        break;
      default:
        break;
    }

    if ($date['hours'] >= 12) {

      echo '<p>Good evening! Today is ' . $day . '</p>';

    } else { ?>

      <p>Good morning! Today is <?= $day; ?></p>

    <?php } ?>

  </div>

</aside>