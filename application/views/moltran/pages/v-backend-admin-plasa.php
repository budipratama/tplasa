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

                        <table id="example" class="display table table-bordered table-striped" cellspacing="0" width="100%">
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
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID ADMIN</th>
                                    <th>ID MERCHANT</th>
                                    <th>NAMA LENGKAP</th>
                                    <th>STATUS</th>
                                    <th>TANGGAL CREATE</th>
                                    <th>DI-CREATE</th>
                                </tr>
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

