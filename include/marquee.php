
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body {
    margin:0;
    font-family: Arial, sans-serif;
}

/* ================= MARQUEE ANIMATION ================= */
@keyframes marqueeMove {
    0% {
        transform: translateX(0%);
    }
    100% {
        transform: translateX(-50%);
    }
}

/* ================= BAR STYLE ================= */
#marqueeBox {
    background:#0077b5;
    overflow:hidden;
    position:relative;
    padding:12px 90px 12px 15px;
    transition:all 0.3s ease;
}

/* ================= CONTROLS ================= */
.control {
    position:absolute;
    top:50%;
    transform:translateY(-50%);
    color:#fff;
    cursor:pointer;
    z-index:10;
}

#closeBtn { right:10px; font-size:18px; font-weight:bold; }
#minBtn   { right:35px; font-size:16px; }
#playBtn  { right:60px; font-size:14px; }

/* ================= MARQUEE TEXT ================= */
#marqueeTrack {
    display:inline-block;
    white-space:nowrap;
    padding-left:100%;
    animation:marqueeMove 35s linear infinite;
}

/* ================= STATES ================= */
.hidden {
    display:none !important;
}

.minimized {
    height:44px !important;
    overflow:hidden;
}

.paused {
    animation-play-state: paused !important;
}

/* ================= TEXT ================= */
#marqueeTrack span {
    color:#fff;
    margin-right:60px;
    font-size:14px;
}
</style>
</head>

<body>

<!-- ================= MARQUEE BAR ================= -->
<div id="marqueeBox">

    <!-- CLOSE -->
    <div id="closeBtn" class="control" onclick="closeMarquee()">×</div>

    <!-- MINIMIZE -->
    <div id="minBtn" class="control" onclick="minimizeMarquee()">–</div>

    <!-- PLAY / PAUSE -->
    <div id="playBtn" class="control" onclick="toggleMarquee()">❚❚</div>

    <!-- MARQUEE CONTENT -->
    <div id="marqueeTrack">

         <span>Financial Services UAE</span>
        <span>NEW Business Setup</span>
        <span>IT Solutions</span>
        <span>VISA Services in UAE</span>
        <span>Foodstuff Trading</span>
        <span>Tyre Trading</span>
        <span>Business Coach Service</span>
        <span>Regulatory Services in UAE & Pakistan</span>
        <span>Talent and Development</span>
        <span>Business & Corporate Solutions</span>
        <span>Research & Academic Solutions</span>

    </div>
</div>

<!-- ================= JAVASCRIPT ================= -->
<script>
let isRunning = true;
let isMinimized = false;

/* ================= PLAY / PAUSE ================= */
function toggleMarquee() {
    const track = document.getElementById("marqueeTrack");
    const btn = document.getElementById("playBtn");

    if (isRunning) {
        track.classList.add("paused");
        btn.innerHTML = "▶";
    } else {
        track.classList.remove("paused");
        btn.innerHTML = "❚❚";
    }

    isRunning = !isRunning;
}

/* ================= CLOSE ================= */
function closeMarquee() {
    const box = document.getElementById("marqueeBox");
    const track = document.getElementById("marqueeTrack");

    track.classList.add("paused");
    box.classList.add("hidden");
}

/* ================= MINIMIZE ================= */
function minimizeMarquee() {
    const box = document.getElementById("marqueeBox");
    const track = document.getElementById("marqueeTrack");

    if (!isMinimized) {
        box.classList.add("minimized");
        track.style.display = "none";
    } else {
        box.classList.remove("minimized");
        track.style.display = "inline-block";
    }

    isMinimized = !isMinimized;
}
</script>

