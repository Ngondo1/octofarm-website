<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=octofarm_orders", "octofarm_user", "Kimemia@04");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection error gracefully
    die("Connection failed: " . $e->getMessage());
}

// Get order details and phone number from the POST request
$data = json_decode(file_get_contents('php://input'), true);
$orderData = $data['orderData'];
$phoneNumber = $data['phoneNumber'];

// Calculate Total Amount
$totalAmount = 0;
foreach ($orderData as $item) {
    $totalAmount += $item['price'] * $item['quantity'];
}

// Replace with your actual M-Pesa credentials
$consumerKey = 'csjJyDyayt2Z1gIbA1BaFPHZGyty8PpaiA4MZ9VheRftfbpe';
$consumerSecret = 'lo2B1QJw3J5cuW50XSTJqZ81o0AFvZlHUUdl1zyBmSaakXNvMbEOyucL9tAdXihf';
$businessShortCode = '174379';
$passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
$callbackUrl = 'YOUR_CALLBACK_URL'; // Your actual callback URL

// Generate Timestamp and Password
$timestamp = date('YmdHis');
$password = base64_encode($businessShortCode . $passkey . $timestamp);

// Construct STK Push Request
$stkPushRequest = array(
    'BusinessShortCode' => $businessShortCode,
    'Password' => $password,
    'Timestamp' => $timestamp,
    'TransactionType' => 'CustomerPayBillOnline',
    'Amount' => $totalAmount,
    'PartyA' => $phoneNumber,
    'PartyB' => $businessShortCode,
    'PhoneNumber' => $phoneNumber,
    'CallBackURL' => $callbackUrl,
    'AccountReference' => 'Octofarm Order', 
    'TransactionDesc' => 'Payment for Octofarm Order'
);

// Convert to JSON
$stkPushRequestJson = json_encode($stkPushRequest);

// Initialize cURL (You'll need cURL installed and enabled on your server)
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest'); // Use sandbox URL for testing
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer YOUR_ACCESS_TOKEN')); // Replace with your actual access token
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $stkPushRequestJson);

// Execute cURL
$curl_response = curl_exec($curl);
$result = json_decode($curl_response);

// Handle the response from M-Pesa
if (isset($result->ResponseCode) && $result->ResponseCode === "0") {
    // Successful STK Push - Store the CheckoutRequestID for future reference
    $checkoutRequestId = $result->CheckoutRequestID;

    // Optionally, update your database with the CheckoutRequestID and other relevant details
    $sql = "INSERT INTO orders (customer_name, customer_email, phone_number, total_amount, payment_status, items) VALUES (:name, :email, :phone, :total, 'paid', :items)";

// Prepare and execute the statement
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':name' => $_POST['customerName'],
    ':email' => $_POST['customerEmail'],
    ':phone' => $_POST['phoneNumber'],
    ':total' => $totalAmount,
    ':items' => json_encode($orderData)
]);

    echo json_encode(['success' => true, 'checkoutRequestId' => $checkoutRequestId]);
} else {
    // Handle errors (log them and inform the user)
    echo json_encode(['success' => false, 'error' => $result->ResponseDescription ?? 'Unknown error']);
}

// Close cURL
curl_close($curl);
