<!-- start header -->
<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="ViewCoreBusiness/img/logo.png" alt="logo"/></a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li <?= !empty($home) ? $home : '' ?>>
                        <?= $this->Html->link(__('Home'), ['controller' => 'Home', 'action' => 'index']) ?>
                    </li> 
                    <li <?= !empty($about) ? $about : '' ?>>
                        <?= $this->Html->link(__('About Us'), ['controller' => 'About', 'action' => 'index']) ?>
                    </li>
                    <li <?= !empty($service) ? $service : '' ?>>
                        <?= $this->Html->link(__('Services'), ['controller' => 'Service', 'action' => 'index']) ?>
                    </li>
                    <li <?= !empty($portfolio) ? $portfolio : '' ?>>
                        <?= $this->Html->link(__('Portfolio'), ['controller' => 'Portfolio', 'action' => 'index']) ?>
                    </li>
                    <li <?= !empty($contact) ? $contact : "" ?>>
                        <?= $this->Html->link(__('Contact'), ['controller' => 'Contact', 'action' => 'index']) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- end header -->