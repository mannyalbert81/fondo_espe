    <form id="form-mensajes" action="<?php echo $helper->url("Mensajes","index"); ?>" method="post" class="col-lg-12 col-md-12 col-xs-12">
   	
   			<div class="row" style="margin-top: 40px;" >
			  <div class="col-xs-12 col-md-1 col-lg-1">
			  </div>
			  
			  <div>
			  <div class="col-xs-12 col-md-10 col-lg-10" style=" background-color: #fbfbfb; border-radius: 5px 5px 5px 5px;"> 
				  <div class="col-xs-12 col-md-6 col-lg-6" style="margin-top: 20px; " >
				  	 
				
					 <div class="row">
		            	<div class="col-xs-12 col-md-6 col-lg-6">
		            	  <div id="mapa" name="mapa" style="height:200px;border:2px solid green;"></div>
		
		            	</div>
		            	<div class="col-xs-12 col-md-6 col-lg-6">
		            		<hr>
		            	  	<p class="contacto">   <span class="glyphicon glyphicon-road fa-spin" aria-hidden="true"></span>  Edif. MAGAP Piso 9</p>
					  		<p class="contacto">   <span class="glyphicon glyphicon-globe fa-spin" aria-hidden="true"></span> Quito – Ecuador</p>
					  		<p class="contacto">   <span class="glyphicon glyphicon-phone-alt fa-spin" aria-hidden="true"></span> (+59)2 436 4566 - (+59)3 987 968 467</p>
					  		<p class="contacto">   <span class="glyphicon glyphicon-comment fa-spin" aria-hidden="true"></span> Skype: vademano</p>
					  		<p class="contacto">  <span class="glyphicon glyphicon-envelope fa-spin" aria-hidden="true"></span> info@vademano.com</p>
					        <hr>    	  	
		            	</div>
		            </div>	
				  	
				  </div>
				  <div class="col-lg-6 col-md-6 col-xs-12">
				  
           <h4 >Enviar Mensaje</h4>
            <hr/>
           <?php if (isset($resultado)) {?>
        	<?php if ($resultado == "true") {?>
        	
	        	  <div class="alert alert-success" role="alert">Tu mensaje se envio <strong> correctamente </strong>, Responderemos tu mensaje al correo que ingresaste.</div>
				
			<?php }else {?>
				  <div class="alert alert-danger" role="alert">Ocurrio un error al enviar su mensaje, vuelva a intentarlo.</div>
				
			<?php }} ?>
			
			<div class="row">
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                             <label id="nombres_usuario"  class="control-label">Nombres:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-address-book" ></i></span>
							  <input class="form-control" type="text" id="nombres_usuario" name="nombres_usuario" placeholder="Nombres">
							</div>
							<span class="help-block"></span>
							</div>
            
            
            </div>
		    
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                             <label for="apellidos_usuario" class="control-label">Apellidos:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-address-book-o"></i></span>
							  <input class="form-control" type="text" id="apellidos_usuario" name="apellidos_usuario" placeholder="Apellidos">
							</div>
                        	<span class="help-block" ></span>
							</div>
            
		    </div>
			</div>
			
			
		
		    
		    <div class="row">
			<div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                                  <label for="paises" class="control-label">Pais:</label>
                                  <select name="paises" id="paises"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultPais as $res) {?>
										<option value="<?php echo $res->id_pais; ?>" ><?php echo $res->nombre_pais; ?> </option>
							        <?php } ?>
								   </select> 
                                 <span class="help-block" ></span>
            </div>
            
            </div>
			
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                                  <label for="provincias" class="control-label">Provincia:</label>
                                  <select name="provincias" id="provincias"  class="form-control" >
                                  <option value=""> -- SIN ESPECIFICAR -- </option>
								   </select> 
                            <span class="help-block" ></span>
            </div>
            
            </div>
			</div>		
	  		
	  		<div class="row">
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                             <label for="telefono_usuario" class="control-label">Teléfono:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-volume-control-phone"></i></span>
							  <input class="form-control" type="text" id="telefono_usuario" name="telefono_usuario" placeholder="Teléfono">
							</div>							
							</div>
            
            
            </div>
		    
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                             <label for="celular_usuario" class="control-label">Celular:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
							  <input class="form-control" type="text" id="celular_usuario" name="celular_usuario" placeholder="Celular">
							</div>                        	
							</div>
            
		    </div>
			</div>
			

        	
        			
        	<div class="row">        	
        	  
		    <div class="col-xs-12 col-md-12 col-lg-12">
		    <div class="form-group">
                             <label for="correo_usuario" class="control-label">Email:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							  <input class="form-control" type="email" id="correo_usuario" name="correo_usuario" placeholder="Email">
							</div>
                        	<span class="help-block" ></span>
							</div>
            
		    </div>        	
            </div>
            
             <div class="row">
	         <div class="col-xs-12 col-md-12 col-lg-12">
		     <div class="form-group ">
		                          <label for="mensaje" class="control-label">Mensaje:</label>
                                  <textarea type="text"  class="form-control" id="mensaje" name="mensaje" value=""  placeholder="Mensaje"></textarea>
                                  <span class="help-block" ></span>
			 
             </div>
		     </div>
	  		 </div> 
           
	   		
		    
		    
		     <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; ">
						    <div class="col-xs-12 col-md-4 col-lg-4" style="text-align: center;">
						    </div>
						     <div class="col-xs-12 col-md-4 col-lg-4" style="text-align: center;">
						      <div class="form-group">
						      
				                    <button type="submit" id="btn_guardar" value="" name="btn_guardar" class="btn btn-info btn-block" ><i class="fa fa-unlock fa-spin" aria-hidden="true"></i> Enviar</button>
				          
				            </div>
						    </div>
						     <div class="col-xs-12 col-md-4 col-lg-4" style="text-align: center;">
						    </div>
						    </div>
		     	  </div>
				  </div>
				  </div>
				  
			  
			  <div class="col-xs-12 col-md-1 col-lg-1">
			  </div>
			</div>
   	
   	  </form>