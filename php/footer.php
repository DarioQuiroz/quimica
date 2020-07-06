<!-- Footer -->
<footer class="footer">
  <div class="column">
    <p class="text-sm">¿Necesitas ayuda? ¡Llámanos!<span class="text-primary"> +52 1 464 593 4870</span></p>
    <div class="social-bar text-center space-bottom">

      <!--<a href="#" class="sb-skype" data-toggle="tooltip" data-placement="top" title="Skype">
            <i class="socicon-skype"></i>
          </a>-->
      <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
        <i class="socicon-facebook"></i>
      </a>
      <!-- <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title=""
            data-original-title="Google+">
            <i class="socicon-googleplus"></i>
          </a>-->
      <!-- <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
            <i class="socicon-twitter"></i>
          </a>-->
      <a href="#" class="sb-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
        <i class="socicon-instagram"></i>
      </a>
    </div><!-- .social-bar -->
    <p class="copyright">&copy;2019 Derechos reservados a Office Class.</p>
  </div><!-- .column -->
  <div class="column">
    <h3 class="widget-title">
      Suscripción
      <small>Suscribete para recibir nuestras novedades y promociones.</small>
    </h3>
    <form action="mail.php" method="post" target="_blank" class="subscribe-form" novalidate>
      <div>
      <input type="email" class="form-control" name="Emailreg" placeholder="Email">
      <div class="space-10" style="margin-bottom: 3%;"></div>
      <input type="email" class="form-control" name="Nombrereg" placeholder="Nombre">
      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      </div>
      <div class="g-recaptcha" data-sitekey="6Lcds50UAAAAAG1ZqDyHi0Dq6csfgwxLK2OmdFU0"></div>
      <button style="    margin-top: 10%;   font-size: 250%; display: contents;" type="submit"><i style=" margin-top: 5%;" class="material-icons send"></i></button>
    </form>
  </div><!-- .column -->
  <div class="column">
    <h3 class="widget-title">
      Métodos de pago
      <small>Contamos con los siguientes métodos de pago.</small>
    </h3>
    <div class="cards"><img src="img/cards.png" alt="Cards"></div>
    <!-- Scroll To Top Button -->
    <div class="scroll-to-top-btn"><i class="material-icons trending_flat"></i></div>
  </div><!-- .column -->
</footer><!-- .footer -->
<script src="https://www.google.com/recaptcha/api.js" async defer> </script>

<script src="https://www.google.com/recaptcha/api.js?render=6Lcds50UAAAAAG1ZqDyHi0Dq6csfgwxLK2OmdFU0"></script>
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('6Lcds50UAAAAAG1ZqDyHi0Dq6csfgwxLK2OmdFU0', { action: 'homepage' }).then(function (token) {

        });
    });
</script>