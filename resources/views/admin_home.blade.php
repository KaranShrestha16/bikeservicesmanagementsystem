@if (Auth::check())

    @if(auth()->user()->isAdmin())

        Welcome Admin

    @else

        <script>window.location = "/home"</script>

    @endif

@else

<script>window.location = "/login"</script>

@endif