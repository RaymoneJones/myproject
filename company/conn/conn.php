<?php

class opmysql{

    private $host = 'localhost';
    private $name = 'root';
    private $pwd = '25802580';
    private $dBase = 'business';

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
		$this->conn=@mysql_connect($this->host,$this->name,$this->pwd);
		@mysql_select_db($this->dBase,$this->conn);
		mysql_query("set names utf8");
	}
	
	//��ѯ���
	function mysql_query_rst($sql){
		if($this->conn == ''){
			$this->init_conn();
		}
		$this->result=@mysql_query($sql,$this->conn);
	}
	
	//���ز�ѯ��¼��
	function getRowsNum($sql) {
		$this->mysql_query_rst($sql);
		if(mysql_errno() == 0){
			return @mysql_num_rows($this->result);
		}else{
			return '';
		}
	}
	
	//����ѯ��������һ�����鲢���أ�������¼��
	function getRowsRst($sql) {
		$this->mysql_query_rst($sql);
		if(mysql_errno() == 0){
			$this->rowsRst = mysql_fetch_array($this->result,MYSQL_ASSOC);
			return $this->rowsRst;
		}else{
			return '';
		}
	}
	
	//����ѯ��������һ����������¼�Ķ�ά���鲢����
	function getRowsArray($sql){
		$this->mysql_query_rst($sql);
		if(mysql_errno() == 0){
			while($row = mysql_fetch_array($this->result,MYSQL_ASSOC)){
				$this->rowsArray[] = $row;
			}
			return $this->rowsArray;
		}else{
			return '';
		}
	}
	
	//���ز�ѯ������ض��ֶ�
	function getFields($sql,$num){
		
		$this->mysql_query_rst($sql);
		if(mysql_errno() == 0){
			
			$this->rowsRst = mysql_fetch_array($this->result);
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
		@mysql_query($sql);
		$this->rowsNum = @mysql_affected_rows();
		if(mysql_errno == 0){
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
		mysql_free_result($this->result);
		$this->msg = '';
		$this->fieldsNum = 0;
		$this->rowsNum = 0;
		$this->filesArray = '';
		$this->rowsArray = '';
	}
	
	//�ر����ݿ�
	function close_conn(){
		$this->close_rst();
		mysql_close($this->conn);
		$this->conn = '';
	}
}

$conne = new opmysql();
?>