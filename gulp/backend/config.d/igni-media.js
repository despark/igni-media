var dest = './public/elfinder';
var vendors = './vendor/bower_components';
var packagePath = './vendor/despark/igni-media';

module.exports = {
    css: [
        vendors + 'bootstrap-vertical-tabs/bootstrap.vertical-tabs.min.css'
    ],
    igni_media: {
        src: [
            vendors + '/elfinder/js/elfinder.min.js',
            vendors + '/elfinder/js/elfinder.full.js',
            vendors + '/elfinder/js/i18n/**',
            vendors + '/elfinder/css/**',
            vendors + '/elfinder/img/**'
        ],
        base: vendors + '/elfinder',
        dest: dest,
        themes: {
            src: [
                packagePath + '/resources/assets/elfinder/**'
            ],
            dest: dest
        },
        colorbox: {
            src: [
                vendors + '/jquery-colorbox/jquery.colorbox-min.js',
                vendors + '/jquery-colorbox/example3/**'
            ],
            dest: './public/colorbox'
        }
    }

};


