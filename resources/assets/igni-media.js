(function ($) {
    $(document).on('click', '.media-selector', function (event) {
        event.preventDefault();

        var route = $(this).data('media-route');
        $.colorbox({
            href: route,
            fastIframe: true,
            iframe: true,
            width: '90%',
            height: '90%'
        });

    });

    IgniMedia = {
        config: {

            validation: {
                file: {
                    minWidth: null,
                    minHeight: null,
                    maxFileSize: null,
                    fileType: null
                }
            }
        },
        validateFile: function (file) {
            if ($.isArray(file)) {
                $.each(file, function (i, v) {
                    // First validate size
                })
            }
        },
        validateRemoteVideo: function (videoUrl) {
        }
    };

})(jQuery);