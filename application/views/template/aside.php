<?php
$name = Gdn::UserMetaModel()->GetUserMeta(Gdn::session()->UserID, 'Profile.Nome')["Profile.Nome"];
$crm = Gdn::UserMetaModel()->GetUserMeta(Gdn::session()->UserID, 'Profile.CRM')['Profile.CRM'];
?>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url(); ?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $name?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">NAVEGAÇÃO PRINCIPAL</li>
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="active treeview">
                            <a href="/Video/Cadastrar">
                                <i class="fa fa-dashboard"></i> <span>Videos</span>
                            </a>
                        </li>
                        <li class="active treeview">
                            <a href="/Noticia/cadastrar">
                                <i class="fa fa-dashboard"></i> <span>Noticias</span>
                            </a>
                        </li>
                        <li class="active treeview">
                            <a href="/rede">
                                <i class="fa fa-dashboard"></i> <span>Redes</span>
                            </a>
                        </li>
                        <li class="active treeview">
                            <a href="/faleconosco">
                                <i class="fa fa-dashboard"></i> <span>Fale Conosco</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>