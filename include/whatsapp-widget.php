<style>
/* WhatsApp Widget Container */
.wa-widget-container {
    position: fixed;
    bottom: 25px;
    right: 25px;
    z-index: 99999;
    font-family: 'Segoe UI', Arial, sans-serif;
    padding-top: 100px; /* Buffer area so hover doesn't break moving from button to box */
}

/* Floating WhatsApp Button */
.wa-btn {
    background-color: #25d366;
    color: white;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 30px rgba(37, 211, 102, 0.4);
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    border: none;
    outline: none;
    margin-left: auto;
}

.wa-btn:hover {
    transform: scale(1.1);
    box-shadow: 0 10px 35px rgba(37, 211, 102, 0.5);
}

.wa-btn i {
    font-size: 32px;
}

/* Chat box tooltip / "Chat with us" text */
.wa-tooltip {
    position: absolute;
    right: 75px;
    top: 50%;
    transform: translateY(-50%);
    background: white;
    color: #333;
    padding: 8px 15px;
    border-radius: 20px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    font-size: 14px;
    font-weight: 600;
    white-space: nowrap;
    opacity: 1;
    pointer-events: none;
    transition: opacity 0.3s ease;
}

/* Chat Box Panel */
.wa-chat-box {
    position: absolute;
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
    animation: waFadeIn 0.4s ease;
}

@keyframes waFadeIn {
    from {
        transform: translateY(10px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}


/* Hover States */
.wa-widget-container:hover .wa-chat-box {
    display: block;
}

.wa-widget-container:hover .wa-tooltip {
    opacity: 0;
}

/* Force Hide Class when closed manually */
.wa-chat-box.wa-hidden-force {
    display: none !important;
}

/* Header */
.wa-chat-header {
    display: flex;
    justify-content: space-between;
    font-weight: bold;
    margin-bottom: 6px;
}

.wa-chat-header span {
    color: #666;
    font-size: 20px;
    line-height: 1;
    display: flex;
}


.wa-chat-title {
    margin: 0;
    font-size: 18px;
    font-weight: 700;
    color: #333;
}

.wa-chat-close {
    background: none;
    border: none;
    font-size: 20px;
    color: #aaa;
    cursor: pointer;
    padding: 0;
    line-height: 1;
    transition: color 0.2s ease;
}

.wa-chat-close:hover {
    color: #333;
}

/* Body (Chat Bubbles) */
.wa-chat-body {
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.wa-bubble {
    margin: 6px 0;
    padding: 8px 10px;
    background: #f1f1f1;
    border-radius: 8px;
    align-self: stretch;
    box-shadow: none;
    font-size: 15px;
    color: #666;
    line-height: 1.5;
}

.wa-bubble.typing {
    display: flex;
    align-items: center;
    gap: 4px;
    padding: 10px 16px;
}

.wa-bubble-link {
    text-decoration: none;
    color: inherit;
    display: block;
    cursor: pointer;
}

.wa-bubble-link:hover {
    opacity: 0.9;
}

/* Typing Indicator Animation */
.wa-dot {
    width: 5px;
    height: 5px;
    background: #25d366;
    border-radius: 50%;
    display: inline-block;
    animation: waBounce 1.4s infinite ease-in-out both;
}

.wa-dot:nth-child(1) { animation-delay: -0.32s; }
.wa-dot:nth-child(2) { animation-delay: -0.16s; }

@keyframes waBounce {
    0%, 80%, 100% { transform: scale(0); }
    40% { transform: scale(1.0); }
}
</style>

<div class="wa-widget-container">
    <!-- Chat Box -->
    <div class="wa-chat-box" id="waChatBox">
        <div class="wa-chat-header">
            <h4 class="wa-chat-title">Support</h4>
            <button class="wa-chat-close" onclick="closeWaChat(event)">&times;</button>
        </div>
        <div class="wa-chat-body">
            <div class="wa-bubble" id="waMsg1">
                👋 Hi
            </div>
            <div class="wa-bubble" id="waMsg2">
                🤔 Need help with anything?
            </div>
            <a href="https://wa.me/971527633023?text=Hi!%20I%20need%20help%20with%20Aliyan%20Swiftedge%20Advisory%20services." target="_blank" class="wa-bubble-link">
                <div class="wa-bubble" id="waMsg3">
                    💬 Click WhatsApp to chat with us
                    <div style="margin-top: 5px;" class="wa-bubble typing">
                        <span class="wa-dot"></span>
                        <span class="wa-dot"></span>
                        <span class="wa-dot"></span>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Floating Button -->
    <button class="wa-btn">
        <!-- WhatsApp Icon SVG or FontAwesome -->
        <i class="fab fa-whatsapp"></i>
        <span class="wa-tooltip" id="waTooltip">Chat with us <span style="color: #25d366;">●●●</span></span>
    </button>
</div>

<script>
const chatBox = document.getElementById('waChatBox');
const widgetContainer = document.querySelector('.wa-widget-container');

// Close chat box manually
function closeWaChat(e) {
    e.stopPropagation();
    chatBox.classList.add('wa-hidden-force');
}

// Reset manual close when mouse leaves the widget container area
widgetContainer.addEventListener('mouseleave', () => {
    chatBox.classList.remove('wa-hidden-force');
});
</script>
