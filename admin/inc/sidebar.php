

<div class="grid_2">
    <div class="box sidemenu">
        <div class="block" id="section-menu">
            <ul class="section menu">
                                <!-- <li><a class="menuitem">Site Option</a>
                    <ul class="submenu">
                        <li><a href="titleslogan.php">Title & Slogan</a></li>
                        <li><a href="social.php">Social Media</a></li>
                        <li><a href="copyright.php">Copyright</a></li>
                        
                    </ul>
                </li> -->

                <?php $level= Session::get('level')?>
                <li><a href="infoAdmin.php"class="menuitem" style=" background:#ef9478;">My account</a></li>
                <?php 
                    if($level==1){
                      echo '
                      <li><a class="menuitem" style=" background:#ef9478;">Product</a>
                            <ul class="submenu">
                                <li><a href="productlist.php">Product List</a> </li>
                            </ul>
                      </li>
                      <li><a class="menuitem" style=" background:#ef9478;">Vendor Option</a>
                            <ul class="submenu">
                                <li><a href="vendoradd.php">Add Vendor</a> </li>
                                <li><a href="vendorlist.php">Vendor List</a> </li>
                            </ul>
                      </li>
                     <li><a class="menuitem" style=" background:#ef9478;">Category Option</a>
                            <ul class="submenu">
                                <li><a href="catadd.php">Add New Category</a> </li>
                                <li><a href="catlist.php">Category List</a> </li>
                            </ul>
                     </li>
                     <li><a class="menuitem" style=" background:#ef9478;">Members</a>
                                <ul class="submenu">
                                <li><a href="memeber.php">Member List</a> </li>
                            </ul>
                        </li>
                      ';
                    }
                 ?>
                 <?php 
                    if($level==2){
                      echo '
                      <li><a class="menuitem" style=" background:#ef9478;">Product</a>
                            <ul class="submenu">
                                <li><a href="productlist.php">Product List</a> </li>
                            </ul>
                      </li>
                      <li><a class="menuitem" style=" background:#ef9478;">Vendor Option</a>
                            <ul class="submenu">
                                <li><a href="vendorlist.php">Vendor List</a> </li>
                            </ul>
                      </li>
                     <li><a class="menuitem" style=" background:#ef9478;">Category Option</a>
                            <ul class="submenu">
                                <li><a href="catlist.php">Category List</a> </li>
                            </ul>
                     </li>
                      ';
                    }
                 ?>
				 <?php 
                    if($level==3){
                      echo '
                      <li><a class="menuitem" style=" background:#ef9478;">Product</a>
                            <ul class="submenu">
                                <li><a href="productadd.php">Add Product</a> </li>
                                <li><a href="productlist.php">Product List</a> </li>
                            </ul>
                      </li>
                     <li><a class="menuitem" style=" background:#ef9478;">Category Option</a>
                            <ul class="submenu">
                                <li><a href="catadd.php">Add Category</a> </li>
                                <li><a href="catlist.php">Category List</a> </li>
                            </ul>
                     </li>
                      <li><a class="menuitem" style=" background:#ef9478;">Order</a>
                    <ul class="submenu">
                        <li><a href="vieworder.php"> View Order</a> </li>
                    </ul>
                </li>
            
                <li><a class="menuitem" style=" background:#ef9478;" href="warelist.php">Nhà kho</a>
                    <ul class="submenu">
                        <li><a href="wareordersend.php">Yêu cầu nhập kho</a> </li>
                    </ul>
                </li>
                      ';
                    }
                 ?>
                 <?php 
                    if($level==4){
                      echo '
                      <li><a class="menuitem" style=" background:#ef9478;">Product</a>
                            <ul class="submenu">
                                <li><a href="productlist.php">Product List</a> </li>
                            </ul>
                      </li>
                     <li><a class="menuitem" style=" background:#ef9478;">Category Option</a>
                            <ul class="submenu">
                                <li><a href="catadd.php">Add Category</a> </li>
                                <li><a href="catlist.php">Category List</a> </li>
                            </ul>
                     </li>
                      <li><a class="menuitem" style=" background:#ef9478;">Order</a>
                    <ul class="submenu">
                        <li><a href="vieworder.php"> View Order</a> </li>
                    </ul>
                </li>
            
                <li><a class="menuitem" style=" background:#ef9478;" href="warelist.php">Nhà kho</a>
                    <ul class="submenu">
                        <li><a href="wareordersend.php">Yêu cầu nhập kho</a> </li>
                    </ul>
                </li>
                      ';
                    }
                 ?>
                <!-- <li><a class="menuitem">Update Pages</a>
                    <ul class="submenu">
                        <li><a>About Us</a></li>
                        <li><a>Contact Us</a></li>
                    </ul>
                </li> -->
				<!-- <li><a class="menuitem">Slider Option</a>
                    <ul class="submenu">
                        <li><a href="addslider.php">Add Slider</a> </li>
                        <li><a href="sliderlist.php">Slider List</a> </li>
                    </ul>
                </li> -->
                 
               
                <br>
                <br>
                <br>
                
                <br>
                <br> 
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br> 
                <br>
                <br>
                <br>
                <br>
             
               
               
            </ul>
        </div>
    </div>
</div>
