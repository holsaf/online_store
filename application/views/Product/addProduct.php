    <div id="layoutSidenav_content" >
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4"><?php echo $title; ?></h1>

                <div>
                    <p>
                        <a href="<?php echo base_url(); ?>/product/agregar" 
                           class="btn btn-success">Agregar Producto</a>   
                    </p>                            
                </div>
                <div class="card mb-4">

                        <form enctype="multipart/form-data" id="product" name="product" method="post" 
                        action="<?php echo base_url(); ?>index.php/Product/registrar" 
                        class="needs-validation" novalidate>
                            
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="UPC">UPC</label>
                                    <input type="text" class="form-control" name="UPC" 
                                    placeholder="Escriba el UPC " required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="product_name">Nombre del Producto</label>
                                    <input type="text" class="form-control" name="product_name" 
                                    placeholder="Escriba el Nombre del Producto " required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="product_price">Precio del Producto</label>
                                    <input type="text" class="form-control" name="product_price" 
                                    placeholder="Escriba el Precio del Producto" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="product_amount">Cantidad de Producto</label>
                                    <input type="text" class="form-control" name="product_amount" 
                                           placeholder="Escriba la cantidad de producto"  required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="product_category_id">ID Categoria del Producto</label>
                                    <input type="text" class="form-control" name="product_category_id" 
                                           placeholder="Escriba el ID de la Categoria"  required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="image_product">Imagen del Producto</label>
                                    <input type="file" class="form-control-file" name="image_product" required>
                                </div>
                            </div>
                        <input type="submit" value="Registrar">
                        </form>
                </div>
            </div>

        </main>

