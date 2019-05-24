<?php

class opmysql{

    private $host = 'localhost';
    private $name = 'test';
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

    //连接数据库
    function init_conn() {
        $this->conn=@mysqli_connect($this->host,$this->name,$this->pwd,$this->dBase);

    }

    //查询结果
    function mysqli_query_rst($sql){
        if($this->conn == ''){
            $this->init_conn();
        }
        $this->result=@mysqli_query($this->conn,$sql);
    }

    //返回查询记录数
    function getRowsNum($sql) {
        $this->mysqli_query_rst($sql);
        if(mysqli_errno($this->conn) == 0){
            return @mysqli_num_rows($this->result);
        }else{
            return '';
        }
    }

    //将查询结果输出成一个数组并返回（单条记录）
    function getRowsRst($sql) {
        $this->mysqli_query_rst($sql);
        if(mysqli_errno($this->conn) == 0){
            $this->rowsRst = mysqli_fetch_array($this->result,MYSQLI_ASSOC);
            return $this->rowsRst;
        }else{
            return '';
        }
    }

    //将查询结果输出成一个含多条记录的二维数组并返回
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

    //返回查询结果的特定字段
    function getFields($sql,$num){

        $this->mysqli_query_rst($sql);
        if(mysqli_errno($this->conn) == 0){

            $this->rowsRst = mysqli_fetch_array($this->result);
            return $this->rowsRst[$num];
        }else{
            return '';
        }
    }

    //返回增、删、改记录数，用来判断操作是否成功
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

    //错误提示
    function msg_error(){
        //return $this->msg = $php_errormsg;
        $this->msg = "错误";
        return $this->msg;
    }

    //释放结果集
    function close_rst(){
        mysqli_free_result($this->result);
        $this->msg = '';
        $this->fieldsNum = 0;
        $this->rowsNum = 0;
        $this->filesArray = '';
        $this->rowsArray = '';
    }

    //关闭数据库
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