<?php
//Echo "Hello World!";
require_once __DIR__ . '/vendor/autoload.php';

use Predis\Client;

$redis = new Client(['host'   => 'redis']);
$id = isset($_GET['id'])?$_GET['id']:'';
if(!empty($id)){
    if ($redis->exists("test:$id")) {
        echo json_encode(['source'=>'redis','data'=>$redis->get("test:$id")]);
    } else {
        $koneksi = pg_connect('host=postgres user=admin password=password dbname=db port=5432');
        $q = "select * from users where id=$id";
        $query = pg_query($koneksi, $q) or die(json_encode(['status' => 'error']));;
        $result = json_encode(pg_fetch_all($query));
        pg_close($koneksi);
        $redis->set("test:$id", $result);
        $redis->expire("test:$id", 20); //  cache 20 detik
        echo json_encode(['source'=>'db','data'=>$result]);
    }
}else{
    echo json_encode(['error'=>'id not found']);
}
?>