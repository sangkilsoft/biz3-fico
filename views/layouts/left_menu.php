<?php
/*
 * Create By Mujib Masyhudi <mujib.masyhudi@gmail.com>
 * Create at {date('now')}
 */

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
        <?php //if (!Yii::$app->user->isGuest) { ?>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">TRANSACTIONS</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wrench text-orange"></i>
                    <span>Tools</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" >
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
                    <i class="fa fa-opencart text-lime"></i>
                    <span>Sales & Distribution</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" >
                    <li><a href="<?= Url::to(['/site/user/index']); ?>"><i class="fa fa-check"></i> POS</a></li>
                    <li><a href="<?= Url::to(['/admin/route']); ?>"><i class="fa fa-check"></i> Sales</a></li>
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
                        <a href="#"><i class="fa fa-check"></i> Acc Masters<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?= Url::to(['/fico/coa']); ?>"><i class="fa fa-check"></i> COA</a></li>
                            <li><a href="<?= Url::to(['/fico/acc-periode']); ?>"><i class="fa fa-check"></i> Periodes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/fico/gl/index']); ?>"><i class="fa fa-check"></i> Journals</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-check"></i> Invoices<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?= Url::to(['/account/index']); ?>"><i class="fa fa-check"></i> Sales Billing</a></li>
                            <li><a href="<?= Url::to(['/account/index']); ?>"><i class="fa fa-check"></i> Purchase Invoice</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-check"></i> Cash<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-check"></i> Cash In</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Cash Out</a></li>
                        </ul>
                    </li>                        
                    <li>
                        <a href="#"><i class="fa fa-check"></i> Bank<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-check"></i> Bank In</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Bank Out</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Giro Clearing</a></li>
                        </ul>
                    </li>
                </ul>
            </li> 
            <li class="header">REPORTS</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file"></i>
                    <span>Reports</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#"><i class="fa fa-check"></i> Finance<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?= Url::to(['/reports/rkp-pembayaran']); ?>"><i class="fa fa-check"></i> Journal</a></li>   
                            <li><a href="<?= Url::to(['/reports/rkp-pembayaran']); ?>"><i class="fa fa-check"></i> General Ledger</a></li>   
                            <li><a href="<?= Url::to(['/reports/rkp-pembayaran/detail-harian']); ?>"><i class="fa fa-check"></i> Cash Flow</a></li>
                            <li><a href="<?= Url::to(['/reports/rkp-pembayaran/detail-lokasi']); ?>"><i class="fa fa-check"></i> Profit/Lost</a></li> 
                            <li><a href="<?= Url::to(['/reports/rkp-pembayaran/detail-harian']); ?>"><i class="fa fa-check"></i> Balance Sheet</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <?php // } ?>
    </section>
    <!-- /.sidebar -->
</aside>

