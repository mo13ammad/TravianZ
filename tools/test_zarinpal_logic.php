<?php

function test_request_logic($json_response) {
    $result = json_decode($json_response, true);
    if (empty($result['errors'])) {
        if ($result['data']['code'] == 100) {
            return "SUCCESS: Authority is " . $result['data']["authority"];
        } else {
            return "FAILURE: Data Code " . $result['data']['code'];
        }
    } else {
        return "FAILURE: Error " . $result['errors']['code'] . " - " . $result['errors']['message'];
    }
}

function test_verify_logic($json_response) {
    $result = json_decode($json_response, true);
    if (empty($result['errors'])) {
        if ($result['data']['code'] == 100 || $result['data']['code'] == 101) {
            return "SUCCESS: Code " . $result['data']['code'];
        } else {
            return "FAILURE: Status " . $result['data']['code'];
        }
    } else {
        return "FAILURE: Error " . $result['errors']['code'] . " - " . $result['errors']['message'];
    }
}

echo "Testing Request Logic:\n";
echo "1. Success: " . test_request_logic('{"data":{"code":100,"authority":"A00000000000000000000000000000000001"},"errors":[]}') . "\n";
echo "2. Non-100: " . test_request_logic('{"data":{"code":-11,"authority":""},"errors":[]}') . "\n";
echo "3. Error: " . test_request_logic('{"data":[],"errors":{"code":-1,"message":"Invalid merchant_id"}}') . "\n";

echo "\nTesting Verify Logic:\n";
echo "1. Success (100): " . test_verify_logic('{"data":{"code":100,"ref_id":12345678},"errors":[]}') . "\n";
echo "2. Success (101): " . test_verify_logic('{"data":{"code":101,"ref_id":12345678},"errors":[]}') . "\n";
echo "3. Failure: " . test_verify_logic('{"data":{"code":-50},"errors":[]}') . "\n";
echo "4. Error: " . test_verify_logic('{"data":[],"errors":{"code":-2,"message":"Authority not found"}}') . "\n";
?>
