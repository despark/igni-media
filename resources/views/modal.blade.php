<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Media browser</title>
{{--CSS ASSETS--}}
<!-- jQuery and jQuery UI (REQUIRED) -->
    <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    @include('ignicms::admin.assets.css')

    {{--JS ASSETS--}}
    @include('ignicms::admin.assets.js')

    <script type="text/javascript">
        (function ($) {
            $(function () {
                var elf = $('#elfinder').elfinder({
                    // set your elFinder options here
                    @if($locale)
                    lang: '{{$locale}}', // locale
                    @endif
                    customData: {
                        _token: '{{csrf_token()}}'
                    },
                    url: '{{route("elfinder.connector")}}',  // connector URL
                   // height: $(document).height() - 16,
                    resizable: false,
                    commandsOptions: {
                        getfile: {
                            multiple: true
                        }
                    },
                    cssAutoLoad: false,
                    {{--getFileCallback: function (files, instance) {--}}
                            {{--try {--}}
                            {{--parent.IgniMedia.validateFile(files)--}}
                            {{--}--}}
                            {{--catch(err) {--}}
                            {{--console.log(err);--}}
                            {{--return false;--}}
                            {{--}--}}

                            {{--window.parent.processSelectedFile(file.path, 'id');--}}
                            {{--parent.jQuery.colorbox.close();--}}
                            {{--},--}}
                    uiOptions: {
                        // toolbar configuration
                        toolbar: [
                            ['getfile'],
                            ['home', 'up'],
                            ['mkdir', 'upload', 'rm'],
                            ['quicklook', 'resize']
                        ],
                        // directories tree options
                        tree: {
                            // expand current root on init
                            openRootOnLoad: true,
                            // auto load current dir parents
                            syncTree: true
                        },
                        // navbar options
                        navbar: {
                            minWidth: 150,
                            maxWidth: 500
                        },

                        // current working directory options
                        cwd: {
                            // display parent directory in listing as ".."
                            oldSchool: false
                        }
                    }
                }).elfinder('instance');
            });
        })(jQuery);
    </script>


</head>
<body>
<div class="col-xs-1"> <!-- required for floating -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs tabs-left">
        <li class="active">
            <a href="#elfinder-tab" data-toggle="tab" style="font-size: 32px" title="Local Files"><i
                        class="fa fa-hdd-o"></i></a>
        </li>
        <li>
            <a href="#remote-video" data-toggle="tab" style="font-size: 32px" title="Remote Video">
                <i class="fa fa-youtube-play"></i>
            </a>
        </li>
    </ul>
</div>

<div class="col-xs-11">
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="elfinder-tab">
            <div id="elfinder"></div>
        </div>
        <div class="tab-pane" id="remote-video">
            @include('ignicms-media::modal.video')
        </div>
    </div>
</div>
</body>
</html>

