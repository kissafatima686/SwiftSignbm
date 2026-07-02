<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* WhatsApp Button */
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
            background-color: #1ebe5d;
            transform: scale(1.15) rotate(8deg);
        }

        /* Pulse */
        .whatsapp_float::after {
            content: "";
            position: absolute;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(37, 211, 102, 0.4);
            z-index: -1;
            animation: pulse 1.8s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 0.6; }
            70% { transform: scale(1.8); opacity: 0; }
            100% { transform: scale(1.8); opacity: 0; }
        }

        /* Tooltip */
        .tooltip {
            position: absolute;
            right: 75px;
            background: #111;
            color: #fff;
            padding: 7px 10px;
            font-size: 13px;
            border-radius: 6px;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: 0.3s;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .whatsapp_float:hover .tooltip {
            opacity: 1;
            visibility: visible;
            right: 70px;
        }

        /* Chat popup container */
        .chat_popup {
            position: fixed;
            bottom: 95px;
            right: 25px;
            width: 240px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            padding: 12px;
            font-size: 14px;
            z-index: 9999;
            display: none;
            animation: fadeIn 0.4s ease;
        }

        @keyframes fadeIn {
            from { transform: translateY(10px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .chat_msg {
            margin: 6px 0;
            padding: 8px 10px;
            background: #f1f1f1;
            border-radius: 8px;
            display: none;
        }

        .chat_header {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .chat_header button {
            border: none;
            background: transparent;
            font-size: 16px;
            cursor: pointer;
        }

        /* typing dots */
        .typing {
            display: flex;
            gap: 3px;
        }

        .typing span {
            width: 5px;
            height: 5px;
            background: #25D366;
            border-radius: 50%;
            animation: blink 1.4s infinite both;
        }

        .typing span:nth-child(2) { animation-delay: 0.2s; }
        .typing span:nth-child(3) { animation-delay: 0.4s; }

        @keyframes blink {
            0%, 80%, 100% { transform: scale(0.6); opacity: 0.3; }
            40% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>

<body>

<!-- Click Sound -->
<audio id="clickSound">
    <source src="https://www.soundjay.com/buttons/sounds/button-16.mp3" type="audio/mpeg">
</audio>

<!-- Chat Popup -->
<div class="chat_popup" id="chatPopup">

    <div class="chat_header">
        <span>Support</span>
        <button onclick="closeChat()">×</button>
    </div>

    <div id="msg1" class="chat_msg">👋 Hi</div>

    <div id="msg2" class="chat_msg">🤔 Need help with anything?</div>

    <div id="msg3" class="chat_msg">
        💬 Click WhatsApp to chat with us
        <div class="typing" style="margin-top:5px;">
            <span></span><span></span><span></span>
        </div>
    </div>

</div>

<!-- WhatsApp Button -->
<a href="https://wa.me/971527633023?text=Hello%20I%20need%20help"
   class="whatsapp_float"
   target="_blank"
   onclick="playSound()">

    <i class="fab fa-whatsapp"></i>

    <span class="tooltip">
        Chat with us
        <span class="typing">
            <span></span><span></span><span></span>
        </span>
    </span>
</a>

<script>
    function playSound() {
        document.getElementById("clickSound").play();
    }

    function closeChat() {
        document.getElementById("chatPopup").style.display = "none";
    }

    window.onload = function () {

        // show popup
        const popup = document.getElementById("chatPopup");
        popup.style.display = "block";

        // message sequence
        setTimeout(() => {
            document.getElementById("msg1").style.display = "block";
        }, 3000);

        setTimeout(() => {
            document.getElementById("msg2").style.display = "block";
        }, 5000);

        setTimeout(() => {
            document.getElementById("msg3").style.display = "block";
        }, 7000);
    };
</script>

</body>
</html>