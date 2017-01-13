<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 17/09/2016
 * Time: 23:36
 */
echo '<nav class="navbar navbar-default nav navbar-fixed-top ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="'. $home .'">Flora Marcos Ono</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav ">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catalog<span class="caret"></span></a>
          <ul class="dropdown-menu submenu">
          <div class="col-md-12 col-sm-12">
            <div class="col-md-3 col-sm-4">
             <h3 class=" ">Carnivoras</h3>
             <p><a href="'. $dio .'">Dionaea</a></p>
             <p><a href="'. $dro .'">Drosera</a></p>
             <p class=" ">Dionaea</p>
             <p class=" ">Dionaea</p>
             <p class=" ">Dionaea</p>
             <p class=" ">Dionaea</p>
             <p class=" ">Dionaea</p>
             <p class=" ">Dionaea</p>
            </div>  
            <div class="col-md-3 col-sm-4">
             <h3 class=" ">Orquideas</h3>
             <p class=" ">Dionaea</p>
             <p class=" ">Dionaea</p>
             <p class=" ">Dionaea</p>
             <p class=" ">Dionaea</p>
             <p class=" ">Dionaea</p>
             <p class=" ">Dionaea</p>
             <p class=" ">Dionaea</p>
            </div>  
            <div class="col-md-3 col-sm-4">
             <h3 class=" ">Suculentas</h3>
             <p class=" ">See more than 80</p>
            </div>  
            <div class="col-md-3 col-sm-4">
             <h3 class=" ">Ornamental</h3>
             <p class=" ">Dionaea</p>
             <p class=" ">Dionaea</p>
             <p class=" ">Dionaea</p>
             <p class=" ">Dionaea</p>
            </div>
           </div>
          </ul>
        </li>
        <li class=""><a href="#">Seeds</a></li>
        <li class=""><a href="#">Acessórios</a></li>
      </ul>  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Guide</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>';
?>