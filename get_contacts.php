 <?php
   	$hapikey = "demo";
   	$portal = "62515";
   	$count = "10";
   	$vidOffset = "8";
   	$endpoint = "https://api.hubapi.com/contacts/v1/lists/1/contacts/all?portalId=".$portal."&hapikey=".$hapikey."&count=".$count."&vidOffset=".$vidOffset;
    
    $c = curl_init();
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
    curl_setopt($c, CURLOPT_URL, $endpoint);

    $content = curl_exec($c);
    curl_close($c);

    print_r($content);
?>