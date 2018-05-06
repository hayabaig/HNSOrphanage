@include('layouts.app')
<body id="page5">
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
            <li class="end"><a href="contact.html"><img src="storage/top_icon3.gif" alt=""></a></li>
          </ul>
        </nav>
        <nav>
          <ul id="menu">
            <li><a href="/">Home</a></li>
            <li><a href="/mission">Our Mission</a></li>
            <li><a href="/help">How to Help</a></li>
            <li id="menu_active"><a href="/contact">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- / header -->
    <!-- content -->
    <article id="content">
      <div class="wrapper">
        <div class="box1">
          <div class="line1 wrapper">
            <section class="col1">
              <h2><strong>O</strong>ur<span>Address</span></h2>
              <strong class="address"> Country:<br>
              City:<br>
              Zip Code:<br>
              Telephone:<br>
              Fax:<br>
              E-Mail: </strong> USA<br>
              San Diego<br>
              50122<br>
              +354 5635600<br>
              +354 5635610<br>
              <a href="#">hopecenter@gmail.com</a> </section>
            <section class="col2 pad_left1">
              <h2 class="color2"><strong>M</strong>iscellaneous<span>info</span></h2>
              <p class="pad_bot1"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
              Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur. </section>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div class="pad_left2 relative">
          <h4 class="color3"><span>Contact</span>Form</h4>
          <img src="storage/page6_img1.png" alt="" class="img1">
          <form id="ContactForm" action="#">
            <div>
              <div class="wrapper"><span>Your Name:</span>
                <input type="text" class="input">
              </div>
              <div class="wrapper"><span>Your E-mail:</span>
                <input type="text" class="input">
              </div>
              <div class="textarea_box"><span>Your Message:</span>
                <textarea name="textarea" cols="1" rows="1"></textarea>
              </div>
              <a href="#" class="button2 color3">Send</a> <a href="#" class="button2 color3">Clear</a> </div>
          </form>
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
            <li><a href="/">Home</a></li>
            <li><a href="/mission">Our Mission</a></li>
            <li><a href="/help">How to Help</a></li>
            <li class="end active"><a href="/contact">Contact</a></li>
          </ul>
        </nav>
        <div class="tel"><span>+92 213</span>123456</div>
      </div>
      <div id="footer_text">Copyright &copy; <a href="#">HNSOrphanage.me</a> All Rights Reserved<br>
      </footer>
    <!-- / footer -->
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>