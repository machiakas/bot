<?PHP
$usuario = $_POST['username'];
$views = $_POST['views'];

ejecutarAnsible($views, $usuario);




function ejecutarAnsible($views, $usuario){
    for ($i = 1; $i <= $views; $i++){
        $proxy = json_decode( file_get_contents('https://api.getproxylist.com/proxy?protocol[]=http'), true );
        $ip = $proxy['ip'];
        $port = $proxy['port'];
        $ansible_string = 'ansible-playbook /home/ubuntu/firefox.yaml -l server -e channel_name="'.$usuario.'" -e proxyIP=\''.$ip.'\' -e proxyPORT=\''.$port.'\' -e key=\''.$i.'\' --private-key /home/ubuntu/webserver.pem';
        // $salida = shell_exec($ansible_string);
        //
        //shell_exec($ansible_string);
        print_r($proxy);
    }


}


function responseAjax(){
    //armo mi json de respueta
    $response=array(
        "usuario" => $usuario,
        "views" => $views,
    );

    // make it json format
    $json_response = json_encode($response);
    echo($json_response);

}    echo $proxy;


       // $proxy = json_decode( file_get_contents('https://api.ipify.org?format=json'), true );
        //echo $proxy;
    

