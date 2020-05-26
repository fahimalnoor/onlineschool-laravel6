<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    @include('student.layout.top')
</head>
<body>

    <!-- Left Panel -->
        @include('student.layout.navigation')
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
            @include('student.layout.header')
        <!-- Header-->
            @yield('content')
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

   @include('student.layout.bottom')
</body>
</html>
