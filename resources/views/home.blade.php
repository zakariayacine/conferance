@extends('layouts.app')

@section('content')
<div id="meet"></div>
    <script>
            $(document).ready(function(){
                var domain = "visio.endpschool.ml";
            var options = {
                roomName: "{{$jitsi}}",
                userInfo: {
                            displayName: '<?php $_COOKIE['username'] ?>'
                        },
                height: 600,
                parentNode: undefined,
                configOverwrite: {},
                interfaceConfigOverwrite: {}
            }
             var api = new JitsiMeetExternalAPI(domain, options);
            }); 
        </script>
@endsection
