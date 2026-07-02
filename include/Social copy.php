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

<!-- ================= POPUP MODAL ================= -->
<div class="account-popup" id="accountPopup">
  <div class="popup-content">

    <span class="close-popup" id="closePopup">&times;</span>

    <h3 id="popupTitle">Social Accounts</h3>

    <div id="accountsList"></div>

  </div>
</div>

<!-- FontAwesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

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

/* BUTTON */
.social-link {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 54px;
  height: 54px;
  border-radius: 16px;
  position: relative;
  color: #fff;
}

/* icon always dead center */
.social-link i {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  font-size: 18px;
}

/* ICON */
.social-link i {
  font-size: 18px;
  transition: transform 0.3s ease;
}

/* LABEL */
.social-link span {
  opacity: 0;
  transform: translateX(-12px);
  transition: all 0.3s ease;
  font-size: 14px;
  font-weight: 500;
  white-space: nowrap;
}

/* HOVER EFFECT */
.social-link:hover {
  width: 170px;
  justify-content: flex-start;
  padding-left: 14px;
  transform: translateX(5px);
  box-shadow: 0 20px 45px rgba(0,0,0,0.25);
}

.social-link:hover i {
  transform: scale(1.1);
}

.social-link:hover span {
  opacity: 1;
  transform: translateX(0);
}

/* ACTIVE CLICK */
.social-link:active {
  transform: scale(0.95);
}

/* ================= COLORS ================= */
.facebook {
  background: linear-gradient(135deg,#1877f2,#0b4db3);
}

.instagram {
  background: linear-gradient(135deg,#f9ce34,#ee2a7b,#6228d7);
}

.linkedin {
  background: linear-gradient(135deg,#0a66c2,#004182);
}

.tiktok {
  background: linear-gradient(135deg,#25f4ee,#000,#fe2c55);
}

/* ================= POPUP OVERLAY ================= */
.account-popup {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.65);
  backdrop-filter: blur(8px);
  justify-content: center;
  align-items: center;
  z-index: 10000;
}

.account-popup.active {
  display: flex;
}

/* ================= POPUP BOX ================= */
.popup-content {
  width: 380px;
  max-width: 92%;

  background: rgba(255,255,255,0.08);
  backdrop-filter: blur(18px);

  border: 1px solid rgba(255,255,255,0.18);
  border-radius: 20px;

  padding: 24px;
  color: #fff;

  box-shadow: 0 25px 60px rgba(0,0,0,0.45);

  position: relative;

  animation: popIn 0.25s ease;
}

@keyframes popIn {
  from { transform: scale(0.85); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}

/* TITLE */
.popup-content h3 {
  margin: 0 0 18px;
  text-align: center;
  font-size: 18px;
  font-weight: 600;
}

/* CLOSE */
.close-popup {
  position: absolute;
  top: 12px;
  right: 14px;
  font-size: 22px;
  cursor: pointer;
  color: #fff;
  opacity: 0.7;
  transition: 0.2s;
}

.close-popup:hover {
  opacity: 1;
  transform: rotate(90deg);
}

/* LINKS */
#accountsList a {
  display: block;
  padding: 11px 12px;
  margin: 7px 0;
  border-radius: 12px;
  text-decoration: none;
  color: #fff;
  background: rgba(255,255,255,0.06);
  transition: all 0.25s ease;
}

#accountsList a:hover {
  background: rgba(255,255,255,0.15);
  transform: translateX(6px);
}

/* ================= RESPONSIVE ================= */
@media(max-width:768px){
  .social-sidebar {
    left: 12px;
  }
}
</style>

<script>
const accountsData = {
  facebook: [
    { name: "Shipping", url: "https://www.facebook.com/SSShippingllc" },
    { name: "IT Solution", url: "#" },
    { name: "General Trading", url: "#" },
    { name: "Cloth & Cosmetics", url: "#" }
  ],
  instagram: [
    { name: "Shipping", url: "#" },
    { name: "IT Solution", url: "#" },
    { name: "General Trading", url: "#" },
    { name: "Cloth & Cosmetics", url: "#" }
  ],
  linkedin: [
    { name: "Shipping", url: "https://www.linkedin.com/company/swift-sign-shipping-llc/?viewAsMember=true" },
    { name: "IT Solution", url: "#" },
    { name: "General Trading", url: "#" },
    { name: "Cloth & Cosmetics", url: "#" }
  ],
  tiktok: [
    { name: "Shipping", url: "#" },
    { name: "IT Solution", url: "#" },
    { name: "General Trading", url: "#" },
    { name: "Cloth & Cosmetics", url: "#" }
  ]
};

const sidebarLinks = document.querySelectorAll('.social-link');
const popup = document.getElementById("accountPopup");
const accountsList = document.getElementById("accountsList");
const popupTitle = document.getElementById("popupTitle");
const closePopup = document.getElementById("closePopup");

/* OPEN */
sidebarLinks.forEach(link => {
  link.addEventListener('click', () => {
    const platform = link.dataset.platform;
    const accounts = accountsData[platform] || [];

    popupTitle.textContent =
      platform.charAt(0).toUpperCase() + platform.slice(1) + " Accounts";

    accountsList.innerHTML = accounts
      .map(acc => `<a href="${acc.url}" target="_blank">${acc.name}</a>`)
      .join("");

    popup.classList.add("active");
  });
});

/* CLOSE */
closePopup.addEventListener('click', () => {
  popup.classList.remove("active");
});

/* OUTSIDE CLICK */
window.addEventListener('click', (e) => {
  if (e.target === popup) {
    popup.classList.remove("active");
  }
});
</script>