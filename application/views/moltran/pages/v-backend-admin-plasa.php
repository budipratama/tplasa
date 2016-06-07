<div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        
                        <h4 class="page-title"> Editable Table</h4>
                    </div>
                </div>
                <style type="text/css">
                    tfoot {
                        display: table-header-group;
                    }
                    tfoot input {
                        width: 100%;
                        padding: 3px;
                        box-sizing: border-box;
                    }
                    #adminPlasa tfoot th:last-child{
                        display: none;
                    }
                </style>
                <div class="panel">

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="m-b-30">
                                    <button id="addToTable" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>

                        <table id="adminPlasa" class="display table table-bordered table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID ADMIN</th>
                                    <th>ID MERCHANT</th>
                                    <th>NAMA LENGKAP</th>
                                    <th>STATUS</th>
                                    <th>TANGGAL CREATE</th>
                                    <th>DI-CREATE</th>
                                    <th>Action</th>
                                </tr>
                                <!-- <tr>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Action</th>
                                </tr> -->
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID ADMIN</th>
                                    <th>ID MERCHANT</th>
                                    <th>NAMA LENGKAP</th>
                                    <th>STATUS</th>
                                    <th>TANGGAL CREATE</th>
                                    <th>DI-CREATE</th>
                                    <th>Action</th>
                                </tr>
                                <!-- <tr>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Action</th>
                                </tr> -->
                            </tfoot>
                        </table>
                    </div>
                    <!-- end: page -->

                </div> <!-- end Panel -->




                <!-- Footer -->
                <?php $this->load->view($params['base_comp'] . 'v-backend-footer'); ?>

                <!-- End Footer -->
            </div>
            <!-- end container -->

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.1.4/semantic.min.css" />
            <!-- form edit -->
            <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                <!-- <form data-toggle="validator" role="form"> -->
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Reset Password</h4>
                            </div>
                            <div class="modal-body">
                                <form id="signupForm" class="ui grid form" style="padding: 10px">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="username" class="control-label">ID ADMIN</label>
                                                <!-- <input type="text" class="form-control" id="field-2" placeholder="Doe"> -->
                                                <input id="username" name="username" class="form-control" type="text" readonly="readonly" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="username" class="control-label">Password</label>
                                                <!-- <input type="text" class="form-control" id="field-2" placeholder="Doe"> -->
                                                <input id="password" name="password" class="form-control" type="password" placeholder="Password" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="username" class="control-label">Confirm Password</label>
                                                <!-- <input type="text" class="form-control" id="field-2" placeholder="Doe"> -->
                                                <input id="confirm_password" name="confirm_password" class="form-control" type="password" placeholder="Confirm Password" />
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                            </div>
                        </form>   
                        </div>
                    </div>
                <!-- </form> -->
            </div><!-- /.modal -->
                                <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
                                <!-- <link rel="stylesheet" type="text/css" href="<?php echo $params['base_theme_horizontal'];?>assets/css/docs.css"> -->
                                <!-- <link rel="stylesheet" type="text/css" href="<?php echo $params['base_theme_horizontal'];?>assets/css/pygments-manni.css"> -->
