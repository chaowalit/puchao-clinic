<?php $this->load->view('th/header'); ?>
<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>ติดต่อเรา</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <!-- Map -->
                <div id="contact-us-google-map">
                    <?php echo $map['html']; ?>
                </div>
                <!-- End Map -->
                <!-- Contact Info -->
                <p class="contact-us-details">
                    <b>ที่ตั้ง:</b> ปู่เจ้าฯไทย - จีน คลินิกการแพทย์แผนไทย 83/1 ม.9 ถ.ปู่เจ้าฯ ต.สำโรงกลาง อ.พระประแดง จ.สมุทรปราการ 10130<br/>
                    <b>Tel:</b> 081-250-9579<br/>
                    <b>Tel:</b> 098-563-9330<br/>
                    <b>อีเมล:</b> <a href="mailto:puchao-acupuncture@hotmail.com">puchao-acupuncture@hotmail.com</a>
                </p>
                <!-- End Contact Info -->
            </div>
            <div class="col-sm-5">
                <!-- Contact Form -->
                <h3>ส่งข้อความถึงคลินิก</h3>
                <div class="contact-form-wrapper">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="contact_name" class="col-sm-3 control-label"><b>ชื่อ-นามสกุล</b></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="contact_name" id="contact_name" type="text" placeholder="ชื่อ-นามสกุล">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact_email" class="col-sm-3 control-label"><b>อีเมล</b></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="contact_email" id="contact_email" type="text" placeholder="อีเมล">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact_tel" class="col-sm-3 control-label"><b>โทรศัพท์</b></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="contact_tel" id="contact_tel" type="text" placeholder="โทรศัพท์">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact_message" class="col-sm-3 control-label"><b>ข้อความ</b></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="3" name="contact_message" id="contact_message" placeholder="ข้อความ"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><b>ใส่ข้อความ</b></label>
                            <div class="col-sm-9">
                                <?php
                                  echo $recaptcha_html;
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn pull-right">ส่งข้อความ</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Contact Info -->
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('th/footer'); ?>