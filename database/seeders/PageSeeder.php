<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = [
            [
                'terms' => '
<p><strong>1. Kapsam</strong></p>

<p>LinkUp, yalnızca kurum tarafından hesap açılan kullanıcıların bağlantı sayfası oluşturup paylaşabildiği bir hizmettir. Siteyi kullanarak bu koşulları kabul etmiş sayılırsınız.</p>

<p><strong>2. Hesaplar</strong></p>

<p>Hesaplar yalnızca yöneticiler tarafından oluşturulur. Hesap bilgilerinizin gizliliğinden siz sorumlusunuz; hesabınızın yetkisiz kullanıldığını fark ederseniz yöneticiye hemen bildirin.</p>

<p><strong>3. Kullanım kuralları</strong></p>

<ul>
	<li>Yasalara aykırı, yanıltıcı, zararlı veya başkalarının haklarını ihlal eden içerik ve bağlantı paylaşılamaz.</li>
	<li>Hizmetin işleyişini bozacak ya da güvenliğini zayıflatacak girişimlerde bulunulamaz.</li>
	<li>Başka bir kişi veya kurumun kimliğine bürünülemez.</li>
</ul>

<p><strong>4. İçerik</strong></p>

<p>Profilinize eklediğiniz içerik ve bağlantılardan siz sorumlusunuz. Yöneticiler bu koşullara aykırı içeriği önceden haber vermeden kaldırabilir, hesabı askıya alabilir veya silebilir.</p>

<p><strong>5. Sorumluluğun sınırı</strong></p>

<p>Hizmet olduğu gibi sunulur; kesintisiz veya hatasız çalışacağı garanti edilmez. Profillerde yer alan üçüncü taraf bağlantıların içeriğinden LinkUp sorumlu değildir.</p>

<p><strong>6. Değişiklikler</strong></p>

<p>Bu koşullar gerektiğinde güncellenebilir. Güncellemeden sonra siteyi kullanmaya devam etmeniz yeni koşulları kabul ettiğiniz anlamına gelir.</p>
',

                'privacy' => '
<p><strong>1. Hangi verileri topluyoruz?</strong></p>

<p>Hesabınız oluşturulurken ve kullanılırken şu veriler işlenir: ad ve kullanıcı adı, e-posta adresi, profil fotoğrafı ve açıklaması, eklediğiniz bağlantılar, bağlantılarınızın tıklanma sayıları ve son giriş zamanı.</p>

<p><strong>2. Verileri neden kullanıyoruz?</strong></p>

<p>Veriler yalnızca hesabınızı yönetmek, profil sayfanızı yayınlamak, hizmetin güvenliğini sağlamak ve teknik sorunları gidermek için kullanılır. Reklam veya pazarlama amacıyla kullanılmaz.</p>

<p><strong>3. Verileri kimlerle paylaşıyoruz?</strong></p>

<p>Profil sayfanızda yayınladığınız bilgiler herkese açıktır. Bunun dışındaki veriler, yasal zorunluluklar dışında üçüncü kişilerle paylaşılmaz.</p>

<p><strong>4. Çerezler</strong></p>

<p>Site yalnızca oturumunuzu açık tutmak ve güvenliği sağlamak için gerekli çerezleri kullanır.</p>

<p><strong>5. Verileri ne kadar saklıyoruz?</strong></p>

<p>Veriler hesabınız açık olduğu sürece saklanır. Hesabınız silindiğinde ilgili veriler de silinir; yedeklerde kalan kopyalar yedekleme döngüsü içinde kaldırılır.</p>

<p><strong>6. Haklarınız</strong></p>

<p>6698 sayılı Kişisel Verilerin Korunması Kanunu kapsamında verilerinize erişme, düzeltilmesini veya silinmesini isteme haklarına sahipsiniz. Bu talepler için İletişim sayfasındaki kanallardan bize ulaşabilirsiniz.</p>
',

                'contact' => '
<p>Soru, öneri ve geri bildirimleriniz için bizimle iletişime geçebilirsiniz.  Maksutakgun4@gmail.com</p>
',

                'home_message' => 'default',

                'register' => null,
            ]
         ];

         Page::insert($page);
    }
}
