<?php
//connection to the database
require_once('connect.php');
//lets create Edwin Ipsum

$first_name = 'Leo';
$last_name = 'Macharia';

/*$result = createStaff($first_name,$last_name);

echo $result;

exit;*/

/*$id = $_REQUEST['id'];

$result = getStaff($id);

print_r($result);
exit;*/
$id = $_REQUEST['id'];
/*
$first_name = 'IPSUM';
$result = updateStaff($id,$first_name);

print_r($result);
exit;*/

$input = getInput();

// As Edwin I want to dial a shortcode
//then enter the KPLC staff ID and find out if he is valid

//verbs
/*
Dial - external
enter - external
find out if valid - internal method to find out staff validity
*/
//nouns
/*
Edwin - user
shortcode - //
KPLC Staff Id //
valid
kplc staff // Staff (id), valid or invalid
*/

/*tables
staff (id, first_name, last_name,status) - Methods

*/

//Dial a code


//Enter staff id
if ( $input['text'] == "" ) {
     // This is the first request. Note how we start the response with CON
     $response  = "Please enter Staff ID";
	 sendOutput($response,1);
}else{
	//receive what Edwin has sent in as text
	$id = $input['text'];


$leo = array('name'=>'Leo', 'staff_id' => 1234);

$macharia = array('name'=>'Macharia', 'staff_id' => 12345);

$kevin = array('name'=>'Kevin', 'staff_id' => 231);

 $staff = array('1234'=>$leo,'12345'=>$macharia,'231'=>$kevin);

if(!empty($staff[$id])){
  $message= "ID is valid and it belongs to ".$staff[$id]['name'];

}else{
 $message =  "No Staff with that id";
}


	sendOutput($message,2);


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

//create staff
function createStaff($first_name,$last_name){

   $query = mysql_query("INSERT INTO staff (first_name,last_name)
  VALUES ('$first_name','$last_name')");

  return $query;
}
//get staff
function getStaff($id){
    $query = mysql_query("SELECT * FROM staff WHERE id='$id'");

    if (mysql_num_rows($query) > 0) {
        $row = mysql_fetch_assoc($query);
    } else {
        $row['id'] = 0;
    }

    return $row;


}

function deleteStaff($id){

    $query = mysql_query("DELETE FROM staff WHERE id='$id'");

    return $query;

}

function updateStaff($id,$first_name){

    $query = mysql_query("UPDATE staff SET first_name='$first_name' WHERE id='$id'");

    return $query;

}




?>
