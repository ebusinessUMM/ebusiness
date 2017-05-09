  <!-- nav navbar start-->
  <nav class="navbar navbar-inverse bg-primary navbar-fixed-top">
    <div class="container-fluid"> <!-- start container-fluid -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"></button>
        <?=anchor(base_url(), 'RMP', ['class'=>'navbar-brand', 'style'=>'color:white'])?>
      </div>

      <!-- start navbar-collapse -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav" >
           <?php
             $text_dashboard = '<span aria-hidden="true">Dashboard</span>';
           ?>
           <li><?=anchor('admin/dashboard', $text_dashboard)?></li>
           <?php
             $text_products = '<span aria-hidden="true">Products</span>';
           ?>
           <li><?=anchor('admin/products', $text_products)?></li>
           <?php
             $text_chart = '<span aria-hidden="true">Chart</span>';
           ?>
           <li><?=anchor('admin/chart', $text_chart)?></li>
        </ul>
        <?php if ($this->session->userdata('username')) : ?>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <div style="line-height:50px; color: white; margin-right: 5px;">
              <?php
                  $text_user = '<span class="glyphicon glyphicon-user" aria-hidden="true"></span>';
                  $text_user .= ' Halo : ' . $this->session->userdata('username');
                  echo $text_user;
              ?>
            </div>
          </li>
          <li style="margin-right: 10px; color: white;">
            <?php
                $text_cart_url = '<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>';
                $text_cart_url .= ' Logout';
            ?>
            <?=anchor('login/logout', $text_cart_url)?>
          </li>
        </ul>
        <?php endif; ?>

      </div><!-- end navbar-collapse -->

    </div><!-- end container-fluid -->
  </nav>
  <!-- nav navbar end-->
  <br><br><br><br>
