<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiptuning Rotterdam | De chiptuning specialist met 10 jaar ervaring</title>
    <meta name="description" content="Chiptuning voor meer vermogen en lager brandstofverbruik, wij garanderen de hoogste kwaliteit voor een optimale afstelling van uw auto. Bel ons vandaag." />
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="https://www.chiptuningrotterdam.nl/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Chiptuning Rotterdam | De chiptuning specialist met 10 jaar ervaring" />
    <meta property="og:description" content="Chiptuning voor meer vermogen en lager brandstofverbruik, wij garanderen de hoogste kwaliteit voor een optimale afstelling van uw auto. Bel ons vandaag." />
    <meta property="og:url" content="https://www.chiptuningrotterdam.nl/" />
    <meta property="og:site_name" content="Chiptuning Rotterdam" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Chiptuning voor meer vermogen en lager brandstofverbruik, wij garanderen de hoogste kwaliteit voor een optimale afstelling van uw auto. Bel ons vandaag." />
    <meta name="twitter:title" content="Chiptuning Rotterdam | De chiptuning specialist met 10 jaar ervaring" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('partials.styles')
    @yield('styles')

    <script type="text/javascript" data-cfasync="false">
    var mi_version         = '7.10.3';
	var mi_track_user      = false;
	var mi_no_track_reason = 'Note: MonsterInsights does not track you as a logged-in site administrator to prevent site owners from accidentally skewing their own Google Analytics data.\nIf you are testing Google Analytics code, please do so either logged out or in the private browsing/incognito mode of your web browser.';

	var disableStr = 'ga-disable-UA-27331132-1';

	/* Function to detect opted out users */
	function __gaTrackerIsOptedOut() {
		return document.cookie.indexOf(disableStr + '=true') > -1;
	}

	/* Disable tracking if the opt-out cookie exists. */
	if ( __gaTrackerIsOptedOut() ) {
		window[disableStr] = true;
	}

	/* Opt-out function */
	function __gaTrackerOptout() {
	  document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
	  window[disableStr] = true;
	}

	if ( mi_track_user ) {
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','__gaTracker');

		__gaTracker('create', 'UA-27331132-1', 'auto');
		__gaTracker('set', 'forceSSL', true);
		__gaTracker('send','pageview');
	} else {
		console.log( "Note: MonsterInsights does not track you as a logged-in site administrator to prevent site owners from accidentally skewing their own Google Analytics data.\nIf you are testing Google Analytics code, please do so either logged out or in the private browsing/incognito mode of your web browser." );
		(function() {
			/* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
			var noopfn = function() {
				return null;
			};
			var noopnullfn = function() {
				return null;
			};
			var Tracker = function() {
				return null;
			};
			var p = Tracker.prototype;
			p.get = noopfn;
			p.set = noopfn;
			p.send = noopfn;
			var __gaTracker = function() {
				var len = arguments.length;
				if ( len === 0 ) {
					return;
				}
				var f = arguments[len-1];
				if ( typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function' ) {
					console.log( 'Not running function __gaTracker(' + arguments[0] + " ....) because you are not being tracked. " + mi_no_track_reason );
					return;
				}
				try {
					f.hitCallback();
				} catch (ex) {

				}
			};
			__gaTracker.create = function() {
				return new Tracker();
			};
			__gaTracker.getByName = noopnullfn;
			__gaTracker.getAll = function() {
				return [];
			};
			__gaTracker.remove = noopfn;
			window['__gaTracker'] = __gaTracker;
					})();
		}</script>
</head>


<body data-spy="scroll" data-target="#navbar1" data-offset="60">
	@include('partials.nav')
	<!-- Begin Main Content -->
    @yield('banner')
    <!-- End of Main Content -->
    <!-- Begin Main Content -->
    @yield('content')
    <!-- End of Main Content -->
    @include('partials.footer')
@include('partials.scripts')
@yield('scripts')
</body>
</html>
