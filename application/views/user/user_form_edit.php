<!--main content-->
<section class="content">
    <div class="box">
        <div class="box-header">

            <div class="pull-right">

                <a href=" <?= site_url('user') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>
                    back
                </a>
            </div>
        </div>
        <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title">UPDATE USER</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="POST">

                <div class="box-body ">
                    <div class=" col-md-4 col-md-offset-4">

                        <div class="form-group">
                            <label>Username</label>
                            <input type="hidden" name="id_user" value="<?= $row->id_user ?>">
                            <input type="text" class="form-control" name="username" value="<?= $this->input->post('username') ?? $row->username ?>" placeholder="Enter username">
                            <?= form_error('username') ?>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password" value="<?= $this->input->post('password') ?? $row->password ?>" placeholder="Password">
                            <?= form_error('password') ?>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="<?= $this->input->post('address') ?? $row->address ?>" placeholder="Enter eddress">
                            <?= form_error('address') ?>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="<?= $this->input->post('email') ?? $row->email ?>" placeholder="Enter email">
                            <?= form_error('email') ?>
                        </div>
                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="text" class="form-control" name="telp" value="<?= $this->input->post('telp') ?? $row->telp ?>" placeholder="Enter Phone number">
                            <?= form_error('telp') ?>
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>>ADMIN</option>
                                <option value="2" <?= set_value('level') == 2 ? "selected" : null ?>>USER</option>



                            </select>
                        </div>



                        <div class="box-footer">
                            <div class=" col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
            </form>
        </div>



</section>