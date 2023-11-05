<?php
//var_dump($_GET);
 if(isset ($_GET['key']) && $_GET['key']== "APIIT"){
    $endpoint ='api.openweathermap.org/data/2.5/weather';
    $params = ['appid'=>'0363475cb5fc23031834ed7e54576ae8', 'lat'=>$_GET['lat'],'lon'=>$_GET['lon']];
    $url = $endpoint . '?'. http_build_query($params);
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $wresponce =  curl_exec($ch);
    //echo ($wresponce);
    $wether = (json_decode($wresponce));
   // var_dump($wether);
    $wet_data = array(
        'Country'=>$wether->sys->country,
        'City'=>$wether->name,
        'Status'=>$wether->weather[0]->main,
        'Desc'=>$wether->weather[0]->description,
        'Icon'=>$wether->weather[0]->icon
    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($wet_data);

}
else{
    $reply= array(
        'state'=>'Error',
        'desc'=>'invalid API key submitted '
    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($reply);
} 

?>
