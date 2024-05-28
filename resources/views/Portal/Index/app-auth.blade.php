<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('portal_assets') }}/assets/"
  data-template="vertical-menu-template">
  
    @include('Portal.Index.head')
    <body>
      @yield('content')
    </body>
    @include('Portal.Index.script')
</html>
