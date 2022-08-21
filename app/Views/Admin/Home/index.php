<?=$this->extend('Admin/layout/principal');?>

<?=$this->section('title');?> <?=$title;?> <?=$this->endSection();?>


<?=$this->section('styles');?>

<!-- Aqui enviamos para o template principal os styles -->

<?=$this->endSection();?>


<?=$this->section('content');?>

<?=$title;?>

<?=$this->endSection();?>


<?=$this->section('scripts');?>

<!-- Aqui enviamos para o template principal os scripts -->

<?=$this->endSection();?>