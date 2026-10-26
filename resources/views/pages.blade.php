<!DOCTYPE html>
@include('layouts.lang')
<head>
  <meta charset="utf-8">
  <title>{{ucfirst(Request::segment(2))}} - {{env('APP_NAME')}}</title>

@include('layouts.analytics')

      <!-- Favicon -->
      @if(file_exists(base_path("assets/linkstack/images/").findFile('favicon')))
      <link rel="icon" type="image/png" href="{{ asset('assets/linkstack/images/'.findFile('favicon')) }}">
      @else
      <link rel="icon" type="image/svg+xml" href="{{ asset('assets/linkstack/images/logo.svg') }}">
      @endif
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{asset('assets/css/core/libs.min.css')}}" />
      
      <!-- Aos Animation Css -->
      <link rel="stylesheet" href="{{asset('assets/vendor/aos/dist/aos.css')}}" />
      
      @include('layouts.fonts')
      
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

<style>
.container-text{position:relative;width:95%;max-width:760px;margin:0 auto;box-sizing:border-box}
.page-content{line-height:1.7}
.dark .page-title,.dark .page-content strong{color:#fff}
</style>
</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container-text">
    <div class="row">

      <div class="column" style="margin-top: 3rem">
        <a href="{{ url('') }}" class="d-inline-flex align-items-center gap-2 text-decoration-none">
          @if(file_exists(base_path("assets/linkstack/images/").findFile('avatar')))
          <img alt="{{ config('app.name') }}" src="{{ asset('assets/linkstack/images/'.findFile('avatar')) }}" style="height:40px; width:auto;">
          @else
          <img alt="" src="{{ asset('assets/linkstack/images/logo.svg') }}" style="width:40px; height:40px;">
          @endif
          <span class="h5 mb-0">{{ config('app.name') }}</span>
        </a>

        <div class="mt-5">
          <h1 class="h2 page-title">{{ footer(ucfirst($name)) }}</h1>
          <hr class="my-4">
          <div class="page-content">
            <?php echo $data['page']->$name; ?>
          </div>
        </div>

      <!-- Footer Section Start -->
      <footer class="footer mt-5">
        <div class="footer-body">
            <ul class="left-panel list-inline mb-0 p-0">
              @if(env('DISPLAY_FOOTER') === true)
                @if(env('DISPLAY_FOOTER_HOME') === true)<li class="list-inline-item"><a class="footer-hover spacing" href="@if(str_replace('"', "", EnvEditor::getKey('HOME_FOOTER_LINK')) === "" ){{ url('') }}@else{{ str_replace('"', "", EnvEditor::getKey('HOME_FOOTER_LINK')) }}@endif">{{footer('Home')}}</a></li>@endif
                @if(env('DISPLAY_FOOTER_TERMS') === true)<li class="list-inline-item"><a class="footer-hover spacing" href="{{ url('') }}/pages/{{ strtolower(footer('Terms')) }}">{{footer('Terms')}}</a></li>@endif
                @if(env('DISPLAY_FOOTER_PRIVACY') === true)<li class="list-inline-item"><a class="footer-hover spacing" href="{{ url('') }}/pages/{{ strtolower(footer('Privacy')) }}">{{footer('Privacy')}}</a></li>@endif
                @if(env('DISPLAY_FOOTER_CONTACT') === true)<li class="list-inline-item"><a class="footer-hover spacing" href="{{ url('') }}/pages/{{ strtolower(footer('Contact')) }}">{{footer('Contact')}}</a></li>@endif
              @endif                     
            </ul>
            <div class="right-panel">
              {{__('messages.Copyright')}} &copy; @php echo date('Y'); @endphp {{ config('app.name') }}
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
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

<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/Sortable.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-block-ui.js') }}"></script>
<script src="{{ asset('assets/js/main-dashboard.js') }}"></script>

</html>
