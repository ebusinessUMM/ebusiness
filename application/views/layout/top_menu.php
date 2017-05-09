<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?=anchor(base_url(), 'RMP', ['class'=>'navbar-brand'])?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

        <li><!--<?php echo anchor(base_url(), 'Home'); ?>-->
          <?php
              $text_home = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
              $text_home .= ' Home';
          ?>
          <?=anchor('admin/dashboard', $text_home)?>
        </li>
        <?php if($this->session->userdata('username')) { ?>
        <?php } ?>

        <?php if ($this->session->userdata('username')) { ?>
          <li><div style="line-height:50px;" color="grey;">
            <?php
                $text_user = '<span class="glyphicon glyphicon-user" aria-hidden="true"></span>';
                $text_user .= ' Halo : ' . $this->session->userdata('username');
                echo $text_user;
            ?>
          </div></li>
          <li><?php echo anchor('logout', 'Logout'); ?></li>
        <?php } else { ?>
          <li>
            <!-- <?php echo anchor('login', 'Login'); ?> -->
            <?php
                $text_cart_url = '<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>';
                $text_cart_url .= ' Login';
            ?>
            <?=anchor('login', $text_cart_url)?>
          </li>
        <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
