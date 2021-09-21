    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4"><?php echo $title; ?></h1>

                <div>
                    <p>
                        <a href="<?php echo base_url(); ?>/Customer/agregar" 
                           class="btn btn-success">Agregar Cliente</a>   
                    </p>                            
                </div>
                <div class="card mb-4">

                        <form id="customer" name="customer" method="post" 
                        action="<?php echo base_url(); ?>index.php/Customer/registrar" 
                        class="needs-validation" novalidate>
                            
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Tipo de Documento</label>
                                    <input type="text" class="form-control" name="document_type" 
                                    placeholder="Escriba el Tipo de Documento " required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Numero de Documento</label>
                                    <input type="text" class="form-control" name="document_num" 
                                    placeholder="Escriba el Numero de Documento " required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Nombre del Cliente</label>
                                    <input type="text" class="form-control" name="name_customer" 
                                    placeholder="Escriba el Nombre del Cliente" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Apellido del Cliente</label>
                                    <input type="text" class="form-control" name="lastname_customer" 
                                           placeholder="Escriba el Apellido del Cliente"  required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Direccion del Cliente</label>
                                    <input type="text" class="form-control" name="address_customer"
                                           placeholder="Escriba la Direccion del Cliente" required>
                                </div>
                            </div>
                        <input type="submit" value="Registrar">
                        </form>
                </div>
            </div>

        </main>

