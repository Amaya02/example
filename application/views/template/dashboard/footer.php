<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<script type="text/javascript">
  $('#btn-title').attr('disabled', 'disabled');
  $(function () {
  $('#modalUpdate').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var userid = button.data('userid');
    var name = button.data('name');
    var estime = button.data('estime');
    var stime = button.data('stime');
    var etime = button.data('etime');
    var modal = $(this);
    modal.find('#user_id').val(userid);
    modal.find('#tranname').val(name);
    modal.find('#estitime').val(estime);
    modal.find('#trantime1').val(stime);
    modal.find('#trantime2').val(etime);
  });
});
</script>

</body>
</html>