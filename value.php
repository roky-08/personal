<?php
function auto($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
$access_token= "CAACW5Fg5N2IBAOxLHVblytZBLfcDjmzE17w35OUZBoCBwzj6C2XxxY9EHFlrZAuqGvZB8cBcxQYAVc7DP8wv5ISVOwqkeI8bbE9JO8VFtZBHqZCj4E6hkJ5GpuCEaD6gGxwUiD1W9E80hEuSNZAUeDZBSbgqXPRQEv417YWPF2tCrORIWY5npPl4tlssCL4crZAPiXCkFzeW7VG9JixRXuTtD";
if(file_exists('KocengC3')){ $log=json_encode(file('KocengC3')); }else{ $log=''; }
$stat=json_decode(auto('https://graph.beta.facebook.com/me/home?fields=id,from&limit=15&access_token='.$access_token),true);
for($i=1;$i<=count($stat[data]);$i++){
if(!ereg($stat[data][$i-1][id],$log)){
$x=$stat[data][$i-1][id]."\n";
$y=fopen('KocengC3','a');
fwrite($y,$x);
fclose($y);

$text = array(                                  "MaSha-AlLaH ? ? Bot By ? ?   ? ?   ? ? || Shayan Ali || ? ? ? ?  SuppOrt Pakistan team In T20 WOrld-Cup ? ? ? ? http:\\www.facebook.com/yow.and.me",
                        "MaSha-AlLaH ? ? Bot By ? ?   ? ?   ? ? || Shayan Ali || ? ? ? ?  SuppOrt Pakistan team In T20 WOrld-Cup ? ? ? ? http:\\www.facebook.com/yow.and.me",
                 "MaSha-AlLaH ? ? Bot By ? ?   ? ?   ? ? || Shayan Ali || ? ? ? ?  SuppOrt Pakistan team In T20 WOrld-Cup ? ? ? ? http:\\www.facebook.com/yow.and.me",
        "MaSha-AlLaH ? ? Bot By ? ?   ? ?   ? ? || Shayan Ali || ? ? ? ?  SuppOrt Pakistan team In T20 WOrld-Cup ? ? ? ? http:\\www.facebook.com/yow.and.me",
"MaSha-AlLaH ? ? Bot By ? ?   ? ?   ? ? || Shayan Ali || ? ? ? ?  SuppOrt Pakistan team In T20 WOrld-Cup ? ? ? ? http:\\www.facebook.com/yow.and.me",



$message1 = $text[rand(0,count($text)-1)]);
$message=($message1);
auto('https://graph.beta.facebook.com/'.$stat[data][$i-1][id].'/comments?access_token='.$access_token.'&message='.urlencode($message).'+'.urlencode($fx).'&method=post');
auto('https://graph.beta.facebook.com/'.$stat[data][$i-1][id].'/likes?method=post&access_token='.$access_token);
echo '<span style="color:blue">'.$stat[data][$i-1][from][name].'</span> <span style="color:lime">[SUCCESS]</span><hr/>';
}
}
?>