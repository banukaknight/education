	<div class="outter-wp">
	    <!--sub-heard-part-->
	    <div class="sub-heard-part">
	        <ol class="breadcrumb m-b-0">
	            <li><a href="home.php">Home</a></li>
	            <li class="active"><?php if(isset($_GET['ravi'])){ echo strtoupper($page=$_GET['ravi']); } ?></li>
	        </ol>
	    </div>
	    <!--//sub-heard-part-->
	    <div class="graph-visual tables-main">
	        <h2 class="inner-tittle">DISPLAY STUDENT INFORMATION</h2>


	        <div class=" col-md-6">
	            <form method="post">

	                <label class="form-label">Select Grade:</label>
	                <select name="std_grade" class="form-select" required>
	                    <?php
						
						foreach($ravi->gradelist as $g){
						?>
	                    <option value="<?php echo $g; ?>"><?php echo $g; ?></option>
	                    <?php } ?>
						
	                </select>
	                <input type="submit" name="students_info" class="btn" value="Display Class Students">
	                <input type="submit" name="all_st" class="btn btn-info" value="Display All Students">

	            </form>
	        </div>
	        <div class="clearfix"> </div>

	        <?php
										
				if(isset($_POST['students_info']))
				{
					$std_grade = $_POST['std_grade'];
				$student_dis_admin=	$ravi->student_info_display_admin($std_grade);
					$s_sn = 1;
			?>
	        <div class="graph">

	            <h1>Grade - <?php echo $std_grade ?> : Students' Information</h1>
	            <div class="tables">
	                <table class=" table table-bordered table-sm table-responsive" id="stinfo">

	                    <thead>
	                        <tr>
	                            <th>#</th>
	                            <th>Gender</th>
	                            <th>Full Name</th>
	                            <th>DOB</th>
	                            <th>Grade</th>
	                            <th>Roll No</th>
	                            <th>Contact</th>
	                            <th>Delete Record</th>
	                        </tr>
	                    </thead>
	                    <tbody>

	                        <?php 
								if($student_dis_admin->num_rows>0){
							while($student_info_admin =$student_dis_admin->fetch_assoc())	{ ?>

	                        <tr>
	                            <td><?php echo $s_sn; ?></td>
	                            <td>
	                                <?php
										$st_gender = $student_info_admin['st_gender'];
										if($st_gender == 'Male'){
											echo "<img class='gendpic' src='images/bk/picm.png'> ";
										}else if($st_gender == 'Female'){
											echo "<img class='gendpic' src='images/bk/picf.png'> ";
										}else{
											echo "<img class='gendpic' src='images/bk/pice.png'> ";
										}
										echo $st_gender;
										
									?>
	                            </td>
	                            <td><?php echo $student_info_admin['st_fullname']; ?></td>
	                            <td><?php echo $student_info_admin['st_dob']; ?></td>
	                            <td><?php echo $student_info_admin['st_grade'] ?></td>
	                            <td><?php echo $student_info_admin['roll_no'] ?></td>
	                            <td><?php echo $student_info_admin['st_parents_contact']; ?></td>
	                            <td> <a href=""></a> Delete: <?php echo $student_info_admin['st_username']; ?></td>
	                        </tr>
	                        <?php $s_sn++; }} else {
										 ?>
	                        <td colspan="8">No Student information in selected class
	                        </td>
	                        <?php 
										} }
										elseif(isset($_POST['all_st']) ) 
									{
										//all_student_info_display_admin
										$student_dis_admin=	$ravi->all_student_info_display_admin();
											$s_sn = 1;
									?>
	                        <div class="graph">
	                            <h1>All Student Information</h1>
	                            <div class="tables" style="width:auto; overflow-x:auto;">

	                                <table class=" table table-bordered table-sm" id="stinfo">

	                                    <thead>
	                                        <tr>
	                                            <th>#</th>
	                                            <th>Gender</th>
	                                            <th>Full Name</th>
	                                            <th>DOB</th>
	                                            <th>Grade</th>
	                                            <th>Roll No</th>
	                                            <th>Contact</th>
	                                            <th>Delete Record</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>

	                                        <?php 
														if($student_dis_admin->num_rows>0){
													while($student_info_admin =$student_dis_admin->fetch_assoc())	{ ?>

	                                        <tr>
	                                            <td><?php echo $s_sn; ?></td>
	                                            <td>
	                                                <?php
																$st_gender = $student_info_admin['st_gender'];
																if($st_gender == 'Male'){
																	echo "<img class='gendpic' src='images/bk/picm.png'> ";
																}else if($st_gender == 'Female'){
																	echo "<img class='gendpic' src='images/bk/picf.png'> ";
																}else{
																	echo "<img class='gendpic' src='images/bk/pice.png'> ";
																}
																echo $st_gender;
																
															?>
	                                            </td>
	                                            <td><?php echo $student_info_admin['st_fullname']; ?></td>
	                                            <td><?php echo $student_info_admin['st_dob']; ?></td>
	                                            <td><?php echo $student_info_admin['st_grade'] ?></td>
	                                            <td><?php echo $student_info_admin['roll_no'] ?></td>
	                                            <td><?php echo $student_info_admin['st_parents_contact']; ?></td>
	                                            <td> <a href=""></a> Delete:
	                                                <?php echo $student_info_admin['st_username']; ?></td>
	                                        </tr>
	                                        <?php $s_sn++; }} else {
																 ?>
	                                        <td colspan="8">No Student information in selected class
	                                        </td>
	                                        <?php 
																} }else{
																	?>
	                                        <h3>Select a Grade to display Student Info</h3>
	                                        <?php } ?>
	                                    </tbody>

	                                </table>
	                            </div>
	                        </div>


	            </div>
	            <!--//graph-visual-->
	        </div>