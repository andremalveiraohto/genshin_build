<?php

abstract class ClassConexao{

    public function Conectar()
    {
        try {

        //CONEXÃO COM BANCO DE DADOS DB GENSHIN
        $dsn = 'mysql:dbname=db_genshin;host=localhost';
        $dbuser = 'root';
        $dbpassword = '';


            $pdo = new PDO($dsn, $dbuser, $dbpassword);
            return $pdo;
        }catch (PDOException $Erro){
            return $Erro->getMessage();
        }
    }
    }

class ClassVisitas extends ClassConexao{
    private $Id, $Ip , $Mes, $Data , $Hora , $Limite;

    #Construtor para setar atributos
    public function __construct()
    {
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Rio_Branco');
        $this->Id=0;
        $this->Ip=$_SERVER['REMOTE_ADDR'];
        $this->Mes=utf8_encode(strftime("%B/%Y", strtotime(date('f'))));
        $this->Data=date("d/m/Y");
        $this->Hora=date("H:i");
        $this->Limite=50;
    }

    #Verifica se o usuário recebeu visita recentemente
    public function VerificaUsuario()
    {
        $Select=$this->Conectar()->prepare("select * from count_visit where Ip=:ip and Data=:datas order by Id desc");
        $Select->bindParam(":ip",$this->Ip,PDO::PARAM_STR);
        $Select->bindParam(":datas",$this->Data,PDO::PARAM_STR);
        $Select->execute();
        if($Select->rowCount() == 0){
            $this->InserindoVisitas();
        }else{
            $FSelect=$Select->fetch(PDO::FETCH_ASSOC);
            $HoraDB=strtotime($FSelect['Hora']);
            $HoraAtual=strtotime($this->Hora);
            $HoraSubtracao=$HoraAtual-$HoraDB;

            if($HoraSubtracao > $this->Limite){
                $this->InserindoVisitas();
            }
        }
         /* echo "Visitantes no site: ".$this->Mes."<br>"; */

    }

    #Insere a visita no banco de dados
    private function InserindoVisitas()
    {
        $Select=$this->Conectar()->prepare("insert into count_visit values (:id , :ip , :mes, :datas , :hora)");
        $Select->bindParam(":id",$this->Id,PDO::PARAM_STR);
        $Select->bindParam(":ip",$this->Ip,PDO::PARAM_STR);
        $Select->bindParam(":mes",$this->Mes,PDO::PARAM_STR);
        $Select->bindParam(":datas",$this->Data,PDO::PARAM_STR);
        $Select->bindParam(":hora",$this->Hora,PDO::PARAM_STR);
        $Select->execute();
    }
}


