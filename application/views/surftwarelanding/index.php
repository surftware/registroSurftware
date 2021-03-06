<?php
	$this->load->view('surftwarelanding/head');
	$this->load->view('surftwarelanding/nav');
 ?>
<div class="welcome">
	<div class="center">
		<div class="welcome__wrap  wow slideInLeft">
			<div class="text_1">
				Surfware
			</div>
			<div class="text_2">
				Servicios TI a tu medida </div>
			<div class="text_3">
				Nos dedicamos a ofrecerte soluciones en Tecnologías de la Información
				para tu negocio y tu hogar.
				Porque la tecnología debe estar al alcance de todos
			</div>
			<div class="btn__wrap__left">
				<a href="<?php echo base_url();?>index.php/Surftwarelanding/servicios#contacts" class="btn btn__large btn__orange">Contáctanos</a>
			</div>
		</div>
	</div>
</div>

</div>

</header>

<div class="">
	<div class="block about" id="about">
		<div class="center">
			<div class="about__wrap">
				<div class="left_side  wow slideInLeft">
					<div class="block__title">
						<span>¿Quienes Somos?</span>
						Surftware
					</div>
					<p>
						Somos un grupo de emprendedores interesados en la Ingeniería y nuevas formas de hacer las
						cosas; implementamos metodologías, actividades y actitudes que impacten de manera positiva
						en la sociedad mexicana primero y después en el mundo, poniendo de manifiesto que en México
						también puede existir desarrollo tecnológico e innovación.
					</p>
					<div class="btn__wrap__left">
						<a href="#" class="btn btn__large btn__blue">Detalles</a>
					</div>
				</div>
				<figure class=" wow slideInRight">
					<img src="<?php echo base_url(); ?>public/images/about_img.png" alt="">
				</figure>
			</div>
		</div>
	</div>



	<div class="block featured_product" id="featured_product">
		<div class="center">
			<div class="">
				<div class="textPromo">
					!!Promociones Espéralas Pronto!!
				</div>
				<a href="#" class="featured_product_play">
				</a>
			</div>
		</div>
	</div>

	<div class="block benefits" id="benefits">
		<div class="center">
			<div class="block__title wow bounceIn">
				<span>Nuestras Garantías</span>
				Motivos por los que nuestros clientes nos prefieren por sobre la competencia:
			</div>
			<div class="item__list">
				<div class="item wow fadeInUp">
					<figure>
						<img src="<?php echo base_url(); ?>public/images/benefits_icon_1.png" alt="">
					</figure>
					<div class="title">
						B2B Lead Generation
					</div>
					<div class="descr">
						<p>
							Our team of experts carries lead generation, and helps you drive leads to you own website.
						</p>
					</div>
				</div>
				<div class="item wow fadeInUp" data-wow-delay="0.1s">
					<figure>
						<img src="<?php echo base_url(); ?>public/images/benefits_icon_2.png" alt="">
					</figure>
					<div class="title">
						Digital Marketing Strategy
					</div>
					<div class="descr">
						<p>
							We will show you how to set your own digital marketing strategy right now.
						</p>
					</div>
				</div>
				<div class="item wow fadeInUp" data-wow-delay="0.2s">
					<figure>
						<img src="<?php echo base_url(); ?>public/images/benefits_icon_3.png" alt="">
					</figure>
					<div class="title">
						Native Advertising
					</div>
					<div class="descr">
						<p>
							Attract new customers with this inexpensive and effective new digital acquisition tool.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="ads_bar" id="ads_bar">
		<div class="center clearfix">
			<div class="text wow fadeInRight">
				<img src="<?php echo base_url(); ?>public/images/ads_bar_img.png" alt="" class="img wow fadeInLeft">
				<div class="title">
					Check your website performance now!
				</div>
				<p>
					Want to discover your website potential? Send us a request and get a free consultation.
				</p>
				<div class="btn__wrap__left">
					<a href="#" class="btn btn__large btn__white">Request a callback</a>
				</div>
			</div>
		</div>
	</div>
	<div class="block sponsors" id="sponsors">
		<div class="center">
			<div class="block__title wow bounceIn">
				<span>Páginas Web hechas por nosotros</span>
				Nuestros clientes
			</div>

			<div class="owl-carousel owl_sponsors">
				<div>
					<a href="http://surftware.company//" target="_blank"><img
							src="<?php echo base_url(); ?>public/images/clientes/cliente-creacion-sitio-web-5.png" alt="">
							<p>Constructora y Equipos Hidráhulicos Mexicanos</p></a>
				</div>
				
				<div>
					<a href="http://www.conversationalspanishmx.com/" target="_blank"><img
							src="<?php echo base_url(); ?>public/images/clientes/cliente-creacion-sitio-web-3.png" alt=""></a>
				</div>
				<div>
					<a href="http://www.vmyasc.com.mx/" target="_blank"><img
							src="<?php echo base_url(); ?>public/images/clientes/cliente-creacion-sitio-web-4.png" alt="">
						<p class="mt-3">Víctor Montes y ASociados</p>
					</a>
				</div>

				<div>
					<a href="https://aldazy.com/index.html" target="_blank"><img
							src="<?php echo base_url(); ?>public/images/clientes/cliente-creacion-sitio-web-2.png" alt=""></a>
				</div>

				<div>
					<a href="http://dd-scrubs.com.mx" target="_blank"><img
							src="<?php echo base_url(); ?>public/images/clientes/cliente-creacion-sitio-web-1.png" alt="">
						<p>Dd-Scrubs</p>
					</a>
				</div>

				<div>
					<a href="https://sexydiversion.com.mx" target="_blank"><img
							src="<?php echo base_url(); ?>public/images/clientes/cliente-creacion-sitio-web-6.png" alt="">
						<p>Sexy Diversión</p>
					</a>
				</div>


			</div>
		</div>
	</div>


</div>

</div>

<?php
  $this->load->view('surftwarelanding/footer');
  $this->load->view('surftwarelanding/js');
?>


</body>
</html>