
            <div id="layoutSidenav_content" >
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?php echo $title; ?></h1>
                        
                       <div>
                            <p>
                                <a href="<?php echo base_url();?>/Product/agregar" 
                                   class="btn btn-success">Agregar Productos</a>   
                            </p>                            
                        </div>
                        <div class="card mb-4">
                            
                           <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>UPC</th>
                                            <th>Nombre del Producto</th>
                                            <th>Precio del Producto</th>
                                            <th>Precio de Venta</th>
                                            <th>Cantidad</th>
                                            <th>Fecha de Creacion</th>
                                            <th>Id de Categoria</th>
                                            <th>Imagen</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach($product as $productos){?>
                                        <tr>
                                            
                                             <td><a href="<?php echo base_url().'/Product/editar/'.
                                            $productos->UPC;?>" class="btn btn-info">
                                            <i class="fas fa-user-edit"></i></td>
                                            
                                            <td><a href="<?php echo base_url().'/Product/eliminar/'.
                                            $productos->UPC;?>" class="btn btn-danger">
                                            <i class="far fa-trash-alt"></i></td>
                                            
                                            <td><?php echo $productos->UPC ?></td>
                                            <td><?php echo $productos->product_name ?></td>
                                            <td><?php echo $productos->product_price ?></td>
                                            <td><?php echo $productos->sale_price ?></td>
                                            <td><?php echo $productos->product_amount ?></td>
                                            <td><?php echo $productos->created_date ?></td>
                                            <td><?php echo $productos->product_category_id ?></td>
                                            <td>
                                                <img width="100" src="data:image/jpeg;base64,<?php echo ($productos->product_image) ?>">
                                            </td>
              
                                        </tr>
                            
                                        <?php } ?>
                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                