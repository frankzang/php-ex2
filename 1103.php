<?php

while (true) {
    fscanf(STDIN, "%d %d %d %d", $current_hour, $current_minute, $alarm_hour, $alarm_minute);

    if ($current_hour == 0 && $current_minute == 0 && $alarm_hour == 0 && $alarm_minute == 0) {
        break;
    }

    $current_time_minutes = $current_hour * 60 + $current_minute;
    $alarm_time_minutes = $alarm_hour * 60 + $alarm_minute;

    if ($current_time_minutes <= $alarm_time_minutes) {
        $sleep_minutes = $alarm_time_minutes - $current_time_minutes;
    } else {
        $sleep_minutes = 24 * 60 - ($current_time_minutes - $alarm_time_minutes);
    }

    echo "$sleep_minutes\n";
}

?>
