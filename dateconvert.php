<?php

function dateconvert($date){
    $now = \Carbon\Carbon::now()->timezone('Europe/Istanbul');
    $dayDiff = $now->diffInDays($date);
    $mounthDiff = $now->diffInMonths($date);
    $minDiff = $now->diffInMinutes($date);
    $yearDiff = $now->diffInYears($date);
    $secDiff = $now->diffInSeconds($date);
    $hoursDiff = $now->diffInHours($date);

    if ($secDiff < 60){
        return $secDiff ." saniye önce";
    }else if($minDiff < 60){
        return $minDiff ." dakika önce";
    }else if($hoursDiff < 24){
        return $hoursDiff ." saat önce";
    }else if($dayDiff < 30){
        return $dayDiff ." gün önce";
    }else if($mounthDiff < 12){
        return $mounthDiff ." ay önce";
    }else if($yearDiff >= 1){
        return $yearDiff ." yıl önce";
    }

}
?>
