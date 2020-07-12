<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- jQuery Revolution Slider  -->
		<script type="text/javascript" src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		
		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/waypoints/jquery.waypoints.min.js"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="plugins/jquery.countTo.js"></script>
		
		<!-- Parallax javascript -->
		<script src="plugins/jquery.parallax-1.1.3.js"></script>

		<!-- Contact form -->
		<script src="plugins/jquery.validate.js"></script>

		<!-- Google Maps javascript -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;signed_in=true"></script>
		<script type="text/javascript" src="js/google.map.config.js"></script>

		<!-- Background Video -->
		<script src="plugins/vide/jquery.vide.js"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="plugins/owl-carousel/owl.carousel.js"></script>
		
		<!-- Pace javascript -->
		<script type="text/javascript" src="plugins/pace/pace.min.js"></script>

		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="plugins/SmoothScroll.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>
		<script>
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
				$('#imageResult')
                .attr('src', e.target.result);
				};
			reader.readAsDataURL(input.files[0]);
			}
		}

		$(function () {
		$('#upload').on('change', function () {
				readURL(input);
		});
		});

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
		var input = document.getElementById( 'upload' );
		var infoArea = document.getElementById( 'upload-label' );

		input.addEventListener( 'change', showFileName );
		function showFileName( event ) {
		var input = event.srcElement;
		var fileName = input.files[0].name;
		infoArea.textContent = 'File name: ' + fileName;
		}
		</script>