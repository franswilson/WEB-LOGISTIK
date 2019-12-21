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
                <h3 class="box-title">ADD USER</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->

            <form action="" method="POST">

                <div class="box-body ">
                    <div class=" col-md-4 col-md-offset-4">

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>" placeholder="Enter username">
                            <small class="text-danger pl-3"> <?= form_error('username') ?></small>

                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" value="<?= set_value('password') ?>" placeholder="Password">
                            <small class="text-danger pl-3"> <?= form_error('password') ?></small>

                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="<?= set_value('address') ?>" placeholder="Enter eddress">
                            <small class="text-danger pl-3"> <?= form_error('address') ?></small>

                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="<?= set_value('email') ?>" placeholder="Enter email">
                            <small class="text-danger pl-3"> <?= form_error('email') ?></small>

                        </div>
                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="text" class="form-control" name="telp" value="<?= set_value('telp') ?>" placeholder="Enter Phone number">
                            <small class="text-danger pl-3"> <?= form_error('telp') ?></small>

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