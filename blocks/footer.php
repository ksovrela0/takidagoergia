<?
include("db.php");
?>
<footer id="footer" style="background: grey;">
	<div class="container">
		<div class="row">
			<?
			$GetInfo = mysql_query("SELECT * FROM about WHERE id='1'");
			$GetInfoR = mysql_fetch_array($GetInfo);
			?>
			<div class="col-sm-5 col-md-2">
				<h3>Контактная информация</h3>
				<ul>
					<li><? echo $GetInfoR[address]; ?></li>
					<li><? echo $GetInfoR[mobile]; ?></li>
					<li><? echo $GetInfoR[email]; ?></li>
				</ul>
				<div class="clearfix">
					<div class="social-icon-list">
						<ul>
							
						</ul>
					</div>
				</div>
				<!-- TOP.GE ASYNC COUNTER CODE -->
            <div id="top-ge-counter-container" data-site-id="115124"></div>
            <script async src="//counter.top.ge/counter.js"></script>
            <!-- / END OF TOP.GE COUNTER CODE -->

			</div>
		</div>
	</div>
	<div class="copy"><span>&copy;</span> Copyright TAKIDA GEORGIA. KaWebs 2019</div>
</footer>