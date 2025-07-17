

<?php $__env->startSection('content'); ?>
<!-- Eski sayfa geçiş butonları kaldırıldı, modern navbar ile geçiş sağlanıyor -->

<h2>Sipariş Ver</h2>
<form action="<?php echo e(route('siparis.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="mb-3">
        <label>Adınız</label>
        <input type="text" name="isim" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Soyadınız</label>
        <input type="text" name="soyisim" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>İl</label>
        <select name="il" id="il" class="form-control" required>
            <option value="">İl seçiniz</option>
        </select>
    </div>

    <div class="mb-3">
        <label>İlçe</label>
        <select name="ilce" id="ilce" class="form-control" required>
            <option value="">Önce il seçiniz</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Adres</label>
        <textarea name="adres" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label>Adet</label>
        <input type="number" name="adet" class="form-control" required>
    </div>

    <input type="hidden" name="urun_id" value="<?php echo e($urun->id); ?>">

    <button type="submit" class="btn btn-primary">Siparişi Tamamla</button>
</form>

<script>
const iller = {
    "Adana": ["Seyhan", "Yüreğir", "Çukurova", "Sarıçam", "Ceyhan"],
    "Adıyaman": ["Merkez", "Kahta", "Besni", "Gölbaşı", "Gerger"],
    "Afyonkarahisar": ["Merkez", "Sandıklı", "Bolvadin", "Dinar", "Emirdağ"],
    "Ağrı": ["Merkez", "Patnos", "Doğubayazıt", "Tutak", "Taşlıçay"],
    "Aksaray": ["Merkez", "Eskil", "Güzelyurt", "Ortaköy", "Sarıyahşi"],
    "Amasya": ["Merkez", "Merzifon", "Suluova", "Taşova", "Göynücek"],
    "Ankara": ["Çankaya", "Keçiören", "Mamak", "Etimesgut", "Yenimahalle"],
    "Antalya": ["Muratpaşa", "Kepez", "Konyaaltı", "Alanya", "Manavgat"],
    "Artvin": ["Merkez", "Hopa", "Borçka", "Arhavi", "Yusufeli"],
    "Aydın": ["Efeler", "Nazilli", "Söke", "Kuşadası", "Didim"],
    "Balıkesir": ["Altıeylül", "Karesi", "Bandırma", "Edremit", "Burhaniye"],
    "Bartın": ["Merkez", "Amasra", "Kurucaşile", "Ulus"],
    "Batman": ["Merkez", "Kozluk", "Sason", "Hasankeyf", "Beşiri"],
    "Bayburt": ["Merkez", "Demirözü", "Aydıntepe"],
    "Bilecik": ["Merkez", "Bozüyük", "Osmaneli", "Söğüt", "Pazaryeri"],
    "Bingöl": ["Merkez", "Genç", "Karlıova", "Solhan", "Adaklı"],
    "Bitlis": ["Merkez", "Tatvan", "Güroymak", "Ahlat", "Mutki"],
    "Bolu": ["Merkez", "Gerede", "Mudurnu", "Göynük", "Yeniçağa"],
    "Burdur": ["Merkez", "Bucak", "Gölhisar", "Yeşilova", "Tefenni"],
    "Bursa": ["Osmangazi", "Nilüfer", "Yıldırım", "İnegöl", "Gemlik"],
    "Çanakkale": ["Merkez", "Biga", "Gelibolu", "Ayvacık", "Ezine"],
    "Çankırı": ["Merkez", "Çerkeş", "Eldivan", "Ilgaz", "Kurşunlu"],
    "Çorum": ["Merkez", "Sungurlu", "Osmancık", "Alaca", "İskilip"],
    "Denizli": ["Merkezefendi", "Pamukkale", "Çivril", "Acıpayam", "Tavas"],
    "Diyarbakır": ["Kayapınar", "Bağlar", "Yenişehir", "Sur", "Bismil"],
    "Düzce": ["Merkez", "Akçakoca", "Gölyaka", "Cumayeri", "Çilimli"],
    "Edirne": ["Merkez", "Keşan", "Uzunköprü", "Havsa", "İpsala"],
    "Elazığ": ["Merkez", "Kovancılar", "Karakoçan", "Maden", "Palu"],
    "Erzincan": ["Merkez", "Refahiye", "Tercan", "Üzümlü", "Kemah"],
    "Erzurum": ["Yakutiye", "Palandöken", "Aziziye", "Oltu", "Pasinler"],
    "Eskişehir": ["Odunpazarı", "Tepebaşı", "Sivrihisar", "Çifteler", "Beylikova"],
    "Gaziantep": ["Şahinbey", "Şehitkamil", "Nizip", "Oğuzeli", "Araban"],
    "Giresun": ["Merkez", "Bulancak", "Tirebolu", "Görele", "Espiye"],
    "Gümüşhane": ["Merkez", "Kelkit", "Şiran", "Torul", "Köse"],
    "Hakkari": ["Merkez", "Yüksekova", "Şemdinli", "Çukurca"],
    "Hatay": ["Antakya", "İskenderun", "Defne", "Samandağ", "Reyhanlı"],
    "Iğdır": ["Merkez", "Tuzluca", "Aralık", "Karakoyunlu"],
    "Isparta": ["Merkez", "Yalvaç", "Eğirdir", "Şarkikaraağaç", "Gelendost"],
    "İstanbul": ["Kadıköy", "Üsküdar", "Beşiktaş", "Bakırköy", "Şişli", "Sarıyer"],
    "İzmir": ["Konak", "Karşıyaka", "Bornova", "Buca", "Gaziemir"],
    "Kahramanmaraş": ["Onikişubat", "Dulkadiroğlu", "Elbistan", "Afşin", "Göksun"],
    "Karabük": ["Merkez", "Safranbolu", "Yenice", "Eflani", "Ovacık"],
    "Karaman": ["Merkez", "Ermenek", "Ayrancı", "Başyayla", "Sarıveliler"],
    "Kars": ["Merkez", "Kağızman", "Sarıkamış", "Arpaçay", "Digor"],
    "Kastamonu": ["Merkez", "Tosya", "Taşköprü", "İnebolu", "Cide"],
    "Kayseri": ["Kocasinan", "Melikgazi", "Talas", "Develi", "İncesu"],
    "Kırıkkale": ["Merkez", "Keskin", "Delice", "Yahşihan", "Sulakyurt"],
    "Kırklareli": ["Merkez", "Lüleburgaz", "Vize", "Pınarhisar", "Demirköy"],
    "Kırşehir": ["Merkez", "Kaman", "Mucur", "Çiçekdağı", "Akpınar"],
    "Kilis": ["Merkez", "Elbeyli", "Musabeyli", "Polateli"],
    "Kocaeli": ["İzmit", "Gebze", "Darıca", "Gölcük", "Karamürsel"],
    "Konya": ["Selçuklu", "Meram", "Karatay", "Ereğli", "Akşehir"],
    "Kütahya": ["Merkez", "Tavşanlı", "Gediz", "Simav", "Domaniç"],
    "Malatya": ["Yeşilyurt", "Battalgazi", "Doğanşehir", "Hekimhan", "Darende"],
    "Manisa": ["Şehzadeler", "Yunusemre", "Turgutlu", "Akhisar", "Salihli"],
    "Mardin": ["Artuklu", "Kızıltepe", "Midyat", "Nusaybin", "Derik"],
    "Mersin": ["Yenişehir", "Mezitli", "Toroslar", "Akdeniz", "Tarsus"],
    "Muğla": ["Menteşe", "Bodrum", "Fethiye", "Marmaris", "Milas"],
    "Muş": ["Merkez", "Bulanık", "Malazgirt", "Varto", "Hasköy"],
    "Nevşehir": ["Merkez", "Avanos", "Ürgüp", "Gülşehir", "Derinkuyu"],
    "Niğde": ["Merkez", "Bor", "Çiftlik", "Ulukışla", "Altunhisar"],
    "Ordu": ["Altınordu", "Ünye", "Fatsa", "Perşembe", "Gölköy"],
    "Osmaniye": ["Merkez", "Kadirli", "Düziçi", "Bahçe", "Toprakkale"],
    "Rize": ["Merkez", "Çayeli", "Pazar", "Ardeşen", "Fındıklı"],
    "Sakarya": ["Adapazarı", "Serdivan", "Erenler", "Akyazı", "Hendek"],
    "Samsun": ["İlkadım", "Atakum", "Canik", "Bafra", "Çarşamba"],
    "Siirt": ["Merkez", "Kurtalan", "Pervari", "Baykan", "Şirvan"],
    "Sinop": ["Merkez", "Boyabat", "Ayancık", "Gerze", "Durağan"],
    "Sivas": ["Merkez", "Şarkışla", "Zara", "Gemerek", "Suşehri"],
    "Şanlıurfa": ["Haliliye", "Eyyübiye", "Karaköprü", "Viranşehir", "Suruç"],
    "Şırnak": ["Merkez", "Cizre", "Silopi", "İdil", "Uludere"],
    "Tekirdağ": ["Süleymanpaşa", "Çorlu", "Çerkezköy", "Malkara", "Muratlı"],
    "Tokat": ["Merkez", "Erbaa", "Turhal", "Niksar", "Zile"],
    "Trabzon": ["Ortahisar", "Akçaabat", "Vakfıkebir", "Araklı", "Of"],
    "Tunceli": ["Merkez", "Pertek", "Çemişgezek", "Mazgirt", "Ovacık"],
    "Uşak": ["Merkez", "Eşme", "Banaz", "Karahallı", "Sivaslı"],
    "Van": ["İpekyolu", "Tuşba", "Edremit", "Erciş", "Muradiye"],
    "Yalova": ["Merkez", "Çınarcık", "Altınova", "Armutlu", "Termal"],
    "Yozgat": ["Merkez", "Sorgun", "Akdağmadeni", "Yerköy", "Boğazlıyan"],
    "Zonguldak": ["Merkez", "Ereğli", "Çaycuma", "Devrek", "Gökçebey"]
};

const ilSelect = document.getElementById('il');
const ilceSelect = document.getElementById('ilce');

// İller select'e ekle
for (let il in iller) {
    let option = document.createElement('option');
    option.value = il;
    option.textContent = il;
    ilSelect.appendChild(option);
}

// İl değişince ilçeleri doldur
ilSelect.addEventListener('change', function() {
    ilceSelect.innerHTML = '<option value="">İlçe seçiniz</option>';
    const secilenIl = this.value;
    if (secilenIl && iller[secilenIl]) {
        iller[secilenIl].forEach(ilce => {
            let option = document.createElement('option');
            option.value = ilce;
            option.textContent = ilce;
            ilceSelect.appendChild(option);
        });
    }
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\musta\kumsal\resources\views/siparis/create.blade.php ENDPATH**/ ?>