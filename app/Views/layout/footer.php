 </div></div></div>
 <footer class="footer-javawebmedia">
      Web Design by <a href="https://Javacation.com" target="_blank">Javacation</a>
    </footer>
  </div>
  </div>
  <script src="<?php echo base_url() ?>/assets/jquery/jquery.min.js"></script>
  <!-- ckeditor -->
  <script src="<?php echo base_url() ?>/assets/ckeditor5/build/ckeditor.js"></script>
	<script>ClassicEditor
			.create( document.querySelector( '.editor' ), {
				toolbar: {
					items: [
						'heading',
						'|',
						'bold',
						'italic',
						'link',
						'bulletedList',
						'numberedList',
						'|',
						'indent',
						'outdent',
						'|',
						'imageUpload',
						'blockQuote',
						'insertTable',
						'mediaEmbed',
						'undo',
						'redo'
					]
				},
				language: 'en',
				image: {
					toolbar: [
						'imageTextAlternative',
						'imageStyle:full',
						'imageStyle:side'
					]
				},
				table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells',
						'tableProperties'
					]
				},
				licenseKey: '',
			} )
			.then( editor => {
				window.editor = editor;
			} )
			.catch( error => {
				console.error( error );
			} );
	</script>
</body>
</html>