<head>
</head>
<body>
<?php
    //have to run on browser
    //when the person clock in---- find the loction
    //need to be html
    //
   class Googlegeolocation
    {
    private:
        //api:AIzaSyBpqO1c0HogRBlFvVixryigwE3SFeHwH6s
        var $api = "api_key";
        var $language = "";
        var $host =
        function getgoogleapi($api)
        {
            function getUrl($host){
                // create a new cURL resource
                $ch = curl_init();
                
                // set URL and other appropriate options
                curl_setopt($ch, CURLOPT_URL, $host);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                
                $content = curl_exec ($ch);
                
                if (curl_error($ch)) {
                    //if have error throw the error message   try throw and out
                    throw new Exception(curl_errno($ch) . ": " . curl_error($ch));
                }
                // close cURL resource, and free up system resources
                
                curl_close ($ch);
                // grab URL and pass it to the browser
                return $content;
            }
            
        }
        
    }
    

?>
</body>