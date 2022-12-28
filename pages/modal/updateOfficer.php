            <div class="modal fade" id="modal-lg<?php echo $i;?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"> <i class="nav-icon fas fa-edit"></i> Update Form</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <div class="row">
            <div class="col-md-12">
            <form action="../../actions/actions.php?f=update_officer" method="POST" autocomplete="off"> 
            <input type='hidden' name='id' value='<?php echo $_SESSION['u_id'];?>'>      
            <input type='hidden' name='s_id' value='<?php echo $i;?>'>      
                  <div class="form-group">
                  <label>Student ID Number</label>
                    <input value="<?php echo $DBQuery->get_data('id_num',$i);?>" name="u_id" required type="number" class="form-control" id="" placeholder="Enter ID Number">
                </div>
                </div></br>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input value="<?php echo $DBQuery->get_data('name',$i);?>"  name="fname" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
                </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Middle Name</label>
                    <input value="<?php echo $DBQuery->get_data('mid',$i);?>" name="mname" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Middle Name">
                  </div>
                  </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input value="<?php echo $DBQuery->get_data('last',$i);?>" name="lname" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
                  </div>

                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label>Grade Level</label>
                  <select name="glevel" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <?php
                      $currentGL=$DBQuery->get_data('grade',$i);
                      $g_data=$DBQuery->gradeLevel();
                      while($g_row=$g_data->fetch_assoc()):
                        $gl=$g_row['gradelevel'];
                        if($gl == $currentGL)
                        echo"<option selected>$gl</option>";
                        else
                        echo"<option>$gl</option>";
                      endwhile;
                    ?>
                  </select>
                </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label>Section</label>
                  <select name="section" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                  <?php
                      $currentSec=$DBQuery->get_data('section',$i);
                      $sec_data=$DBQuery->section();
                      while($sec_row=$sec_data->fetch_assoc()):
                        $sec=$sec_row['section'];
                        if($sec == $currentSec)
                        echo"<option selected>$sec</option>";
                        else
                        echo"<option>$sec</option>";
                      endwhile;
                    ?>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                  <label>Age</label>
                    <input value="<?php echo $DBQuery->get_data('age',$i);?>" required name="age" type="number" class="form-control" id="" placeholder="Enter Age">
                </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                  <label>Gender</label>
                  <select required name="gender" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <?php
                        $currentGen=$DBQuery->get_data('gender',$i);
                        if($currentGen == 'Male'){
                          echo"<option selected>Male</option>";
                          echo"<option>Female</option>";
                        }
                        else {
                          echo"<option selected>Female</option>";
                          echo"<option>Male</option>";
                        } 
                        
                    ?>
                  </select>
                </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                  <label>Mobile Number</label>
                    <input value="<?php echo $DBQuery->get_data('cpnum',$i);?>" name="u_cpnum" required type="number" class="form-control" id="" placeholder="Enter Mobile Number">
                </div>
                </div>
				
				
                <div class="col-md-4">
                  <div class="form-group">
                  <label>Email Address</label>
                    <input value="<?php echo $DBQuery->get_data('email',$i);?>" required name="u_email" type="email" class="form-control" id="" placeholder="Enter Email Address">
                </div>
                </div>
               
                </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                  <label>Position</label>
                  <select name="position" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                  <?php
                      $currentPos=$DBQuery->get_data('position',$i);
                      $pos_data=$DBQuery->position();
                      while($pos_row=$pos_data->fetch_assoc()):
                        $pos=$pos_row['position'];
                        if($pos == $currentPos)
                        echo"<option selected>$pos</option>";
                        else
                        echo"<option>$pos</option>";
                      endwhile;
                    ?>
                  </select>
                </div>
                </div>
				
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button class="btn btn-primary">Update Data</button>
                </div>
              </div>
                      </form>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
