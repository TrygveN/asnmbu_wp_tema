</main>
<?php get_sidebar(); ?>
</div>
<div id="strava"></div>
<script>
const iframe = document.createElement("iframe");
iframe.src = "https://www.strava.com/clubs/74393/latest-rides/97b0a487de016d7c5947f105625a0ee631f8365f?show_rides=true";
iframe.width = 300;
iframe.height = 454;
iframe.loading = "lazy";

// Add to div element with class named frameDiv
const frameDiv = document.getElementById("strava");
frameDiv.appendChild(iframe);
</script>


<footer id="footer" role="contentinfo">
<img src="https://asnmbu.oj-oj.net/wp-content/uploads/2025/11/ano-logo_bred600p.jpg" style="max-width: 100%;">
<div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
<p>Webmaster: <a href="mailto:trygve@trygve.net">trygve@trygve.net</a></p>
<span><a href="https://asnmbu.oj-oj.net/wp-login.php">Logg inn</a></span> - 
<span><a href="https://asnmbu.oj-oj.net/wp-login.php?action=register">Registrer ny bruker</a></span>
</footer>
</div>
<?php wp_footer(); ?>
<script data-goatcounter="https://asnmbu.teller.trygve.net/count"
        async src="//asnmbu.teller.trygve.net/count.js"></script>
</body>
</html>
