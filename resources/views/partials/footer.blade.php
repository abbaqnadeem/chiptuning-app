<!-- START Bootstrap-Cookie-Alert -->
<div class="alert text-left cookiealert shadow " role="alert">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
        Om de gebruiksvriendelijkheid van onze website en diensten te optimaliseren maken wij gebruik van cookies. Voor het plaatsen van sommige cookies hebben we echter wel je toestemming nodig. Als je meer wilt weten over de cookies die wij gebruiken en de gegevens die we daarmee verzamelen, lees dan onze
        <a class="underline text-maroon" href="{{ url('privacy') }}">Privacyverklaring</a>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn acceptcookies maroon-bg text-white maroon-border" aria-label="Close">
                Ik ga akkoord
            </button>
        </div>
    </div>
</div>
<!-- END Bootstrap-Cookie-Alert -->

<!-- Modal -->
<div class="modal fade" id="readMoreModal" tabindex="-1" role="dialog" aria-labelledby="readMoreModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="readMoreModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body review_description" id="readMoreModalBody"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer id="footer" class="soft-bg text-dark py-5 mt-3">
    <div class="container py-5 gray-border">
        <div class="row">
            <div class="center-mobile col-lg-3 col-md-4 col-sm-4 col-xs-12 mb-2 pl-0">
                <h6 class="text-uppercase">Menu</h6>
                <ul class="nav flex-column">
                    <li><a class="text-muted" rel="nofollow" href="{{ url('/') }}">Home</a></li>
                    <li><a class="text-muted" rel="nofollow" href="{{ url('/#about_us') }}">About</a></li>
                    <li><a class="text-muted" rel="nofollow" href="{{ url('contact-us') }}">Contact</a></li>
                    <li><a class="text-muted" rel="nofollow" href="{{ url('cars-gallery') }}">Gallery</a></li>
                </ul>
            </div>
            <div class="center-mobile col-lg-3 col-md-4 col-sm-4 col-xs-12 mb-2">
                <h6 class="text-uppercase">Bedrijf</h6>
                <ul class="nav flex-column">
                    <li><a class="text-muted" href="{{ url('/#about_us') }}">About Us</a></li>
                    <li><a class="text-muted" href="javascript:void(0)">Career</a></li>
                    <li><a class="text-muted" href="{{ url('contact-us') }}">Contact</a></li>
                    <li><a class="text-muted" href="{{ url('blog/') }}/{{ Str::slug($latest_post->title, '-') }}-{{ $latest_post->id }}">Nieuws</a></li>
                </ul>
            </div>
            <div class="center-mobile col-lg-3 col-md-4 col-sm-4 col-xs-12 mb-2">
                <h6 class="text-uppercase">Terms & Policies</h6>
                <ul class="nav flex-column">
                    <li><a class="text-muted" target="_blank" href="https://shop.chiptuningrotterdam.nl/shop">Webshop</a></li>
                    <li><a class="text-muted" href="javascript:void(0)">Login</a></li>
                    <li><a class="text-muted" href="{{ url('privacy') }}">Privacyverklaring</a></li>
                    <li><a class="text-muted" href="javascript:void(0)">Terms & Service</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-12 mb-2 text-left" id="footer_subscribe_section">
                <h6 class="text-uppercase">schrijf je in voor de nieuwsbrief</h6>
                <!-- <form class="form-subscribe form" action="/subscribe" accept-charset="UTF-8" method="post"><input
                        name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token"
                                                                   value="pOIcuxnmTNcjDmetU5K4L5Y4ZKBuZH0Od+haauDwV1B1YRcK1GyRqdqrXJmXbZ4P8jxzT62Ele0DU0QjeOKpXQ==">
                    <label class="sr-only"> Email </label>
                    <div class="row">
                        <div class="col-lg-8">
                            <input type="email" name="subscribe_email" id="subscribe_email"
                                   class="form-control mb-2 pt-4 pb-4" placeholder="Your Email Address">
                        </div>
                        <div class="col-lg-4 pl-0" id="footer_subscribe_elem">
                            <button type="button" name="commit" id="subscribe_btn"
                                    class="btn maroon-bg text-white mb-2">Send
                            </button>
                        </div>
                    </div>
                </form> -->


                <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://chiptuningrotterdam.us4.list-manage.com/subscribe/post?u=a29702af681bf775990cf8c87&amp;id=0c7280306f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate soft-bg pl-0" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">

    <div class="mc-field-group">
        <!-- <label for="mce-EMAIL">  <span class="asterisk">*</span> -->
    </label>
	<input type="email" value="" placeholder="Email adres" name="EMAIL" class="required email form-control" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a29702af681bf775990cf8c87_0c7280306f" tabindex="-1" value=""></div>
        <div id="subscribe-wrapper">
            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn maroon-label h-40"></div>
        </div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';} (jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->


                <!-- <div class="col-lg-12" id="footer_social_media_elem">
                    <ul class="social-network social-circle">
                        <li><a href="javascript:void()" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="javascript:void()" title="Facebook"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="javascript:void()" title="Facebook"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="javascript:void()" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div> -->
            </div>
        </div>
        <!--/row-->
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-3 col-md-6 col-sm-12" id="dark-logo-elem">
                <img id="logo-dark" class="img img-responsive" src="{{ asset('images/logo-dark.png') }}" alt="Footer Logo"
                     title="Footer Logo"/>
            </div>
            <p id="copyright" class="col-lg-5 col-md-6 col-sm-12 offset-lg-4 text-right pr-0 mt-4">
                &copy; Chiptuning Rotterdam 2010 - {{ date('Y') }} | Website by it22 B.V
            </p>
        </div>
    </div>
</footer>
<!-- End of Footer -->
