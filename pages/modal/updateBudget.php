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
            <form action="../../actions/actions.php?f=update_budget" method="POST" autocomplete="off"> 
            <input type='hidden' name='id' value='<?php echo $_SESSION['u_id'];?>'>      
            <input type='hidden' name='b_id' value='<?php echo $i;?>'>      
                  <div class="form-group">
                  <label>Deposit</label>
                    <input value="<?php echo $DBQuery->get_data('deposit',$i);?>" name="deposit" required type="number" class="form-control" id="" placeholder="Enter ID Number">
                </div>
                </div></br>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Withdraw</label>
                    <input value="<?php echo $DBQuery->get_data('withdraw',$i);?>"  name="withdraw" required type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
                </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date</label>
                    <input value="<?php echo $DBQuery->get_data('date',$i);?>" name="date" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Middle Name">
                  </div>
                  </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Purpose</label>
                    <input value="<?php echo $DBQuery->get_data('purpose',$i);?>" name="purpose" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
                  </div>
				  <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input value="<?php echo $DBQuery->get_data('name',$i);?>" name="name" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
                  </div>
				  <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Number</label>
                    <input value="<?php echo $DBQuery->get_data('idnumber',$i);?>" name="idnumber" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
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