<?php
//code for added layer of security, to prevent direct access to module -banuka
 if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    /* choose the appropriate page to redirect users */
    die( header( 'location: ../' ) );
}
?>

<?php 
class project2	
{
	public $username = "username"; //id16616954_username
	public $password = "password"; //Password123#

	// public $username = "root";
	// public $password = "";

	public $server = "localhost";
	public $dbname = "project2"; // id16616954_project2
	public $connectdb;

	//////////////////	Global variables for use	//////////////////
	public $gradelist = array(1,2,3,4,5,6,7,8,9,10,11); //list of grades in school
	public $stafflist = array("Teacher"); //list of faculty types - new admins not allowed
	public $subjectlist = array("Maths","Science", "English", "Tamil", "Sinhala", "Buddhism", "Catholicism", "Christianity", "Ismailism");
	public $audiencelist = array("Public","Faculty","Student"); //for news visibility
	
	private $salt = 'XyZzy12*_'; //salt for hashing password

	//////////////////	Making Database connection	//////////////////
	function __construct()
	{
		$this->connectdb = new mysqli($this->server,$this->username,$this->password,$this->dbname);
		if($this->connectdb->connect_error)
		{
			die("connection failed");
		}
	}
	//----------------	Re-check database connection before Admin Login	--
    public function hackme()
    {
        $this->connectdb = new mysqli($this->server,$this->username,$this->password,$this->dbname);
        return $this->connectdb;
    }


	//////////////////	Student Module	//////////////////
	//----------------	STUDENT - Login	--
	public function student_login_check($st_username,$st_password)
	{
		$st_login_check = "SELECT * FROM st_info WHERE st_username = '$st_username' and st_password='$st_password'";
		$st_login_run = $this->connectdb->query($st_login_check);
		$st_login_num = $st_login_run->num_rows;
		return $st_login_num;
	}
	//----------------	STUDENT - Select Student info	--
	public function student_info_select($st_username)
	{
		$sql = "SELECT * FROM st_info WHERE st_username = ?";
		$stmt = $this->connectdb->prepare($sql);
		$stmt->bind_param("s", $st_username); //s for string
		$stmt->execute();
		$student_info_run = $stmt->get_result();
		return $student_info_run;
	}
	//----------------	STUDENT - Password change	--
	public function student_password_change($st_password_update,$st_username)
	{
		$student_password_update = "UPDATE st_info set st_password='$st_password_update' WHERE st_username='$st_username'";
		$student_password_update_run = $this->connectdb->query($student_password_update);
		return $student_password_update_run;
	}


	//////////////////	FACULTY Module	//////////////////
	public function faculty_login_check($t_username,$t_password)
	{ 
		$t_login_check = "SELECT * from teacher_info WHERE t_username = '$t_username' and t_pass='$t_password' and t_staff_type='Teacher'";
		$t_login_run = $this->connectdb->query($t_login_check);
		$t_login_num = $t_login_run->num_rows;
		return $t_login_num;
	}
	//----------------	FACULTY - Passowrd change	--
	public function faculty_password_change($t_password_update,$t_username)
	{
		$faculty_password_update = "UPDATE teacher_info set t_pass='$t_password_update' WHERE t_username='$t_username'";
		$faculty_password_update_run = $this->connectdb->query($faculty_password_update);
		return $faculty_password_update_run;
	}
	//----------------	Admin & Faculty - Select Info	--
	public function teacher_info($adminname,$t_staff_type)
	{
		switch($t_staff_type)
		{
			case "Admin":
				$teacher_info_select = "SELECT * FROM teacher_info WHERE t_staff_type='$t_staff_type' AND t_username='$adminname'";
				break;
			case "Teacher":
				$teacher_info_select = "SELECT * FROM teacher_info WHERE t_staff_type='$t_staff_type' AND t_username='$adminname'";
				break;
			default :
				echo "no teacher found";
		}
		$teacher_info_select_run = $this->connectdb->query($teacher_info_select);
		return $teacher_info_select_run;
	}


	//////////////////	Admin Module	//////////////////
	//----------------	Admin Login	--
	public function meadmin_check($admin_username,$admin_password)
	{
		$admin_password_hashed = hash('md5', $this->salt.$admin_password); //hash md5 used for password
		//echo $admin_password_hashed; //debug only
		$meadin_login_select = "SELECT * FROM meadmin WHERE admin_username='$admin_username' AND admin_password='$admin_password_hashed'";
		$meadmin_login_run = $this->connectdb->query($meadin_login_select);
		$meadmin_login_num = $meadmin_login_run->num_rows;
		return $meadmin_login_num;
	}
	public function meadmin_username($adminname)
	{
		$meadmin_username_select = "SELECT * FROM meadmin WHERE admin_username='$adminname'";
		$meadmin_username_run = $this->connectdb->query($meadmin_username_select);
		return $meadmin_username_run;
	}
	
	
	//////////////////	ADMIN - CRUD Operations	of STUDENTS //////////////////
	//----------------	ADMIN - Add New Student	--
	public function add_student($std_fullname,$std_username,$std_password,$std_grade,$std_roll,$std_dob,$std_address,$std_gender,$std_parent_contact)
	{
		$add_student_insert = "INSERT INTO st_info(st_fullname,st_username,st_password,st_grade,roll_no,st_dob,st_address,st_gender,st_parents_contact) value('$std_fullname','$std_username','$std_password','$std_grade','$std_roll','$std_dob','$std_address','$std_gender','$std_parent_contact')";
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
	//----------------	ADMIN - View Student Info by grade	--
	public function student_info_display_admin($class_students_data)
	{
		$student_info_display_admin_select = "SELECT * FROM st_info WHERE st_grade='$class_students_data'";
		$student_info_display_admin_run = $this->connectdb->query($student_info_display_admin_select);
		return $student_info_display_admin_run;
	}
	//----------------	ADMIN - View Student Info All	--
	public function all_student_info_display_admin()
	{
		$student_info_display_admin_select = "SELECT * FROM st_info";
		$student_info_display_admin_run = $this->connectdb->query($student_info_display_admin_select);
		return $student_info_display_admin_run;
	}
	//----------------	ADMIN - Update Student Info	--
	public function update_student_adm($std_fullname,$std_username,$std_password,$std_roll,$std_dob,$std_address,$std_gender,$std_parent_contact)
	{
		$add_student_insert = "UPDATE st_info SET st_fullname='$std_fullname', st_password='$std_password', 
		roll_no='$std_roll', st_dob='$std_dob', st_address='$std_address', st_gender='$std_gender', st_parents_contact='$std_parent_contact' 
		where st_username='$std_username' ";
		//echo $add_student_insert; //debugging purpose only
		$add_student_run = $this->connectdb->query($add_student_insert);
		return $add_student_run;
	}
	//----------------	ADMIN - Delete Student	--
	public function delete_student($del_st)
	{
	$delete_st_info = "DELETE FROM st_info WHERE st_username='$del_st'";
	$delete_st_info_run = $this->connectdb->query($delete_st_info);
	return $delete_st_info_run;
	}	
	

	//////////////////	ADMIN - CRUD Operations	of FACULTY //////////////////
	//----------------	ADMIN - Add New Faculty	--
	public function add_teacher($add_t_fullname,$add_t_address,$add_t_email,$add_t_username,$add_t_pass,$add_t_dob,$add_t_contact,$add_t_staff,$add_t_gender)
	{
	$add_teacher = "INSERT INTO teacher_info(t_fullname,t_address,t_email,t_username,t_pass,t_dob,t_contact,t_staff_type,t_gender) value('$add_t_fullname','$add_t_address','$add_t_email','$add_t_username','$add_t_pass','$add_t_dob','$add_t_contact','$add_t_staff','$add_t_gender')";
	//echo $add_teacher; //debugging purpose only
	$add_teacher_run = $this->connectdb->query($add_teacher);
		return $add_teacher_run;
	}
	//----------------	ADMIN - View Faculty info	--
	public function teacher_info_display_admin()
	{
		$teacher_info_admin = "SELECT * FROM teacher_info WHERE t_staff_type='Teacher'";
		$teacher_info_admin_run = $this->connectdb->query($teacher_info_admin);
		return $teacher_info_admin_run;
	}
	//----------------	ADMIN - Update Faculty info	--
	public function edit_teacherid($teacher_id)
	{
		$edit_teacherid = "SELECT * FROM teacher_info WHERE t_id='$teacher_id'";
		$edit_teacherid_run = $this->connectdb->query($edit_teacherid);
		return $edit_teacherid_run;
	}
	public function update_teacher_info($up_fullname,$up_address,$up_email,$up_dob,$up_contact,$up_gender,$teacher_id)
	{
		$update_teacher_info_select = "UPDATE teacher_info SET t_fullname='$up_fullname',t_address='$up_address',t_email='$up_email',t_dob='$up_dob',t_contact='$up_contact',t_gender='$up_gender' WHERE t_id='$teacher_id'";
		//echo $update_teacher_info_select; //for debugigng only
		$update_teacher_info_run = $this->connectdb->query($update_teacher_info_select);
		return $update_teacher_info_run;
	}
	//----------------	ADMIN - Delete Faculty	--
	public function delete_teacher($del_teacher)
	{
	$delete_teacher_info = "DELETE FROM teacher_info WHERE t_id='$del_teacher'";
	$delete_teacher_info_run = $this->connectdb->query($delete_teacher_info);
	return $delete_teacher_info_run;
	}


	//----------------	ADMIN - Allocate Faculty Subject	--
	public function allocate_teacher($t_username,$sub_name,$st_grade){
		$alloc_teacher = "INSERT INTO sub_info(t_username,sub_name,st_grade) VALUES('$t_username','$sub_name','$st_grade')";
		$alloc_teacher_run = $this->connectdb->query($alloc_teacher);
		return $alloc_teacher_run;
	}
	//----------------	Student & Faculty - View Allocated Subjects	--
	public function get_allocations($t_username="Student",$st_grade="All"){
		$allocations = "SELECT * FROM sub_info
		INNER JOIN teacher_info ON sub_info.t_username = teacher_info.t_username";
		if($t_username != "Student"){
			$allocations = "SELECT * FROM sub_info WHERE t_username = '$t_username'";
		}elseif($st_grade != "All"){
			$allocations = "SELECT * FROM sub_info 
			INNER JOIN teacher_info ON sub_info.t_username = teacher_info.t_username
			WHERE sub_info.st_grade = '$st_grade'";
		}
		$allocations_run = $this->connectdb->query($allocations);
		return $allocations_run;
	}
	

	//////////////////	General Info on website - ADMIN	//////////////////
	public function general_setting($web_name,$web_address,$web_phone1,$web_phone2,$web_email1,$web_email2,$web_start,$web_about)
	{
		$general_setting_insert = "INSERT INTO general_setting(website_name,website_address,website_phone1,website_phone2,website_email1,website_email2,website_start,web_about) values('$web_name','$web_address','$web_phone1','$web_phone2','$web_email1','$web_email2','$web_start','$web_about')";
		$general_setting_run = $this->connectdb->query($general_setting_insert);
		return $general_setting_run;
	}
	public function general_setting_check()
	{
		$general_setting_check = "SELECT * FROM general_setting";
		$general_setting_run = $this->connectdb->query($general_setting_check);
		return $general_setting_run;
	}
	public function general_setting_update($upweb_name,$upweb_address,$upweb_phone1,$upweb_phone2,$upweb_email1,$upweb_email2,$upweb_start,$upweb_about)
	{
		$update_general_setting = "UPDATE general_setting SET website_name='$upweb_name',website_address='$upweb_address',website_phone1='$upweb_phone1',website_phone2='$upweb_phone2',website_email1='$upweb_email1',website_email2='$upweb_email2',website_start='$upweb_start',web_about='$upweb_about'";
	 $update_general_run = $this->connectdb->query($update_general_setting);
		return $update_general_run;
	}
	

	//////////////////	Contact-Us Module	//////////////////
	//----------------	Contact-Us submit data - General	--
	public function set_contact_us($cn_name,$cn_email,$cn_phone,$cn_subject,$cn_msg){
		$cn_ip = getenv("REMOTE_ADDR"); //get ip address of visitor		
		$add_contact_us = "INSERT INTO contact_us_data(cn_name,cn_email,cn_phone,cn_subject,cn_msg,cn_ip) 
		VALUES('$cn_name','$cn_email','$cn_phone','$cn_subject','$cn_msg','$cn_ip') ";
		//echo $add_contact_us; //debug only
		$add_contact_us_run = $this->connectdb->query($add_contact_us);
		return $add_contact_us_run;
	}
	//----------------	Contact-Us View Data - Admin	--
	public function get_contact_us(){
		$view_contact_us = "SELECT * FROM contact_us_data";
		$view_contact_us_run = $this->connectdb->query($view_contact_us);
		return $view_contact_us_run;
	}


	//////////////////	Assignment Module	//////////////////
	//----------------	Assignment Distribution - FACULTY	--
	public function assi_up_faculty($t_username, $assi_deadline, $assi_subject, $assi_title, $assi_grade, $assi_location, $assi_size)
	{ 
		//$assi_add = "INSERT INTO `tblfiles` (`FileName`, `Location`) VALUES ('{$filename}','{$location}')";
		$assi_add = "INSERT INTO `fc_assignments` (`t_username`,`assi_deadline`,`assi_subject`,`assi_title`,`assi_grade`,`assi_location`,`assi_size`) VALUES ('{$t_username}','{$assi_deadline}','{$assi_subject}','{$assi_title}','{$assi_grade}','{$assi_location}','{$assi_size}')";
		$assi_run =  $this->connectdb->query($assi_add);
		//echo $assi_add; //for debugging only
		return $assi_run;
	}
	//----------------	Assignment Deletion - FACULTY	--
	public function assi_rem_faculty($assi_id){
		$assi_rem = "UPDATE `fc_assignments` SET `assi_grade`='0',`assi_subject`='-',`assi_location`='Uploaded/Removed.png', `assi_size`='0' WHERE `assi_id`='$assi_id'";
		//echo $assi_rem; //debugging only
		$assi_run =  $this->connectdb->query($assi_rem);
		return $assi_run;
	}
	//----------------	Assignment Listing - FACULTY	--
	public function assi_list_faculty($t_username)
	{ 
		$assi_get = "SELECT * FROM `fc_assignments` WHERE t_username='$t_username'";
		$assi_run =  $this->connectdb->query($assi_get);
		return $assi_run;
	}
	//----------------	Assignment List by grade - STUDENT	--
	public function assi_list_grade($st_grade)
	{ 
		$assi_get = "SELECT * FROM `fc_assignments` WHERE assi_grade='$st_grade' ORDER BY assi_id DESC";
		$assi_run =  $this->connectdb->query($assi_get);
		return $assi_run;
	}
	//----------------	Assignment List by Subject - STUDENT	--
	public function assi_list_subject($st_grade,$assi_subject)
	{ 
		$assi_get = "SELECT * FROM `fc_assignments` WHERE assi_grade='$st_grade' AND assi_subject='$assi_subject' ORDER BY assi_id DESC";
		$assi_run =  $this->connectdb->query($assi_get);
		return $assi_run;
	}
	//----------------	Assignment by ID - FACULTY	--
	public function fc_assi_by_id($assi_id)
	{
		$assi_get = "SELECT * FROM `fc_assignments` WHERE assi_id='$assi_id'";
		$assi_run =  $this->connectdb->query($assi_get);
		return $assi_run;
	}
	//----------------	Assignment Solution Submission - STUDENT	--
	public function assi_sub_student($assi_id, $st_username, $sub_location, $sub_size)
	{ 
		//UPSERT - allow reupload of assigbments & update record accordingly
		$assi_add = "INSERT INTO `st_submissions` (`assi_id`,`st_username`,`sub_location`,`sub_size`) 
		VALUES ('{$assi_id}','{$st_username}','{$sub_location}','{$sub_size}')
		ON DUPLICATE KEY UPDATE 
		`sub_location`='$sub_location', `sub_size`='$sub_size'";
		$assi_run =  $this->connectdb->query($assi_add);
		//echo $assi_add; //for debugging only
		//echo $this->connectdb -> error;
		return $assi_run;
	}
	//----------------	Submissions Listing inner-join - FACULTY	--
	public function fc_sub_by_fcid($t_username){
		$sub_get = "SELECT * FROM st_submissions
		INNER JOIN fc_assignments ON st_submissions.assi_id = fc_assignments.assi_id WHERE fc_assignments.t_username=$t_username ORDER BY `st_submissions`.`sub_id` ASC";
		//echo $sub_get; //debugging only
		$sub_run =  $this->connectdb->query($sub_get);
		return $sub_run;
	}
	//----------------	Submissions Listing inner-join - STUDENT	--
	public function st_sub_by_stid($st_username){
		$sub_get = "SELECT * FROM st_submissions
		INNER JOIN fc_assignments ON st_submissions.assi_id = fc_assignments.assi_id WHERE st_submissions.st_username=$st_username ORDER BY `st_submissions`.`sub_id` ASC";
		//echo $sub_get; //debugging only
		$sub_run =  $this->connectdb->query($sub_get);
		return $sub_run;
	}
	//----------------	Submissions View by ID - FACULTY	--
	public function fc_sub_by_assiid($assi_id){
		$assi_get = "SELECT * FROM `st_submissions` WHERE assi_id='$assi_id'";
		$assi_run =  $this->connectdb->query($assi_get);
		return $assi_run;
	}
	//----------------	Submissions Marking - FACULTY	--
	public function fc_evaluate_sub($sub_id,$initial_marks,$final_marks,$fc_response){
		$eval_sub = "UPDATE `st_submissions` SET `initial_marks`='$initial_marks',`final_marks`='$final_marks',`fc_response`='$fc_response' WHERE `sub_id`='$sub_id';";
		//echo $eval_sub; //debugging only
		$eval_run =  $this->connectdb->query($eval_sub);
		return $eval_run;
	}


	//////////////////	Scrutiny Module	//////////////////
	//----------------	Scrutiny Request - STUDENT	--
	public function st_scrutiny_sub($sub_id,$scrutiny_req){
		$eval_sub = "UPDATE `st_submissions` SET `scrutiny_req`='$scrutiny_req' WHERE `sub_id`='$sub_id';";
		//echo $eval_sub; //debugging only
		$eval_run =  $this->connectdb->query($eval_sub);
		return $eval_run;
	}
	//----------------	Scrutiny Response - FACULTY	--
	public function fc_scrutiny_sub($sub_id,$final_marks,$fc_response){
		$eval_sub = "UPDATE `st_submissions` SET `final_marks`='$final_marks',`fc_response`='$fc_response' WHERE `sub_id`='$sub_id';";
		//echo $eval_sub; //debugging only
		$eval_run =  $this->connectdb->query($eval_sub);
		return $eval_run;
	}


	//////////////////	Announcements Module	//////////////////
	//----------------	Announcement Distribution - ADMIN & FACULTY	--
	public function add_news($n_head,$n_shead,$n_details,$n_image,$n_audience,$n_author){
		$add_news = "INSERT INTO news_data (n_head,n_shead,n_details,n_image,n_audience,n_author) 
		VALUES ('$n_head','$n_shead','$n_details','$n_image','$n_audience','$n_author')";
		$add_news_run = $this->connectdb->query($add_news);
		//echo $add_news; //debug only
		return $add_news_run;
	}
	//----------------	Announcements Access - ANY	--
	public function get_news($user){
		switch($user){
			case 'Student':
				$get_news = "SELECT * FROM news_data WHERE n_audience='Student' OR n_audience='Public' ORDER BY n_id DESC LIMIT 8";
				break;
			case 'Faculty':
				$get_news = "SELECT * FROM news_data WHERE n_audience='Faculty' OR n_audience='Public' ORDER BY n_id DESC LIMIT 8";
				break;
			case 'Public':
				$get_news = "SELECT * FROM news_data WHERE n_audience='Public' ORDER BY n_id DESC LIMIT 3";
				break;
			case 'Admin':
				$get_news = "SELECT * FROM news_data ORDER BY n_id DESC LIMIT 8";
				break;
			default:
				$get_news = "SELECT * FROM news_data WHERE n_audience='Public' ORDER BY n_id DESC LIMIT 8";
				break;
		}
		$get_news_run = $this->connectdb->query($get_news);
		return $get_news_run;
	}


	//////////////////	Attendence Module	//////////////////
	//----------------	Attendence Marking - Faculty	--
	public function faculty_mark_attendence($tb_name, $t_username, $sesh_date, $sesh_info, $attendence_arr)
	{		
		$attendence_keys = "";
		$attendence_vals = "";
		foreach ($attendence_arr as $key => $val){
			$attendence_keys = $attendence_keys . ",`". $key ."`" ;
			$attendence_vals =  $attendence_vals .",'". $val . "'" ;
		}
		$mark_attendence = "INSERT INTO $tb_name(t_username,sesh_date,sesh_info $attendence_keys ) value ('$t_username','$sesh_date','$sesh_info'  $attendence_vals  )";
		//echo $mark_attendence; //debugging purpose only
		$mark_attendence_run = $this->connectdb->query($mark_attendence);
		//echo $this->connectdb -> error;
		return $mark_attendence_run;
		//INSERT INTO `at_g_1` (`sesh_id`, `t_username`, `sesh_date`, `sesh_datetime`, `sesh_info`, `10000000`, `10000001`, `10000007`) VALUES ('1', '1000', '2021-04-11', '2021-04-12 23:13:57', 'test2', '1', '0', '1');
	}
	//----------------	Attendence View - Student	--
	public function st_view_attendence($st_atten_file,$st_username)
	{
		$view_attendence = "SELECT `sesh_id`, `t_username`, `sesh_date`, `sesh_datetime`, `sesh_info`, `$st_username` FROM `$st_atten_file` WHERE `$st_username` <> 2 ";
		//echo $view_attendence; //debug only
		$view_attendence_run = $this->connectdb->query($view_attendence);
		return $view_attendence_run;
	}
	//----------------	Attendence View - Faculty	--
	public function fc_view_attendence($st_atten_file,$t_username)
	{
		$view_attendence = "SELECT * FROM `$st_atten_file` WHERE `t_username` = $t_username ";
		//echo $view_attendence; //debug only
		$view_attendence_run = $this->connectdb->query($view_attendence);
		return $view_attendence_run;
	}
	//----------------	Attendence st_id columns - Faculty	--
	public function fc_view_attendence_cols($st_atten_file)
	{
		$view_cols = "SELECT COLUMN_NAME
		FROM INFORMATION_SCHEMA.COLUMNS
		WHERE TABLE_NAME = '$st_atten_file'
		ORDER BY ORDINAL_POSITION";
		$view_cols_run = $this->connectdb->query($view_cols);
		return $view_cols_run;
	}


	//////////////////	Text-Books Module	//////////////////
	//----------------	Text-Books Distribution - ADMIN	--
	public function add_textbook($b_grade,$b_subject,$b_url){
		$add_book = "INSERT INTO text_books(b_grade,b_subject,b_url) 
		VALUES ('$b_grade','$b_subject','$b_url')";
		$add_book_run = $this->connectdb->query($add_book);
		return $add_book_run;
	}
	//----------------	Text-Books View - STUDENT & FACULTY	--
	public function get_textbooks($b_grade="All"){
		$get_books = "SELECT * FROM text_books ORDER BY b_grade";
		if($b_grade!="All"){
			$get_books = "SELECT * FROM text_books WHERE b_grade='$b_grade'";
		}
		$get_books_run = $this->connectdb->query($get_books);
		return $get_books_run;
	}


	//////////////////	Timetable Module - STUDENT	//////////////////
	public function get_timetable($st_grade)
	{
		$st_timetable = "SELECT * FROM timetables WHERE st_grade='$st_grade' LIMIT 9";
		$st_timetable_run = $this->connectdb->query($st_timetable);
		return $st_timetable_run;
	}


	// //----------------------------------------
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
$ravi = new project2; //object of class is created.
?>