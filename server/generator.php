<?php

$endpoint = 'http://192.168.66.132/bigbluebutton/api/';
$sharedSecret = '123'; //bbb-conf --secret
$meetingID = 'test01';

$checksum = sha1('getMeetingInfomeetingID='.$meetingID.$sharedSecret);

$url = $endpoint.'getMeetingInfo?meetingID='.$meetingID.'&checksum='.$checksum;
//$url = 'http://192.168.66.132/bigbluebutton/api/create?name=Test&meetingID=test01&checksum=be440a60089bf2eb25093ec57f742cddfb7872b9';

// START GET REQUEST

$ch = curl_init(); //sudo apt get install php-curl
curl_setopt_array($ch, [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true,]);
$response = curl_exec($ch);
curl_close($ch);

// END GET REQEST

if ($response === false) {
    $error = curl_error($ch);
    echo $error;
}
else {
    echo $response;
}

?>
