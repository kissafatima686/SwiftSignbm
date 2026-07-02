<?php include 'include/header.php'; ?>
<?php include 'include/topbar.php'; ?>
<?php include 'include/navbar.php'; ?>

<!-- GSAP CDN -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

<!-- Page Banner -->
<div class="page-title-area shadow dark bg-fixed text-center text-light"
     style="background-image: url(assets/images/banner/5.jpg); padding: 100px 0;">
    <div class="container">
        <h1>FAQ's</h1>
    </div>
</div>

<!-- FAQ SECTION -->
<div style="padding:80px 0; background:#f8f9fb;">
    <div class="container">
        <div class="row">

            <!-- LEFT SIDE -->
            <div class="col-md-5">
                <h5 style="color:#ff5a5f; font-weight:600;">FAQ</h5>
                <h2 style="font-weight:700; margin:10px 0 20px;">
                    Frequently Asked Questions
                </h2>
                <p style="color:#666; line-height:1.7;">
                    Find quick answers related to our core services including business setup, financial solutions, IT services, and visa support.
                </p>
            </div>

            <!-- RIGHT SIDE -->
            <div class="col-md-7">

                <!-- SEARCH -->
                <div style="margin-bottom:20px;">
                    <input type="text" id="faqSearch"
                           placeholder="Search FAQs..."
                           style="width:100%; padding:14px; border:1px solid #ddd; border-radius:8px; font-size:15px;">
                </div>

                <!-- FAQ ITEMS -->

                <div class="faq-item" style="background:#fff; margin-bottom:15px; border-radius:10px; box-shadow:0 5px 20px rgba(0,0,0,0.05); overflow:hidden;">
                    <div class="faq-question" style="padding:18px 20px; cursor:pointer; font-weight:600; display:flex; justify-content:space-between;">
                        What is included in Business Setup services?
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer" style="height:0; overflow:hidden; padding:0 20px; color:#555;">
                        <div style="padding:10px 0 20px;">
                            We handle company formation, licensing, trade name approval, and full legal setup for Mainland and Freezone businesses.
                        </div>
                    </div>
                </div>

                <div class="faq-item" style="background:#fff; margin-bottom:15px; border-radius:10px; box-shadow:0 5px 20px rgba(0,0,0,0.05); overflow:hidden;">
                    <div class="faq-question" style="padding:18px 20px; cursor:pointer; font-weight:600; display:flex; justify-content:space-between;">
                        Do you offer Financial Services support?
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer" style="height:0; overflow:hidden; padding:0 20px; color:#555;">
                        <div style="padding:10px 0 20px;">
                            Yes, we provide accounting, bookkeeping, VAT registration, and corporate tax compliance services.
                        </div>
                    </div>
                </div>

                <div class="faq-item" style="background:#fff; margin-bottom:15px; border-radius:10px; box-shadow:0 5px 20px rgba(0,0,0,0.05); overflow:hidden;">
                    <div class="faq-question" style="padding:18px 20px; cursor:pointer; font-weight:600; display:flex; justify-content:space-between;">
                        What IT Solutions do you provide?
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer" style="height:0; overflow:hidden; padding:0 20px; color:#555;">
                        <div style="padding:10px 0 20px;">
                            We offer website development, mobile apps, digital marketing, ERP systems, and custom software solutions.
                        </div>
                    </div>
                </div>

                <div class="faq-item" style="background:#fff; margin-bottom:15px; border-radius:10px; box-shadow:0 5px 20px rgba(0,0,0,0.05); overflow:hidden;">
                    <div class="faq-question" style="padding:18px 20px; cursor:pointer; font-weight:600; display:flex; justify-content:space-between;">
                        What are PRO Services?
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer" style="height:0; overflow:hidden; padding:0 20px; color:#555;">
                        <div style="padding:10px 0 20px;">
                            PRO services include visa processing, labor approvals, government documentation, and corporate compliance handling.
                        </div>
                    </div>
                </div>

                <div class="faq-item" style="background:#fff; margin-bottom:15px; border-radius:10px; box-shadow:0 5px 20px rgba(0,0,0,0.05); overflow:hidden;">
                    <div class="faq-question" style="padding:18px 20px; cursor:pointer; font-weight:600; display:flex; justify-content:space-between;">
                        How does Golden Visa & Sponsorship work?
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer" style="height:0; overflow:hidden; padding:0 20px; color:#555;">
                        <div style="padding:10px 0 20px;">
                            We assist in long-term UAE residency (Golden Visa), investor visas, and full sponsorship processing for individuals and families.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>
<?php include 'include/bottom.php'; ?>

<!-- ================= FAQ SCRIPT (GSAP + SEARCH) ================= -->
<script>
const items = document.querySelectorAll('.faq-item');
const searchInput = document.getElementById('faqSearch');

let isDesktop = window.innerWidth > 768;

/* Resize */
window.addEventListener('resize', () => {
    isDesktop = window.innerWidth > 768;
    closeAll();
});

/* OPEN SINGLE */
function openSingle(target) {
    items.forEach(i => {
        if (i !== target) closeItem(i);
    });
    openItem(target);
}

/* GSAP OPEN */
function openItem(item) {
    const answer = item.querySelector('.faq-answer');
    const icon = item.querySelector('.icon');

    item.classList.add('active');

    gsap.to(answer, {
        height: "auto",
        duration: 0.5,
        ease: "power3.out"
    });

    icon.innerText = '-';
}

/* GSAP CLOSE */
function closeItem(item) {
    const answer = item.querySelector('.faq-answer');
    const icon = item.querySelector('.icon');

    item.classList.remove('active');

    gsap.to(answer, {
        height: 0,
        duration: 0.4,
        ease: "power3.inOut"
    });

    icon.innerText = '+';
}

/* CLOSE ALL */
function closeAll() {
    items.forEach(closeItem);
}

/* CLICK (mobile only) */
items.forEach(item => {

    const question = item.querySelector('.faq-question');

    question.addEventListener('click', () => {
        if (isDesktop) return;

        if (item.classList.contains('active')) {
            closeItem(item);
        } else {
            openSingle(item);
        }
    });

    /* HOVER (desktop only) */
    item.addEventListener('mouseenter', () => {
        if (!isDesktop) return;
        openSingle(item);
    });
});

/* SEARCH */
searchInput.addEventListener('input', function () {
    const val = this.value.toLowerCase();

    items.forEach(item => {
        const text = item.textContent.toLowerCase();

        if (text.includes(val)) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
            closeItem(item);
        }
    });
});
</script>