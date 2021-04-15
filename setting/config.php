<?php 
class project2
	
{
	public $username = "username";
	public $password = "password";

	// public $username = "root";
	// public $password = "";

	public $server = "localhost";
	public $dbname = "project2";
	public $connectdb;

	//-- global variables for use
	public $gradelist = array(1,2,3,4,5); //list of grades in school
	public $stafflist = array("Teacher","Admin"); //list of faculty types
	public $subjectlist = array("Maths","Science", "English", "Tamil", "Sinhala");
	
	function __construct()
	{
		$this->connectdb = new mysqli($this->server,$this->username,$this->password,$this->dbname);
		if($this->connectdb->connect_error)
		{
			die("connection failed");
		}
	}
	
    public function hackme()
    {
        $this->connectdb = new mysqli($this->server,$this->username,$this->password,$this->dbname);
        return $this->connectdb;
    }
	public function student_login_check($st_username,$st_password)
	{ 
		$st_login_check = "select  * from st_info where st_username = '$st_username' and st_password='$st_password'";
		$st_login_run = $this->connectdb->query($st_login_check);
		$st_login_num = $st_login_run->num_rows;
		return $st_login_num;
	}

	public function student_info_select($st_username)
	{
		$student_info_sel = "select * from st_info where st_username='$st_username'";
		$student_info_run = $this->connectdb->query($student_info_sel);
		return $student_info_run;
	}
	
	//////////// TimeTable retrieval ----------
	public function get_timetable($st_grade)
	{
		$st_timetable = "select * from table_name where st_grade='$st_grade'";
		$st_timetable_run = $this->connectdb->query($st_timetable);
		return $st_timetable_run;
	}
	////////////// FACULTY - banuka
	public function faculty_login_check($t_username,$t_password)
	{ 
		$t_login_check = "select  * from teacher_info where t_username = '$t_username' and t_pass='$t_password' and t_staff_type='Teacher'";
		$t_login_run = $this->connectdb->query($t_login_check);
		$t_login_num = $t_login_run->num_rows;
		return $t_login_num;
	}

	public function faculty_password_change($t_password_update,$t_username)
	{
		$faculty_password_update = "update teacher_info set t_pass='$t_password_update' where t_username='$t_username'";
		$faculty_password_update_run = $this->connectdb->query($faculty_password_update);
		return $faculty_password_update_run;
	}

	// attendence by faculty -banuka
	public function faculty_mark_attendence($tb_name, $t_username, $sesh_date, $sesh_info, $attendence_arr)
	{		
		$attendence_keys = "";
		$attendence_vals = "";
		foreach ($attendence_arr as $key => $val){
			$attendence_keys = $attendence_keys . ",`". $key ."`" ;
			$attendence_vals =  $attendence_vals .",'". $val . "'" ;
		}

		$mark_attendence = "insert into $tb_name(t_username,sesh_date,sesh_info $attendence_keys ) value ('$t_username','$sesh_date','$sesh_info'  $attendence_vals  )";
	//echo $mark_attendence; //debugging purpose only
	$mark_attendence_run = $this->connectdb->query($mark_attendence);
	//echo $this->connectdb -> error;
		return $mark_attendence_run;
		//INSERT INTO `at_g_1` (`sesh_id`, `t_username`, `sesh_date`, `sesh_datetime`, `sesh_info`, `10000000`, `10000001`, `10000007`) VALUES ('1', '1000', '2021-04-11', '2021-04-12 23:13:57', 'test2', '1', '0', '1');
	}

	/////////////////////////////// ADMINNNNNNNNNNNNNNNNN--------------------------
	
	public function meadmin_check($admin_username,$admin_password)
	{
		$meadin_login_select = "select * from meadmin where admin_username='$admin_username' AND admin_password='$admin_password'";
		$meadmin_login_run = $this->connectdb->query($meadin_login_select);
		$meadmin_login_num = $meadmin_login_run->num_rows;
		return $meadmin_login_num;
	}
	public function meadmin_username($adminname)
	{
		$meadmin_username_select = "select * from meadmin where admin_username='$adminname'";
		$meadmin_username_run = $this->connectdb->query($meadmin_username_select);
		return $meadmin_username_run;
	}
	
	//////////////////////////////////Teacher Info ////////////////////////////////
	// --- function used by admin-mod login & faculty-mod info collect
	public function teacher_info($adminname,$t_staff_type)
	{
		switch($t_staff_type)
		{
			case "Admin":
			$teacher_info_select = "select * from teacher_info where t_staff_type='$t_staff_type' AND t_username='$adminname'";
			break;
			case "Teacher":
			$teacher_info_select = "select * from teacher_info where t_staff_type='$t_staff_type' AND t_username='$adminname'";
			break;
			default :
				echo "no teacher found";
		}
		$teacher_info_select_run = $this->connectdb->query($teacher_info_select);
		return $teacher_info_select_run;
	}

	public function teacher_info_display_admin()
	{
		$teacher_info_admin = "select * from teacher_info where t_staff_type='Teacher'";
		$teacher_info_admin_run = $this->connectdb->query($teacher_info_admin);
		return $teacher_info_admin_run;
	}
	///// display teacher info in  student panel
	public function teacher_info_instudent($st_grade)
	{
		$teacher_info_instudent_select = "select * from subjects_info where grade='$st_grade'";
		$teacher_info_instudent_run = $this->connectdb->query($teacher_info_instudent_select);
		return $teacher_info_instudent_run;
		
	}
	////////////////////////End Teacher Info ------------//////////////////////
	
	///////////////////////// student password update //////////
	
	public function student_password_change($st_password_update,$st_username)
	{
		$student_password_update = "update st_info set st_password='$st_password_update' where st_username='$st_username'";
		$student_password_update_run = $this->connectdb->query($student_password_update);
		return $student_password_update_run;
	}
	
	///////////////////------- end student password update --------------//////////////
	



	//// ----- attendance marking code by banuka----///

	public function st_attendance($st_username)
	{
		$st_ip = getenv("REMOTE_ADDR"); //get ip address of visitor										
		date_default_timezone_set("Asia/Colombo");
		$at_iddateh = $st_username ."_".  date("Y-m-d_H");
		$at_date = date("Y-m-d");
		$at_time = date("H:i:s");
		$add_attendance = "insert into st_attendance(st_username,st_ip,at_iddateh,at_date,at_time) value('$st_username','$st_ip','$at_iddateh','$at_date','$at_time')";							
		$add_attendance_run = $this->connectdb->query($add_attendance);
		
		return $add_attendance_run;
		 
	}

	public function get_attendance($st_username)
	{
		$get_attendance_select = "select * from st_attendance where st_username='$st_username'";
		$get_attendance_run = $this->connectdb->query($get_attendance_select);
		return $get_attendance_run;
	}

	//// END attendance marking code ----///


	///////////////////-------- display subject in admin ----------------////////
	// public function subject_info()
	// {
		
	// 	$subject_info_admin = "select * from subjects_info";
	// 	$subject_info_admin_run = $this->connectdb->query($subject_info_admin);
	// 	return $subject_info_admin_run;
	// }
	
	////////////  edit teacher information ////////////////////
	
	public function edit_teacherid($teacher_id)
	{
		$edit_teacherid = "select * from teacher_info where t_id='$teacher_id'";
		$edit_teacherid_run = $this->connectdb->query($edit_teacherid);
		return $edit_teacherid_run;
	}
	///////////////// update teacher info from admin/////////////
	public function update_teacher_info($up_fullname,$up_address,$up_email,$up_dob,$up_contact,$up_gender,$teacher_id)
	{
		$update_teacher_info_select = "update teacher_info set t_fullname='$up_fullname',t_address='$up_address',t_email='$up_email',t_dob='$up_dob',t_contact='$up_contact',t_gender='$up_gender' where t_id='$teacher_id'";
		//echo $update_teacher_info_select; //for debugigng only
		$update_teacher_info_run = $this->connectdb->query($update_teacher_info_select);
		return $update_teacher_info_run;
	}
	
	////////// add new teacher form admin ////////////////////////
	public function add_teacher($add_t_fullname,$add_t_address,$add_t_email,$add_t_username,$add_t_pass,$add_t_dob,$add_t_contact,$add_t_staff,$add_t_gender)
	{
	$add_teacher = "insert into teacher_info(t_fullname,t_address,t_email,t_username,t_pass,t_dob,t_contact,t_staff_type,t_gender) value('$add_t_fullname','$add_t_address','$add_t_email','$add_t_username','$add_t_pass','$add_t_dob','$add_t_contact','$add_t_staff','$add_t_gender')";
	//echo $add_teacher; //debugging purpose only
	$add_teacher_run = $this->connectdb->query($add_teacher);
		return $add_teacher_run;
	}
	
	//////// delete teacher form admin //////////////////////
	public function delete_teacher($del_teacher)
	{
	$delete_teacher_info = " delete from teacher_info where t_id='$del_teacher'";
	$delete_teacher_info_run = $this->connectdb->query($delete_teacher_info);
	return $delete_teacher_info_run;
	}

	//////// delete student form admin -banuka //////////////////////
	public function delete_student($del_st)
	{
	$delete_st_info = " delete from st_info where st_username='$del_st'";
	$delete_st_info_run = $this->connectdb->query($delete_st_info);
	return $delete_st_info_run;
	}

	
	////////////////////// looping class from subject info table////////////////
	public function grade($grade)
	{
		$grade_select = "select class from sub_class_name";
		$grade_run = $this->connectdb->query($grade_select);
		return $grade_run;
	}
	
	///////////// display data from st_info select st-grade - REMOVE ///////////
	// public function grade_st_info($grade_st_data)
	// {
	// 	$grade_st_info_select = "select * from st_info where st_grade='$grade_st_data'";
	// 	$grade_st_info_run = $this->connectdb->query($grade_st_info_select);
	// 	return $grade_st_info_run;
	// }
	////////// student info display (by grade) by admin //////////////////////////
	public function student_info_display_admin($class_students_data)
	{
		$student_info_display_admin_select = "select * from st_info where st_grade='$class_students_data'";
		$student_info_display_admin_run = $this->connectdb->query($student_info_display_admin_select);
		return $student_info_display_admin_run;
	}
	////////// all student info display by admin - banuka //////////////////////////
	public function all_student_info_display_admin()
	{
		$student_info_display_admin_select = "select * from st_info";
		$student_info_display_admin_run = $this->connectdb->query($student_info_display_admin_select);
		return $student_info_display_admin_run;
	}


	/////////// add student from admin panel /////////////////////
	public function add_student($std_fullname,$std_username,$std_password,$std_grade,$std_roll,$std_dob,$std_address,$std_gender,$std_parent_contact)
	{
		$add_student_insert = "insert into st_info(st_fullname,st_username,st_password,st_grade,roll_no,st_dob,st_address,st_gender,st_parents_contact) value('$std_fullname','$std_username','$std_password','$std_grade','$std_roll','$std_dob','$std_address','$std_gender','$std_parent_contact')";
		//echo $add_student_insert; //debugging purpose only
		$add_student_run = $this->connectdb->query($add_student_insert);
		
		if($add_student_run ==true){
			//attendence module, table column adding -banuka
			$atten_tb = "at_g_" . $std_grade; //set tablename for grade
			$attendence_col_insert = "ALTER TABLE `$atten_tb` ADD `$std_username` TINYINT NOT NULL DEFAULT '2';";
			//echo $attendence_col_insert; //debugging purpose
			//$attendence_col_run = $this->connectdb->query($attendence_col_insert);
			if (! $this->connectdb->query($attendence_col_insert)) {
				echo("Error description: " . $this->connectdb -> error);
			}
		}
		return $add_student_run;
	}

	/////////// UPDATE student from admin panel - banuka /////////////////////
	public function update_student_adm($std_fullname,$std_username,$std_password,$std_grade,$std_roll,$std_dob,$std_address,$std_gender,$std_parent_contact)
	{
		$add_student_insert = "update st_info set st_fullname='$std_fullname', st_password='$std_password',st_grade='$std_grade', 
		roll_no='$std_roll', st_dob='$std_dob', st_address='$std_address', st_gender='$std_gender', st_parents_contact='$std_parent_contact' 
		where st_username='$std_username' ";
		//echo $add_student_insert; //debugging purpose only
		$add_student_run = $this->connectdb->query($add_student_insert);
		return $add_student_run;
	}
	
		
	
	///////////// General Information about website ///////////
	public function general_setting($web_name,$web_address,$web_phone1,$web_phone2,$web_email1,$web_email2,$web_start,$web_about)
	{
		$general_setting_insert = "insert into general_setting(website_name,website_address,website_phone1,website_phone2,website_email1,website_email2,website_start,web_about) value('$web_name','$web_address','$web_phone1','$web_phone2','$web_email1','$web_email2','$web_start','$web_about')";
		$general_setting_run = $this->connectdb->query($general_setting_insert);
		return $general_setting_run;
	}
	public function general_setting_check()
	{
		$general_setting_check = "select * from general_setting";
		$general_setting_run = $this->connectdb->query($general_setting_check);
		return $general_setting_run;
	}
	public function general_setting_update($upweb_name,$upweb_address,$upweb_phone1,$upweb_phone2,$upweb_email1,$upweb_email2,$upweb_start,$upweb_about)
	{
		$update_general_setting = "update general_setting set website_name='$upweb_name',website_address='$upweb_address',website_phone1='$upweb_phone1',website_phone2='$upweb_phone2',website_email1='$upweb_email1',website_email2='$upweb_email2',website_start='$upweb_start',web_about='$upweb_about'";
	 $update_general_run = $this->connectdb->query($update_general_setting);
		return $update_general_run;
	}
	public function meravi_add_table($Nepdev_table_Name,$Nepdev_student_name,$Nepdev_student_grade,$Nepdev_subject1,$Nepdev_subject2,$Nepdev_subject3,$Nepdev_subject4,$Nepdev_subject5,$Nepdev_subject6,$Nepdev_subject7,$Nepdev_subject8,$Nepdev_subject9,$Nepdev_subject10,$Nepdev_subject11)
	{
		$Meravi_database = "CREATE TABLE $Nepdev_table_Name(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,$Nepdev_student_name varchar(250) Null,$Nepdev_student_grade varchar(10) null,$Nepdev_subject1 varchar(250) null,$Nepdev_subject2 varchar(250) null,$Nepdev_subject3 varchar(250) null,$Nepdev_subject4 varchar(250) null,$Nepdev_subject5 varchar(250) null,$Nepdev_subject6 varchar(250) null,$Nepdev_subject7 varchar(250) null,$Nepdev_subject8 varchar(250) null,$Nepdev_subject9 varchar(250) null,$Nepdev_subject10 varchar(250) null,$Nepdev_subject11 varchar(250) null)";
		$Meravi_run = $this->connectdb->query($Meravi_database);
		return $Meravi_run;
	}
	public function Nepdev_Exam_Term($Nepdev_exam_term)
	{
		$Nepdev_Select = "SELECT * FROM exam_term where name='$Nepdev_exam_term'";
		$Nepdev_Run = $this->connectdb->query($Nepdev_Select);
		if($Nepdev_Run->num_rows>0)
		{
			echo "<script>alert('You Have ALready Added $Nepdev_exam_term');</script>";
		}
		else
		{
			$Nepdev_Add = "INSERT INTO exam_term(name) VALUES('$Nepdev_exam_term')";
			$Nedev_Add_Run = $this->connectdb->query($Nepdev_Add);
			if($Nedev_Add_Run==true)
			{
				echo "<script>alert('Success Added $Nepdev_exam_term');</script>";
				}
			}
			return 	$Nepdev_Run;
	}

	// assignment up faculty -banuka
	public function assi_up_faculty($t_username, $assi_deadline, $assi_subject, $assi_title, $assi_grade, $assi_location, $assi_size)
	{ 
		//$assi_add = "INSERT INTO `tblfiles` (`FileName`, `Location`) VALUES ('{$filename}','{$location}')";
		$assi_add = "INSERT INTO `fc_assignments` (`t_username`,`assi_deadline`,`assi_subject`,`assi_title`,`assi_grade`,`assi_location`,`assi_size`) VALUES ('{$t_username}','{$assi_deadline}','{$assi_subject}','{$assi_title}','{$assi_grade}','{$assi_location}','{$assi_size}')";
		$assi_run =  $this->connectdb->query($assi_add);
		//echo $assi_add; //for debugging only
		return $assi_run;
	}
	public function assi_rem_faculty($assi_id){
		$assi_rem = "UPDATE `fc_assignments` SET `assi_grade`='0',`assi_subject`='-',`assi_location`='Uploaded/Removed.png', `assi_size`='0' WHERE `assi_id`='$assi_id'";
		//echo $assi_rem; //debugging only
		$assi_run =  $this->connectdb->query($assi_rem);
		return $assi_run;
	}
	public function assi_list_faculty($t_username)
	{ 
		$assi_get = "SELECT * FROM `fc_assignments` WHERE t_username='$t_username'";
		$assi_run =  $this->connectdb->query($assi_get);
		return $assi_run;
	}
	public function assi_list_grade($st_grade)
	{ 
		$assi_get = "SELECT * FROM `fc_assignments` WHERE assi_grade='$st_grade'";
		$assi_run =  $this->connectdb->query($assi_get);
		return $assi_run;
	}
	public function assi_list_subject($st_grade,$assi_subject)
	{ 
		$assi_get = "SELECT * FROM `fc_assignments` WHERE assi_grade='$st_grade' AND assi_subject='$assi_subject'";
		$assi_run =  $this->connectdb->query($assi_get);
		return $assi_run;
	}
	public function assi_by_id($assi_id)
	{
		$assi_get = "SELECT * FROM `fc_assignments` WHERE assi_id='$assi_id'";
		$assi_run =  $this->connectdb->query($assi_get);
		return $assi_run;
	}
	public function assi_sub_student($assi_id, $st_username, $sub_location, $sub_size)
	{ 
		//UPSERT - allow reupload of assigbments & update record accordingly
		//$assi_add = "INSERT INTO `st_submissions` (`assi_id`,`st_username`,`sub_location`,`sub_size`) VALUES ('{$assi_id}','{$st_username}','{$sub_location}','{$sub_size}')";
		$assi_add = "INSERT INTO `st_submissions` (`assi_id`,`st_username`,`sub_location`,`sub_size`) 
		VALUES ('{$assi_id}','{$st_username}','{$sub_location}','{$sub_size}')
		ON DUPLICATE KEY UPDATE 
		`sub_location`='$sub_location', `sub_size`='$sub_size'";
		
		$assi_run =  $this->connectdb->query($assi_add);
		//echo $assi_add; //for debugging only
		//echo $this->connectdb -> error;
		return $assi_run;
	}
	
	//additional functions for reusability -banuka
	//php function that calls a javascript - script that display "alert"
	//$ravi->alertFunc("Alert");
	function alertFunc($msg){
	echo "<script type='text/javascript'>alert('$msg');</script>";
 	}

	// if($mark_attendence_done==true){
    //     $ravi->alert_success("Attendence Marked!");
    // }else{
    //     $ravi->alert_danger($ravi->connectdb->error);
    // }
  
	//function to call an alert using bootstrap
	//$ravi->alert_danger("ERROR");
	function alert_danger($msg){
		echo "<div class='row'><div class='col-md-1'></div>
		<div class='col-md-10 alert alert-danger alert-dismissible'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>Close &times;</a>
		<strong>ERROR! </strong>$msg
		</div>	</div>";
	}
	
	//$ravi->alert_success("Success");
	function alert_success($msg){
		echo "<div class='row'><div class='col-md-1'></div>
		<div class='col-md-10 alert alert-success alert-dismissible'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>Close &times;</a>
		<strong>SUCCESS! </strong>$msg
		</div>	</div>";
	}



	}
$ravi = new project2;
?>