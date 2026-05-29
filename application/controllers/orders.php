<?php
	require 'application/libraries/Razorpay.php';
	use Razorpay\Api\Api;
	// error_reporting(0);

class orders extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {
		
		print_r("expression");
	}

	public function flat() {
		if(!isset($_POST['quantity'])){
			header("Location: ".BASE_URL."SG");
			exit();
		}
		
		$this->orderModel = $this->loadModel('ordersModel');
		$api = new Api(keyId,keySecret);
		$userIp = $this->getUserIpAddr();

		// To be removed in production
		//$userIp = '117.247.182.254'; // India
		//$userIp = '72.229.28.185'; // USA
		//$ip = '116.58.205.53'; // Bangladesh

		$userCountryCode = $this->getUserCountryCode($userIp);


		if($userCountryCode == "IN"){
			$unitPrice = INR_PRICE;
			$currency = "INR";
		}else{
			$unitPrice = USD_PRICE;
			$currency = "USD";
		}

		$amount = $_POST['quantity'] * $unitPrice * 100;
		$orderData = [
		    'amount'          => $amount, // rupees in paise
		    'currency'        => $currency,
		    'payment_capture' => 1 // auto capture
		];
		// print_r($orderData);die();
		try{
			$razorpayOrder = $api->order->create($orderData);	
		}catch(Exception $e){
			$data['msg'] = "Sorry we could not process your payment, Please try again after sometime.";
			$path = 'error/prompt';
			$this->view($path,$data);
			exit();
			// print_r($e);
			// die();
		}
		
		$razorpayOrderId = $razorpayOrder['id'];
		$_SESSION['razorpay_order_id'] = $razorpayOrderId;

		try{
			$orderId = $this->orderModel->createOrder($orderData);
		}catch(Exception $e){
			$data['msg'] = "Sorry we could not process your payment, Please try again after sometime.";
			$path = 'error/prompt';
			$this->view($path,$data);
			exit();
		}
		

		$_SESSION['orderId'] = $orderId;

		$data = [
		    "key"               => keyId,
		    "amount"            => $amount,
		    "name"              => 'Sri Shankara Granthavali',
		    "description"       => "by T.K. Balasubrahmanyam",
		    "image"             => BASE_URL."public/images/mainc/001.jpg",
		    "prefill"           => [
				    "name"              => $_POST['name'],
				    "email"             => $_POST['email'],
				    "contact"           => $_POST['mobile'],
				    "quantity"			=> $_POST['quantity'],
				    "orderId"			=> $orderId,
				    "currency"			=> $currency,
				    ],
		    "notes"             => [
				    "address1"           => $_POST['address1'],
				    "address2"           => $_POST['address2'],
				    "city"				 => $_POST['city'],
				    "pincode"			 => $_POST['pincode'],
				    "state"				 => $_POST['state'],
				    "country"			 => $_POST['country'],
				    ],
		    "theme"             => [
				    "color"             => "#F37254"
				    ],
		    "order_id"          => $razorpayOrderId,
		];

		$data = json_encode($data);
		$path = 'flat/payment';
		$this->view($path,$data);
	}

	public function getUserIpAddr(){
	    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
	        //ip from share internet
	        $ip = $_SERVER['HTTP_CLIENT_IP'];
	    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
	        //ip pass from proxy
	        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    }else{
	        $ip = $_SERVER['REMOTE_ADDR'];
	    }
	    return $ip;
	}

	// old code
	// public function getUserCountryCode($ip){
	// 	if($ip == null){
	// 		return "IN";
	// 	}

	// 	$xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=" . $ip);
	// 	if(!$xml) return False;
	// 	return $xml->geoplugin_countryCode;
	// }


	//new code
	public function getUserCountryCode($ip) {
	    // 1. If IP is missing, or belongs to localhost/development environments, skip the API call
	    if ($ip === null || $ip === '127.0.0.1' || $ip === '::1' || empty(trim($ip))) {
	        return "IN";
	    }

	    $ip = trim($ip);

	    // 2. Set up a 3-second max timeout context so your app doesn't hang if geoPlugin is slow
	    $context = stream_context_create([
	        'http' => [
	            'timeout' => 3 
	        ]
	    ]);

	    // 3. Switch to secure HTTPS to comply with modern remote server guardrails
	    $apiUrl = "https://www.geoplugin.net/xml.gp?ip=" . urlencode($ip);
	    
	    // Safely download the XML data string using the timeout rule
	    $xmlData = @file_get_contents($apiUrl, false, $context);

	    // If the network request fails or times out, return the default country code
	    if ($xmlData === false) {
	        return "IN"; 
	    }

	    // 4. Parse the downloaded XML string into an object
	    $xml = @simplexml_load_string($xmlData);

	    // Critical Guardrail: Ensure $xml is a valid object and has the property before reading it
	    if (!$xml || !isset($xml->geoplugin_countryCode)) {
	        return "IN"; // Fixes: "Attempt to read property on bool" warning
	    }

	    // 5. Explicitly cast the XML element to a clean PHP string string and return it
	    return (string) $xml->geoplugin_countryCode;
	}


	// public function testmail(){
		
	// 	$toEmail = "shiva@srirangadigital.com";
	// 	$toName = "Shivashankar";
	// 	$subject = 'Shankara Granthavali USB Stick';
	// 	$emailBody = 'Thanks for ordering Shankara Granthavali USB Stick';
		
	
	// 	$this->sendLetterToPostman($toEmail, $toName, $subject, $emailBody);
	// }

	// public function sendLetterToPostman ($toEmail, $toName, $subject, $emailBody) {

	// 	$mail = new PHPMailer();

	//     $mail->isSMTP();
 //    	$mail->Host = 'smtp.gmail.com';
 //    	$mail->Port = 587;
 //    	$mail->SMTPSecure = 'tls';
 //    	$mail->SMTPAuth = true;
 //    	$mail->Username = SERVICE_EMAIL;
 //    	$mail->Password = SERVICE_EMAIL_PASSWORD;
 //    	$mail->setFrom(SERVICE_EMAIL, SERVICE_NAME);
 //    	$mail->addAddress($toEmail, $toName);
 //    	$mail->Subject = $subject;
 //    	$mail->msgHTML($emailBody);

 //        return ( $mail->send() ) ? true : $mail->ErrorInfo;
 // 	}

}

?>
