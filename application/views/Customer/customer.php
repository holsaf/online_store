
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?php echo $title; ?></h1>
                        
                        <div>
                            <p>
                                <a href="<?php echo base_url();?>/Customer/agregar" 
                                   class="btn btn-success">Agregar Cliente</a>   
                            </p>                            
                        </div>
                        <div class="card mb-4">
                                      
                            
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>Tipo de Documento</th>
                                            <th>Numero de Documento</th>
                                            <th>Nombre del Cliente</th>
                                            <th>Apellido del Cliente</th>
                                            <th>Direccion del Cliente</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($customer as $customeres){?>
                                        <tr>
                                            <td><a href="<?php echo base_url().'/Customer/editar/'.
                                            $customeres->document_num;?>" class="btn btn-info">
                                            <i class="fas fa-user-edit"></i></td>
                                            
                                            <td><a href="<?php echo base_url().'/Customer/eliminar/'.
                                            $customeres->document_num;?>" class="btn btn-danger">
                                            <i class="far fa-trash-alt"></i></td>
                                            
                                            <td><?php echo $customeres->document_type ?></td>
                                            <td><?php echo $customeres->document_num ?></td>
                                            <td><?php echo $customeres->name_customer ?></td>
                                            <td><?php echo $customeres-> lastname_customer ?></td>
                                            <td><?php echo $customeres->address_customer ?></td>
                                                          
                                        </tr>
                                        <?php } ?>
                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </main>
                