    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4"><?php echo $title; ?></h1>

                <div class="card mb-4">

                        <form enctype="multipart/form-data" id="product" name="product" method="post" 
                        action="<?php echo base_url(); ?>index.php/Product/actualizar" 
                        class="needs-validation" novalidate>
                            
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="UPC">UPC</label>
                                    <input type="text" class="form-control" name="UPC" 
                                    value=<?php echo $product->UPC?> required readonly>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="product_name">Nombre del Producto</label>
                                    <input type="text" class="form-control" name="product_name" 
                                    value=<?php echo $product->product_name?> required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="product_price">Precio del Producto</label>
                                    <input type="text" class="form-control" name="product_price" 
                                    value=<?php echo $product->product_price?> required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="product_amount">Cantidad de Producto</label>
                                    <input type="text" class="form-control" name="product_amount" 
                                    value=<?php echo $product->product_amount?> required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="product_category_id">ID Categoria del Producto</label>
                                    <input type="text" class="form-control" name="product_category_id" 
                                    value=<?php echo $product->product_category_id?>  required>
                                </div>
                                 <div class="col-md-4 mb-3">
                                    <label for="image_product">Imagen del Producto</label>
                                    <input type="file" class="form-control-file" name="image_product" required>
                                </div>
                            </div>
                        <input type="submit" value="Actualizar Producto">
                        </form>
                </div>
            </div>

        </main>

