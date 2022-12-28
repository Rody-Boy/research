            <div class="modal fade" id="modal-lg<?php echo $i;?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"> <i class="nav-icon fas fa-edit"></i>Update Form</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <div class="row">
            <div class="col-md-12">
            <form action="../../actions/actions.php?f=update_calendar" method="POST" autocomplete="off"> 
            <input type='hidden' name='id' value='<?php echo $_SESSION['u_id'];?>'>      
            <input type='hidden' name='c_id' value='<?php echo $i;?>'>      
                  <div class="form-group">
                  <label>Date</label>
                    <input value="<?php echo $DBQuery->get_data('date',$i);?>" name="date" required type="date" class="form-control" id="" placeholder="">
                </div>
                </div></br>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Area</label>
                    <input value="<?php echo $DBQuery->get_data('area',$i);?>"  name="area" required type="text" class="form-control" id="" placeholder="Enter Area of Concern">
                </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Activity</label>
                    <input value="<?php echo $DBQuery->get_data('activity',$i);?>" name="activity" required type="text" class="form-control" id="" placeholder="Enter Activity Name">
                  </div>
                  </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Organization</label>
                    <input value="<?php echo $DBQuery->get_data('organization',$i);?>" name="organization" required type="text" class="form-control" id="" placeholder="Enter Organization Name">
                  </div>

                </div>
                <div class="col-md-2">
                  <div class="form-group">
                  <label>Remarks</label>
                  <select required name="remarks" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <?php
                        $currentGen=$DBQuery->get_data('remarks',$i);
                        if($currentGen == 'Uncompleted'){
                          echo"<option selected>Completed</option>";
                          echo"<option>Cancelled</option>";
                        }
                        else {
                          echo"<option selected>Uncompleted</option>";
                          echo"<option>Cancelled</option>";
                        } 
                        
                    ?>
                  </select>
                </div>
                </div>

                
              </div>
                      </form>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
		  