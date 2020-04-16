        <footer>
            <div class="container">
                <div class="text-center pt-8 pb-8">
                    <a href="<?php echo base_url('changelog'); ?>">Historique des versions</a> • <a href="<?php echo base_url('legal'); ?>">Mentions légales</a>
                </div>
            </div>
        </footer>
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/scripts/progressbar.js'); ?>"></script>
        <script type="text/javascript">
            $(function(){
                $(window).scroll(
                    function () {
                        if ($(this).scrollTop() > 310) {
                            $('#toStick').addClass("sticked");
                        } else {
                            $('#toStick').removeClass("sticked");
						}
					}
				);			 
			});
        </script>
    </body>
</html>