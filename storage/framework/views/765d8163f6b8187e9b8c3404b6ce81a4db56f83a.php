<?php /* /home/vagrant/code/caocanhlinh/resources/views/admin/layout/menu.blade.php */ ?>
<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
    <div>
      <p class="app-sidebar__user-name"><?php if(Auth::check()): ?> <?php echo e(Auth::user()->name); ?> <?php endif; ?></p>
      <!-- <p class="app-sidebar__user-designation">Fullstack Developer</p> -->
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item active" href="dashboard"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
    <li><a class="app-menu__item" href="admin/tintuc/list"><i class="app-menu__icon fa fa-newspaper-o"></i><span class="app-menu__label">Tin Tức</span></a></li>
    <li><a class="app-menu__item" href="admin/loaitin/list"><i class="app-menu__icon fa fa-th-large"></i><span class="app-menu__label">Loại Tin</span></a></li>
    <li><a class="app-menu__item" href="admin/theloai/list"><i class="app-menu__icon fa fa-list-alt"></i><span class="app-menu__label">Thể Loại</span></a></li>
  </ul>
</aside>