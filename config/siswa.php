<?php

    class Siswa
    {
        public function __construct()
        {
            require_once('config.php');
        }
        public function setData($table, $data)
        {
            $db = Config::connect();
            try {
                $col = implode(',',array_keys($data));
                $v = implode(',',array_values($data));
                $val = str_replace(",","','", $v); 
                $sql = "INSERT INTO ".$table." (".$col.") VALUES('".$val."')";
                $stm = $db->prepare($sql);
                $stm->execute();
                if($stm){
                    echo "Data Berhasil Dikirim";
                }else{
                    echo "Data Gagal Dikirim";
                }
            } catch (PDOException $th) {
                echo $th->getmessage();
            }
        }
    }
    
?>