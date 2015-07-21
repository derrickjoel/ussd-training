<?php
//text bt

//text is blank = Level 0
//second text is not empty but does have * = level 1
//third text has one star = level 2

$text= $_REQUEST['text'];

$result =  getLevel($text);

$level = $result['level'];
$message = $result['latest_message'];
switch (strtolower($level)) {
    case 0:
    $response = getHomeMenu();
        break;
    case 1:
    $response = getLevelOneMenu($message);
     break;
    case 2:
     $response = getLevelOneMenu($message);
      break;
    default:
     $response = getHomeMenu();
    break;
}



sendOutput($response,1);
exit;

$exploded_text = explode('*',$text);

print_r($exploded_text);
exit;


//1*1*3*5
$input = getInput();

if ( $input['text'] == "" ) {
     // This is the first request. Note how we start the response with CON
     $response  = "1. Loan".PHP_EOL;
     $response  .= "2. M-Shwari Balance";
	 sendOutput($response,1);
}else{

  switch (strtolower($input['text'])) {
      case 1:
      $response  = "1. Request Loan".PHP_EOL;
      $response  .= "1. Pay Loan";
          break;
      case 2:
       $response = "Your balance is Ksh. 235. Thanks for using MShwari";
       sendOutput($response,2);
       break;
      default:
        $response = "We could not understand your response";
        break;
  }
  sendOutput($response,1);
}

function getLevelOneMenu($text){

  switch (strtolower($text)) {
      case 1:
      $response  = "1. Request Loan".PHP_EOL;
      $response  .= "2. Pay Loan";
          break;
      case 2:
       $response = "Your balance is Ksh. 235. Thanks for using MShwari";
       sendOutput($response,2);
       break;
      default:
        $response = "We could not understand your response";
        break;
  }
  return $response;

}
function getHomeMenu(){
  $response  = "1. Loan".PHP_EOL;
  $response  .= "2. M-Shwari Balance";

  return $response;
}

//verify if the id belongs to one of the staff members
function getInput(){
$input = array();
$input['sessionId']   = $_REQUEST["sessionId"];
$input['serviceCode'] = $_REQUEST["serviceCode"];
$input['phoneNumber'] = $_REQUEST["phoneNumber"];
$input['text']        = $_REQUEST["text"];

return $input;

}
function getLevel($text){
  if($text == ""){
    $response['level'] = 0;
  }else{
    $exploded_text = explode('*',$text);
    $response['level'] = count($exploded_text);
    $response['latest_message'] = end($exploded_text);

  }
  return $response;
}
function sendOutput($message,$type=2){
	//Type 1 is a continuation, type 2 output is an end

	if($type==1){
		echo "CON ".$message;
	}elseif($type==2){
		echo "END ".$message;
	}else{
		echo "END We faced an error";
	}
	exit;
}

?>
