$(function(){

    // SLIDING TITLE FUNCTION ################################################################

    var interval;
    function marquee(that) {
        function slide() {
            var container   = that.next(),
                innerWidth  = container.find('.jp-song-title-inner'),
                mOuterWidth = container.find('.jp-song-title').width(),
                mInnerWidth = innerWidth.width(),
                diffMargin  = mInnerWidth - mOuterWidth;

            if (diffMargin > 0) {
                innerWidth.animate({marginLeft: '-=' + (diffMargin - 10)}, 2500);
                setTimeout(function(){
                    innerWidth.animate({marginLeft: '+=' + (diffMargin - 10)}, 2500);
                }, 4000);
            }
        }
        slide();
        interval = setInterval(function(){
            slide();
        }, 8000);
    }



    // JPLAYER SEEK AND VOLUME MOUSE DRAG IMPROVEMENT ################################################################

    (function(down,  jPlayer, fn, $target){
        $('body').on('mousemove', '.jp-volume-bar', function(e){
            jPlayer && jPlayer[fn]($.extend({}, e, {currentTarget: $target}));
        }).on('mouseup', function(){
            jPlayer = false;
        }).on('mousedown', function(e){
            var $nodes = $(e.target).parents().add(e.currentTarget),
                $volume = $nodes.filter('.jp-volume-bar').first(),
                $seek = $nodes.filter('.jp-seek-bar').first();

            if ($seek.length) {
                fn = 'seekBar';
                $target = $seek;
            } else if ($volume.length) {
                fn = 'volumeBar';
                $target = $volume;
            }

            var $audio = $target && $target.closest('.jp-audio');
            jPlayer = $audio && $audio.children().first().add($audio.prev()).filter(function(){
                return $(this).data('jPlayer');
            }).first().data('jPlayer');
        });

    })();


    // VIDEO PLAYER WITH PLAYLIST ################################################################

    options = {
        loop: true,
        solution: 'html, flash',
        swfPath: 'js',
        supplied: 'm4v,ogv,webmv',
        backgroundColor: '#000000',
        wmode: 'window',
        ready: function(event){
            var that = $(this);
            marquee(that);
            that.next().find('.jp-time').on('click', function(){
                that.next().find('.jp-current-time, .jp-duration').toggle();
            });
            that.on('click', function() {
                that.data().jPlayer.status.paused ? that.jPlayer('play') : that.jPlayer('pause');
            });
            that.on('dblclick', function() {
                $(this).jPlayer('fullScreen');
            });
        },
        play: function (event) {
            $(this).jPlayer("pauseOthers");
        },
        cssSelector: {
            title: '#current-song'
        },
        playlistOptions: {
            displayTime: 'fast',
            addTime: 'fast',
            removeTime: 'fast',
            shuffleTime: 0
        },
        size: {
            width: "100%",
            height: "100%"
        }
    };

    var playListFiles = [
        {
            title: "file1",
            m4v: "videos/01.m4v",
            ogv: "videos/01.ogv",
            webmv: "videos/01.webm",
            poster: "img/01.jpg"
        },
        {
            title: "file2",
            m4v: "videos/02.m4v",
            ogv: "videos/02.ogv",
            webmv: "videos/02.webm",
            poster: "img/02.jpg"
        },{
            title: "file3",
            m4v: "videos/03.m4v",
            ogv: "videos/03.ogv",
            webmv: "videos/03.webm",
            poster: "img/03.jpg"
        },
        {
            title: "file4",
            m4v: "videos/04.m4v",
            ogv: "videos/04.ogv",
            webmv: "videos/04.webm",
            poster: "img/04.jpg"
        },
        {
            title: "file5",
            m4v: "videos/05.m4v",
            ogv: "videos/05.ogv",
            webmv: "videos/05.webm",
            poster: "img/05.jpg"
        },
        {
            title: "file6",
            m4v: "videos/06.m4v",
            ogv: "videos/06.ogv",
            webmv: "videos/06.webm",
            poster: "img/06.jpg"
        },
        {
            title: "file7",
            m4v: "videos/07.m4v",
            ogv: "videos/07.ogv",
            webmv: "videos/07.webm",
            poster: "img/07.jpg"
        },
        {
            title: "file8",
            m4v: "videos/08.m4v",
            ogv: "videos/08.ogv",
            webmv: "videos/08.webm",
            poster: "img/08.jpg"
        },
        {
            title: "file9",
            m4v: "videos/09.m4v",
            ogv: "videos/09.ogv",
            webmv: "videos/09.webm",
            poster: "img/09.jpg"
        },
        {
            title: "file10",
            m4v: "videos/10.m4v",
            ogv: "videos/10.ogv",
            webmv: "videos/10.webm",
            poster: "img/10.jpg"
        },
        {
            title: "file11",
            m4v: "videos/11.m4v",
            ogv: "videos/11.ogv",
            webmv: "videos/11.webm",
            poster: "img/11.jpg"
        },
        {
            title: "file12",
            m4v: "videos/12.m4v",
            ogv: "videos/12.ogv",
            webmv: "videos/12.webm",
            poster: "img/12.jpg",
            free: true
        }


    ];

    var jPlayerFiles = {
        jPlayer: '#main-player-container-files',
        cssSelectorAncestor: '#main-player-files'
    };

    var cleanPlayerFiles = new jPlayerPlaylist(jPlayerFiles, playListFiles, options);



    // SINGLE PLAYER ################################################################

 /*   $("#main-player-container-single").jPlayer({
        ready: function (event) {
            $(this).jPlayer("setMedia", {
                title: "test ",
                m4v: "http://tabolich.com/work/videoplayer/media/2.mp4",
                poster: ""
            });
			$(this).jPlayer('play');
			//alert('ok');
            var that = $(this);
            marquee(that);
            that.next().find('.jp-time').on('click', function(){
                that.next().find('.jp-current-time, .jp-duration').toggle();
            });
            that.on('click', function() {
                that.data().jPlayer.status.paused ? that.jPlayer('play') : that.jPlayer('pause');
            });
            that.on('dblclick', function() {
                $(this).jPlayer('fullScreen');
            });
        },
        play: function (event) {
            $(this).jPlayer('pauseOthers');
        },
        cssSelector: {
            title: '#current-song'
        },
        size: {
            width: "100%",
            height: "100%"
        },
        solution: 'html',
        cssSelectorAncestor: "#main-player-single",
        swfPath: "../res/js",
        supplied: "m4v",
        wmode: "window",
        toggleDuration: true
    });
*/


    // TOGGLE DARK THEME ################################################################

/*  $('.toggle').on('click', function(){
        $('.jp-main-player').toggleClass('jp-dark-theme');
        $('body').toggleClass('dark');
    });
*/
    $('.player-block').toggle();
    $( ".main-player-container-files video" ).jPlayer('play');

    $('.toggle-player').on('click', function(){
        $('.player-block').toggle();
    });


});