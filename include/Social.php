<!-- ================= SOCIAL SIDEBAR ================= -->
<div class="social-sidebar">

  <div class="social-link facebook" data-platform="facebook">
    <i class="fab fa-facebook-f"></i>
    <span>Facebook</span>
  </div>

  <div class="social-link instagram" data-platform="instagram">
    <i class="fab fa-instagram"></i>
    <span>Instagram</span>
  </div>

  <div class="social-link linkedin" data-platform="linkedin">
    <i class="fab fa-linkedin-in"></i>
    <span>LinkedIn</span>
  </div>

  <div class="social-link tiktok" data-platform="tiktok">
    <i class="fab fa-tiktok"></i>
    <span>TikTok</span>
  </div>

</div>

<!-- ================= POPUP ================= -->
<div class="account-popup" id="accountPopup">
  <div class="popup-content">

    <span class="close-popup" id="closePopup">&times;</span>

    <h3 id="popupTitle">Social Accounts</h3>

    <div id="accountsList"></div>

  </div>
</div>

<!-- ================= FONT AWESOME ================= -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

/* ================= SIDEBAR ================= */
.social-sidebar {
  position: fixed;
  top: 50%;
  left: 20px;
  transform: translateY(-50%);
  display: flex;
  flex-direction: column;
  gap: 14px;
  z-index: 9999;
}

.social-link {
  position: relative;
  width: 54px;
  height: 54px;
  border-radius: 14px;
  color: #fff;
  cursor: pointer;
  transition: 0.3s;
  overflow: hidden;
}

/* ICON ALWAYS CENTER */
.social-link i {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 18px;
  z-index: 2;
  transition: 0.3s;
}

/* TEXT HIDDEN BY DEFAULT */
.social-link span {
  position: absolute;
  left: 60px;
  top: 50%;
  transform: translateY(-50%);
  opacity: 0;
  font-size: 14px;
  white-space: nowrap;
  transition: 0.3s;
}

/* HOVER EFFECT */
.social-link:hover {
  width: 170px;
  padding-left: 15px;
}

/* SHOW TEXT */
.social-link:hover span {
  opacity: 1;
}

/* OPTIONAL ICON SHIFT (small left move for better UX) */
.social-link:hover i {
  left: 28px;
  transform: translateY(-50%);
}

.social-link:hover span {
  opacity: 1;
}

.social-link:active {
  transform: scale(0.95);
}

/* COLORS */
.facebook { background:#1877f2; }
.instagram { background: linear-gradient(135deg,#f9ce34,#ee2a7b,#6228d7); }
.linkedin { background:#0a66c2; }
.tiktok { background:#000; }

/* ================= POPUP ================= */
.account-popup {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.6);
  backdrop-filter: blur(6px);
  justify-content: center;
  align-items: center;
  z-index: 10000;
}

.account-popup.active {
  display: flex;
}

/* POPUP BOX */
.popup-content {
  width: 400px;
  max-width: 92%;
  background: #fff;
  border-radius: 16px;
  padding: 25px;
  color: #333;
  box-shadow: 0 20px 60px rgba(0,0,0,0.25);
  position: relative;
  animation: popIn 0.3s ease;
}

@keyframes popIn {
  from { transform: translateY(20px) scale(0.95); opacity: 0; }
  to { transform: translateY(0) scale(1); opacity: 1; }
}

/* TITLE */
.popup-content h3 {
  margin-bottom: 18px;
  text-align: center;
  font-size: 20px;
  font-weight: 600;
}

/* CLOSE */
.close-popup {
  position: absolute;
  top: 10px;
  right: 14px;
  font-size: 22px;
  cursor: pointer;
  color: #666;
}

.close-popup:hover {
  color: #000;
  transform: rotate(90deg);
}

/* LIST */
#accountsList a {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 12px;
  margin: 8px 0;
  border-radius: 10px;
  text-decoration: none;
  background: #f4f6f8;
  color: #333;
  transition: 0.25s;
}

#accountsList a i {
  width: 28px;
  height: 28px;
  background: #0077b5;
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  font-size: 12px;
}

#accountsList a:hover {
  background: #0077b5;
  color: #fff;
  transform: translateX(5px);
}

#accountsList a:hover i {
  background: #fff;
  color: #0077b5;
}

/* MOBILE */
@media(max-width:768px){
  .social-sidebar { left:10px; }
}

/* MOBILE AUTO HIDE */
@media (max-width: 768px) {
  .social-sidebar {
    transform: translateX(-120%) translateY(-50%);
    transition: 0.3s ease;
  }

  .social-sidebar.show {
    transform: translateX(0) translateY(-50%);
  }
}

</style>

<script>

/* ================= DATA ================= */
const accountsData = {
  facebook: [
    { name: "Shipping & Logistics Division", url: "https://www.facebook.com/share/14W6bXkrAPQ" },
    { name: "IT & Digital Solutions Division", url: "https://www.facebook.com/share/18PQG1n6E9" },
    { name: "General Trading Division", url: "https://www.facebook.com/SSgeneraltradinguae" },
    { name: "Hijabs & Modest Fashion Division", url: "https://www.facebook.com/share/18FhT1HS1s" }
  ],
  instagram: [
    { name: "Shipping & Logistics Division", url: " https://www.instagram.com/swiftsign_shipping?igsh=NnE3MGx3ejFjcnhu" },
    { name: "IT & Digital Solutions Division", url: "https://www.instagram.com/ssitandcybersolutions?igsh=eWxhZXF3a2Rhdnl2" },
    { name: "General Trading Division", url: "https://www.instagram.com/swiftsign_generaltrading" },
    { name: "Hijabs & Modest Fashion Division", url: "https://www.instagram.com/laila_hijab12?igsh=b3E1MzlkOWF0c2Rr" }
  ],
  linkedin: [
    { name: "Shipping & Logistics Division", url: "https://www.linkedin.com/company/swift-sign-shipping-llc" },
    { name: "IT & Digital Solutions Division", url: "https://www.linkedin.com/company/swift-sign-it-cyber-solutions" },
    { name: "General Trading Division", url: "#" },
    { name: "Hijabs & Modest Fashion Division", url: "#" }
  ],
  tiktok: [
    { name: "Shipping & Logistics Division", url: "https://www.tiktok.com/@swiftsign_shipping?_r=1&_t=ZS-95WzUk4jC3J" },
    { name: "IT & Digital Solutions Division", url: "#" },
    { name: "General Trading Division", url: "#" },
    { name: "Hijabs & Modest Fashion Division", url: "https://vm.tiktok.com/ZS9Ns11tBvpH2-s3IvB/" }
  ]
};

/* ================= ELEMENTS ================= */
const sidebarLinks = document.querySelectorAll('.social-link');
const popup = document.getElementById("accountPopup");
const accountsList = document.getElementById("accountsList");
const popupTitle = document.getElementById("popupTitle");
const closePopup = document.getElementById("closePopup");

/* ================= OPEN ================= */
sidebarLinks.forEach(link => {
  link.addEventListener('click', () => {
    const platform = link.dataset.platform;
    const accounts = accountsData[platform] || [];

    popupTitle.textContent =
      platform.charAt(0).toUpperCase() + platform.slice(1) + " Accounts";

    accountsList.innerHTML = accounts.map(acc => `
      <a href="${acc.url}" target="_blank">
        <i class="fas fa-arrow-right"></i>
        ${acc.name}
      </a>
    `).join("");

    popup.classList.add("active");
  });
});

/* ================= CLOSE ================= */
closePopup.addEventListener('click', () => {
  popup.classList.remove("active");
});

/* OUTSIDE CLICK */
window.addEventListener('click', (e) => {
  if (e.target === popup) {
    popup.classList.remove("active");
  }
});

/* ================= MOBILE AUTO HIDE ================= */
let lastScrollTop = 0;
const sidebar = document.querySelector(".social-sidebar");

if (window.innerWidth <= 768 && sidebar) {

  // ❌ ALWAYS HIDDEN ON LOAD (your requirement)
  sidebar.classList.remove("show");

  window.addEventListener("scroll", function () {

    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // ignore tiny jitter
    if (Math.abs(scrollTop - lastScrollTop) < 10) return;

    // 📌 ONLY SHOW when user is going UP (bottom → top)
    if (scrollTop < lastScrollTop) {
      sidebar.classList.add("show");
    }

    // 📌 ALWAYS hide when going DOWN
    if (scrollTop > lastScrollTop) {
      sidebar.classList.remove("show");
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  });

}

</script>