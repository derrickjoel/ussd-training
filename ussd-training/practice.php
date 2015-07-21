<?php

//KPLC Staff definition

//$leo_name = "Leo";

//$leo_staff_id = 1234;
// $leo = ['name'=>'Leo', 'staff_id' => 1234];
//
// $macharia = ['name'=>'Macharia', 'staff_id' => 12345];
//
// $kevin = ['name'=>'Kevin', 'staff_id' => 231];

$kevin['name'] = "Kevin";
$names = ['Leo','Macharia','Kevin'];

$ids = [1234,12345,231];

//$combined = array($names,$ids);
foreach ($names as $key => $name) {
  echo $name." ".$ids[$key]."<br>";
  # code...
}
exit;
//print_r($combined);

//print_r($ids);
exit;

$staff = array($leo,$macharia,$kevin);

//showAllStaff($staff);
$no_of_staff = count($staff);

foreach ($staff as $staff) {

  echo $staff['name']."<br>";

  # code...
}

// for ($i=0; $i < $no_of_staff ; $i++) {
//   echo $staff[$i]['name']."<br>";
//   # code...
// }

exit;


$vacancies = 5 - $no_of_staff;

//echo $no_of_staff;

//conditional statement

if ($no_of_staff>5) {

  echo "No vacancy";
  # code...
}else{
  echo "Vacancies available: ".$vacancies;
}


//echo $leo_name." ".$leo_staff_id;

//function to echo staff

function showAllStaff($staff){
  //dosomething
  print_r($staff);

}


//process an incoming text
/*
$sms = "Ramogi this is Kevin, play for me fundamendozzz";

$arr = explode(' ',trim($sms));
$prefix = $arr[0];
//$prefix = substr(trim($sms),0,4);

/*$findme   = 'KISS';
$pos = strpos($sms, $findme);



//print_r ($prefix);

if ($pos) {
  echo "Send this message to Shaffie Weru";
  # code...
}else{
  echo "send this message to King'angi";
}


//switch

switch (strtolower($prefix)) {
    case 'inooro':
      echo "Message for Inooro FM";
        break;
    case 'citizen':
      echo "Message for Citizen FM";
        break;
    case 'ramogi':
      echo "Message for Ramogi FM";
        break;
    default:
      echo "Confused Person";
      break;
}


*/


 ?>
