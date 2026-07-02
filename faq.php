<?php include 'include/header.php'; ?>
<?php include 'include/topbar.php'; ?>
<?php include 'include/navbar.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

<div class="page-title-area shadow dark bg-fixed text-center text-light"
     style="background-image:url(assets/images/banner/5.jpg);padding:100px 0;">
    <div class="container">
        <h1>FAQ's</h1>
    </div>
</div>

<style>
body{background:#fff}

/* ===== TABS ===== */
.tab{
    padding:10px 16px;
    border-radius:30px;
    border:none;
    cursor:pointer;
    font-size:13px;
    font-weight:600;
    color:#333;
    transition:.3s;
}

.tab[data-tab="all"]{background:#e0e0e0}
.tab[data-tab="business"]{background:linear-gradient(45deg,#ff512f,#dd2476);color:#fff}
.tab[data-tab="finance"]{background:linear-gradient(45deg,#1d976c,#93f9b9);color:#fff}
.tab[data-tab="it"]{background:linear-gradient(45deg,#396afc,#2948ff);color:#fff}
.tab[data-tab="visa"]{background:linear-gradient(45deg,#f7971e,#ffd200);color:#fff}
.tab[data-tab="golden"]{background:linear-gradient(45deg,#834d9b,#d04ed6);color:#fff}

.tab.active{
    transform:scale(1.08);
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

/* ===== FAQ BOX ===== */
.faq-item{
    background:#fff;
    margin-bottom:12px;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 6px 20px rgba(0,0,0,0.05);
    transition:.3s;
}

.faq-item:hover{
    transform:translateY(-2px);
}

/* CATEGORY COLORS */
.faq-item[data-category="business"]{border-left:5px solid #ff4d4d}
.faq-item[data-category="finance"]{border-left:5px solid #00c896}
.faq-item[data-category="it"]{border-left:5px solid #3a7bd5}
.faq-item[data-category="visa"]{border-left:5px solid #ffb400}
.faq-item[data-category="golden"]{border-left:5px solid #b84dff}

.faq-q{
    padding:18px 20px;
    font-weight:700;
    cursor:pointer;
    display:flex;
    justify-content:space-between;
    background:#fff;
}

.icon{font-size:18px;font-weight:bold}

.faq-a{
    height:0;
    overflow:hidden;
    padding:0 20px;
    color:#555;
    background:#fafafa;
}
</style>

<div style="padding:80px 0;">
<div class="container">
<div class="row">

<!-- LEFT -->
<div class="col-md-4">
    <h5 style="color:#ffbd42;font-weight:600;">FAQ</h5>
    <h2 style="font-weight:700;">Frequently Asked Questions</h2>
</div>

<!-- RIGHT -->
<div class="col-md-8">

<input type="text" id="faqSearch" placeholder="Search FAQ..."
style="width:100%;padding:14px;border-radius:8px;border:1px solid #ddd;margin-bottom:15px;">

<!-- TABS -->
<div style="display:flex;gap:10px;flex-wrap:wrap;margin-bottom:20px;">
    <button class="tab active" data-tab="all">All</button>
    <button class="tab" data-tab="business">Business</button>
    <button class="tab" data-tab="finance">Finance</button>
    <button class="tab" data-tab="it">IT</button>
    <button class="tab" data-tab="visa">Visa</button>
    <button class="tab" data-tab="golden">Golden Visa</button>
</div>

<!-- FAQ ITEMS -->

<div class="faq-item" data-category="business">
<div class="faq-q">Business Setup Services <span class="icon">+</span></div>
<div class="faq-a"><div style="padding:10px 0 20px;">
Company formation, licensing and approvals in UAE.
</div></div>
</div>

<div class="faq-item" data-category="finance">
<div class="faq-q">Financial Services <span class="icon">+</span></div>
<div class="faq-a"><div style="padding:10px 0 20px;">
Accounting, VAT registration and tax compliance.
</div></div>
</div>

<div class="faq-item" data-category="it">
<div class="faq-q">IT Solutions <span class="icon">+</span></div>
<div class="faq-a"><div style="padding:10px 0 20px;">
Web development, apps, ERP and digital marketing.
</div></div>
</div>

<div class="faq-item" data-category="visa">
<div class="faq-q">PRO Services <span class="icon">+</span></div>
<div class="faq-a"><div style="padding:10px 0 20px;">
Visa processing, labor approvals and documentation.
</div></div>
</div>

<div class="faq-item" data-category="golden">
<div class="faq-q">Golden Visa <span class="icon">+</span></div>
<div class="faq-a"><div style="padding:10px 0 20px;">
Long-term residency and investor visa support.
</div></div>
</div>

</div>
</div>
</div>
</div>

<?php include 'include/footer.php'; ?>
<?php include 'include/bottom.php'; ?>

<script>
const items = document.querySelectorAll('.faq-item');
const tabs = document.querySelectorAll('.tab');
const search = document.getElementById('faqSearch');

/* OPEN */
function openItem(item){
    const a = item.querySelector('.faq-a');
    const i = item.querySelector('.icon');

    gsap.to(a,{height:"auto",duration:0.4,ease:"power2.out"});
    i.innerText = "-";
}

/* CLOSE */
function closeItem(item){
    const a = item.querySelector('.faq-a');
    const i = item.querySelector('.icon');

    gsap.to(a,{height:0,duration:0.3});
    i.innerText = "+";
}

/* CLICK */
items.forEach(item=>{
    item.querySelector('.faq-q').addEventListener('click',()=>{
        const isOpen = item.classList.contains('active');

        items.forEach(i=>{
            i.classList.remove('active');
            closeItem(i);
        });

        if(!isOpen){
            item.classList.add('active');
            openItem(item);
        }
    });
});

/* TAB FILTER */
tabs.forEach(tab=>{
    tab.addEventListener('click',()=>{
        tabs.forEach(t=>t.classList.remove('active'));
        tab.classList.add('active');

        const cat = tab.dataset.tab;

        items.forEach(item=>{
            const match = cat==='all' || item.dataset.category===cat;
            item.style.display = match ? 'block':'none';
            closeItem(item);
        });
    });
});

/* SEARCH */
search.addEventListener('input',()=>{
    const val = search.value.toLowerCase();

    items.forEach(item=>{
        const text = item.textContent.toLowerCase();

        if(text.includes(val)){
            item.style.display = "block";
        }else{
            item.style.display = "none";
            closeItem(item);
        }
    });
});
</script>