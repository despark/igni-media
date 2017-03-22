var dest = './public/elfinder';
var vendors = './vendor/bower_components';

module.exports = {
    igni_media: {
        src: [
            vendors + '/elfinder/js/elfinder.min.js',
            vendors + '/elfinder/js/i18n/**',
            vendors + '/elfinder/css/elfinder.min.css',
            vendors + '/elfinder/css/theme.css',
            vendors + '/elfinder/img/**',
        ],
        base: vendors + '/elfinder',
        dest: dest,
        colorbox: {
            src: [
                vendors + '/jquery-colorbox/jquery.colorbox-min.js',
                vendors + '/jquery-colorbox/example3/**'
            ],
            dest: './public/colorbox'
        }
    },

};


