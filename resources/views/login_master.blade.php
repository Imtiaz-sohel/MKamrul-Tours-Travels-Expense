<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title>@yield("title")</title>

  <!-- vendor css -->
  <link href="{{ asset('assets') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">

  <!-- Bracket CSS -->
  <link rel="stylesheet" href="{{ asset('assets') }}/css/bracket.css">
</head>

<body>
{{-- ================== MAIN CONTENT STARTS --}}
   @yield('content')
{{-- ================== MAIN CONTENT ENDS --}}
  <script src="{{ asset('assets') }}/lib/jquery/jquery.js"></script>
  <script src="{{ asset('assets') }}/lib/popper.js/popper.js"></script>
  <script src="{{ asset('assets') }}/lib/bootstrap/bootstrap.js"></script>

</body>

</html>
