<?php
/*
 * Create By Mujib Masyhudi <mujib.masyhudi@gmail.com>
 * Create at {date('now')}
 */

use yii\helpers\Html;
use yii\helpers\Url;
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="r" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <?php if (!Yii::$app->user->isGuest) { ?>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-wrench text-orange"></i>
                        <span>Tools</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu" >
                        <li><a href="<?= Url::to(['/fico/fi-periode']); ?>"><i class="fa fa-check"></i> Acc Periode</a></li>
                        <li>
                            <a href="#"><i class="fa fa-check"></i> User Management<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="<?= Url::to(['/site/user/index']); ?>"><i class="fa fa-check"></i> Users</a></li>
                                <li><a href="<?= Url::to(['/admin/route']); ?>"><i class="fa fa-check"></i> Routes</a></li>
                                <li><a href="<?= Url::to(['/admin/permission']); ?>"><i class="fa fa-check"></i> Permissions</a></li>
                                <li><a href="<?= Url::to(['/admin/role']); ?>"><i class="fa fa-check"></i> Roles</a></li>
                                <li><a href="<?= Url::to(['/admin/assignment']); ?>"><i class="fa fa-check"></i> User Assignments</a></li>
                                <li><a href="<?= Url::to(['/site/u2-lokasi/index']); ?>"><i class="fa fa-check"></i> User to Location</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-check"></i> App Config</a></li>
                    </ul>
                </li>                    
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-buysellads text-aqua"></i>
                        <span>FI & Accounting</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?= Url::to(['/account/index']); ?>"><i class="fa fa-check"></i> COA</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-check"></i> General Journal</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-check"></i> Cash In<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-check"></i> Penerimaan SO</a></li>
                                <li><a href="#"><i class="fa fa-check"></i> Piutang Karyawan</a></li> 
                                <li><a href="#"><i class="fa fa-check"></i> Penerimaan Lain</a></li>                          
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-check"></i> Cash Out<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-check"></i> Biaya-biaya</a></li>
                                <li><a href="#"><i class="fa fa-check"></i> Pembelian Asset</a></li>  
                                <li><a href="#"><i class="fa fa-check"></i> Setoran Bank</a></li>
                                <li><a href="#"><i class="fa fa-check"></i> Piutang Karyawan</a></li>     
                                <li><a href="#"><i class="fa fa-check"></i> Prive Owner</a></li>                            
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-check"></i> Bank In<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-check"></i> Giro SO</a></li>
                                <li><a href="#"><i class="fa fa-check"></i> Clearing Giro</a></li>
                                <li><a href="#"><i class="fa fa-check"></i> Transfer SO</a></li>  
                                <li><a href="#"><i class="fa fa-check"></i> Transfer Lain</a></li>           
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-check"></i> Bank Out<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-check"></i> Penarikan Tunai</a></li>
                                <li><a href="#"><i class="fa fa-check"></i> ...</a></li>  
                                <li><a href="#"><i class="fa fa-check"></i> ...</a></li>                          
                            </ul>
                        </li>
                    </ul>
                </li> 
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-file"></i>
                        <span>Reports</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="#"><i class="fa fa-check"></i> Kesiswaan<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="<?= Url::to(['/kesiswaan/siswa-hdr/index']); ?>"><i class="fa fa-check"></i> Data Induk</a></li>
                                <li><a href="<?= Url::to(['/reports/absensi']); ?>"><i class="fa fa-check"></i> Absensi Siswa</a></li>
                                <li><a href="<?= Url::to(['/kesiswaan/siswa-dtl-periode']); ?>"><i class="fa fa-check"></i> Siswa Detail</a></li>  
                                <li><a href="#"><i class="fa fa-check"></i> ...</a></li>                          
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-check"></i> Keuangan<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="<?= Url::to(['/reports/rkp-pembayaran']); ?>"><i class="fa fa-check"></i> R1-Bayar/Hari</a></li>      
                                <li><a href="<?= Url::to(['/reports/rkp-pembayaran/detail-lokasi']); ?>"><i class="fa fa-check"></i> R2-Bayar/Lokasi</a></li>      
                                <li><a href="<?= Url::to(['/reports/rkp-pembayaran/detail-harian']); ?>"><i class="fa fa-check"></i> R3-Rekap Harian</a></li>
                                <li><a href="<?= Url::to(['/reports/rkp-pembayaran/rekap-bulanan']); ?>"><i class="fa fa-check"></i> R4-Rekap Bulanan</a></li>
                                <li><a href="<?= Url::to(['/reports/rkp-pembayaran/status-pembayaran']); ?>"><i class="fa fa-check"></i> R5-Status Bayar</a></li>                    
                                <li><a href="#"><i class="fa fa-check"></i> ...</a></li>                          
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        <?php } ?>
    </section>
    <!-- /.sidebar -->
</aside>

