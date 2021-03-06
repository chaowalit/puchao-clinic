<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; <a href="#">2015 ปู่เจ้าไทย - จีน แพทย์จีน</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script src="<?php echo base_url(); ?>assets/admin/js/excanvas.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/js/chart.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/full-calendar/fullcalendar.min.js"></script>
 
<script src="<?php echo base_url(); ?>assets/admin/js/base.js"></script> 

<!-- dataTable  -->
    <script src="<?php echo base_url(); ?>assets/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/dataTables/dataTables.bootstrap.js"></script>
    <link href="<?php echo base_url(); ?>assets/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- end dataTable -->
<script>
    $(document).ready(function () {

        $("#dataTables-example").dataTable();
    });
</script>
<?php if($page == 1){  echo date("y, m, d"); ?>
<script>     

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June"],
            datasets: [
        //{
            //fillColor: "rgba(220,220,220,0.5)",
            //strokeColor: "rgba(220,220,220,1)",
            //pointColor: "rgba(220,220,220,1)",
            //pointStrokeColor: "#fff",
            //data: [65, 59, 90, 81, 56, 55, 40]
        //},
        {
            fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            data: [28, 48, 40, 19, 96, 27]
        }
      ]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        //alert(new Date(y, m, 1));
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: <?php echo $array_event; ?>
        });
      });
    </script><!-- /Calendar -->

    <style>
      .fc-state-highlight {
          background: #ccc;
      }
    </style>
    <?php } ?>
</body>
</html>
