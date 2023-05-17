var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        videoId: 'ssGNpHibSJ4', // Replace with your YouTube video ID
        playerVars: {
            autoplay: 1, // Set to 1 to autoplay
            controls: 0, // Set to 1 to show controls
            disablekb: 1, // Set to 0 to enable keyboard controls
            enablejsapi: 1, // Set to 0 to disable JavaScript API access
            modestbranding: 1, // Set to 0 to show YouTube logo
            playsinline: 1, // Set to 0 to play video in full screen on mobile devices
            rel: 0, // Set to 1 to show related videos at the end
            showinfo: 0 // Set to 1 to show video title and uploader
        },
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}
function onPlayerReady(event) {
    // Do something when the player is ready
}
function onPlayerStateChange(event) {
    // Do something when the player's state changes
}
function play() {
    player.playVideo();
}
function pause() {
    player.pauseVideo();
}
var buyBtn = document.getElementById("get-started");
setTimeout(myFunction, 900000); // call myFunction after 2 minutes

function myFunction() {
    buyBtn.style.display = "block";
    buyBtn.style.textAlign = "center";
}