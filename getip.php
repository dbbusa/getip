<?PHP
function getIP(){
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
        $ip = $client;
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
        $ip = $forward;
    else
        $ip = $remote;
    return $ip;
}
if (getIP() == "175.100.128.4")
    echo "You Can Login Using -> ".getIP();
else
    echo "Invalid IP Address Please Contact Your Admin";
?>