<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo base_url(); ?>"></base>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        <?php 
            if(isset($title))
                echo $title;
            else
                echo "Thiết bị điện tử";
        ?>
    </title>
    <link rel="icon" type="image/x-icon" href="public/images/iconweb.jpg">
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link href="public/css/font-awesome.css" rel="stylesheet">
    <link href="public/css/lte.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="public/css/owl.carousel.min.css" rel="stylesheet">
    <link href="public/css/AdminLTE.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style-jc.css">
    <link href="public/css/menu-tab.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/jquery.bxslider.css" rel="stylesheet">
    <link href="public/css/flexslider.css" rel="stylesheet">
    <script src="public/js/jquery-2.2.3.min.js"></script>
    </head>
    <body >
     
         <div class='thetop'></div>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <!-- TOPBAR -->
        <?php 
            $this->load->view('frontend/modules/topbar');
        ?>
        <!-- HEADER LOGO + SEARCH -->
        <?php 
            $this->load->view('frontend/modules/logo-search');
        ?>
    
        <section id="menu-slider">
            <?php 
                $this->load->view('frontend/modules/panel-left');
            ?>
        </section>
        <!--CONTENT-->
        <?php 
            if(isset($com,$view)){
                $this->load->view('frontend/components/'.$com.'/'.$view);
            }
            else
                $this->load->view('frontend/components/Error404/index');
        ?>
        <!--FOOTER-->
        <?php 
            $this->load->view('frontend/modules/footer');
        ?>
        <script src="public/js/bootstrap.js"></script>
        <script src="public/js/app.min.js"></script>
        <script src="public/js/owl.carousel.js"></script>
        <script src="public/js/jquery.jcarousel.js"></script>
        <script src="public/js/jcarousel.connected-carousels.js"></script>
        <script src="public/js/scroll.js"></script>
        <script src="public/js/search-quick.js"></script>
        <script src="public/js/custom-owl.js"></script>
        <script src="public/js/jquery.flexslider.js"></script>
        <div class='scrolltop'>
        <div class='scroll icon' style="z-index: 99999"><i class="fas fa-caret-up"></i></div>
        </div>

    </body>

    <!-- Subiz -->
<script>!function(s,u,b,i,z){var o,t,r,y;s[i]||(s._sbzaccid=z,s[i]=function(){s[i].q.push(arguments)},s[i].q=[],s[i]("setAccount",z),r=["widget.subiz.net","storage.googleapis"+(t=".com"),"app.sbz.workers.dev",i+"a"+(o=function(k,t){var n=t<=6?5:o(k,t-1)+o(k,t-3);return k!==t?n:n.toString(32)})(20,20)+t,i+"b"+o(30,30)+t,i+"c"+o(40,40)+t],(y=function(k){var t,n;s._subiz_init_2094850928430||r[k]&&(t=u.createElement(b),n=u.getElementsByTagName(b)[0],t.async=1,t.src="https://"+r[k]+"/sbz/app.js?accid="+z,n.parentNode.insertBefore(t,n),setTimeout(y,2e3,k+1))})(0))}(window,document,"script","subiz","acqzqhiupzccuxmqhyaq")</script>


</html>
