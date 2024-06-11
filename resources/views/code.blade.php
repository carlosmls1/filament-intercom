@php
	$config = config('filament-intercom');
	$canShow = !empty($config['api_base']) && !empty($config['app_id']);
@endphp
@if(isset($canShow) && $canShow)

	<!-- Intercom -->

	<script>
		window.intercomSettings = {
			api_base: "{{ $config['api_base'] }}",
			app_id: "{{ $config['app_id'] }}",
			user_id: user_id, // IMPORTANT: Replace "user.id" with the variable you use to capture the user's ID
			name: name_user, // IMPORTANT: Replace "user.name" with the variable you use to capture the user's name
			email: email, // IMPORTANT: Replace "user.email" with the variable you use to capture the user's email address
			created_at: "", // IMPORTANT: Replace "user.createdAt" with the variable you use to capture the user's sign-up date
		};
	</script>


	<script>
		// We pre-filled your app ID in the widget URL: 'https://widget.intercom.io/widget/{{ $config['api_base'] }}'
		(function () {
			var w = window;
			var ic = w.Intercom;
			if (typeof ic === "function") {
				ic('reattach_activator');
				ic('update', w.intercomSettings);
			} else {
				var d = document;
				var i = function () {
					i.c(arguments);
				};
				i.q = [];
				i.c = function (args) {
					i.q.push(args);
				};
				w.Intercom = i;
				var l = function () {
					var s = d.createElement('script');
					s.type = 'text/javascript';
					s.async = true;
					s.src = 'https://widget.intercom.io/widget/{{ $config['api_base'] }}';
					var x = d.getElementsByTagName('script')[0];
					x.parentNode.insertBefore(s, x);
				};
				if (document.readyState === 'complete') {
					l();
				} else if (w.attachEvent) {
					w.attachEvent('onload', l);
				} else {
					w.addEventListener('load', l, false);
				}
			}
		})();
	</script>
	<!-- End Intercom Code -->

@endif
