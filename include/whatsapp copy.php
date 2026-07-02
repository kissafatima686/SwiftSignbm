<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
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
            box-shadow: 0 8px 20px rgba(37, 211, 102, 0.6);
        }

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

        .tooltip::after {
            content: "";
            position: absolute;
            top: 50%;
            right: -5px;
            transform: translateY(-50%);
            border-width: 5px;
            border-style: solid;
            border-color: transparent transparent transparent #111;
        }

        .whatsapp_float:hover .tooltip {
            opacity: 1;
            visibility: visible;
            right: 70px;
        }

        /* Typing dots */
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

        /* 💬 Auto Popup Message */
        .chat_popup {
            position: fixed;
            bottom: 95px;
            right: 25px;
            background: #fff;
            width: 220px;
            padding: 12px 14px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            font-size: 14px;
            display: none;
            z-index: 9999;
            animation: fadeIn 0.4s ease;
        }

        .chat_popup::after {
            content: "";
            position: absolute;
            bottom: -8px;
            right: 20px;
            border-width: 8px;
            border-style: solid;
            border-color: #fff transparent transparent transparent;
        }

        .chat_popup button {
            float: right;
            border: none;
            background: transparent;
            font-size: 16px;
            cursor: pointer;
            color: #555;
        }

        @keyframes fadeIn {
            from { transform: translateY(10px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>

<body>

<!-- 🔊 Click Sound -->
<audio id="clickSound">
    <source src="https://www.soundjay.com/buttons/sounds/button-16.mp3" type="audio/mpeg">
</audio>

<!-- 💬 Auto Popup -->
<div class="chat_popup" id="chatPopup">
    <button onclick="closePopup()">×</button>
    <div>👋 Hi! Need help?</div>
</div>

<!-- WhatsApp Button -->
<a href="https://wa.me/971527633023?text=Hello%20I%20need%20help"
   class="whatsapp_float"
   target="_blank"
   onclick="playSound()">

    <i class="fab fa-whatsapp"></i>

    <!-- Tooltip -->
    <span class="tooltip">
        Chat with us
        <span class="typing">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </span>
</a>

<script>
    function playSound() {
        document.getElementById("clickSound").play();
    }

    // ⏱ Auto popup after 4 seconds
    window.onload = function () {
        setTimeout(function () {
            document.getElementById("chatPopup").style.display = "block";
        }, 4000);
    };

    // ❌ Close popup
    function closePopup() {
        document.getElementById("chatPopup").style.display = "none";
    }
</script>

</body>
</html>