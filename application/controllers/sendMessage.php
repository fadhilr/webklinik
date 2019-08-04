<?php

class sendMessage extends CI_Controller {
$curl = curl_init();
$token = "YK0BkIx30jk1PVfkrSe4qudL7FZm78rBRk31cDLOZdVBVFx2Rp64yw0odcniiORI";
curl_setopt($curl, CURLOPT_HTTPHEADER,
    array(
        "Authorization: $token",
    )
);
for($i=1 ; $i <=25; $i++){
$data = [
    'phone' => '081237719288',
    'message' => "*$i SELAMAT MALAM TEMANKU* \n\nSEBERAPA DIAMKAH DIRIMU!? SEE YOU!!!WKWKWKW \n\n *BY : AANG MUAMMAR ZEIN*",
];
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($curl, CURLOPT_URL, "https://wablas.com//api/send-message");
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($curl);
echo "<pre>";
print_r($result);
}
curl_close($curl);
}
?>