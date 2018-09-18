jQuery(document).ready(function($) {
    console.log('Wistia Embed JS -- Loaded');

    $('.wistia-video').magnificPopup({
        type: 'iframe',
        iframe: {
            patterns: {
                wistia: {
                    index: 'wistia.com',
                    id: function(url) {        
                        var m = url.match(/^.+wistia.com\/(medias)\/([^_]+)[^#]*(#medias=([^_&]+))?/);
                        if (m !== null) {
                            if(m[4] !== undefined) {
                                return m[4];
                            }
                            return m[2];
                        }
                        return null;
                    },
                    src: '//fast.wistia.net/embed/iframe/%id%?autoPlay=1'
                }
            }
        }
    });
    
    $('.vimeo-video').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});

});