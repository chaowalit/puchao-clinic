<?php $this->load->view('admin/header'); ?>

<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">

                <div class="span12">      		

                    <div class="widget ">

                        <div class="widget-header">
                            <i class="icon-user"></i>
                            <h3>ประวัติการรักษา -- <?php echo $patient_data[0]['patient_name']; ?></h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <a class="btn btn-large" href="<?php echo base_url(); ?>index.php/admin/login/patient"><i class="icon-backward"></i> กลับสู่หน้าหลัก</a>
                            <p>
                                
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10%;font-size: 13px;">เลขประจำตัว : </th>
                                        <th class="td-actions" style="width: 22%;font-size: 13px;"><?php echo $patient_data[0]['patient_number']; ?></th>
                                        <th style="width: 10%;font-size: 13px;">ชื่อ-นามสกุล : </th>
                                        <th class="td-actions" style="width: 22%;font-size: 13px;"><?php echo $patient_data[0]['patient_name']; ?></th>
                                        <th style="width: 14%;font-size: 13px;">เลขประจำตัวประชาชน : </th>
                                        <th class="td-actions" style="width: 22%;font-size: 13px;"><?php echo $patient_data[0]['identification']; ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>วัน/เดือน/ปี เกิด : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['birthday']; ?></td>
                                        <td>อายุ : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['age']; ?></td>
                                        <td>กรุ๊ปเลือด : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['blood_group']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>เชื้อชาติ : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['ethnicity']; ?></td>
                                        <td>สัญชาติ : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['nationality']; ?></td>
                                        <td>ศาสนา : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['religion']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>สถานะ : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['status']; ?></td>
                                        <td>อาชีพ : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['career']; ?></td>
                                        <td>ประวัติการแพ้ยา/อาหาร : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['medical_history_food']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>โรคประจำตัว : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['congenital_disease']; ?></td>
                                        <td>ที่อยู่ปัจจุบัน : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['address']; ?></td>
                                        <td>เบอร์โทรศัพท์</td>
                                        <td class="td-actions"><?php echo $patient_data[0]['patient_tel']; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="td-actions"></td>
                                        <td></td>
                                        <td class="td-actions"></a></td>
                                        <td></td>
                                        <td class="td-actions"></td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <!-- /widget --> 
                            <div class="widget widget-nopad">
                                
                                <!-- /widget-header -->
                                <div class="widget-content">
                                    <ul class="news-items">
                                        <li>

                                            <div class="news-item-date"> <span class="news-item-day">29</span> <span class="news-item-month">Aug</span> </div>
                                            <div class="news-item-detail"> <a href="http://www.egrappler.com/thursday-roundup-40/" class="news-item-title" target="_blank">Thursday Roundup # 40</a>
                                                <p class="news-item-preview"> This is our web design and development news series where we share our favorite design/development related articles, resources, tutorials and awesome freebies. </p>
                                            </div>

                                        </li>
                                        <li>

                                            <div class="news-item-date"> <span class="news-item-day">15</span> <span class="news-item-month">Jun</span> </div>
                                            <div class="news-item-detail"> <a href="http://www.egrappler.com/retina-ready-responsive-app-landing-page-website-template-app-landing/" class="news-item-title" target="_blank">Retina Ready Responsive App Landing Page Website Template – App Landing</a>
                                                <p class="news-item-preview"> App Landing is a retina ready responsive app landing page website template perfect for software and application developers and small business owners looking to promote their iPhone, iPad, Android Apps and software products.</p>
                                            </div>

                                        </li>
                                        <li>

                                            <div class="news-item-date"> <span class="news-item-day">29</span> <span class="news-item-month">Oct</span> </div>
                                            <div class="news-item-detail"> <a href="http://www.egrappler.com/open-source-jquery-php-ajax-contact-form-templates-with-captcha-formify/" class="news-item-title" target="_blank">Open Source jQuery PHP Ajax Contact Form Templates With Captcha: Formify</a>
                                                <p class="news-item-preview"> Formify is a contribution to lessen the pain of creating contact forms. The collection contains six different forms that are commonly used. These open source contact forms can be customized as well to suit the need for your website/application.</p>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                                <!-- /widget-content --> 
                                <div class="widget-box"><a href="#"><i class="icon-refresh"></i>
                                    โหลดประวัติการรักษาก่อนหน้านี้</a>
                                </div>
                            </div>
                            <!-- /widget -->
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->

                </div> <!-- /span8 -->




            </div> <!-- /row -->

        </div> <!-- /container -->

    </div> <!-- /main-inner -->

</div> <!-- /main -->
<?php $this->load->view('admin/footer'); ?>