<?php

if( isset($_GET['email']) ) {

  require_once( __DIR__. '/libraries/createsend-php-master/csrest_subscribers.php');
  $auth = array(
      'api_key' => 'DWWOz/MYDHVxLjTOw18w181xDBgRQ1bL7j2105Wul0s/cnjPkZ1vzlrgOCWkvNljTIT2z7FDRyDApghDUAQB4xU7v9B6wFLHYiiLNdKeECf2dAyOIUpzwjf2Js5Z/UGuA4VeSBrKDA6EPH+uUAPozQ==',
  );

  $wrap = new CS_REST_Subscribers('119bf29bc3cb09299ed977dcc3948f1f', $auth);
  $result = $wrap->delete(htmlentities($_GET["email"]));

  /* debugging purposes */
  /*
  if($result->was_successful()){
    echo '<span style="color:#AFA;text-align:center;">Unsubscribed successfully</span>';
  }
  else{
    echo '<span style="color:red;">The subscriber you tried to delete was not found</span>';
  }
  */
}

?>
