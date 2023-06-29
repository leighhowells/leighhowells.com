jQuery( document ).on('change', '#inspector-select-control-0, #inspector-toggle-control-0, #inspector-toggle-control-1, #inspector-toggle-control-2, #inspector-toggle-control-3, #inspector-toggle-control-4', function (e) {
    setTimeout(function(){ 
        // jQuery('#inspector-select-control-0').select2();
        
		IRON.players = []
		jQuery('.iron-audioplayer').each(function(){

			var player = Object.create(  IRON.audioPlayer )
			player.init(jQuery(this))

			IRON.players.push(player)
		})
	 }, 2500);
});

jQuery(document).ready(function($) {
// hide or show the tracklist and store list fields if the player type is set to "skin_float_tracklist"
	function hideShowTracklistStorelist() {
		var selectElement = document.getElementById("post_playlist_source");
		if (selectElement === null) return;
		var albTracklist = document.querySelector(".cmb2-id-alb-tracklist");
		var albStoreList = document.querySelector(".cmb2-id-alb-store-list.cmb-repeat");

		if (selectElement.value === "csv" || selectElement.value === "rss") {
		albTracklist.style.display = "none";
		albStoreList.style.display = "none";
		}

		selectElement.addEventListener("change", function() {
		if (selectElement.value === "csv"  || selectElement.value === "rss") {
			albTracklist.style.display = "none";
			albStoreList.style.display = "none";
		} else {
			albTracklist.style.display = "";
			albStoreList.style.display = "";
		}
		});
	}
	hideShowTracklistStorelist();
});
//     jQuery('#inspector-select-control-0').select2();
// });

//Load Music player Content
function setIronAudioplayers(){
	if (typeof IRON === 'undefined') return;

	setTimeout(function(){ 
		IRON.players = []
		jQuery('.iron-audioplayer').each(function(){

			var player = Object.create(  IRON.audioPlayer )
			player.init(jQuery(this))

			IRON.players.push(player)
		})
	 }, 4000);
  
}

setIronAudioplayers();
