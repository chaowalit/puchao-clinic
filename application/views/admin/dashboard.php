<?php $this->load->view('admin/header'); ?>
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> รายละเอียดภาพรวม</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                  <h6 class="bigstats">ระบบจะแสดงรายการทั้งหมดในภาพรวม คือ แสดงจำนวนผู้ป่วยทั้งหมด, แสดงจำนวนโปรโมชั่นปัจจุบัน, แสดงจำนวนข้อมความที่ได้รับ, จำนวนการแจ้งเตือน ตามลำดับ</h6>
                  <div id="big_stats" class="cf">
                              <div class="stat"> <i class="icon-user"></i> <span class="value">
                        <?php 
                            $this->db->select('*');
                            $this->db->from('patient');
                            $this->db->where('active', 1);

                            $result = $this->db->get();
                            $temp1 = $result->result_array();
                            
                            echo count($temp1);
                        ?>
                          </span> </div>
                    <!-- .stat -->
                    
                    <div class="stat"> <i class="icon-tag"></i> <span class="value">1</span> </div>
                    <!-- .stat -->
                    
                    <div class="stat"> <i class="icon-comment"></i> <span class="value">4</span> </div>
                    <!-- .stat -->
                    
                    <div class="stat"> <i class="icon-bullhorn"></i> <span class="value"><?php echo count($date_next); ?></span> </div>
                    <!-- .stat --> 
                  </div>
                </div>
                <!-- /widget-content --> 
                
              </div>
            </div>
          </div>
          <!-- /widget -->
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> ปฏิทินการนัดหมาย</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div id='calendar'>
              </div>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
          
        </div>
        <!-- /span6 -->
        <div class="span6">

          <!--
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Important Shortcuts</h3>
            </div>
            <!-- /widget-header --
            <div class="widget-content">
              <div class="shortcuts"> <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-list-alt"></i><span
                                        class="shortcut-label">Apps</span> </a><a href="javascript:;" class="shortcut"><i
                                            class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Bookmarks</span> </a><a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-signal"></i> <span class="shortcut-label">Reports</span> </a><a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-comment"></i><span class="shortcut-label">Comments</span> </a><a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-user"></i><span
                                                class="shortcut-label">Users</span> </a><a href="javascript:;" class="shortcut"><i
                                                    class="shortcut-icon icon-file"></i><span class="shortcut-label">Notes</span> </a><a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-picture"></i> <span class="shortcut-label">Photos</span> </a><a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-tag"></i><span class="shortcut-label">Tags</span> </a> </div>
              <!-- /shortcuts --
            </div>
            <!-- /widget-content --
          </div>
          <!-- /widget -->

          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>ตารางนัดหมายวันนี้ (<?php echo date("d-M-Y"); ?>)</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> เลขที่ประจำตัว </th>
                    <th> ชื่อ-นามสกุล</th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($date_next as $row){ ?>
                  <tr>
                    <td> <?php echo $row['patient_number']; ?> </td>
                    <td> <?php echo $row['patient_name']; ?> </td>
                    <td class="td-actions">
                      <a href="<?php echo base_url(); ?>index.php/admin/login/medical_records/<?php echo $row['patient_id']; ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-eye-open"> </i>Open</a>
                      
                    </td>
                  </tr>
                  
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 

          <div class="widget">
            <div class="widget-header"> <i class="icon-signal"></i>
              <h3> กราฟแสดงการเข้ารับการรักษาในแต่ละเดือน</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <canvas id="area-chart" class="chart-holder" height="250" width="538"> </canvas>
              <!-- /area-chart --> 
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
          
          
          
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
<!--
<div class="extra">
  <div class="extra-inner">
    <div class="container">
      <div class="row">
                    <div class="span3">
                        <h4>
                            About Free Admin Template</h4>
                        <ul>
                            <li><a href="javascript:;">EGrappler.com</a></li>
                            <li><a href="javascript:;">Web Development Resources</a></li>
                            <li><a href="javascript:;">Responsive HTML5 Portfolio Templates</a></li>
                            <li><a href="javascript:;">Free Resources and Scripts</a></li>
                        </ul>
                    </div>
                    <!-- /span3 
                    <div class="span3">
                        <h4>
                            Support</h4>
                        <ul>
                            <li><a href="javascript:;">Frequently Asked Questions</a></li>
                            <li><a href="javascript:;">Ask a Question</a></li>
                            <li><a href="javascript:;">Video Tutorial</a></li>
                            <li><a href="javascript:;">Feedback</a></li>
                        </ul>
                    </div>
                    <!-- /span3 
                    <div class="span3">
                        <h4>
                            Something Legal</h4>
                        <ul>
                            <li><a href="javascript:;">Read License</a></li>
                            <li><a href="javascript:;">Terms of Use</a></li>
                            <li><a href="javascript:;">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /span3 --
                    <div class="span3">
                        <h4>
                            Open Source jQuery Plugins</h4>
                        <ul>
                            <li><a href="http://www.egrappler.com">Open Source jQuery Plugins</a></li>
                            <li><a href="http://www.egrappler.com;">HTML5 Responsive Tempaltes</a></li>
                            <li><a href="http://www.egrappler.com;">Free Contact Form Plugin</a></li>
                            <li><a href="http://www.egrappler.com;">Flat UI PSD</a></li>
                        </ul>
                    </div>
                    <!-- /span3 --
                </div>
      <!-- /row --
    </div>
    <!-- /container -- 
  </div>
  <!-- /extra-inner --
</div>
-->
<!-- /extra -->

<?php $this->load->view('admin/footer'); ?>