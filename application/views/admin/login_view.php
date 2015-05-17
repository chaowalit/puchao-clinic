<?php $this->load->view('th/header'); ?>
<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="color: white;">
                <label style="font-size: 18px;">Login </label> (สำหรับผู้ดูแลระบบคลินิก ปู่เจ้าไทย - จีน เท่านั้น)
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-4">
                <div class="basic-login">
                    <form role="form" role="form" action="<?php echo base_url(); ?>index.php/admin/login/dashboard" method="POST">
                        <div class="form-group">
                            <label for="login-username"><i class="icon-user"></i> <b>Username or Email</b></label>
                            <input class="form-control" id="login-username" type="text" placeholder="Username or Email">
                        </div>
                        <div class="form-group">
                            <label for="login-password"><i class="icon-lock"></i> <b>Password</b></label>
                            <input class="form-control" id="login-password" type="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            
                            <button type="submit" class="btn pull-right">Login</button>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('th/footer'); ?>