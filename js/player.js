function playbtu() {
    var oyd = document.getElementById('music');
    var skip = document.getElementById('music_skip').style = "";
    if (yaudio.paused) {
        yaudio.play();
        oyd.className = 'voidicon-music-play';
    } else {
        yaudio.pause();
        document.getElementById('music_skip').style = "display: none";
        oyd.className = 'voidicon-music-pause';
    }
}

function next() {
    if (a == musicArr.length - 1) {
        a = 0
    } else {
        a = a + 1
    }
    var sj = musicArr[a];
    yaudio.src = sj.mp3;
    yaudio.play();
    var autopause = 0;
}

yaudio.addEventListener('ended',
    function() {
        next();
    },
    false);

yaudio.addEventListener("error", function() {
    next();
}, false);
