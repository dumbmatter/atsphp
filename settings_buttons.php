<?php
$result = $db->Execute("SELECT total_ratings, num_ratings, unq_pv_today, (unq_pv_today + unq_pv_1 + unq_pv_2 + unq_pv_3) / 4, tot_pv_today, (tot_pv_today + tot_pv_1 + tot_pv_2 + tot_pv_3) / 4, unq_in_today, (unq_in_today + unq_in_1 + unq_in_2 + unq_in_3) / 4, tot_in_today, (tot_in_today + tot_in_1 + tot_in_2 + tot_in_3) / 4, unq_out_today, (unq_out_today + unq_out_1 + unq_out_2 + unq_out_3) / 4, tot_out_today, (tot_out_today + tot_out_1 + tot_out_2 + tot_out_3) / 4
                        FROM ".$CONFIG['sql_prefix']."_members, ".$CONFIG['sql_prefix']."_stats
                        WHERE id = id2 AND id = ".$FORM['id']);
list($total_ratings, $TMPL['ratenum'], $TMPL['unq_pv_tod'], $TMPL['unq_pv_avg'], $TMPL['tot_pv_tod'], $TMPL['tot_pv_avg'], $TMPL['unq_in_tod'], $TMPL['unq_in_avg'], $TMPL['tot_in_tod'], $TMPL['tot_in_avg'], $TMPL['unq_out_tod'], $TMPL['unq_out_avg'], $TMPL['tot_out_tod'], $TMPL['tot_out_avg']) = $db->FetchArray($result);
$result = $db->SelectLimit("SELECT count(*) FROM ".$CONFIG['sql_prefix']."_stats WHERE (".$CONFIG['rankingmethod']."_today + ".$CONFIG['rankingmethod']."_1 + ".$CONFIG['rankingmethod']."_2 + ".$CONFIG['rankingmethod']."_3) / 4 >= ".$TMPL["{$CONFIG['rankingmethod']}_avg"], $CONFIG['button_num'], 0);
list($TMPL['rank']) = $db->FetchArray($result);
$TMPL['avg_rate'] = $TMPL['ratenum'] ? round($total_ratings / $TMPL['ratenum'], 0) : 0;

$img = imagecreatefrompng($CONFIG['button_dir'].'/ranking.png');
$color1 = imagecolorallocate($img, 0, 0, 255);
$color2 = imagecolorallocate($img, 255, 255, 255);
header ("Content-type: image/png");
imagestring($img, 2, 52, 0, $TMPL['unq_pv_tod'], $color1);
imagestring($img, 2, 60, 11, $TMPL['unq_pv_avg'], $color1);
imagestring($img, 2, 33, 24, $TMPL['avg_rate'].'/5', $color1);
imagestring($img, 5, 126, 20, $TMPL['rank'], $color2);
imagepng($img);
?>
