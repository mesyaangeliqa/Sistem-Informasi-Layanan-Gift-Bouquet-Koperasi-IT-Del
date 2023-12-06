<!DOCTYPE html>
<html lang="en">
@include('theme.profile.head')
<body class="nk-body body-wider bg-light">
    <div class="nk-wrap">
        @include('theme.profile.header')

        {{ $slot }}

        @include('theme.profile.footer')
    </div>
    <div id="gotoTop" class="icon-angle-up"></div>
    @include('theme.profile.js')
</body>
</html>