<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

@include('layouts.analytics')

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script>
          (function(){var m=localStorage.getItem('color-mode');var d=m==='dark'||((!m||m==='auto')&&window.matchMedia&&window.matchMedia('(prefers-color-scheme: dark)').matches);document.documentElement.style.colorScheme=d?'dark':'light';document.documentElement.style.backgroundColor=d?'#151824':'#f5f6fa';})();
        </script>
        <script src="{{asset('assets/js/detect-dark-mode.js')}}"></script>

        <!-- keep the old page on screen and cross-fade to the new one (Chrome/Edge 126+, Safari 18.2+; others just navigate) -->
        <style>
          @media (prefers-reduced-motion: no-preference) {
            @view-transition { navigation: auto; }
            ::view-transition-old(root), ::view-transition-new(root) { animation-duration: 90ms; }
          }
        </style>

		@if(file_exists(base_path("assets/linkstack/images/").findFile('favicon')))
		<link rel="icon" type="image/png" href="{{ asset('assets/linkstack/images/'.findFile('favicon')) }}">
		@else
		<link rel="icon" type="image/svg+xml" href="{{ asset('assets/linkstack/images/logo.svg') }}">
		@endif

        <title>{{ config('app.name') }}</title>

      <!-- Fonts -->
      @include('layouts.fonts')

      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{asset('assets/css/core/libs.min.css')}}" />
      
      <!-- Aos Animation Css -->
      <link rel="stylesheet" href="{{asset('assets/vendor/aos/dist/aos.css')}}" />
      
      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="{{asset('assets/css/hope-ui.min.css?v=2.0.0')}}" />
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{asset('assets/css/custom.min.css?v=2.0.0')}}" />
      
      <!-- Dark Css -->
      <link rel="stylesheet" href="{{asset('assets/css/dark.min.css')}}" />
      
      <!-- Customizer Css -->
            @if(file_exists(base_path("assets/dashboard-themes/dashboard.css")))
      <link rel="stylesheet" href="{{asset('assets/dashboard-themes/dashboard.css')}}" />
      @else
      <link rel="stylesheet" href="{{asset('assets/css/customizer.min.css')}}" />
      @endif
      
      <!-- RTL Css -->
      <link rel="stylesheet" href="{{asset('assets/css/rtl.min.css')}}" />

      <!-- Scripts -->
      <script src="{{ asset('assets/js/app.js') }}" defer></script>

	  <link rel="stylesheet" href="{{ asset('assets/external-dependencies/bootstrap-icons.css') }}">
    </head>
    <body>
    <!-- apply saved color mode before first paint; setting.js does it only at the end of the page, causing a white flash -->
    <script>
      var bodyColorMode = localStorage.getItem('color-mode');
      if (bodyColorMode) document.body.classList.add(bodyColorMode);
      if (bodyColorMode === 'dark' || ((!bodyColorMode || bodyColorMode === 'auto') && matchMedia('(prefers-color-scheme: dark)').matches)) document.body.classList.add('dark');
    </script>

            {{ $slot }}

    </body>

    <!-- Library Bundle Script -->
    <script src="{{asset('assets/js/core/libs.min.js')}}"></script>
    
    <!-- External Library Bundle Script -->
    <script src="{{asset('assets/js/core/external.min.js')}}"></script>
    
    <!-- Widgetchart Script -->
    <script src="{{asset('assets/js/charts/widgetcharts.js')}}"></script>
    
    <!-- mapchart Script -->
    <script src="{{asset('assets/js/charts/vectore-chart.js')}}"></script>
    <script src="{{asset('assets/js/charts/dashboard.js')}}" ></script>
    
    <!-- fslightbox Script -->
    <script src="{{asset('assets/js/plugins/fslightbox.js')}}"></script>
    
    <!-- Settings Script -->
    <script src="{{asset('assets/js/plugins/setting.js')}}"></script>
    
    <!-- Slider-tab Script -->
    <script src="{{asset('assets/js/plugins/slider-tabs.js')}}"></script>
    
    <!-- Form Wizard Script -->
    <script src="{{asset('assets/js/plugins/form-wizard.js')}}"></script>
    
    <!-- AOS Animation Plugin-->
    <script src="{{asset('assets/vendor/aos/dist/aos.js')}}"></script>
    
    <!-- App Script -->
    <script src="{{asset('assets/js/hope-ui.js')}}" defer></script>
    
    <!-- Flatpickr Script -->
    <script src="{{asset('assets/vendor/flatpickr/dist/flatpickr.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/flatpickr.js')}}" defer></script>
    
    <script src="{{asset('assets/js/plugins/prism.mini.js')}}"></script>

</html>
