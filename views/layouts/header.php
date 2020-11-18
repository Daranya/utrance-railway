<?php if($_REQUEST['url'] === 'home') : ?>
<nav class="nav-container">
      <div class="navbar">
        <div class="main__nav">
          <div class="logobox">
            <img src="../../../../utrance-railway/public/img/pages/home/logo-white.png" alt="logo" class="logo" />
          </div>
          <div class="main__nav-items">
            <a href="/utrance-railway/home" class="home-box nav-items-little">
              <svg class="home__icon navbar__icon">
                <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-home"></use>
              </svg>
              <span class="nav__items-text-box">Home</span>
            </a>
            <div class="ticket-box nav-items-little">
              <svg class="ticket__icon navbar__icon">
                <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-ticket"></use>
              </svg>
              <span class="nav__items-text-box">Tickets</span>
            </div>
            <div class="news-box nav-items-little">
              <svg class="news__icon navbar__icon">
                <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-news"></use>
              </svg>
              <span class="nav__items-text-box">News</span>
            </div>
          </div>
        </div>
        <div class="user__nav">
          <div class="userdetails-box">
             <?php if(isset($_SESSION['user'])) : ?>
              <a href="#">
                <img
                  src="../../../../utrance-railway/public/img/pages/admin/Chris-user-profile.jpg"
                  alt="profile picture"
                  class="user-img"
                />
              </a>
              <a href="#" class="user-name"><?php echo App::$APP->activeUser()['first_name'];?></a>
              <div class="userdetails-box--dropdown">
               <ul>
                 <li>
                   <a href="/utrance-railway/profile">
                    <svg class="dropdown-icon">
                      <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-gauge"></use>
                    </svg>
                    <span>Dashboard</span>
                   </a>
                 </li>
                 <li>
                   <a href="">
                    <svg class="dropdown-icon">
                      <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-suitcase"></use>
                    </svg>
                    <span>My Bookings</span>
                   </a>
                 </li>
                 <li>
                   <a href="/utrance-railway/settings">
                    <svg class="dropdown-icon">
                      <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-cog"></use>
                    </svg>
                    <span>Settings</span>
                   </a>
                 </li>
                 <li>
                   <a href="/utrance-railway/logout">
                    <svg class="dropdown-icon">
                      <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-log-out"></use>
                    </svg>
                    <span>Logout</span>
                   </a>
                 </li>
               </ul>
             </div>
             <?php else: ?>
              <svg class="guest-user user-img">
                <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-user"></use>
              </svg>
              <a href="/utrance-railway/login" class="user-name">Login</a>
             <?php endif; ?>  
          </div>
        </div>
      </div>
    </nav>
<?php elseif(App::$APP->activeUser()['role'] === 'admin') : ?>
  <nav class="nav-container">
      <div class="navbar">
        <div class="main__nav">
          <div class="logobox">
            <img src="../../../../utrance-railway/public/img/pages/admin/logo.png" alt="logo" class="logo" />
          </div>
          <div class="main__nav-items">
            <a href="/utrance-railway/home" class="home-box nav-items-little">
              <svg class="home__icon navbar__icon">
                <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-home"></use>
              </svg>
              <span class="nav__items-text-box">Home</span>
            </a>
            <div class="ticket-box nav-items-little">
              <svg class="ticket__icon navbar__icon">
                <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-ticket"></use>
              </svg>
              <span class="nav__items-text-box">Tickets</span>
            </div>
            <div class="news-box nav-items-little">
              <svg class="news__icon navbar__icon">
                <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-news"></use>
              </svg>
              <span class="nav__items-text-box">News</span>
            </div>
          </div>
        </div>
        <div class="user__nav">
          <div class="notification-box">
            <svg class="notification__icon navbar__icon">
              <use xlink:href="../../../../utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-chat"></use>
            </svg>
            <span class="notification__numbers">13</span>
          </div>
          <div class="userdetails-box">
            <a href="#">
              <img
                src="../../../../utrance-railway/public/img/pages/admin/Chris-user-profile.jpg"
                alt="profile picture"
                class="user-img"
              />
            </a>
            <a href="#" class="user-name"><?php echo App::$APP->activeUser()['first_name']?></a href="#">
            <div class="userdetails-box--dropdown">
               <ul>
                 <li>
                   <a href="/utrance-railway/profile">
                    <svg class="dropdown-icon">
                      <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-gauge"></use>
                    </svg>
                    <span class="userdetails-box--dropdown-text">Dashboard</span>
                   </a>
                 </li>
                 <li>
                   <a href="">
                    <svg class="dropdown-icon">
                      <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-suitcase"></use>
                    </svg>
                    <span class="userdetails-box--dropdown-text">My Bookings</span>
                   </a>
                 </li>
                 <li>
                   <a href="/utrance-railway/settings">
                    <svg class="dropdown-icon">
                      <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-cog"></use>
                    </svg>
                    <span class="userdetails-box--dropdown-text">Settings</span>
                   </a>
                 </li>
                 <li>
                   <a href="/utrance-railway/logout">
                    <svg class="dropdown-icon">
                      <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-log-out"></use>
                    </svg>
                    <span class="userdetails-box--dropdown-text">Logout</span>
                   </a>
                 </li>
               </ul>
             </div>
          </div>
        </div>
      </div>
    </nav>
    <?php elseif(App::$APP->activeUser()['role'] === 'user') : ?>
      <nav class="nav-container">
      <div class="navbar">
        <div class="main__nav">
          <div class="logobox">
            <img src="../../../../utrance-railway/public/img/pages/admin/logo.png" alt="logo" class="logo" />
          </div>
          <div class="main__nav-items">
            <a href="/utrance-railway/home" class="home-box nav-items-little">
              <svg class="home__icon navbar__icon">
                <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-home"></use>
              </svg>
              <span class="nav__items-text-box">Home</span>
            </a>
            <div class="ticket-box nav-items-little">
              <svg class="ticket__icon navbar__icon">
                <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-ticket"></use>
              </svg>
              <span class="nav__items-text-box">Tickets</span>
            </div>
            <div class="news-box nav-items-little">
              <svg class="news__icon navbar__icon">
                <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-news"></use>
              </svg>
              <span class="nav__items-text-box">News</span>
            </div>
          </div>
        </div>
        <div class="user__nav">
          <div class="userdetails-box">
            <img
              src="../../../../utrance-railway/public/img/pages/admin/Chris-user-profile.jpg"
              alt="profile picture"
              class="user-img"
            />
            <a href="#" class="user-name"><?php echo App::$APP->activeUser()['first_name']?></a href="#">
            <div class="userdetails-box--dropdown">
               <ul>
                 <li>
                   <a href="/utrance-railway/profile">
                    <svg class="dropdown-icon">
                      <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-gauge"></use>
                    </svg>
                    <span class="userdetails-box--dropdown-text">Dashboard</span>
                   </a>
                 </li>
                 <li>
                   <a href="">
                    <svg class="dropdown-icon">
                      <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-suitcase"></use>
                    </svg>
                    <span class="userdetails-box--dropdown-text">My Bookings</span>
                   </a>
                 </li>
                 <li>
                   <a href="/utrance-railway/settings">
                    <svg class="dropdown-icon">
                      <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-cog"></use>
                    </svg>
                    <span class="userdetails-box--dropdown-text">Settings</span>
                   </a>
                 </li>
                 <li>
                   <a href="/utrance-railway/logout">
                    <svg class="dropdown-icon">
                      <use xlink:href="/utrance-railway/public/img/pages/admin/svg/sprite.svg#icon-log-out"></use>
                    </svg>
                    <span class="userdetails-box--dropdown-text">Logout</span>
                   </a>
                 </li>
               </ul>
             </div>
          </div>
        </div>
      </div>
    </nav>
    <?php endif; ?>

      
