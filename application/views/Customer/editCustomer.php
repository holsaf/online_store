    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4"><?php echo $title; ?></h1>

                <div class="card mb-4">

                        <form id="customer" name="customer" method="post" 
                        action="<?php echo base_url(); ?>index.php/Customer/actualizar" 
                        class="needs-validation" novalidate>
                            
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Tipo de Documento</label>
                                    <input type="text" class="form-control" name="document_type" 
                                    value=<?php echo $customer->document_type ?> required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Numero de Documento</label>
                                    <input type="text" class="form-control" name="document_num" 
                                    value=<?php echo $customer->document_num ?> required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Nombre del Cliente</label>
                                    <input type="text" class="form-control" name="name_customer" 
                                    value=<?php echo $customer->name_customer ?> required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Apellido del Cliente</label>
                                    <input type="text" class="form-control" name="lastname_customer" 
                                           value=<?php echo $customer->lastname_customer ?>  required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Direccion del Cliente</label>
                                    <input type="text" class="form-control" name="address_customer"
                                           value=<?php echo $customer->address_customer ?> required>
                                </div>
                            </div>
                        <input type="submit" value="Actualizar Cliente">
                        </form>
                </div>
            </div>

        </main>

