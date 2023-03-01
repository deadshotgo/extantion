<?php


if (empty($_POST)) die("Bad request");

$connect = mysqli_connect("159.253.20.6:3306", "olegutm_cf", "iacCbwKwfQUdbx1O", "olegutm_cf");


if ($connect == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}


$selectAll = mysqli_query($connect, "SELECT * FROM user"); // вибираємо всі записи із бд



$customers_arr = array();
while ($row = mysqli_fetch_array($selectAll)) {
    $customers_arr[] = $row; // записуємо в масив
};
print_r($customers_arr);
////get client ip
//$stip = $_SERVER['REMOTE_ADDR'];
//
////pixel_fb
//$fb = $_POST['pixel'];
////form data
//$tname = $_POST['firstName'];
//$tlname = $_POST['lastName'];
//$tmail = $_POST['email'];
//$tphone = $_POST['phone'];
//
//$sub_id = $_POST['subid'];
//$campaign = $_POST['utm_campaign'];
//$mbid = $_POST['mbid'];
//$source = $_POST['utm_source'];
//$content = $_POST['utm_content'];
//$tal = $_POST['al'];
//$tap = $_POST['ap'];
//$tgi = $_POST['gi'];
//
////get ccode from server future
//$ccc = file_get_contents("https://ipapi.co/" . $stip . "/country_calling_code/");
//$ccode = file_get_contents("http://ip-api.com/json/" . $stip . "?fields=message,country,countryCode,regionName,city,zip,timezone,proxy,mobile,query");
//$object = json_decode($ccode, true);
//$councode = $object["countryCode"];
//$ipcountry = $object["country"];
//$ipcity = $object["city"];
//$ipregionname = $object["regionName"];
//$ipmobile = $object["mobile"];
//$ipproxy = $object["proxy"];
//
//
//
//$curl = curl_init();
//$description = "";
//$agent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36';
//$data = [];
//$data = [
//    "ai" => $_POST["ai"],
//    "ci" => "1",
//    "gi" => $_POST["gi"],
//    //"userip"=> $_SERVER['REMOTE_ADDR'],
//    "userip" => "$stip",
//    "firstname" => "$tname",
//    "lastname" => "$tlname",
//    "email" => "$tmail",
//    "password" => "FixGo1452",
//    "phone" => "$tphone",
//    "so" => $source,
//    "sub" => $sub_id,
//    "MPC_1" => "$mbid",
//    "MPC_2" => "FreeParam",
//    "MPC_3" => "FreeParam",
//    "MPC_4" => "FreeParam",
//    "MPC_5" => "FreeParam",
//    "MPC_6" => "FreeParam",
//    "MPC_7" => $campaign,
//    "MPC_8" => "FreeParam",
//    "MPC_9" => "FreeParam",
//    "MPC_10" => (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"
//];
//
//
//curl_setopt_array($curl, array(
//    CURLOPT_URL => 'https://bo.hellleadbox.com/api/signup/procform',
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_USERAGENT => $agent,
//    CURLOPT_ENCODING => '',
//    CURLOPT_MAXREDIRS => 10,
//    CURLOPT_TIMEOUT => 0,
//    CURLOPT_FOLLOWLOCATION => true,
//    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//    CURLOPT_CUSTOMREQUEST => 'POST',
//    CURLOPT_POSTFIELDS => json_encode($data),
//    CURLOPT_HTTPHEADER => array(
//        'x-trackbox-username: ' . "$tal",
//        'x-trackbox-password: ' . "$tap",
//        'x-api-key: 2643889w34df345676ssdas323tgc738',
//        'Content-Type: application/json'
//    ),
//));
//
//$response = curl_exec($curl);
//$redirect = json_decode($response, true);
//$URL = $redirect["data"];
//curl_close($curl);
//print_r($URL);
//header("Location: success.php?fb=$fb&url=$URL");
//die();
