<?php
$TMPL['rank'] = $rank;
$TMPL['averagae_rating'] = $TMPL['ratenum'] ? round($total_ratings / $TMPL['ratenum'], 0) : 0;

$img = imagecreatefrompng("{$CONFIG['button_dir']}/ranking.png");
$color1 = imagecolorallocate($img, 0, 0, 255);
$color2 = imagecolorallocate($img, 255, 255, 255);
header ("Content-type: image/png");
imagestring($img, 2, 52, 0, $TMPL['unq_pv_tod'], $color1);
imagestring($img, 2, 60, 11, $TMPL['unq_pv_avg'], $color1);
imagestring($img, 2, 33, 24, "{$TMPL['average_rating']}/5", $color1);
imagestring($img, 5, 126, 20, $TMPL['rank'], $color2);
imagepng($img);
?>
