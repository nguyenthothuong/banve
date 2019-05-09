<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="./c_nhanvien.php"><img class="brand-logo" alt="Chameleon admin logo" src="img/2.png"/>
              <h3 class="brand-text"><?php echo $nhanvien->gethotennv() ?></h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content"> 
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" name="value" onchange="showNhanVien($(this).find('li.nav-item').value)" >

          <?php
            if ($nhanvien->isAdmin()) :
              echo '
              <li class="nav-item" ><a href="?action=list_nhanvien"><i class="ft-pie-chart"></i><span  class="menu-title" data-i18n="">Update nhân viên</span></a>
              </li>
              <li class="nav-item"><a href="?action=add_airline"><i class="ft-pie-chart"></i><span value="1" class="menu-title" data-i18n="">Thêm hãng bay</span></a>
              </li>
              <li class="nav-item"><a href="?action=create_flight"><i class="ft-pie-chart"></i><span value="1" class="menu-title" data-i18n="">Thêm sân bay</span></a>
              </li>
              <li class="nav-item"><a href="?action=create_flight"><i class="ft-pie-chart"></i><span value="1" class="menu-title" data-i18n="">Khởi tạo chuyến bay</span></a>
              </li>
              <li class="nav-item"><a href="?action=create_flight"><i class="ft-pie-chart"></i><span value="1" class="menu-title" data-i18n="">Quản lý vé</span></a>
              </li>
              <li class="nav-item" value="1" ><a href="#"><i class="ft-pie-chart"></i><span value="1" class="menu-title" data-i18n="">Xem doanh thu</span></a>
              </li>
              ';
            else :
              echo '
              <li class="nav-item" value="1" ><a href="?action=update_nhanvien"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Update thông tin</span></a>
              </li>
              <li class="nav-item" value="1" ><a href="?action=ve_manager"><i class="ft-pie-chart"></i><span value="1" class="menu-title" data-i18n="">Quản lý vé</span></a>
              </li>
              ';
            endif;
          ?>
        
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>
