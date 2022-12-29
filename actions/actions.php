<?php
require_once '../config.php';
class Login extends DBConnection {
	private $settings;
	public function __construct(){
		global $_settings;
		$this->settings = $_settings;

		parent::__construct();
		ini_set('display_error', 1);
	}
	public function __destruct(){
		parent::__destruct();
	}

	public function login(){
		extract($_POST);
		
		$qry=("SELECT * FROM user WHERE uname=? AND pass=?");
		$stmt=$this->conn->prepare($qry);
		$stmt->bind_param("ss", $uname,$pass);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();
		$user_id=$row['u_id'];
		$user_type=$row['role'];
		$_SESSION["u_id"] = $user_id;
		if($result->num_rows != 0){
			if($user_type == 1){
				header('location:../pages/');
			}else{
				header('location:../../userview/index.php');
			}
		}else{
			echo"wala";
		}
		
	}

	public function reg_encoder(){
		extract($_POST);
		$auth_id=mt_rand();
		$encrypt_auth=md5($auth_id);
		$role=1;
		$file_name=strtolower($_FILES['filename']['name']);
		$file_ext= substr($file_name, strrpos($file_name, '.'));
		$prefix='pp_'.md5(time() * rand(1,9999));
		$newName=$prefix.$file_ext;
		$path='../pages/content/profilepicture/'.$newName;
		
		if(move_uploaded_file($_FILES['filename']['tmp_name'], $path)){
			$insert_encode=("INSERT INTO user (u_name,u_mid,u_last,position,profilepic,auth_id,uname,pass,role) VALUES(?,?,?,?,?,?,?,?,?)");
			$prep_insert_encode=$this->conn->prepare($insert_encode);
			$prep_insert_encode->bind_param("ssssssssi", $fname, $mname,$lname,$position,$path,$encrypt_auth,$uname,$pass,$role);
			$prep_insert_encode->execute();
			if($prep_insert_encode){
				$action="User $id , Register $fname $lname to the system.";
					$insert_logs=("INSERT INTO logs (u_id,action) VALUES(?,?)");
					$prep_insert_log=$this->conn->prepare($insert_logs);
					$prep_insert_log->bind_param("is", $id, $action);
					$prep_insert_log->execute();
					if($prep_insert_log){
						echo"
						<script type='text/javascript'>
						alert('Data has been Saved!');
						window.location.href = '../pages/forms/encoder.php';
						</script>";
			}
		}
	}else{
		echo "error";}
	}
	
	
			
	public function reg_stud(){
		extract($_POST);
		$auth_id=mt_rand();
		$encrypt_auth=md5($auth_id);
		$role=2;
		$file_name=strtolower($_FILES['filename']['name']);
		$file_ext= substr($file_name, strrpos($file_name, '.'));
		$prefix='pp_'.md5(time() * rand(1,9999));
		$newName=$prefix.$file_ext;
		$path='../pages/content/profilepicture/'.$newName;
		
		if(move_uploaded_file($_FILES['filename']['tmp_name'], $path)){
			$insert=("INSERT INTO user (u_name,u_mid,u_last,auth_id,uname,pass,image,email,role,id_num,grade,section,position,age,gender,cpnum) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$prep_insert=$this->conn->prepare($insert);
			$prep_insert->bind_param("sssssssissssisii", $fname, $mname,$lname,$encrypt_auth,$uname,$pass,$path,$u_email,$role,$u_id,$glevel,$section,$position,$age,$gender,$u_cpnum);
			$prep_insert->execute();
			if($prep_insert){
				$action="User $id , Register $fname $lname to the system.";
					$insert_logs=("INSERT INTO logs (u_id,action) VALUES(?,?)");
					$prep_insert_log=$this->conn->prepare($insert_logs);
					$prep_insert_log->bind_param("is", $id, $action);
					$prep_insert_log->execute();
					if($prep_insert_log){
						echo"
						<script type='text/javascript'>
						alert('Data has been Saved!');
						window.location.href = '../pages/forms/advanced.php';
						</script>
					";
			}
		}else{
			echo "error";}
	}
}
		
		
		public function reg_feedback(){
		extract($_POST);
			$insert_feedback=("INSERT INTO feedback (name,email,subject,message) VALUES(?,?,?,?)");
			$prep_insert=$this->conn->prepare($insert_feedback);
			$prep_insert->bind_param("ssss", $name,$email,$subject,$message);
			$prep_insert->execute();
						echo"
						<script type='text/javascript'>
						alert('Data has been Saved!');
						</script>
					";
			}
			
		public function reg_subscription(){
		extract($_POST);
			$insert_feedback=("INSERT INTO feedback (email) VALUES(?)");
			$prep_insert=$this->conn->prepare($insert_feedback);
			$prep_insert->bind_param("s", $email);
			$prep_insert->execute();
						echo"
						<script type='text/javascript'>
						alert('Data has been Saved!');
						</script>
					";
			}
			
		public function update_officer(){
			extract($_POST);
				$update=("UPDATE student SET name=?, mid=?, last=?, id_num=?, grade=?, section=?, age=?, gender=?, cpnum=?,email=?,position=? WHERE s_id=?");
				$prep_update=$this->conn->prepare($update);
				$prep_update->bind_param("sssissisissi", $fname, $mname,$lname,$u_id,$glevel,$section,$age,$gender,$u_cpnum,$u_email,$position,$s_id);
				$prep_update->execute();
				if($prep_update){
					$action="User $id , Updated the data of $fname $lname.";
					$insert_logs=("INSERT INTO logs (u_id,action) VALUES(?,?)");
					$prep_insert_log=$this->conn->prepare($insert_logs);
					$prep_insert_log->bind_param("is", $id, $action);
					$prep_insert_log->execute();
					if($prep_insert_log){
						echo"
						<script type='text/javascript'>
						alert('Changes has been Saved!');
						window.location.href = '../pages/tables/data_officer.php';
						</script>
					";
					}
					
					//header('Location: ' . $_SERVER['HTTP_REFERER']);
				}
			}
		
		
		public function update_stud(){
			extract($_POST);
				$update=("UPDATE student SET name=?, mid=?, last=?, id_num=?, grade=?, section=?, age=?, gender=?, cpnum=?,email=? WHERE s_id=?");
				$prep_update=$this->conn->prepare($update);
				$prep_update->bind_param("sssissisisi", $fname, $mname,$lname,$u_id,$glevel,$section,$age,$gender,$u_cpnum,$u_email,$s_id);
				$prep_update->execute();
				if($prep_update){
					$action="User $id , Updated the data of $fname $lname.";
					$insert_logs=("INSERT INTO logs (u_id,action) VALUES(?,?)");
					$prep_insert_log=$this->conn->prepare($insert_logs);
					$prep_insert_log->bind_param("is", $id, $action);
					$prep_insert_log->execute();
					if($prep_insert_log){
						echo"
						<script type='text/javascript'>
						alert('Changes has been Saved!');
						window.location.href = '../pages/tables/data.php';
						</script>
					";
					}
					
					//header('Location: ' . $_SERVER['HTTP_REFERER']);
				}
			}
			
			public function update_budget(){
			extract($_POST);
				$update=("UPDATE budget SET deposit=?, withdraw=?, date=?, purpose=?, name=?, idnumber=? WHERE b_id=?");
				$prep_update=$this->conn->prepare($update);
				$prep_update->bind_param("iissii", $deposit, $withdraw,$purpose,$name,$idnumber,$b_id);
				$prep_update->execute();
				if($prep_update){
					$action="User $id , Updated the Budget data of $name.";
					$insert_logs=("INSERT INTO logs (u_id,action) VALUES(?,?)");
					$prep_insert_log=$this->conn->prepare($insert_logs);
					$prep_insert_log->bind_param("is", $id, $action);
					$prep_insert_log->execute();
					if($prep_insert_log){
						echo"
						<script type='text/javascript'>
						alert('Changes has been Saved!');
						window.location.href = '../pages/tables/data_budget.php';
						</script>
					";
					}
					
					//header('Location: ' . $_SERVER['HTTP_REFERER']);
				}
			}
			
			

			public function update_encoder(){
				extract($_POST);
					$update=("UPDATE user SET u_name=?, u_mid=?, u_last=? WHERE u_id=?");
					$prep_update=$this->conn->prepare($update);
					$prep_update->bind_param("sssi", $fname, $mname,$lname,$s_id);
					$prep_update->execute();
					if($prep_update){
						$action="User $id , Updated the data of $fname $lname.";
						$insert_logs=("INSERT INTO logs (u_id,action) VALUES(?,?)");
						$prep_insert_log=$this->conn->prepare($insert_logs);
						$prep_insert_log->bind_param("is", $id, $action);
						$prep_insert_log->execute();
						if($prep_insert_log){
							echo"
							<script type='text/javascript'>
							alert('Changes has been Saved!');
							window.location.href = '../pages/tables/data_encoder.php';
							</script>
						";
						}
						
						//header('Location: ' . $_SERVER['HTTP_REFERER']);
					}
				}
				
				public function update_cal(){
					extract($_POST);
						$update=("UPDATE calendar SET date=?, area=?, activity=?, organization=?, budget=?, remarks=? WHERE c_id=?");
						$prep_update=$this->conn->prepare($update);
						$prep_update->bind_param("ssssis", $date,$area,$activity,$organization,$budget,$remarks);
						$prep_update->execute();
						if($prep_update){
							$action="User $id , Updated the data of $fname $lname.";
							$insert_logs=("INSERT INTO logs (u_id,action) VALUES(?,?)");
							$prep_insert_log=$this->conn->prepare($insert_logs);
							$prep_insert_log->bind_param("is", $id, $action);
							$prep_insert_log->execute();
							if($prep_insert_log){
								echo"
								<script type='text/javascript'>
								alert('Changes has been Saved!');
								window.location.href = '../pages/tables/data_calendar.php';
								</script>
							";
							}
							
							//header('Location: ' . $_SERVER['HTTP_REFERER']);
						}
					}
				
				
	public function reg_bud(){
		extract($_POST);
		
		
			$insert=("INSERT INTO budget (type,amount,date,purpose,name,idnumber) VALUES(?,?,?,?,?,?)");
			$prep_insert=$this->conn->prepare($insert);
			$prep_insert->bind_param("sisssi", $type,$amount,$date,$purpose,$name,$idnumber);
			$prep_insert->execute();
			if($prep_insert){
				$action="User $id , Register $name whom withdrawn/deposited for the purpose:$purpose to the system.";
					$insert_logs=("INSERT INTO logs (u_id,action) VALUES(?,?)");
					$prep_insert_log=$this->conn->prepare($insert_logs);
					$prep_insert_log->bind_param("is", $id, $action);
					$prep_insert_log->execute();
					if($prep_insert_log){
						echo"
						<script type='text/javascript'>
						alert('Data has been Saved!');
						window.location.href = '../pages/forms/budget.php';
						</script>
					";
			}
		}
		}
		
	public function reg_calendar(){
		extract($_POST);
		
		
			$insert=("INSERT INTO calendar (date,area,activity,organization,budget) VALUES(?,?,?,?,?)");
			$prep_insert=$this->conn->prepare($insert);
			$prep_insert->bind_param("sssss", $date,$area,$activity,$organization,$budget);
			$prep_insert->execute();
			if($prep_insert){
				$action="User $id , Register Activity name:$activity to the system.";
					$insert_logs=("INSERT INTO logs (u_id,action) VALUES(?,?)");
					$prep_insert_log=$this->conn->prepare($insert_logs);
					$prep_insert_log->bind_param("is", $id, $action);
					$prep_insert_log->execute();
					if($prep_insert_log){
						echo"
						<script type='text/javascript'>
						alert('Data has been Saved!');
						window.location.href = '../pages/forms/calendar.php';
						</script>
					";
			}
		}
		}
		
		
	public function post_announce(){
		extract($_POST);
		$file_name=strtolower($_FILES['filename']['name']);
		$file_ext= substr($file_name, strrpos($file_name, '.'));
		$prefix='doc_'.md5(time() * rand(1,9999));
		$newName=$prefix.$file_ext;
		$path='../pages/content/images/'.$newName;
		
		if(move_uploaded_file($_FILES['filename']['tmp_name'], $path)){
			$insert=("INSERT INTO announcement (caption,image) VALUES(?,?)");
			$prep_insert=$this->conn->prepare($insert);
			$prep_insert->bind_param("ss",$caption,$path);
			$prep_insert->execute();
			if($prep_insert){
				$action="User $id , Register $caption to the system.";
					$insert_logs=("INSERT INTO logs (u_id,action) VALUES(?,?)");
					$prep_insert_log=$this->conn->prepare($insert_logs);
					$prep_insert_log->bind_param("is", $id, $action);
					$prep_insert_log->execute();
					if($prep_insert_log){
						echo"
						<script type='text/javascript'>
						alert('Data has been Saved!');
						window.location.href = '../pages/forms/announcement.php';
						</script>
					";
			}
		}
		}else{echo "error";}	
	}
	
	public function post_sponsors(){
		extract($_POST);
		$file_name=strtolower($_FILES['filename']['name']);
		$file_ext= substr($file_name, strrpos($file_name, '.'));
		$prefix='doc_'.md5(time() * rand(1,9999));
		$newName=$prefix.$file_ext;
		$path='../pages/content/sponsors/'.$newName;
		
		if(move_uploaded_file($_FILES['filename']['tmp_name'], $path)){
			$insert=("INSERT INTO partners (image) VALUES(?)");
			$prep_insert=$this->conn->prepare($insert);
			$prep_insert->bind_param("s",$path);
			$prep_insert->execute();
			if($prep_insert){
				$action="User $id , Register sponsor $p_id to the system.";
					$insert_logs=("INSERT INTO logs (u_id,action) VALUES(?,?)");
					$prep_insert_log=$this->conn->prepare($insert_logs);
					$prep_insert_log->bind_param("is", $id, $action);
					$prep_insert_log->execute();
					if($prep_insert_log){
						echo"
						<script type='text/javascript'>
						alert('Data has been Saved!');
						window.location.href = '../pages/forms/sponsors.php';
						</script>
					";
			}
		}
		}else{echo "error";}	
	}
	

	public function logout(){
	 session_destroy();
	 header('location:../');
	}
	function login_user(){
		extract($_POST);
		$qry = $this->conn->query("SELECT * from clients where email = '$email' and password = md5('$password') ");
		if($qry->num_rows > 0){
			foreach($qry->fetch_array() as $k => $v){
				$this->settings->set_userdata($k,$v);
			}
			$this->settings->set_userdata('login_type',1);
		$resp['status'] = 'success';
		}else{
		$resp['status'] = 'incorrect'; 
		}
		if($this->conn->error){
			$resp['status'] = 'failed';
			$resp['_error'] = $this->conn->error;
		}
		return json_encode($resp);
	}
}
$action = !isset($_GET['f']) ? 'none' : strtolower($_GET['f']);
$auth = new Login();
switch ($action) {
	case 'login':
		echo $auth->login();
		break;
	case 'login_user':
		echo $auth->login_user();
		break;
	case 'register_stud':
		echo $auth->reg_stud();
		break;
	case 'register_encoder':
		echo $auth->reg_encoder();
		break;
	case 'register_budget':
		echo $auth->reg_bud();
		break;
	case 'register_calendar':
		echo $auth->reg_calendar();
		break;
	case 'register_feedback':
		echo $auth->reg_feedback();
		break;
	case 'register_subscription':
		echo $auth->reg_subscription();
		break;
	case 'post_announcement':
		echo $auth->post_announce();
		break;
	case 'post_sponsors':
		echo $auth->post_sponsors();
		break;
	case 'update_encoder':
		echo $auth->update_encoder();
		break;
	case 'update_budget':
		echo $auth->update_budget();
		break;
	case 'update_officer':
		echo $auth->update_officer();
		break;
	case 'update_stud':
		echo $auth->update_stud();
		break;
	case 'update_calendar':
		echo $auth->update_cal();
		break;
	case 'logout':
		echo $auth->logout();
		break;
	default:
		echo $auth->index();
		break;
}

