<?php $this->load->view('admin/header'); ?>

<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">

                <div class="span12">

                    <div class="widget">

                        <div class="widget-header">
                            <i class="icon-pushpin"></i>
                            <h3>รายชื่อผู้ป่วยทั้งหมด</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <a href="<?php echo base_url(); ?>index.php/admin/login/add_patient" class="btn btn-info">เพิ่มรายชื่อผู้ป่วย</a>

                            <br /><br/>

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="font-size: 13px;">เลขที่ประจำตัว</th>
                                        <th style="font-size: 13px;">ชื่อ-นามสกุล</th>
                                        <th style="font-size: 13px;">วันที่แก้ไข</th>
                                        <th style="font-size: 13px;width:190px;">จัดการ</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($patient_data as $row){ ?>
                                    <tr>
                                        <td><?php echo $row->patient_number; ?></td>
                                        <td><?php echo $row->patient_name; ?></td>
                                        <td><?php echo date("d-m-Y H:i:s", strtotime($row->udate)); ?></td>
                                        <td>
                                            <a class="btn btn-mini btn-primary" href="<?php echo base_url(); ?>index.php/admin/login/medical_records/<?php echo $row->id; ?>"><i class="icon-plus-sign"></i> การรักษา</a>
                                            <a class="btn btn-mini btn-info" href="<?php echo base_url(); ?>index.php/admin/login/add_patient/<?php echo $row->id; ?>"><i class="icon-edit"></i> ดู / แก้ไข</a>
                                            <a class="btn btn-mini btn-danger" onclick="return confirm('คุณต้องการลบรายชื่อผู้ป่วยนี้ หรือไม่')" href="<?php echo base_url(); ?>index.php/admin/login/del_patient/<?php echo $row->id; ?>"><i class="icon-remove"></i> ลบ</a>
                                        </td>
                                        
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                                    
                                 


                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->	

                </div> <!-- /spa12 -->

                





            </div> <!-- /row -->

        </div> <!-- /container -->

    </div> <!-- /main-inner -->

</div> <!-- /main -->
<style>
    .dataTables_wrapper .row{
        margin-left:0px;
    }
</style>
<?php if($this->session->flashdata('result') == 'success'){ ?>
<script>
    $(document).ready(function () {

        alert('ลบผู้ป่วยเรียบร้อยแล้ว...');
    });
</script>
<?php } ?>
<?php $this->load->view('admin/footer'); ?>