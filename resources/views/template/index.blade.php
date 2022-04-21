<!DOCTYPE html>
<html lang="fr">

    @include('template.partials._head')

  <body>
    @include('categories._index')
    @include('template.partials._nav')

  <main>
           @yield('content')

    @include('template.partials._content')
  </main>
    @include('template.partials._footer')
    @include('template.partials._scripts')
  </body>
</html>
