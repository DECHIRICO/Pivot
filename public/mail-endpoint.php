<?php
	function mc_checklist($email, $debug, $apikey, $listid, $server) {
		$userid = md5(strtolower($email));
		$auth = base64_encode( 'user:'. $apikey );
		$data = array(
		    'apikey'        => $apikey,
		    'email_address' => $email
		    );
		$json_data = json_encode($data);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://'.$server.'.api.mailchimp.com/3.0/lists/'.$listid.'/members/' . $userid);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
		    'Authorization: Basic '. $auth));
		curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
		$result = curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		if ($httpCode == 404) {
			return false;
		}
		if ($debug) {
		    var_dump($result);
		}
		$json = json_decode($result);
		return $json->{'status'};
	}
	if(isset($_POST)){
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    if(mc_checklist($email,false,'e6516229f9515ebe67b8adeb5ba3bcae-us10','0a49147dce','us10')){
    	echo"Error-Already";
    }else{
	    if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false){
	        // MailChimp API credentials
	        $apiKey = 'e6516229f9515ebe67b8adeb5ba3bcae-us10';
	        $listID = '0a49147dce';
	        
	        // MailChimp API URL
	        $memberID = md5(strtolower($email));
	        $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
	        $url = 'https://us10.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
	        
	        // member information
	        $json = json_encode([
	            'email_address' => $email,
	            'status'        => 'subscribed',
	            'merge_fields'  => [
	                'FNAME'     => $fname,
	                'LNAME'     => $lname
	            ]
	        ]);
	        
	        // send a HTTP POST request with curl
	        $ch = curl_init($url);
	        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
	        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
	        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
	        $result = curl_exec($ch);
	        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	        curl_close($ch);
	        // store the status message based on response code
	        if ($httpCode == 200) {
	            echo"Success";
	        } else {
	            switch ($httpCode) {
	                case 214:
	                    echo"Error-Already";
	                    break;
	                default:
	                	echo"Error";
	                    break;
	            }
	            	echo"Error";
	        }
	    }else{
	    	echo"Error-EmailInvalid";
	    }
		}
	}
?>