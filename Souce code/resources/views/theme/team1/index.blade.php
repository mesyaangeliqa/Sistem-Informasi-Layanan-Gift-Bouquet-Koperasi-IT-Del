<!DOCTYPE html>
<html lang="en">
@include('theme.team1.head')
<body class="nk-body body-wider bg-light">
    
    <div class="nk-wrap">

        @include('theme.team1.header')

        {{ $slot }}

        @include('theme.team1.footer')
        
    </div>

    <div class="preloader"><span class="spinner spinner-round"></span></div>

    @include('theme.team1.js')

</body>
</html>