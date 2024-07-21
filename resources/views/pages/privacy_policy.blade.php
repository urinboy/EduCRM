@extends('layouts.app')

@section('title', __('Privacy Policy'))
@section('website', strtoupper("educrm.itorda.uz"))

@section('heading')
    <h1 class="h3">@yield('title')</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb m-0 fs-7">
            <li class="breadcrumb-item"><a class="link-primary text-decoration-none"
                    href="{{ route('home') }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="container">
        <h2 class="mt-3 keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">@yield('website') Maxfiylik siyosati (Bu shunchaki shablon)</font>
            </font>
        </h2>

        <div class="keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Sizning maxfiyligingiz va ma'lumotlaringiz xavfsizligi biz uchun
                    muhim. Ushbu Maxfiylik siyosati hujjati @yield('website') saytiga tashrif buyurganingizda,
                    foydalanayotganingizda yoki xarid qilganingizda to‘planishi, foydalanilishi yoki baham ko‘rilishi mumkin
                    bo‘lgan ma’lumotlar turlarini tavsiflaydi.</font>
            </font>
        </div>

        <div class="keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Agar sizda qo'shimcha savollaringiz bo'lsa yoki Maxfiylik siyosatimiz
                    yoki foydalanuvchi ma'lumotlari va shaxsiy ma'lumotlarini qanday ishlatishimiz haqida qo'shimcha
                    ma'lumotga muhtoj bo'lsangiz yoki shaxsiy ma'lumotlaringizni doimiy ravishda to'plash, ishlatish yoki
                    oshkor qilish uchun roziligingizni qaytarib olishni istasangiz, </font>
            </font><a href="http://@yield('website')/contact">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">biz bilan bog'laning.</font>
                </font>
            </a>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"> , Cookie roziligingizni qaytarib olish uchun </font>
            </font><a href="index.php?cookieConsent=0">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">shu yerni bosing</font>
                </font>
            </a>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"> .</font>
            </font>
        </div>

        <h2 class="mt-3 keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Ta'riflar</font>
            </font>
        </h2>

        <div class="keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">@yield('website') Templateo, San-Fransisko, CA 94107 tomonidan
                    boshqariladi ("Men", "Men", "Bizning", "Biz" yoki "Biz" deb yuritiladi). Ushbu xizmatning mijozi
                    sifatida siz ushbu shartnomaga muvofiq "Foydalanuvchi", "Mehmon" yoki "Siz"siz. Veb-sayt yoki biz taklif
                    qilayotgan har qanday xizmatlar "Veb-sayt" yoki "Xizmat" deb nomlanadi. Tashqi xizmatlar yoki
                    integratsiya kabi ilovalar "Tashqi provayder" yoki "Tashqi xizmat" deb nomlanadi.</font>
            </font>
        </div>

        <h2 class="mt-3 keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Biz to'playdigan ma'lumotlar</font>
            </font>
        </h2>

        <div class="keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Jurnal fayllaridan foydalanishning standart tartib-qoidalariga rioya
                    qilgan holda, ushbu fayllar veb-saytga tashrif buyurganingizda avtomatik ravishda tashriflar qayd
                    etiladi, u sizning veb-brauzeringiz haqidagi ma'lumotlarni o'z ichiga olishi mumkin, u qurilmangizda
                    o'rnatilgan ba'zi cookie-fayllarni, IP-manzilni, ISP-ni, vaqt mintaqasini va vaqt tamg'asi, havola /
                    chiqish sahifalari, bosish soni. Ushbu ma'lumotning maqsadi tendentsiyalarni tahlil qilish, ushbu
                    veb-saytni boshqarish, foydalanuvchilarning ushbu veb-saytdagi harakatini kuzatish va demografik
                    ma'lumotlarni yig'ishdir va u shaxsni aniqlash mumkin bo'lgan hech qanday ma'lumot bilan bog'lanmagan.
                    Bundan tashqari, veb-saytni ko'rib chiqayotganingizda biz siz ko'rgan pastki sahifalar haqida ma'lumot
                    to'plashimiz mumkin.

                </font>
            </font><br><br>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Shuningdek, siz haqingizda ismingiz, tashkilotingiz/kompaniyangiz
                    nomi, manzilingiz, elektron pochta manzilingiz yoki boshqa shaxsiy maʼlumotlaringiz kabi shaxsiy
                    maʼlumotlarni toʻplashimiz mumkin, agar siz ularni roʻyxatdan oʻtish, xarid qilish, biz bilan bogʻlanish
                    yoki boshqa yoʻllar bilan bizga taqdim etsangiz. Biz shaxsiy ma'lumotni sizga kerakli xizmatni
                    ko'rsatish uchun haqiqatan ham kerak bo'lganda so'raymiz (masalan, veb-sayt orqali buyurtma qilsangiz).
                    Biz uni sizning bilimingiz va roziligingiz bilan adolatli va qonuniy yo'llar bilan yig'amiz. Shuningdek,
                    biz uni nima uchun to'playotganimiz va undan qanday foydalanishni sizga ma'lum qilamiz.</font>
            </font>
        </div>

        <h2 class="mt-3 keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Shaxsiy ma'lumotlaringizni almashish</font>
            </font>
        </h2>

        <div class="keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">

                    Foydalanish shartlarini buzsangiz yoki u Xizmatimizni osonlashtirishga yordam beradigan hollar bundan
                    mustasno, biz shaxsiy maʼlumotlarni ochiq yoki uchinchi shaxslar bilan baham koʻrmaymiz, sotmaymiz,
                    sotmaymiz yoki ijaraga bermaymiz. Masalan, onlayn do'kon moduli PayPal yoki boshqa to'lov protsessorlari
                    kabi uchinchi tomon xizmatlarini talab qilishi mumkin, biz Google Analytics, Facebook Pixel va boshqalar
                    kabi statistika xizmatlaridan ham foydalanishimiz mumkin. Ushbu xizmatlarning har biri o'z Maxfiylik
                    siyosatiga ega, masalan:

                </font>
            </font>
            <ul>
                <li><a href="https://www.paypal.com/webapps/mpp/ua/privacy-full" target="_blank" rel="nofollow">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">PayPal</font>
                        </font>
                    </a></li>
                <li><a href="https://www.google.com/intl/en/policies/privacy" target="_blank" rel="nofollow">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Google Analytics</font>
                        </font>
                    </a></li>
            </ul>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">

                    Ba'zi xususiyatlarni taqdim etish uchun biz to'lov va buxgalteriya provayderlari yoki xizmatlar,
                    qo'llab-quvvatlash yoki aloqa provayderlari va boshqa xizmatlar kabi boshqa uchinchi tomon xizmatlariga
                    tayanishimiz mumkin, biz taqdim etilgan xizmatlardan birortasi bilan qanday munosabatda bo'lishingizni
                    kuzatmaslik huquqini saqlab qolamiz. </font>
            </font><br><br>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">

                    Xizmatni yaxshilash, tajribangizni sozlash va Xizmatdan foydalanishni tahlil qilish uchun shaxsiy
                    bo'lmagan ma'lumotlarni to'plashimiz va foydalanishimiz mumkin. Ushbu Maxfiylik siyosati to'plangan
                    shaxsiy bo'lmagan ma'lumotlardan foydalanishimiz yoki oshkor qilishimizni cheklamaydi. Biz shaxsiy
                    bo'lmagan ma'lumotlarni to'plash, ishlatish va o'z ixtiyorimiz bilan hamkorlarimiz, reklama beruvchilar
                    va boshqa uchinchi tomonlarga oshkor qilish huquqini saqlab qolamiz.</font>
            </font>
        </div>

        <h2 class="mt-3 keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Cookie va mayoqlar</font>
            </font>
        </h2>

        <div class="keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">@yield('website') brauzeringiz sozlamalari ruxsat bergan taqdirdagina
                    qurilmangizga joylashtirilgan kichik maʼlumotlar fayllari boʻlgan “Cookie-fayllar”dan foydalanadi va
                    noyob identifikator, ushbu veb-saytdagi avval tashrif buyurilgan pastki sahifalar va/yoki boshqa
                    maʼlumotlarni oʻz ichiga olishi mumkin. Biz foydalanishimiz mumkin bo'lgan cookie-fayllar turlari: Seans
                    Cookie-fayllari, Xavfsizlik Cookie-fayllari yoki Preference Cookie-fayllari. Brauzer sozlamalarida
                    cookie-fayllarni o'chirib qo'yishingiz yoki o'chirishingiz mumkin.</font>
            </font>
        </div>

        <h2 class="mt-3 keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Umumiy ma'lumotlarni himoya qilish qoidalari (GDPR)</font>
            </font>
        </h2>

        <div class="keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Maʼlumotlarni himoya qilish boʻyicha umumiy reglament (GDPR) Yevropa
                    Ittifoqi va Yevropa Iqtisodiy hududi doirasidagi barcha shaxslar uchun maʼlumotlarni himoya qilish va
                    shaxsiy daxlsizlik toʻgʻrisidagi Yevropa Ittifoqi qonunchiligidagi nizomdir.

                </font>
            </font><br><br>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                    Agar siz Evropada rezident bo'lsangiz, biz sizning ma'lumotlaringiz bo'yicha ma'lumotlar nazoratchisimiz
                    va siz shaxsiy ma'lumotlaringiz qanday qayta ishlanishini, siz haqingizda nima to'plaganimizni bilish va
                    bu ma'lumotlarni tuzatish, yangilash yoki o'chirishni so'rash huquqiga egasiz. Bundan tashqari,
                    maʼlumotlaringiz Yevropadan tashqariga, jumladan, Kanada va Qoʻshma Shtatlarga ham uzatilishi
                    mumkinligini unutmang. </font>
                <font style="vertical-align: inherit;">GDPR huquqlaringiz haqida savollaringiz bo'lsa, </font>
            </font><a href="http://@yield('website')/contact">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">biz bilan bog'laning</font>
                </font>
            </a>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"> . </font>
                <font style="vertical-align: inherit;">Qo'shimcha ma'lumot yoki shikoyatlar uchun mahalliy ma'lumotlarni
                    himoya qilish organiga murojaat qiling.</font>
            </font>
        </div>

        <h2 class="mt-3 keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Ma'lumotlarni saqlash</font>
            </font>
        </h2>

        <div class="keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Biz to'plangan ma'lumotni sizga so'ragan xizmatni taqdim etish uchun
                    zarur bo'lgunga qadar yoki bizdan ushbu ma'lumotni o'chirishni so'ramaguningizcha saqlaymiz. Biz
                    saqlaydigan maʼlumotlarni yoʻqotish va oʻgʻirlash, shuningdek, ruxsatsiz kirish, oshkor qilish,
                    nusxalash, foydalanish yoki oʻzgartirishning oldini olish uchun tijorat nuqtai nazaridan maqbul
                    vositalar doirasida himoya qilamiz. Biz saqlashimiz mumkin bo'lgan mijoz parollari xesh sifatida
                    saqlanadi va asl parolni tiklab bo'lmaydi.</font>
            </font>
        </div>

        <h2 class="mt-3 keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Elektron pochta aloqasi</font>
            </font>
        </h2>

        <div class="keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Biz sizning so'rovlaringizga javoban siz bilan elektron pochta yoki
                    telefon orqali bog'lanishimiz yoki bizga taqdim etgan Shaxsiy ma'lumotlarga asoslanib xizmatga oid
                    e'lonlarni yuborishimiz mumkin. Shartnomangizni olgan bo'lsak, shaxsiy ma'lumotlaringizdan sizga
                    yangilanishlar va boshqa reklama xabarlarini yuborish uchun ham foydalanishimiz mumkin. Agar siz boshqa
                    elektron pochta xabarlarini olishni istamasangiz, har bir xabarga kiritilgan ko'rsatmalarga rioya qilib,
                    ularni qabul qilishning istalgan vaqtida rad etishingiz mumkin. Odatda bu "obunani bekor qilish"
                    havolasi.</font>
            </font>
        </div>

        <h2 class="mt-3 keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Boshqa veb-saytlarga havolalar</font>
            </font>
        </h2>

        <div class="keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Bizning veb-saytimizda biz boshqarmaydigan uchinchi tomon
                    veb-saytlari yoki xizmatlariga havolalar bo'lishi mumkin. Agar siz ushbu veb-saytlarning birortasiga
                    havolaga rioya qilsangiz va siz uchinchi tomon veb-saytiga yo'naltirilasiz, iltimos, ushbu
                    veb-saytlarning shaxsiy maxfiylik siyosati borligini va biz ushbu siyosat yoki amaliyotlar uchun hech
                    qanday javobgarlik yoki javobgarlikni o'z zimmamizga olmaymiz. Iltimos, ushbu veb-saytlardan biriga
                    shaxsiy ma'lumotlarni yuborishdan oldin tashrif buyurgan har bir veb-saytning Maxfiylik siyosatini
                    ko'rib chiqing.</font>
            </font>
        </div>

        <h2 class="mt-3 keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Reklamalar</font>
            </font>
        </h2>

        <div class="keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Bizning veb-saytimizda o'zlarining Maxfiylik siyosatiga ega bo'lishi
                    mumkin bo'lgan va cookie-fayllar va veb-mayoqlarni o'rnatishi mumkin bo'lgan reklama bo'yicha
                    hamkorlarimiz tomonidan sizga taqdim etilgan reklamalar ko'rsatilishi mumkin. Ushbu cookie-fayllar sizga
                    yoki qurilmangizning boshqa foydalanuvchilariga har safar e'lon qilinganida reklama serveriga
                    qurilmangizni tanib olishiga yordam beradi. Ushbu Maxfiylik siyosati faqat @yield('website') saytidan
                    foydalanishni qamrab oladi va uchinchi tomon reklama beruvchilari yoki hamkorlarini qamrab olmaydi.
                </font>
            </font>
        </div>

        <h2 class="mt-3 keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Bolalar</font>
            </font>
        </h2>

        <div class="keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Ushbu veb-sayt 18 yoshga to'lmagan shaxslarga murojaat qilmaydi.
                    Veb-saytdan foydalanish orqali siz kamida 18 yoshda ekanligingizni bildirasiz.</font>
            </font>
        </div>

        <h2 class="mt-3 keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Kuzatmang</font>
            </font>
        </h2>

        <div class="keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Brauzeringiz “Kuzatilmasin” signalini yuborganda, ushbu veb-sayt
                    o‘zining ma’lumotlar to‘plamini va foydalanish amaliyotini o‘zgartirmaydi</font>
            </font>
        </div>

        <h2 class="mt-3 keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Biznes transferlari</font>
            </font>
        </h2>

        <div class="keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">@yield('website') yoki deyarli barcha aktivlarimiz sotib olinsa yoki
                    Templateo o‘z faoliyatini to‘xtatib qolsa yoki bankrot bo‘lib qolsa, sizning shaxsiy ma’lumotlaringiz
                    uchinchi shaxs tomonidan o‘tkazilgan yoki sotib olingan aktivlardan biri bo‘ladi. Shaxsiy
                    ma'lumotlaringizni qayta ishlashda davom etishi mumkin. Siz bunday o'tkazmalar sodir bo'lishi va ushbu
                    Maxfiylik siyosati tomonidan ruxsat etilganligini va bizning aktivlarimizni har qanday sotib oluvchi
                    ushbu siyosatda ko'rsatilganidek, shaxsiy ma'lumotlaringizdan foydalanishda davom etishini tan olasiz va
                    rozilik berasiz.</font>
            </font>
        </div>

        <h2 class="mt-3 keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">O'zgarishlar</font>
            </font>
        </h2>

        <div class="keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Biz ushbu Maxfiylik siyosatini istalgan vaqtda oldindan
                    ogohlantirmasdan yangilash yoki o'zgartirish huquqini saqlab qolamiz. Biz ushbu o'zgarishlarni ushbu
                    sahifada joylashtiramiz, shuning uchun bizga shaxsiy ma'lumotlarni taqdim etishdan oldin har safar ushbu
                    hujjatni ko'rib chiqing. Ushbu Siyosat 2022-03-19 dan kuchga kiradi. Ushbu Maxfiylik siyosatiga
                    kiritilgan har qanday o'zgartirish yoki qayta ko'rib chiqilgandan so'ng etti (7) kundan keyin
                    veb-saytdan foydalanishda davom etishingiz sizning ushbu qayta ko'rib chiqilgan Maxfiylik siyosati
                    shartlariga roziligingizni bildiradi. Ma'lumotlaringizdan qanday foydalanilishidan xavotirda bo'lsangiz,
                    ushbu Maxfiylik siyosatini vaqti-vaqti bilan tekshirishingizni tavsiya qilamiz.</font>
            </font>
        </div>

        <h2 class="mt-3 keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Rozilik</font>
            </font>
        </h2>

        <div class="keditable">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Veb-saytimizdan foydalanish orqali siz Maxfiylik siyosatimizga
                    rozilik bildirasiz va uning shartlariga rozilik bildirasiz.</font>
            </font>
        </div>

    </div>
@endsection
