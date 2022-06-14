<?php
require_once("./config.php");
$inputData = array();
$returnData = array();
$data = $_REQUEST;
foreach ($data as $key => $value) {
    if (substr($key, 0, 4) == "vnp_") {
        $inputData[$key] = $value;
    }
}

$vnp_SecureHash = $inputData['vnp_SecureHash'];
unset($inputData['vnp_SecureHashType']);
unset($inputData['vnp_SecureHash']);
ksort($inputData);
$i = 0;
$hashData = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashData = $hashData . '&' . $key . "=" . $value;
    } 
    else {
        $hashData = $hashData . $key . "=" . $value;
        $i = 1;
    }
}
$vnpTranId = $inputData['vnp_TransactionNo']; //Mã giao dịch tại VNPAY
$vnp_BankCode = $inputData['vnp_BankCode']; //Ngân hàng thanh toán
$secureHash = hash('sha256',$vnp_HashSecret . $hashData);
$Status = 0;
$orderId = $inputData['vnp_TxnRef'];

try {
    if ($secureHash == $vnp_SecureHash) { 
        $order = NULL;
        if ($order != NULL) {
            if ($order["Status"] != NULL && $order["Status"] == 0) {
                if ($inputData['vnp_ResponseCode'] == '00') {
                    $Status = 1;
                } else {
                    $Status = 2;
                }              
                $returnData['RspCode'] = '00';
                $returnData['Message'] = 'Confirm Success';
            } else {
                $returnData['RspCode'] = '02';
                $returnData['Message'] = 'Order already confirmed';
            }
        } else {
            $returnData['RspCode'] = '01';
            $returnData['Message'] = 'Order not found';
        }
    } else {
        $returnData['RspCode'] = '97';
        $returnData['Message'] = 'Chu ky khong hop le';
    }
} catch (Exception $e) {
    $returnData['RspCode'] = '99';
    $returnData['Message'] = 'Unknow error';
}
echo json_encode($returnData);
