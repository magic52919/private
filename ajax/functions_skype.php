<?php
class AccessTokenAuthentication {
    /*
     * Get the access token.
     *
     * @param string $grantType    Grant type.
     * @param string $scopeUrl     Application Scope URL.
     * @param string $clientID     Application client ID.
     * @param string $clientSecret Application client ID.
     * @param string $authUrl      Oauth Url.
     *
     * @return string.
     */
     function getTokens($grantType, $scopeUrl, $clientID, $clientSecret, $authUrl){
                                    try {
            //Initialize the Curl Session.
            $ch = curl_init();
            //Create the request Array.
            $paramArr = array (
                                    'grant_type'    => $grantType,
                 'scope'         => $scopeUrl,
                 'client_id'     => $clientID,
                 'client_secret' => $clientSecret
            );
            //Create an Http Query.//
            $paramArr = http_build_query($paramArr);
            //Set the Curl URL.
            curl_setopt($ch, CURLOPT_URL, $authUrl);
            //Set HTTP POST Request.
            curl_setopt($ch, CURLOPT_POST, TRUE);
            //Set data to POST in HTTP "POST" Operation.
            curl_setopt($ch, CURLOPT_POSTFIELDS, $paramArr);
            //CURLOPT_RETURNTRANSFER- TRUE to return the transfer as a string of the return value of curl_exec().
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, TRUE);
            //CURLOPT_SSL_VERIFYPEER- Set FALSE to stop cURL from verifying the peer's certificate.
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_PROXY, "172.16.99.249:3128");
            //Execute the  cURL session.
            $strResponse = curl_exec($ch);
            //Get the Error Code returned by Curl.
            $curlErrno = curl_errno($ch);
            if($curlErrno){
                $curlError = curl_error($ch);
                throw new Exception($curlError);
            }
            //Close the Curl Session.
            curl_close($ch);
            //Decode the returned JSON string.
            $objResponse = json_decode($strResponse);
            if ($objResponse->error){
                throw new Exception($objResponse->error_description);
            }
            return $objResponse->access_token;
        } catch (Exception $e) {
            echo "Exception-".$e->getMessage();
        }
    }
}
/*
 * Class:HTTPTranslator
 * 
 * Processing the translator request.
 */
Class HTTPTranslator {
    /*
     * Create and execute the HTTP CURL request.
     *
     * @param string $url        HTTP Url.
     * @param string $authHeader Authorization Header string.
     * @param string $postData   Data to post.
     *
     * @return string.
     *
     */
    function curlRequest($url, $authHeader, $postData=''){
        //Initialize the Curl Session.
        $ch = curl_init();
        //Set the Curl url.
        curl_setopt ($ch, CURLOPT_URL, $url);
        //Set the HTTP HEADER Fields.
        curl_setopt ($ch, CURLOPT_HTTPHEADER, array($authHeader,"Content-Type: text/xml"));
        //CURLOPT_RETURNTRANSFER- TRUE to return the transfer as a string of the return value of curl_exec().
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, TRUE);
        //CURLOPT_SSL_VERIFYPEER- Set FALSE to stop cURL from verifying the peer's certificate.
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, False);
        if($postData) {
            //Set HTTP POST Request.
            curl_setopt($ch, CURLOPT_POST, TRUE);
            //Set data to POST in HTTP "POST" Operation.
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        }
        //Execute the  cURL session.
        $curlResponse = curl_exec($ch);
        //Get the Error Code returned by Curl.
        $curlErrno = curl_errno($ch);
        if ($curlErrno) {
            $curlError = curl_error($ch);
            throw new Exception($curlError);
        }
        //Close a cURL session.
        curl_close($ch);
        return $curlResponse;
    }
    /*
     * Create Request XML Format.
     *
     * @param string $languageCode  Language code
     *
     * @return string.
     */
    function createReqXML($languageCode) {
        //Create the Request XML.
        $requestXml = '<ArrayOfstring xmlns="http://schemas.microsoft.com/2003/10/Serialization/Arrays" xmlns:i="http://www.w3.org/2001/XMLSchema-instance">';
        if($languageCode) {
            $requestXml .= "<string>$languageCode</string>";
        } else {
            throw new Exception('Language Code is empty.');
        }
        $requestXml .= '</ArrayOfstring>';
        return $requestXml;
    }
}

function get_accessToken() {
    //Client ID of the application.
    $clientID       = "";
    //Client Secret key of the application.
    $clientSecret = "";
    //OAuth Url.
    //$authUrl      = "https://datamarket.accesscontrol.windows.net/v2/OAuth2-13/";
    $authUrl = "https://login.microsoftonline.com/common/oauth2/v2.0/token";
    //Application Scope Url
    //$scopeUrl     = "https://graph.microsoft.com/.default";
    $scopeUrl = "https://api.botframework.com/.default"; // 2017-11-22 change
    //Application grant type
    $grantType    = "client_credentials";
    //Create the AccessTokenAuthentication object.
    $authObj      = new AccessTokenAuthentication();
    //Get the Access token.
    $accessToken  = $authObj->getTokens($grantType, $scopeUrl, $clientID, $clientSecret, $authUrl);
    return $accessToken;
}

// token 的 life time 是一個小時
function skype_get_token() {
    $token=get_accessToken();
    file_put_contents("skype_token.txt",$token);
    return $token;   
}

// 表情符號清單 https://support.skype.com/en/faq/FA12330/what-is-the-full-list-of-emoticons
// v2
function skype_send_message($skype_to,$message) {
    $message=htmlspecialchars($message);
    $token=file_get_contents("/dev/shm/skype_token.txt");
    if (!$token) $token=skype_get_token();
    $url="https://apis.skype.com/v2/conversations/$skype_to/activities";
    $json="{\"message\":{\"content\":\"$message\"}}";
    $headers="Authorization: Bearer $token";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array($headers));
    $response = curl_exec($ch);
    return $response;
}

// v3
function skype_send_message_v3($skype_to,$message) {
    $message=htmlspecialchars($message);
    $token=file_get_contents("/dev/shm/skype_token.txt");
    if (!$token) $token=skype_get_token();
    $url="https://smba.trafficmanager.net/apis/v3/conversations/$skype_to/activities";
    $json='{"text":"'.$message.'","type":"message"}';
    $headers="Authorization: Bearer $token";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array($headers));
    $response = curl_exec($ch);
    return $response;
}

// fork 處理 function, 背景處理, 加快速度
//function skype_send_message_fork($skype_to,$message) {
//    global $dbh;
//    mysql_query("insert nms_log_skype (skype_to,message,send_time) values ('$skype_to','$message',now())",$dbh);
//    if (!pcntl_fork()) skype_send_message($skype_to,$message);
//}
?>