<?php


?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        

        <?= $this->Html->css('style.css') ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>
    <main class="main">
        
    </main>
    <div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Admin</h3>
        </div>

        <ul class="list-unstyled components">
            <!-- <p>Dummy Heading</p>
         --><li>
                <a>
                    <?= $this->Html->link(__('Dashboard'), ['controller'=>'admin','action' => 'index']) ?>
                </a>
            </li>
            <li>
                <a href="#trainer" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Trainers</a>
                <ul class="collapse list-unstyled" id="trainer">
                    <li>
                        <?= $this->Html->link(__('List of trainers'), ['controller'=>'user','action' => 'index','1']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link(__('Add New Trainer'), ['controller'=>'user','action' => 'addMember','1']) ?>
                    </li>
                    <li>
                        <a href="#">Trainer Salaries</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#member" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Members</a>
                <ul class="collapse list-unstyled" id="member">
                    <li>
                        <?= $this->Html->link(__('List of Members'), ['controller'=>'user','action' => 'index','2']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link(__('Add New Members'), ['controller'=>'user','action' => 'addMember','2']) ?>
                    </li>
                    <li>
                        <a href="#">Member Payments</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Equipments</a>
            </li>
            <li>
                <a href="#">Reports</a>
            </li>
        </ul>
    </nav>


    <div id="content">
            <!-- We'll fill this with dummy content -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-bars"></i>
                        <span></span>
                    </button>

                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" style="color:black;">
                          <?= $this->Html->link(__('Logout'), ['controller'=>'admin','action' => 'logout']) ?>
                      </a>
                    </li>
                </ul>
            </nav>

            
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
    
        </div>

    </div>  

    <footer>
    </footer>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


    <!-- Javascript for sidebar -->
    <script type="text/javascript">
        $(document).ready(
            function () 
                {
                    $('#sidebarCollapse').on('click', function () 
                    {
                        $('#sidebar').toggleClass('active');
                    });
                });
    </script>

</body>
</html>



