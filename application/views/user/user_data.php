<!--main content-->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-tittle">data user</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>username</th>
                        <th>password</th>
                        <th>address</th>
                        <th>email</th>
                        <th>telp</th>
                        <th>level</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>

                            <td><?= $no++ ?> </td>
                            <td><?= $data->username ?> </td>
                            <td><?= $data->password ?> </td>
                            <td><?= $data->address ?> </td>
                            <td><?= $data->email ?> </td>
                            <td><?= $data->telp ?> </td>
                            <td><?= $data->level == 1 ? "admin" : "kasir" ?> </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
                <div class="row">
                    <div class="col-sm-10">
                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li>
                                <li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li>
                                <li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </table>
        </div>
    </div>

</section>