<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* WhatsApp button */
.whatsapp_float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 25px;
    right: 25px;
    background-color: #25D366;
    color: #FFF;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    z-index: 9999;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(0,0,0,0.25);
}

.whatsapp_float:hover {
    transform: scale(1.15) rotate(8deg);
}

/* popup */
.chat_popup {
    position: fixed;
    bottom: 95px;
    right: 25px;
    width: 260px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.2);
    padding: 12px;
    font-size: 14px;
    z-index: 9999;
    display: none;
}

/* messages */
.msg {
    background: #f1f1f1;
    padding: 8px 10px;
    border-radius: 8px;
    margin: 6px 0;
    display: none;
}

/* typing */
.typing {
    display: flex;
    gap: 4px;
}

.typing span {
    width: 6px;
    height: 6px;
    background: #25D366;
    border-radius: 50%;
    animation: blink 1.2s infinite;
}

.typing span:nth-child(2){ animation-delay:0.2s; }
.typing span:nth-child(3){ animation-delay:0.4s; }

@keyframes blink {
    0%,80%,100%{opacity:0.3;transform:scale(0.6);}
    40%{opacity:1;transform:scale(1);}
}

</style>
</head>

<body>

<!-- Chat popup -->
<div class="chat_popup" id="chatPopup">

    <div><b>Support Assistant</b></div>

    <div id="m1" class="msg">👋 Hi</div>
    <div id="m2" class="msg">🤔 Need help with anything?</div>
    <div id="m3" class="msg">💬 Click WhatsApp to chat with us</div>

    <!-- AI reply section -->
    <div id="typing" class="msg">
        <div class="typing">
            <span></span><span></span><span></span>
        </div>
    </div>

    <div id="aiReply" class="msg">🤖 Great! Our team will assist you shortly on WhatsApp.</div>

</div>

<!-- WhatsApp Button -->
<a href="https://wa.me/971527633023?text=Hello%20I%20need%20help"
   class="whatsapp_float"
   target="_blank"
   onclick="handleClick()">

    <i class="fab fa-whatsapp"></i>
</a>

<script>

let clicked = false;

window.onload = function () {

    const popup = document.getElementById("chatPopup");
    popup.style.display = "block";

    setTimeout(()=> document.getElementById("m1").style.display="block", 2000);
    setTimeout(()=> document.getElementById("m2").style.display="block", 4000);
    setTimeout(()=> document.getElementById("m3").style.display="block", 6000);
};

/* AI reply after click */
function handleClick() {

    if(clicked) return;
    clicked = true;

    document.getElementById("typing").style.display = "block";

    setTimeout(()=>{
        document.getElementById("typing").style.display = "none";
        document.getElementById("aiReply").style.display = "block";
    }, 2000);
}

</script>

</body>
</html>