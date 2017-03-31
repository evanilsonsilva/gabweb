<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Vídeo
            <small>Painel de controle</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"><i class="fa fa-youtube-play"></i> Video</a></li>
            <li class="active">Cadastrar</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <section class="content">
            <!-- Main row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <!-- general form elements disabled -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Cadastrar</h3>
                        </div><!-- /.box-header -->

                        <form role="form" action="<?php echo base_url(); ?>video/processaCadastrar/" method="post">
                            <div class="box-body">
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" name="titulo" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Descrição</label>
                                            <input type="text" name="descricao" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" name="link" class="form-control">
                                        </div>
                                    </div>  
                                </div>
                                
                                <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Enviar">
                                    </div>
                                </div>
                                <div class="col-md-5"></div>
                            </div>
                                
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div>
            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
</div>
<!-- /.content-wrapper -->

