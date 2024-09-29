

**Jio Plus Key Api**

> <?php
> 
> $curl = curl_init();
> 
> curl_setopt_array($curl, array(
>   CURLOPT_URL => '{{babel_base}}/jplus/key',
>   CURLOPT_RETURNTRANSFER => true,
>   CURLOPT_ENCODING => '',
>   CURLOPT_MAXREDIRS => 10,
>   CURLOPT_TIMEOUT => 0,
>   CURLOPT_FOLLOWLOCATION => true,
>   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
>   CURLOPT_CUSTOMREQUEST => 'POST',
>   CURLOPT_POSTFIELDS =>'{
>     "X-API-Key": "babel-xxxx",
>     "X-Channel-ID": 144
> }',
>   CURLOPT_HTTPHEADER => array(
>     'User-Agent: Babel/5.0',
>     'Content-Type: application/json'
>   ),
> ));
> 
> $response = curl_exec($curl);
> 
> curl_close($curl);
> echo $response;
