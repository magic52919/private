<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'test');
$mysqli->set_charset('utf-8');
$mysqli->query("SET NAMES UTF8");
$date = mktime(0,0,0,date('m'),date('d'),date('y'));
$gamekind = $_REQUEST['gamekind'];

echo '1';
$datenew = date("Y-m-d", $date-48*3600);

$dateold = date("Y-m-d", $date-72*3600);

// $sql = "select b1.GameKind_Key,b1.API,b1.Login_Code,b1.wagerstotal_old,b1.wagerstotal_old/b3.wagerstotal_all_old as wagerstotal_old_ratio,
// b1.wagerstotal_new,b1.wagerstotal_new/b4.wagerstotal_all_new as wagerstotal_new_ratio,b1.wagerstotal_diff,b1.wagerstotal_rate,
// sum(b2.wagerstotal_old)/b3.WagersTotal_all_old as cumulative_percent
// from (select a1.*, IFNULL(a2.wagerstotal_new,0) as wagerstotal_new,
// 	  IFNULL(a2.wagerstotal_new,0)-a1.wagerstotal_old as wagerstotal_diff, (IFNULL(a2.wagerstotal_new,0)-a1.wagerstotal_old)/a1.wagerstotal_old as wagerstotal_rate
//       from (select GameKind_Key,API,Hall_Key,Login_Code,sum(WagersTotal) as wagerstotal_old from Aggr_WagersIP_Geolocation
//       where WagersDate_Key = '$dateold' and GameKind_Key='$gamekind'
// 	  group by GameKind_Key,API,Hall_Key,Login_Code) a1
//       left join (select GameKind_Key,API,Hall_Key,Login_Code,sum(WagersTotal) as wagerstotal_new from Aggr_WagersIP_Geolocation
// 	  where WagersDate_Key = '$datenew' and GameKind_Key='$gamekind'
//       group by GameKind_Key,API,Hall_Key,Login_Code) a2
//       on a1.GameKind_Key=a2.GameKind_Key and a1.API=a2.API and a1.Hall_Key=a2.Hall_Key and a1.Login_Code=a2.Login_Code) b1 ,
//       (select a1.*, IFNULL(a2.wagerstotal_new,0) as wagerstotal_new,
// 	  IFNULL(a2.wagerstotal_new,0)-a1.wagerstotal_old as wagerstotal_diff, (IFNULL(a2.wagerstotal_new,0)-a1.wagerstotal_old)/a1.wagerstotal_old as wagerstotal_rate
//       from (select GameKind_Key,API,Hall_Key,Login_Code,sum(WagersTotal) as wagerstotal_old from Aggr_WagersIP_Geolocation
//       where WagersDate_Key = '$dateold' and GameKind_Key='$gamekind'
// 	  group by GameKind_Key,API,Hall_Key,Login_Code) a1
//       left join (select GameKind_Key,API,Hall_Key,Login_Code,sum(WagersTotal) as wagerstotal_new from Aggr_WagersIP_Geolocation
// 	  where WagersDate_Key = '$datenew' and GameKind_Key='$gamekind'
//       group by GameKind_Key,API,Hall_Key,Login_Code) a2
//       on a1.GameKind_Key=a2.GameKind_Key and a1.API=a2.API and a1.Hall_Key=a2.Hall_Key and a1.Login_Code=a2.Login_Code) b2,
//       (select GameKind_Key,sum(WagersTotal) as wagerstotal_all_old from Aggr_WagersIP_Geolocation
//       where WagersDate_Key = '$dateold' and GameKind_Key='$gamekind'  group by GameKind_Key) b3,
//       (select GameKind_Key,sum(WagersTotal) as wagerstotal_all_new from Aggr_WagersIP_Geolocation
//       where WagersDate_Key ='$datenew' and GameKind_Key='$gamekind' group by GameKind_Key) b4
// where b1.GameKind_Key=b2.GameKind_Key and ((b1.wagerstotal_old<b2.wagerstotal_old) or (b1.wagerstotal_old=b2.wagerstotal_old and b1.Hall_Key=b2.Hall_Key))
//       and b1.GameKind_Key=b3.GameKind_Key and b1.GameKind_Key=b4.GameKind_Key
// group by b1.GameKind_Key,b1.Login_Code,b1.wagerstotal_old
// having cumulative_percent<=0.8 and b1.API=0
// order by b1.GameKind_Key,b1.wagerstotal_diff
// limit 10;";

// $result1 = $mysqli->query($sql);
// $array1 = [];
// //echo $result1->num_rows;
// while ($fild = $result1->fetch_assoc()) {
//     array_push($array1, $fild);
// }
// echo json_encode($array1,JSON_UNESCAPED_UNICODE);