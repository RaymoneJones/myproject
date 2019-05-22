<?php

class opmysql{

    private $host = 'localhost';
    private $name = 'root';
    private $pwd = '123456';
    private $dBase = 'test';

    private $conn = '';
    private $result = '';
    private $msg = '';
    private $fields;
    private $fieldsNum = 0;
    private $rowsNum = 0;
    private $rowsRst = '';
    private $filesArray = array();
    private $rowsArray = array();


    function __construct($host = '',$name = '',$pwd = '',$dBase = ''){

        if($host!='')
            $this->host = $host;
        if($name!='')
            $this->name = $name;
        if($pwd!='')
            $this->pwd = $pwd;
        if($dBase!='')
            $this->dBase = $dBase;
    }

    //�������ݿ�
    function init_conn() {
        $this->conn=@mysqli_connect($this->host,$this->name,$this->pwd,$this->dBase);
        return $this->conn;     //�Ҽ���һ���������ݿ�����
    }

    //��ѯ���
    function mysqli_query_rst($sql){
        if($this->conn == ''){
            $this->init_conn();
        }
        $this->result=@mysqli_query($this->conn,$sql);
    }

    //���ز�ѯ��¼��
    function getRowsNum($sql) {
        $this->mysqli_query_rst($sql);
        if(mysqli_errno($this->conn) == 0){
            return @mysqli_num_rows($this->result);
        }else{
            return '';
        }
    }

    //����ѯ��������һ�����鲢���أ�������¼��
    function getRowsRst($sql) {
        $this->mysqli_query_rst($sql);
        if(mysqli_errno($this->conn) == 0){
            $this->rowsRst = mysqli_fetch_array($this->result,MYSQLI_ASSOC);
            return $this->rowsRst;
        }else{
            return '';
        }
    }

    //����ѯ��������һ����������¼�Ķ�ά���鲢����
    function getRowsArray($sql){
        $this->mysqli_query_rst($sql);
        if(mysqli_errno($this->conn) == 0){
            while($row = mysqli_fetch_array($this->result,MYSQLI_ASSOC)){
                $this->rowsArray[] = $row;
            }
            return $this->rowsArray;
        }else{
            return '';
        }
    }

    //���ز�ѯ������ض��ֶ�
    function getFields($sql,$num){

        $this->mysqli_query_rst($sql);
        if(mysqli_errno($this->conn) == 0){

            $this->rowsRst = mysqli_fetch_array($this->result);
            return $this->rowsRst[$num];
        }else{
            return '';
        }
    }

    //��������ɾ���ļ�¼���������жϲ����Ƿ�ɹ�
    function uidRst($sql){
        if($this->conn == ''){
            $this->init_conn();
        }
        @mysqli_query($this->conn,$sql);
        $this->rowsNum = @mysqli_affected_rows($this->conn);
        if(mysqli_errno($this->conn)== 0){
            return $this->rowsNum;
        }else{
            return '';
        }
    }

    //������ʾ
    function msg_error(){
        //return $this->msg = $php_errormsg;
        $this->msg = "����";
        return $this->msg;
    }

    //�ͷŽ����
    function close_rst(){
        mysqli_free_result($this->result);
        $this->msg = '';
        $this->fieldsNum = 0;
        $this->rowsNum = 0;
        $this->filesArray = '';
        $this->rowsArray = '';
    }

    //�ر����ݿ�
    function close_conn(){
        $this->close_rst();
        mysqli_close($this->conn);
        $this->conn = '';
    }
}

$conne = new opmysql();
$conne1 = new opmysql();
$conne2 = new opmysql();
$conne3 = new opmysql();
$conne4 = new opmysql();
?>