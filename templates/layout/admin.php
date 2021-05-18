
  <?= $this->element('header');?>
<?= $this->element('top');?>

  
  <!-- Left side column. contains the logo and sidebar -->
  <?= $this->element('sidebar');?>

  <!-- Content Wrapper. Contains page content -->
  <?= $this->fetch('content'); ?>
  <!-- /.content-wrapper -->
  <?= $this->element('footer');?>