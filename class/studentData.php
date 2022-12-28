<?php
require_once('dbconfig.php');
class StudData extends DBConnection {

    public function get_data(String $field,int $s_id){
      $qry=("SELECT $field FROM student WHERE s_id=?");
      $prep_select=$this->conn->prepare($qry);
      $prep_select->bind_param("i",$s_id);
      $prep_select->execute();
      $res=$prep_select->get_result();
      $data_row=$res->fetch_assoc();
      $s_data=$data_row[$field];
      return $s_data;
    }

    public function get_data_encoder(String $field,int $s_id){
      $qry=("SELECT $field FROM user WHERE u_id=?");
      $prep_select=$this->conn->prepare($qry);
      $prep_select->bind_param("i",$s_id);
      $prep_select->execute();
      $res=$prep_select->get_result();
      $data_row=$res->fetch_assoc();
      $s_data=$data_row[$field];
      return $s_data;
    }

    public function gradeLevel(){
		
      $qry=("SELECT * FROM gradelevel");
      $stmt=$this->conn->prepare($qry);
      $stmt->execute();
      $result_grade=$stmt->get_result();
      return $result_grade;
      
    }
    public function section(){
		
      $qry=("SELECT * FROM section");
      $stmt=$this->conn->prepare($qry);
      $stmt->execute();
      $result_section=$stmt->get_result();
      return $result_section;
      
    }
	
	public function position(){
		
      $qry=("SELECT * FROM position");
      $stmt=$this->conn->prepare($qry);
      $stmt->execute();
      $result_position=$stmt->get_result();
      return $result_position;
      
    }
	
	public function announcement(){
		
      $qry=("SELECT * FROM announcement");
      $stmt=$this->conn->prepare($qry);
      $stmt->execute();
      $result_announcement=$stmt->get_result();
      return $result_announcement;
      
    }

    public function sessionData(int $user_id){
      $qry=("SELECT u_name, u_last FROM user WHERE u_id=?");
      $prep_select=$this->conn->prepare($qry);
      $prep_select->bind_param("i",$user_id);
      $prep_select->execute();
      $res=$prep_select->get_result();
      $data_row=$res->fetch_assoc();
      $sess_name=$data_row['u_name'];
      $sess_last=$data_row['u_last'];
      $session_name="$sess_last, $sess_name";
      return $session_name;
    }
  }    
  $DBQuery = new StudData();