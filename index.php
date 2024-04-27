<!DOCTYPE html>
<html lang="en">
	
    <?php include "vista/head.php" ?>
    
	<body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            
			    <?php include "vista/nav.php" ?>

			
            <!-- Header-->
		<header class="bg-black bg-gradient py-5">
					<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<img class="img-fluid rounded-3 my-6" width="80%" src="imag/logo.jpg" alt="..." />
					</div>
					<div class="col-md-6">
						<div class="my-5 text-center text-md-start">
							<h1 class="display-2 fw-bolder text-white">Estetica Arely Beltrán</h1>
							<p class="display text-white fw-bolder 70 mb-8">Luce una mirada de impacto y encantadora en todo momento 💗🍓!!</p>
							<div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-md-start">
								<!-- Agrega aquí tus botones si es necesario -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
					
            <!-- Features section-->
            <section class="bg-black bg-gradient py-2" id="features">
                <div class="container px-3 my-3">
				<div class="my-2 text-center color:white text-xl-start">
				<h1 class="display-2 fw-bolder text-white">GALERIA</h1>
                    
                     <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-inner" align="center">
						<div class="carousel-item active" data-bs-interval="5000">
						  <img src="imag/1.jpg" class="d-block" height="500px" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="5000">
						  <img src="imag/2.jpg" class="d-block" height="500px" alt="..">
						</div>
						<div class="carousel-item" data-bs-interval="5000"> 
						  <img src="imag/3.1.jpg" class="d-block"  height="500px" alt="...">
						</div>
					  </div>
					  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					  </button>
					</div>
					
                </div>
            </section>
			
            <!-- Testimonial section-->
            <div class="py-2 bg-black bg-gradient">
                <div class="container px-1 my-1">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-md-12">
                            <div class="accordion" id="accordionExample">
							  <div class="accordion-item">
								<h2 class="accordion-header" id="headingOne" >
								  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Beneficios ❤️
								  </button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								  <div class="accordion-body">
									<strong>HENNA BROWS.</strong>🧐 Con la henna nutrimos e hidratamos el vello de las cejas y con ello lograremos también estimular el crecimiento. 😁Nos brinda un aspecto natural. 👍El contenido quimico es inferior al 2%. 👌 Su dureción es de hasta 4 semanas en el vello y 2 semanas en la piel. (Dependeía mucho de las actividades diarias y ph de la piel). 😎 Su intencidad va disminuyendo de manera natural, sin alterar el tono.
								  </div>
								</div>
							  </div>

							</div>
                        </div>
                    </div>
                </div>
            </div>
			
            <!-- Blog preview section-->
		<section class="bg-black bg-gradient py-5">
       		<div class="container px-6 my-6">
         		<div class="row justify text-white content-center">
               		<h2 class="display-2 fw-bolder">Promociones</h2>

              		<div class="col-12 col-md-4">
                    	<div class="card bg-light custom-card">
                   	   			 			 <img src="imag/1.jpg" class="card-img-top img-fluid" alt="Planchado HD">
                       		 			<div class="card-body">
                           							 <h5 class="card-title">😻LAMINADO DE CEJAS😻</h5>
                           							<p class="card-text">💗 Laminado o planchado de cejas.</p>
                       				 </div>
                    		</div>
               			 </div>

              			 		    <div class="col-12 col-md-4">
                   					 <div class="card bg-light custom-card">
                        		  			<img src="imag/2.jpg" class="card-img-top img-fluid" alt="CEJAS HD">
                        				    <div class="card-body">
                           						 <h5 class="card-title">😻CEJAS HD😻</h5>
                            						<p class="card-text">💗 Depilación con cera o perfilador.</p>
                        					</div>
                  						  </div>
                    				</div>

                			<div class="col-12 col-md-4">
                   				 <div class="card bg-light custom-card">
                      				  <img src="imag/3.1.jpg" class="card-img-top img-fluid" alt="Mantenimiento en proceso">
                       					 <div class="card-body">
                           						 <h5 class="card-title">😻LAMIBROWS PIGMENTACIÓN😻</h5>
												<p class="card-text">💗 Diseño de tus cejas acordé a tu rostro.</p>
							 				</div>
                  		  			</div>
               				 </div>
          			  </div>
       				</div>
		</section>
			<section class="bg-black bg-gradient py-4">
						<div style="display:flex; justify-content: space-between; align-items: flex-start;">
				<!-- Plugin de Facebook -->
				<div style="margin-left: 300px;  flex: 1;">
								<h2 style="color:white">Facebook</h2>
								<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FElClosetDeLasFloresMtz&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
									width="500" height="500" style="border:none; overflow:hidden; border-radius: 15px;" scrolling="no" frameborder="0" allowfullscreen="true" 
									allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
								</iframe>
							</div>

							<!-- Mapa de Google -->
							<div style="flex: 1;">
								<h2 style="color:white">Ubicación</h2>
								<iframe src="https://www.google.com/maps/d/u/2/embed?mid=18FxUhZYUVkmfJzgnMTBGD2RASEvkpBc&ehbc=2E312F&noprof=1" width="500" height="500" style="border:none; border-radius: 15px;" ></iframe>
				</div>
</div>
			</section>
		
			
				   
            <!-- Call to action
                    <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                            <div class="mb-4 mb-xl-0">
                                <div class="fs-3 fw-bold text-white">New products, delivered to you.</div>
                                <div class="text-white-50">Sign up for our newsletter for the latest updates.</div>
                            </div>
                            <div class="ms-xl-4">
                                <div class="input-group mb-2">
                                    <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                                    <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                                </div>
                                <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                            </div>
                        </div>
                    </aside>--> 
                
			
        </main>
		
        <?php include "vista/footer.php" ?>
		
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content modal-sm">
			  <div class="modal-header bg-success text-white">
				<h1 class="modal-title fs-5" id="exampleModalLabel">hostia tio!</h1>
			  </div>
			  <div class="modal-body">
				esto es super importante :3
			  </div>
			  <div class="modal-footer bg-warning">
				<button type="button" class="btn btn-dark bg-gradient" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary bg-gradient">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		
    </body>
</html>