<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Hearts Fund</title>
    <!-- Core CSS - Include with every page -->
	<link href="<?php echo CSS . "bootstrap.css"; ?>" rel="stylesheet">
	<link href="<?php echo ASSET . "font-awesome/css/font-awesome.css"; ?>" rel="stylesheet">
	<script src="<?php echo JS . "jquery-1.11.3.js"; ?>"></script>
              <!-- SB Admin CSS - Include with every page -->
	<link href="<?php echo CSS . "sb-admin.css"; ?>" rel="stylesheet">
</head>
<body style="font-family: Times New Roman, Times, serif">

    <div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="col-sm-12">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h2>Happy Hearts fund</h2>
            </div>
            <!-- /.navbar-header -->
<!--Search By ID-->
        <?php
           // echo form_open('searchdatabase_control/find_id');
        ?>
        <div class="col-sm-3" style="float: right; margin: 10px auto">
            <div class="input-group custom-search-form navbar-right">
                <input type="int" name="member_id" class="form-control" placeholder="Search By Member ID only!" style="height: 30px">
                    <span class="input-group-btn" name="id_search">
                        <button class="btn btn-default" type="submit" name="id_search" style="height: 30px">
                            <b></b><i class="fa fa-search" name="id_search"></i></b>
                        </button>
                    </span>
            </div>
            <br>
            <h5>
                <?php
                //$str = "Advanced Search";
               // echo anchor("searchdatabase_control/find_members",$str); ?>
            </h5>
        </div>
            <?php
                //echo form_close();
            ?>
		</div>

		<!--Search By ID ends-->
		</nav>
    </div>

    <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i>Seek Help<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
								<?php echo anchor('validation/validate','<i class="fa fa-user fa-fw"></i>Send Request');		 ?>
                            </li>
                            <li>
                                <?php echo anchor('','<i class="fa fa-list fa-fw"></i>Member') ?>
                            </li>
                            <li>
                                <?php echo anchor('', '<i class="fa fa-search fa-fw"></i>Search') ?>
                            </li>
                        </ul>
                     	   <!-- /.nav-second-level -->
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>