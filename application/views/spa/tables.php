<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        
        <script src="<?php echo base_url( ) ?>assets/css/all.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url( ) ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url( ) ?>assets/css/styles.css">
        
        <script src="<?php echo base_url() ?>assets/js/vue/vue.js"></script>
        <script src="<?php echo base_url() ?>assets/js/vue/vue-router.js"></script>
        
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.15.0/css/all.css"
            integrity="sha384-OLYO0LymqQ+uHXELyx93kblK5YIS3B2ZfLGBmsJaUyor7CpMTBsahDHByqSuWW+q"
            crossorigin="anonymous"
            />
        <!-- Bootstrap Reset -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap-reboot.min.css"
            />
        <!-- Bootswatch Darkly-->
        <link
            rel="stylesheet"
            href="https://bootswatch.com/4/darkly/bootstrap.min.css"
            />
        <!-- CSS -->

        <!-- CSS Desktop -->
        <link
            rel="stylesheet"
            href="<?php echo base_url( ) ?>assets/css/desktop.css"
            media="screen and (min-width: 520px)"
            />
        
        
    </head>
    <body class="sb-nav-fixed">
        <div id="app" class="min-vh-100">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-2" href="<?php echo base_url()?>/">Mark Tecnology Service</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- Cart Button -->
            <div class="dropdown" align="right">
            <button
              class="btn btn-info btn-block dropdown-toggle d-flex justify-content-end align-items-baseline"
              data-toggle="dropdown"
            >
              <i class="fas fa-shopping-cart fa-1x mx-1"></i>
              <div class="mx-2 text-left" >
                <p class="m-0">Productos: {{cantidadCar}}</p>
                <p class="m-0">Total: $ {{totalcompra}}</p>
              </div>
            </button>
            
            <div class="dropdown-menu w-100 p-1">
            
              <!-- item product cart -->
              <div
                class="d-flex align-items-center border border-info mb-1 p-1 justify-content-around"
                v-for="product in car"
              >
                <i class="fas fa-cart-arrow-down fa-2x"></i>
                <div class="text-left">
                  <p class="m-0 fs-14">Porducto:{{product.product_name}}</p>
                  <p class="m-0 fs-14">Cant: {{product.amount}}</p>
                  <p class="m-0 fs-14">Precio: {{product.product_price}}</p>
                </div>
                <span class="delte-item" @click="removeProducto(product)"
                  >X</span
                >
              </div>
              
              <div class="dropdown-divider"></div>
              <button class="btn btn-info btn-lg active" @click="">Go to Cart</button>
              <!--<router-link to="/comprar" class="btn btn-info btn-lg active">Go to Cart</router-link>-->
              <button class="btn btn-danger btn-block" @click="">Clean Cart</button>
            </div>
            
            </div>
            <!--/Cart Button -->
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fab fa-shopify"></i></div>
                                LAPTOP
                            </a>
   
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fab fa-shopify"></i></div>
                                SMARTPHONE
                            </a>
   
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fab fa-shopify"></i></div>
                                TV
                            </a>
   
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fab fa-shopify"></i></div>
                                SONIDO
                            </a>
   
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fab fa-shopify"></i></div>
                                JUEGOS
                            </a>
   
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fab fa-shopify"></i></div>
                                INFORMATICA
                            </a>
   
                        </div>
                    </div>
                </nav>
            </div>            
            <div id="layoutSidenav_content" >
                    <main >
                        <div   class="grid-products">                       
                            <div  class="card" v-for="product in productos">
                                
                                <img :src="'data:image/jpge;base64,'+ product.product_image" class="card-img-top"
                                     alt="logo-product">
  
                                    <div class="card-body">
                                    <h3 class="card-title text-center">{{product.product_name}}</h3>
                                    <p class="card-text text-center">Stock: {{ product.product_amount}}</p>
                                    <p class="card-text text-center">{{product.sale_price}}</p>
                                    <button
                                        v-if="product.product_amount > 0"
                                        class="btn btn-primary btn-block"
                                        @click="addCart(product)"
                                        >
                                        Add to Cart
                                    </button>
                                    <button v-else class="btn btn-primary btn-block" disabled>
                                        Out Stock
                                    </button>
                                   
                                    </div>
                            </div>
                            


                        </div>

                   
                    </main>
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">
                                    Copyright &copy; Mark (ZXY) 
                                </div>
                                <div>
                                    <a href="#">Siguenos en nuestras redes</a>
                                    &middot;
                                </div>  
                            </div>
                        </div>
                    </footer>
                
            </div>     
        </div>
        </div>
      
        <script src="<?php echo base_url() ?>assets/js/vue/app.js"></script>

        <script src="<?php echo base_url() ?>assets/js//bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
        <script src="<?php echo base_url() ?>assets/js/simple-datatables@latest.js"></script>
        <script src="<?php echo base_url() ?>assets/js/datatables-simple-demo.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <!-- Scripts Bootstrap -->
        <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"
        ></script>


        
        
    </body>
</html>
                

