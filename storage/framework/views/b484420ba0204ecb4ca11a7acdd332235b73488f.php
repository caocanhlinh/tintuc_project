<?php /* /home/vagrant/code/caocanhlinh/resources/views/admin/layout/header.blade.php */ ?>
<?php
use Carbon\Carbon;
?>
<header class="app-header"><a class="app-header__logo" href="home">Tin Mới</a>
  <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
  <!-- Navbar Right Menu-->
  <ul class="app-nav">
    <li class="app-search">
      <input class="app-search__input" type="search" placeholder="Search">
      <button class="app-search__button"><i class="fa fa-search"></i></button>
    </li>
    <!--Notification Menu-->
    <li class="dropdown" id="dropdown-notifications"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><!-- <i class="fa fa-bell-o fa-lg"></i> -->
    <i data-count="0" class="fa fa-bell-o fa-lg notification-icon"></i></a>
      <ul class="app-notification dropdown-menu dropdown-menu-right">
        <!-- <li class="app-notification__title"><a href="#">Đánh dấu là đã đọc</a></li> -->
        <div class="app-notification__content">
          <?php $__currentLoopData = $noti; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thongbao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li>
            <a class="app-notification__item" href="javascript:;">
              <span class="app-notification__icon">
              <span class="fa-stack fa-lg">
              <img src="https://api.adorable.io/avatars/71/<?php echo e((rand()* (71 - 20 + 1)).'.png'); ?>" class="rounded-circle text-primary" alt="40x40" style="width: 40px; height: 40px;">
              </span>
              </span>
              <div>
              <p class="app-notification__message"><?php echo e($thongbao->NoiDung); ?></p>
              <p class="app-notification__meta"><?php echo e(Carbon::parse($thongbao->created_at)->diffForHumans()); ?></p>
              </div>
            </a>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        <li class="app-notification__footer"><a href="dashboard">Xem tất cả thông báo.</a></li>
      </ul>
    </li>
    <!-- User Menu-->
    <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
      <ul class="dropdown-menu settings-menu dropdown-menu-right">
        <li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
        <li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-user fa-lg"></i> Profile</a></li>
        <li><a class="dropdown-item" href="admin/logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
      </ul>
    </li>
  </ul>
</header>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="//js.pusher.com/3.1/pusher.min.js"></script>

<script type="text/javascript">
    var notificationsWrapper   = $('#dropdown-notifications');
    var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
    var notificationsCountElem = notificationsToggle.find('i[data-count]');
    var notificationsCount     = parseInt(notificationsCountElem.data('count'));
    var notifications          = notificationsWrapper.find('.app-notification__content');

    /*if (notificationsCount <= 0) {
        notificationsWrapper.hide();
    }*/

    //Thay giá trị PUSHER_APP_KEY vào chỗ xxx này nhé
    var pusher = new Pusher('4074eb440842d71300ce', {
        encrypted: true,
        cluster: "ap1"
    });

    // Subscribe to the channel we specified in our Laravel Event
    var channel = pusher.subscribe('development');

    // Bind a function to a Event (the full Laravel class)
    channel.bind('App\\Events\\ConfirmPosts', function(data) {
        var existingNotifications = notifications.html();
        var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
        var newNotificationHtml = `
          <li>
            <a class="app-notification__item" href="javascript:;">
              <span class="app-notification__icon">
              <span class="fa-stack fa-lg">
                
              <img src="https://api.adorable.io/avatars/71/`+avatar+`.png" class="rounded-circle text-primary" alt="40x40" style="width: 40px; height: 40px;">
              </span>
              </span>
              <div>
              <p class="app-notification__message">`+data.item_event+`</p>
              <p class="app-notification__meta">just now</p>
              </div>
            </a>
          </li>
        `;
        notifications.html(newNotificationHtml + existingNotifications);
        notificationsCount += 1;
        notificationsCountElem.attr('data-count', notificationsCount);
        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show();
    });
</script>