IRON = window.IRON || {};
(function ($) {
  createFakeWave = function (audioPlayer = true, imSticky = false) {
      // CREATE FAKEWAVE IN CANVAS
      function createWaves(container, wavescolor, initHeights) {
        if (!imSticky && audioPlayer.progressType == "simplebar" || imSticky && sonaar_music.option.waveformType == "simplebar") return;
        
        var ctx = container.getContext("2d");
        var canvasWidth = container.width;
        var canvasHeight = container.height;
        let yPos;

        ctx.clearRect(0, 0, canvasWidth, canvasHeight);
        ctx.fillStyle = wavescolor;
        for (var i = 0; i < numBars; i++) {
          yPos = canvasHeight / 2 - initHeights[i] / 2;
          ctx.fillRect(barWidth * i + gapWidth * i, Math.round(yPos), barWidth, initHeights[i]);
        }
      }
      
      function randomVal(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
      }
  

      var waveColor = $(audioPlayer).attr('data-wave-color') != "" ? $(audioPlayer).attr('data-wave-color') : sonaar_music.option.music_player_timeline_color;
      var waveProgressColor =$(audioPlayer).attr('data-wave-progress-color') != "" ? $(audioPlayer).attr('data-wave-progress-color') : sonaar_music.option.music_player_progress_color;
      let el_bar_container;
      let el_bar_destination;
      const stickyPlayer = $('#sonaar-player');

          function randomVal(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
      }
      if (IRON.isSonaarTheme && srp_pluginEnable) {
        IRON.audioPlayer.stickyEnable = true;
      }

      if ($(audioPlayer).attr("first-track-loading") == "true") {
        $(audioPlayer).removeAttr("first-track-loading");
        return;
      }

      if (imSticky && sonaar_music.option.waveformType == "simplebar" || !imSticky && audioPlayer.progressType != "mediaElement") {
        // set the heights of the bars
        let el_bar_base = imSticky ? $(stickyPlayer).find(".sonaar_fake_wave .sonaar_wave_base") : $(audioPlayer).find(".sonaar_fake_wave .sonaar_wave_base");
        let el_bar_progress = imSticky ? $(stickyPlayer).find(".sonaar_fake_wave .sonaar_wave_cut") : $(audioPlayer).find(".sonaar_fake_wave .sonaar_wave_cut");
        let barHeight = (typeof sonaar_music.option.sr_soundwave_height_simplebar !== 'undefined') ? sonaar_music.option.sr_soundwave_height_simplebar + "px" : "";
        el_bar_base.css("height", barHeight);
        el_bar_progress.css("height", barHeight);

        el_bar_container = $(audioPlayer).find(".sonaar_fake_wave");
        el_bar_destination = $(stickyPlayer).find(".sonaar_fake_wave");
      } else {
        if (audioPlayer) {
          el_bar_container = $(audioPlayer).find(".sonaar_fake_wave svg");
        
        }

        el_bar_destination = $("#sonaar-player .sonaar_fake_wave svg");
      }

      // RETURN IF SIMPLE BAR IS USED - NO NEED TO CREATE FAKEWAVES. This is 100% sur that sticky and player are simplebar.
      if (sonaar_music.option.waveformType == "simplebar" && audioPlayer.progressType !== "mediaElement") {
        return;
      }

      if( audioPlayer.progressType == "simplebar" ){
        audioPlayer = false; // set audio player to false because we wont use it anymore
      }

      let numBars = 4000;
      let gapWidth = sonaar_music.option.music_player_bargap ? sonaar_music.option.music_player_bargap : 2;
      let barWidth = sonaar_music.option.music_player_barwidth ? sonaar_music.option.music_player_barwidth : 1;
      let initHeightsAudio = [];
      let initHeightsSticky = [];


      if ( audioPlayer ) {
        var sr_canvas_container = document.getElementById(audioPlayer.id + "-container");
        var sr_canvas_progress = document.getElementById(audioPlayer.id + "-progress");

        if( $(audioPlayer).find(".sonaar_fake_wave").css("height") === "0px" ){
          $(audioPlayer).find(".sonaar_fake_wave").css("height", "70px");
        };
        
        containerHeight = $(audioPlayer).find(".sonaar_fake_wave").css("height");

        sr_canvas_container.height = parseInt(containerHeight, 10);
        sr_canvas_progress.height = parseInt(containerHeight, 10);     

        if(!imSticky){
          audioPlayer.find('.sonaar_wave_base').css('background-color', 'unset');
          audioPlayer.find('.sonaar_wave_cut').css('background-color', 'unset');
        }

      }

      if ( IRON.audioPlayer.stickyEnable ) {
        var sr_canvas_splayer_container = document.getElementById('splayer-wave-container');
        var sr_canvas_splayer_progress = document.getElementById('splayer-wave-progress');
      }

      //CREATE THE RANDOM PEAK BARS with conditions to prevent to many if. numBars is pretty high
      if( !imSticky && typeof sr_canvas_container !== 'undefined' && sr_canvas_container !== null ){
        // PLAYER
        for (var i = 0; i < numBars; i++) {
          initHeightsAudio[i] = randomVal(0, sr_canvas_container.height);
        }
        initHeightsAudio.unshift(1, 2, 8, 5, 10);

        createWaves(sr_canvas_container, waveColor, initHeightsAudio);
        createWaves(sr_canvas_progress, waveProgressColor, initHeightsAudio.map((x) => x + 1));
        // .map array to fix minor glitch for pixels. Perfection is an art!
        return;
      }

 
      if(imSticky && typeof sr_canvas_splayer_container !== 'undefined' && sr_canvas_splayer_container !== null ){
        // STICKY PLAYER
        
        for (var i = 0; i < numBars; i++) {
          initHeightsSticky[i] = randomVal(0, sr_canvas_splayer_container.height);
        }
        initHeightsSticky.unshift(1, 2, 8, 5, 10);
        
        //set soundwave colors
        if (typeof IRON.audioPlayer.activePlayer !== 'undefined' && IRON.audioPlayer.activePlayer.adaptiveColors){
          soundwaveBars = (typeof IRON.audioPlayer !== 'undefined' && typeof IRON.audioPlayer.activePlayer.adaptiveColors !== 'undefined') ? IRON.audioPlayer.activePlayer.attr('data-wave-color') : sonaar_music.option.sticky_player_soundwave_bars;
          soundwaveProgressBars = (typeof IRON.audioPlayer !== 'undefined' && typeof IRON.audioPlayer.activePlayer.adaptiveColors !== 'undefined') ? IRON.audioPlayer.activePlayer.attr('data-wave-progress-color') : sonaar_music.option.sticky_player_soundwave_progress_bars;
        }else{
          soundwaveBars = sonaar_music.option.sticky_player_soundwave_bars;
          soundwaveProgressBars = sonaar_music.option.sticky_player_soundwave_progress_bars;
        }
        
        createWaves(sr_canvas_splayer_container, soundwaveBars, initHeightsSticky);
        createWaves(sr_canvas_splayer_progress, soundwaveProgressBars, initHeightsSticky);
        return;
      }
    };

  //Replace CTA button by ellipsis on small device
  sr_playerCTAresponsive = function () {
    $('.iron-audioplayer:not(.srp_has_customfields):not(.srp_tracklist_grid)').each(function () {
      const selector = $(this).parents('[class*="sr_track_inline_cta_bt"]:not(.srp_track_cta_fixed)');
      if( selector.length ){
        let sr_ctaEnable = true;
        $(this).find('.sr-playlist-item:not([data-relatedtrack="1"])').each(function () {
          const min_breakpoint = ($(this).find('.audio-track').width() < 200 )? 200: $(this).find('.audio-track').width();
          if( min_breakpoint + $(this).find('.song-store-list-container').width() >= $(this).width()){
            sr_ctaEnable = false;
          }
        })
        if (sr_ctaEnable ) {
          selector.removeClass('sr_track_inline_cta_bt__no')
          selector.addClass('sr_track_inline_cta_bt__yes')
        } else {
          selector.removeClass('sr_track_inline_cta_bt__yes')
          selector.addClass('sr_track_inline_cta_bt__no')
        }
      }
    })
  }

  //Close And Open Player widget Store List container
  $(document).on('click', function () {
    closeStoreListContainer('.srp_cta_opened');
  });
  $('.store-list').on('click', function () {
    if (!$(this).find('.srp_cta_opened').length) {
      openStoreListContainer($(this).find('.song-store-list-menu')[0]);
    }
  });
  openStoreListContainer = function (el) {
    if ($(el).parents('.sr_track_inline_cta_bt__yes').length) {
      return;
    }
    closeStoreListContainer('.srp_cta_opened');
    var theyShouldBeClosed = setInterval(function () { // Wait until all other store list container is closed
      if ($('.srp_cta_opened').length == 0) {
        $(el).find('.song-store-list-container').show(0, function () {
        }).animate({ opacity: 1 }, 150, function () {
          $(el).find('.song-store-list-container').addClass('srp_cta_opened');
        });
        $(el).find('.song-store-list-container').addClass('srp_cta_ready');
        clearInterval(theyShouldBeClosed);
      }
    }, 100);
  }
  closeStoreListContainer = function (el) {
    if ($(el).parents('.sr_track_inline_cta_bt__yes').length) {
      return;
    }
    $(el).animate({ opacity: 0 }, 150, 'swing', function () {
      $(el).hide(0);
    });
    $(el).removeClass('srp_cta_opened');
  }

  //Call Function on window Resize
  let resizeTimer;
  $(window).resize(function () {
    if (resizeTimer != null) window.clearTimeout(resizeTimer);
    resizeTimer = window.setTimeout(function () {

      //Call function here...
      sr_playerCTAresponsive();

    }, 200);
  });

  //Take "01:05:25" and return "3925" sec.
  convertTime = function (time) {
    time = time.toString().split(':').reverse();
    let newTime = 0;
    $(time).each(function (index) {
      newTime = newTime + parseInt(this) * (60 ** (index));
    })
    return (newTime);
  }
 /* This gives a 403 Forbidden Error because download.php is protected. Need to find a way to bypass this.
  if (document.querySelector('.store-list a[download].sr_store_force_dl_bt')) {
    document.querySelectorAll('.store-list a[download].sr_store_force_dl_bt').forEach((downloadLink) => {
      downloadLink.addEventListener('click', function(event) {
        event.preventDefault();
        let url = encodeURIComponent(event.currentTarget.closest('a').href);
        let urlExtension = url.split('.').pop();
        let fileName = event.currentTarget.closest('.store-list').previousElementSibling.querySelector('.tracklist-item-title').textContent + '.' + urlExtension;
        let downloadUrl = sonaar_music.plugin_dir_url_free + `public/download.php?url=${url}&filename=${fileName}`;
        window.location.href = downloadUrl;
      });
    });
  }
*/
})(jQuery);

//Check if the we are int the guttenberg editor
function isGutenbergActive() {
  return typeof wp !== 'undefined' && typeof wp.blocks !== 'undefined';
}
