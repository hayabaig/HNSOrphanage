@include('layouts.app')
<body id="page1">
<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
      <div class="wrapper">
        <h1><a href="/" id="logo">HNS Orphanage</a></h1>
        <nav>
          <ul id="top_nav">
            <li><a href="/"><img src="storage/top_icon1.gif" alt=""></a></li>
            <li><a href="/login"><img src="storage/top_icon2.gif" alt=""></a></li>
            <li class="end"><a href="/contact"><img src="storage/top_icon3.gif" alt=""></a></li>
          </ul>
        </nav>
        <nav>
          <ul id="menu">
            <li id="menu_active"><a href="/">Home</a></li>
            <li><a href="/mission">Our Mission</a></li>
            <li><a href="/help">How to Help</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="slider">
        <ul class="items">
          <li> <img src="storage/img1.jpg" alt="">
            <div class="banner">
              <div class="wrapper"><span>“Our mission is to help</span></div>
              <div class="wrapper"><strong>those in </em>NEED"</strong></div>
            </div>
          </li>
          <li> <img src="storage/img2.jpg" alt="">
            <div class="banner">
              <div class="wrapper"><span>“To make all the children</span></div>
              <div class="wrapper"><strong></em>HAPPY”</strong></div>
            </div>
          </li>
          <li> <img src="storage/img3.jpg" alt="">
            <div class="banner">
              <div class="wrapper"><span>“Together we can CHANGE</span></div>
              <div class="wrapper"><strong>many young LIVES”</strong></div>
            </div>
          </li>
        </ul>
        <ul class="pagination">
          <li id="banner1"><a href="/donations">Make<span>Donations</span></a></li>
          <li id="banner2"><a href="/adoption">Adopt<span>A Child</span></a></li>
          <li id="banner3"><a href="/visit">Visit<span>Our Home</span></a></li>
        </ul>
      </div>
    </header>
    <!-- / header -->
    <!-- content -->
    <article id="content">
      <div class="wrapper">
        <div class="box1">
          <div class="line1">
            <div class="line2 wrapper">
              <section class="col1">
                <span>Do you work here?</span></h2>
                <br></br>
                <div class="pad_bot1">
                  <figure><img src="storage/page1_img1.jpg" alt=""></figure>
                </div>
                <a href="/login" class="button1">SIGN IN</a> </section>
              <section class="col1 pad_left1">
                <span>Want to know more about us?</span></h2>
                <br></br>
                <div class="pad_bot1">
                  <figure><img src="storage/page1_img2.jpg" alt=""></figure>
                </div>
                <a href="#" class="button1 color2">ABOUT US</a> </section>
              <section class="col1 pad_left1">
                <span>View our gallery</span></h2>
                <br></br>
                <div class="pad_bot1">
                  <figure><img src="storage/page1_img3.jpg" alt=""></figure>
                </div>
                <a href="#" class="button1 color3">VIEW</a> </section>
            </div>
          </div>
        </div>
    </article>
    <!-- / content -->
    <!-- footer -->
    <footer>
      <div class="wrapper"> <a href="/" id="footer_logo"><span>HNS</span>Orphanage</a>
        <ul id="icons">
          <li><a href="#" class="normaltip"><img src="storage/icon1.gif" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="storage/icon2.gif" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="storage/icon3.gif" alt=""></a></li>
        </ul>
      </div>
      <div class="wrapper">
        <nav>
          <ul id="footer_menu">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/mission">Our Mission</a></li>
            <li><a href="/help">How to Help</a></li>
            <li class="end"><a href="/contact">Contact</a></li>
          </ul>
        </nav>
        <div class="tel"><span>+92 213</span>123456</div>
      </div>
      <div id="footer_text">Copyright &copy; <a href="#">HNSOrphanage.me</a> All Rights Reserved<br>
    </footer>
    <!-- / footer -->
  </div>
</div>


<script type="text/javascript">Cufon.now();
</script>
<script type="text/javascript">
$(window).load(function () {
    $('.slider')._TMS({
        preset: 'zabor',
        easing: 'easeOutQuad',
        duration: 800,
        pagination: true,
        banners: true,
        waitBannerAnimation: false,
        slideshow: 6000,
        bannerShow: function (banner) {
            banner.css({
                right: '-700px'
            }).stop().animate({
                right: '0'
            }, 600, 'easeOutExpo')
        },
        bannerHide: function (banner) {
            banner.stop().animate({
                right: '-700'
            }, 600, 'easeOutExpo')
        }
    })
    $('.pagination li').hover(function () {
        if (!$(this).hasClass('current')) {
            $(this).find('a').stop().animate({
                backgroundPosition: '0 0'
            }, 600, 'easeOutExpo', function () {
                $(this).parent().css({
                    backgroundPosition: '-20px 0'
                })
            });
        }
    }, function () {
        if (!$(this).hasClass('current')) {
            $(this).css({
                backgroundPosition: '0 0'
            }).find('a').stop().animate({
                backgroundPosition: '-250px 0'
            }, 600, 'easeOutExpo');
        }
    })
})
</script>
</body>
</html>
