</div>
	<div class="icono-elevador">
		<div class="do-the-thing">
			<div class="elevator">
				<svg class="sweet-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" height="100px" width="100px">
					<path d="M70,47.5H30c-1.4,0-2.5,1.1-2.5,2.5v40c0,1.4,1.1,2.5,2.5,2.5h40c1.4,0,2.5-1.1,2.5-2.5V50C72.5,48.6,71.4,47.5,70,47.5z   M47.5,87.5h-5v-25h5V87.5z M57.5,87.5h-5v-25h5V87.5z M67.5,87.5h-5V60c0-1.4-1.1-2.5-2.5-2.5H40c-1.4,0-2.5,1.1-2.5,2.5v27.5h-5  v-35h35V87.5z" />
					<path d="M50,42.5c1.4,0,2.5-1.1,2.5-2.5V16l5.7,5.7c0.5,0.5,1.1,0.7,1.8,0.7s1.3-0.2,1.8-0.7c1-1,1-2.6,0-3.5l-10-10  c-1-1-2.6-1-3.5,0l-10,10c-1,1-1,2.6,0,3.5c1,1,2.6,1,3.5,0l5.7-5.7v24C47.5,41.4,48.6,42.5,50,42.5z" />
				</svg>
				VOLVER AL INICIO
			</div>
		</div>
	</div>

	<script>
		// Simple elevator usage.
		var elementButton = document.querySelector('.elevator');
		var elevator = new Elevator({
			element: elementButton,
			mainAudio: '<?= base_url ?>assets/music/elevator.mp3', // Music from http://www.bensound.com/
			endAudio: '<?= base_url ?>assets/music/ding.mp3'
		});
	</script>

<!--pie de pagina-->
<footer id="footer">
	<p>
		Todos los derechos reservados &copy; <?= date('Y') ?> Luis Fernando Cifuentes Corba
	</p>
</footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
        crossorigin="anonymous"></script>
    <script src="js/particles.js"></script>
	<script src="<?= base_url ?>assets/js/particles.js"></script>
	<script src="<?= base_url ?>assets/js/app.js"></script>
	<script src="<?= base_url ?>assets/js/main.js"></script>
	
</body>

</html>