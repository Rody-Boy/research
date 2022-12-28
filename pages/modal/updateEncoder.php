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
            
            <form action="../../actions/actions.php?f=update_encoder" method="POST" autocomplete="off"> 
            <input type='hidden' name='id' value='<?php echo $_SESSION['u_id'];?>'>      
            <input type='hidden' name='s_id' value='<?php echo $i;?>'>      
                  
              <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input value="<?php echo $DBQuery->get_data_encoder('u_name',$i);?>"  name="fname" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
                </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Middle Name</label>
                    <input value="<?php echo $DBQuery->get_data_encoder('u_mid',$i);?>" name="mname" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Middle Name">
                  </div>
                  </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input value="<?php echo $DBQuery->get_data_encoder('u_last',$i);?>" name="lname" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
                  </div>

                </div>
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