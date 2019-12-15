<!--main content-->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-tittle">DATA USER</h3>
        </div>


        <div class="box-body table-responsive">
            <table class="table table-bordered table-hover" role="grid" aria-describedby="example2_info" id="table1">
                <thead>
                    <tr role="row">

                        <th>NO</th>
                        <th>NAMA</th>
                        <th>PASSWORD</th>
                        <th>ALAMAT</th>
                        <th>EMAIL</th>
                        <th>NO TELFON</th>
                        <th>LEVEL</th>
                        <th>ACTION</th>
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
                            <td><?= $data->level == 1 ? "admin" : "user" ?> </td>
                            <td class="text-center" width="160px">
                                <form action="<?= site_url('user/del') ?>" method="post">
                                    <a href=" <?= site_url('user/edit/' . $data->id_user) ?>" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                        update
                                    </a>

                                    <input type="hidden" name="id_user" value="<?= $data->id_user ?>">
                                    <button class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash"></i>
                                        delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    } ?>

                </tbody>
                <div class="pull-right">

                    <a href=" <?= site_url('user/add') ?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"></i>
                        Create
                    </a>
                </div>
                <br>
                <br>


            </table>
        </div>

    </div>

</section>