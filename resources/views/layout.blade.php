<title>@yield('title')</title>

</head>

<body>


</style>
     activo a {
      color:red;
      text decoration:underline;
     }

</style>
</head>

<body>

<nav>
    {{dump(request()->routeIs('home'))}}
<table class="table">
   @include('partials.nav')
    @yield('content')
 
   
</table>
</nav>