<<<<<<< HEAD


<?php
$teks = "dlatego że  ?";

function deteksiBahasa($teks) {
    // Daftar pola bahasa sederhana (tidak akurat, hanya contoh)
    $polaBahasa = [
        'id' => '/\b(di|ke|dari|untuk|pada|oleh|ini|itu|yang|dengan|adalah|yaitu|ialah|nanti|kapan|entar|karena|supaya|agar|mungkin|bisa|jadi|serta|atau|tetapi|biasanya|sehingga|jika|saja|sebaliknya|kemudian|selanjutnya|berikutnya|selain|selesai|sampai|tiba|seraya|sambil|meskipun|walaupun|maupun|padahal|antara|sebagian|separuh|atau|setiap|secara|perlu|apa|apakah|bisakah|siapa|siapakah|mungkinkah|dapat|dapatkah|dimana|dimanakah|kapankah|mengapa|bagaimana|bagaimanakah|berapa|berapakah|manakah|mana|boleh|bolehkah|aku|saya|dia|kamu|kau|anda|mereka|kami|ku)\b/i',
        'en' => '/\b(a|an|the|and|but|or|for|nor|so|yet|to|from|in|of|with|by|on|at|about|over|under|above|below|through|across|into|onto|towards|against|among|around|before|after|during|since|until|while|although|though|even|if|unless|whether|since|because|as|so|that|while|when|where|why|how|what|who|which|whose|whom|whether)\b/i',
        'es' => '/\b(y|o|pero|para|por|con|en|de|a|ante|bajo|cabe|contra|desde|durante|en|entre|hacia|hasta|mediante|para|por|según|sin|so|sobre|tras|si|sino|cuando|donde|como|por qué|cuánto|quién|cuál|cuyo|cual)\b/i',
        'fr' => '/\b(et|ou|mais|pour|parce que|car|donc|si|alors|puisque|que|quand|où|comment|quoi|qui|quel|quelle|quels|quelles|à|de|par|pour|avec|dans|en|vers|sur|sous|devant|derrière|pendant|depuis|entre|contre|à travers)\b/i',
        'de' => '/\b(und|oder|aber|sondern|denn|weder|noch|dass|weil|so|da|wenn|wo|wie|was|wer|wem|wen|wessen|dessen|der|die|das|des|dem|den|ein|eine|einer|einem|einen|eines|zum|zur|zurück|vor|nach|bei|von|zu|über|unter|über|an|auf|aus)\b/i',
        'it' => '/\b(e|o|ma|perché|poiché|affinché|se|anche|anche se|benché|eppure|tuttavia|cioè|quando|dove|come|perché|cosa|chi|quale|quanti|quanto|dove|quando|per|con|tra|fra|fra)\b/i',
        'ru' => '/\b(и|или|но|для|потому что|так как|если|когда|где|как|что|кто|какой|какая|который|чей|почему|сколько|зачем|ли|уже|только|даже|также|иначе|пока|как только|тем более|чтобы|при|с|под|над|перед|после)\b/i',
        'zh' => '/\b(和|或者|但是|因为|所以|如果|当|哪里|怎么|什么|谁|哪个|哪些|谁的|为什么|多少|几个|怎样|何时|在|上|下|里|对|在|前|后|之间|通过|和|与|为)\b/i',
        'ja' => '/\b(そして|または|しかし|だから|なぜなら|もし|いつ|どこ|どうやって|何|誰|どの|どれ|誰の|なぜ|いくら|いつ|だけど|でも|しかしながら|なお|たとえば|その後|前後|以来|中で|外で|間で|以上|未満)\b/i',
        'ko' => '/\b(그리고|또는|그러나|왜냐하면|그래서|만약|언제|어디|어떻게|무엇|누구|어느|어떤|누구의|왜|얼마나|언제|만에|때문에|까지|이내|동안|사이에|을|를|으로|에서|위에|아래에|앞에|뒤에)\b/i',
        'ar' => '/\b(و|أو|لكن|لأن|بسبب|إذا|متى|أين|كيف|ما|من|ماذا|منذ|لماذا|كم|متى|كيف|ماذا|من|منذ|متى|إذا|فقط|حتى|عن|في|على|تحت|فوق|بين|خلال|وسط)\b/i',
        'pt' => '/\b(e|ou|mas|porque|assim|se|quando|onde|como|o que|quem|qual|cujo|por que|quantos|quando|como|onde|em|sobre|sob|abaixo|acima|entre|através|dentro|fora|antes|depois)\b/i',
        'sv' => '/\b(och|eller|men|för|eftersom|så|om|när|var|hur|vad|vem|hur|vilken|vilket|vars|varför|hur mycket|när|som|bara|att|med|i|på|under|över|nedanför|ovanpå|mellan|genom|innanför|utanför|före|efter)\b/i',
        'tr' => '/\b(ve|veya|ama|çünkü|çünkü|ise|eğer|ne zaman|nerede|nasıl|ne|kim|hangi|kaç|neden|nereden|ne kadar|ne zaman|sadece|kadar|ile|üzerinde|altında|arasında|içinde|dışında|önünde|arkasında)\b/i',
        'el' => '/\b(και|ή|αλλά|γιατί|επειδή|αν|πότε|πού|πως|τι|ποιος|ποια|ποιο|τινος|γιατί|πόσο|όταν|πως|όπως|μόνο|μέχρι|με|σε|πάνω|κάτω|κάτω από|ανάμεσα|διαμέσου|μέσα|έξω από|πριν|μετά)\b/i',
        'pl' => '/\b(i|lub|ale|dlatego że|bo|jeśli|kiedy|gdzie|jak|co|kto|który|czyj|dlaczego|ile|kiedy|jak|gdzie|w|na|pod|nad|przez|pomiędzy|wewnątrz|na zewnątrz|przed|po)\b/i',
        'cs' => '/\b(a|nebo|ale|protože|neboť|jestliže|kdy|kde|jak|co|kdo|který|čí|proč|kolik|kdy|jak|kde|v|na|pod|nad|mezi|během|vnitř|venku|před|po)\b/i',
        'fi' => '/\b(ja|tai|mutta|koska|koska|jos|kun|missä|miten|mikä|kuka|mikä|joka|kenen|miksi|kuinka|koska|missä|yläpuolella|alla|välissä|läpi|sisällä|ulkopuolella|ennen|jälkeen)\b/i',
        'da' => '/\b(og|eller|men|fordi|da|hvis|når|hvor|hvordan|hvad|hvem|hvilken|hvis|hvorfor|hvor meget|hvorfor|hvor|hvor|over|under|mellem|gennem|inde|i|udenfor|før|efter)\b/i',
        'no' => '/\b(og|eller|men|fordi|da|hvis|når|hvor|hvordan|hva|hvem|hvilken|hvis|hvorfor|hvor mye|når|hvordan|hvor|over|under|mellom|gjennom|inne|i|utenfor|før|etter)\b/i',
        'hi' => '/\b(और|या|लेकिन|क्योंकि|क्यों|अगर|कब|कहाँ|कैसे|क्या|कौन|कौन|किसका|क्यों|कितना|कब|कैसे|कहाँ|ऊपर|नीचे|बीच|माध्यम से|अंदर|बाहर|पहले|बाद)\b/i',
        'vi' => '/\b(và|hoặc|nhưng|vì|vì|nếu|khi|ở đâu|như thế nào|gì|ai|mà|của ai|tại sao|bao nhiêu|khi nào|như thế nào|ở đâu|trên|dưới|giữa|qua|bên trong|bên ngoài|trước|sau)\b/i',
        'es-419' => '/\b(y|o|pero|porque|ya que|si|cuando|dónde|cómo|qué|quién|cuál|cuyo|por qué|cuánto|cuándo|cómo|dónde|encima de|debajo de|entre|a través de|adentro|afuera|antes de|después de)\b/i',
        'th' => '/\b(และ|หรือ|แต่|เพราะว่า|เพราะ|ถ้า|เมื่อไหร่|ที่ไหน|อย่างไร|อะไร|ใคร|อันไหน|ใครของ|ทำไม|เท่าไหร่|เมื่อไหร่|อย่างไร|ที่ไหน|เหนือ|ใต้|ระหว่าง|ผ่าน|ภายใน|ภายนอก|ก่อน|หลัง)\b/i',
        'tl' => '/\b(at|o|ngunit|dahil|kasi|kung|kailan|saan|paano|ano|sino|alin|kanino|bakit|magkano|kailan|paano|saan|ibabaw|ilalim|gitna|sa pamamagitan ng|sa loob|labas|bago|pagkatapos)\b/i',
        'fil' => '/\b(at|o|ngunit|dahil|kasi|kung|kailan|saan|paano|ano|sino|alin|kanino|bakit|magkano|kailan|paano|saan|ibabaw|ilalim|gitna|sa pamamagitan ng|sa loob|labas)\b/i',
        'yue' => '/\b(同|或者|但係|因為|所以|如果|當|邊度|點解|乜嘢|邊個|邊啲|誰嘅|點解|幾多|幾個|點樣|幾時|喺|上|下|裏|對|喺|前|後|之間|透過|同|同|為)\b/i',
        'min-nan' => '/\b(和|或者|但是|因為|所以|如果|當|佗位|點樣|啥物|那位|那些|那位嘅|點解|幾多|幾個|點樣|幾時|喙|上|下|內|對|喙|前|後|之間|透過|和|同|為)\b/i',
        'hak' => '/\b(跟|或者|但係|因為|所以|如果|當|邊度|點解|乜嘢|邊個|邊啲|誰嘅|點解|幾多|幾個|點樣|幾時|喺|上|下|裏|對|喺|前|後|之間|透過|同|同|為)\b/i',
        'wuu' => '/\b(同|或者|但係|因為|所以|如果|當|邊度|點樣|乜嘢|邊個|邊啲|誰嘅|點解|幾多|幾個|點樣|幾時|喺|上|下|裏|對|喺|前|後|之間|透過|同|同|為)\b/i'
    ];
    
    foreach ($polaBahasa as $bahasa => $pola) {
        //print $pola."==".$teks."<br>";
        if (preg_match($pola, $teks)) {
            //print $pola."==".$teks."<br>";
            return $bahasa;
        }
    }
    
    return 'en'; // Default ke bahasa Inggris jika tidak terdeteksi
}

$bahasaTerdeteksi = deteksiBahasa($teks);
//echo "Bahasa yang terdeteksi: " . $bahasaTerdeteksi;
?>




<?php
$teks = "Я купил билеты  ?";

$polaBahasa = [
    'id' => ['di', 'ke', 'dari', 'untuk', 'pada', 'oleh', 'ini', 'itu', 'yang', 'dengan', 'adalah', 'yaitu', 'ialah', 'nanti', 'kapan', 'entar', 'karena', 'supaya', 'agar', 'mungkin', 'bisa', 'jadi', 'serta', 'atau', 'tetapi', 'biasanya', 'sehingga', 'jika', 'saja', 'sebaliknya', 'kemudian', 'selanjutnya', 'berikutnya', 'selain', 'selesai', 'sampai', 'tiba', 'seraya', 'sambil', 'meskipun', 'walaupun', 'maupun', 'padahal', 'antara', 'sebagian', 'separuh', 'atau', 'setiap', 'secara', 'perlu', 'apa', 'apakah', 'bisakah', 'siapa', 'siapakah', 'mungkinkah', 'dapat', 'dapatkah', 'dimana', 'dimanakah', 'kapankah', 'mengapa', 'bagaimana', 'bagaimanakah', 'berapa', 'berapakah', 'manakah', 'mana', 'boleh', 'bolehkah', 'aku', 'saya', 'dia', 'kamu', 'kau', 'anda', 'mereka', 'kami', 'ku'],
    'en' => ['a', 'an', 'the', 'and', 'but', 'or', 'for', 'nor', 'so', 'yet', 'to', 'from', 'in', 'of', 'with', 'by', 'on', 'at', 'about', 'over', 'under', 'above', 'below', 'through', 'across', 'into', 'onto', 'towards', 'against', 'among', 'around', 'before', 'after', 'during', 'since', 'until', 'while', 'although', 'though', 'even', 'if', 'unless', 'whether', 'since', 'because', 'as', 'so', 'that', 'while', 'when', 'where', 'why', 'how', 'what', 'who', 'which', 'whose', 'whom', 'whether'],
    'es' => ['y', 'o', 'pero', 'para', 'por', 'con', 'en', 'de', 'a', 'ante', 'bajo', 'cabe', 'contra', 'desde', 'durante', 'en', 'entre', 'hacia', 'hasta', 'mediante', 'para', 'por', 'según', 'sin', 'so', 'sobre', 'tras', 'si', 'sino', 'cuando', 'donde', 'como', 'por qué', 'cuánto', 'quién', 'cuál', 'cuyo', 'cual'],
    'fr' => ['et', 'ou', 'mais', 'pour', 'parce que', 'car', 'donc', 'si', 'alors', 'puisque', 'que', 'quand', 'où', 'comment', 'quoi', 'qui', 'quel', 'quelle', 'quels', 'quelles', 'à', 'de', 'par', 'pour', 'avec', 'dans', 'en', 'vers', 'sur', 'sous', 'devant', 'derrière', 'pendant', 'depuis', 'entre', 'contre', 'à travers'],
    'de' => ['und', 'oder', 'aber', 'sondern', 'denn', 'weder', 'noch', 'dass', 'weil', 'so', 'da', 'wenn', 'wo', 'wie', 'was', 'wer', 'wem', 'wen', 'wessen', 'dessen', 'der', 'die', 'das', 'des', 'dem', 'den', 'ein', 'eine', 'einer', 'einem', 'einen', 'eines', 'zum', 'zur', 'zurück', 'vor', 'nach', 'bei', 'von', 'zu', 'über', 'unter', 'über', 'an', 'auf', 'aus'],
    'it' => ['e', 'o', 'ma', 'perché', 'poiché', 'affinché', 'se', 'anche', 'anche se', 'benché', 'eppure', 'tuttavia', 'cioè', 'quando', 'dove', 'come', 'perché', 'cosa', 'chi', 'quale', 'quanti', 'quanto', 'dove', 'quando', 'per', 'con', 'tra', 'fra', 'fra'],
    'ru' => ['и', 'или', 'но', 'для', 'потому что', 'так как', 'если', 'когда', 'где', 'как', 'что', 'кто', 'какой', 'какая', 'который', 'чей', 'почему', 'сколько', 'зачем', 'ли', 'уже', 'только', 'даже', 'также', 'иначе', 'пока', 'как только', 'тем более', 'чтобы', 'при', 'с', 'под', 'над', 'перед', 'после'],
    'zh' => ['和', '或者', '但是', '因为', '所以', '如果', '当', '哪里', '怎么', '什么', '谁', '哪个', '哪些', '谁的', '为什么', '多少', '几个', '怎样', '何时', '在', '上', '下', '里', '对', '在', '前', '后', '之间', '通过', '和', '与', '为'],
    'ja' => ['そして', 'または', 'しかし', 'だから', 'なぜなら', 'もし', 'いつ', 'どこ', 'どうやって', '何', '誰', 'どの', 'どれ', '誰の', 'なぜ', 'いくら', 'いつ', 'だけど', 'でも', 'しかしながら', 'なお', 'たとえば', 'その後', '前後', '以来', '中で', '外で', '間で', '以上', '未満'],
    'ko' => ['그리고', '또는', '그러나', '왜냐하면', '그래서', '만약', '언제', '어디', '어떻게', '무엇', '누구', '어느', '어떤', '누구의', '왜', '얼마나', '언제', '만에', '때문에', '까지', '이내', '동안', '사이에', '을', '를', '으로', '에서', '위에', '아래에', '앞에', '뒤에'],
    'ar' => ['و', 'أو', 'لكن', 'لأن', 'بسبب', 'إذا', 'متى', 'أين', 'كيف', 'ما', 'من', 'ماذا', 'منذ', 'لماذا', 'كم', 'متى', 'كيف', 'ماذا', 'من', 'منذ', 'متى', 'إذا', 'فقط', 'حتى', 'عن', 'في', 'على', 'تحت', 'فوق', 'بين', 'خلال', 'وسط'],
    'pt' => ['e', 'ou', 'mas', 'porque', 'assim', 'se', 'quando', 'onde', 'como', 'o que', 'quem', 'qual', 'cujo', 'por que', 'quantos', 'quando', 'como', 'onde', 'em', 'sobre', 'sob', 'abaixo', 'acima', 'entre', 'através', 'dentro', 'fora', 'antes', 'depois'],
    'sv' => ['och', 'eller', 'men', 'för', 'eftersom', 'så', 'om', 'när', 'var', 'hur', 'vad', 'vem', 'hur', 'vilken', 'vilket', 'vars', 'varför', 'hur mycket', 'när', 'som', 'bara', 'att', 'med', 'i', 'på', 'under', 'över', 'nedanför', 'ovanpå', 'mellan', 'genom', 'innanför', 'utanför', 'före', 'efter'],
    'tr' => ['ve', 'veya', 'ama', 'çünkü', 'ise', 'eğer', 'ne zaman', 'nerede', 'nasıl', 'ne', 'kim', 'hangi', 'kaç', 'neden', 'nereden', 'ne kadar', 'sadece', 'kadar', 'ile', 'üzerinde', 'altında', 'arasında', 'içinde', 'dışında', 'önünde', 'arkasında'],
    'el' => ['και', 'ή', 'αλλά', 'γιατί', 'επειδή', 'αν', 'πότε', 'πού', 'πως', 'τι', 'ποιος', 'ποια', 'ποιο', 'τινος', 'πόσο', 'όταν', 'όπως', 'μόνο', 'μέχρι', 'με', 'σε', 'πάνω', 'κάτω', 'κάτω από', 'ανάμεσα', 'διαμέσου', 'μέσα', 'έξω από', 'πριν', 'μετά']
];

function cekTeks($teks, $polaBahasa) {
    // Pecah teks menjadi kata-kata
    $kataKata = explode(' ', $teks);
    
    $result = [];

    foreach ($polaBahasa as $lang => $patterns) {
        // Menggunakan array_intersect untuk mencocokkan kata-kata teks dengan pola bahasa
        $intersect = array_intersect($kataKata, $patterns);
        
        // Jika ada kata yang cocok, tambahkan bahasa ke hasil
        if (!empty($intersect)) {
            $result[] = $lang;
        }
    }

    return $result;
}

// Panggil fungsi cekTeks untuk menguji teks
$hasil = cekTeks($teks, $polaBahasa);
echo "Bahasa yang terdeteksi: " . implode(', ', $hasil);
=======
<?php
function deteksiBahasa($teks) {
    $url = "https://api.mymemory.translated.net/get?q=" . urlencode($teks) . "&onlyprivate=0&de=a@b.c";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respons = curl_exec($ch);
    
    if(curl_errno($ch)) {
        echo 'Error: ' . curl_error($ch);
        return false;
    }
    
    curl_close($ch);

    $hasil = json_decode($respons, true);
    return isset($hasil['responseData']['language']) ? $hasil['responseData']['language'] : false;
}

function terjemahkanTeks($teks, $bahasaTujuan) {
    $bahasaSumber = deteksiBahasa($teks);
    if (!$bahasaSumber) {
        return false; // Tidak dapat mendeteksi bahasa sumber
    }

    $url = "https://api.mymemory.translated.net/get?q=" . urlencode($teks) . "&langpair=" . $bahasaSumber . "|" . $bahasaTujuan;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respons = curl_exec($ch);
    
    if(curl_errno($ch)) {
        echo 'Error: ' . curl_error($ch);
        return false;
    }
    
    curl_close($ch);

    $hasil = json_decode($respons, true);
    return isset($hasil['responseData']['translatedText']) ? $hasil['responseData']['translatedText'] : false;
}

$teks = "tolong untuk memberikan nomor tiket anda?";
$bahasaTujuan = 'zh'; // Bahasa Tionghoa
$teksTerjemahan = terjemahkanTeks($teks, $bahasaTujuan);

if ($teksTerjemahan) {
    echo "Teks terjemahan: " . $teksTerjemahan;
} else {
    echo "Gagal menerjemahkan teks.";
}


print "<br>";

>>>>>>> 09ded2b3bfc1f6e283f7d3db97c66f1cd45afd4a
?>










<<<<<<< HEAD




=======
>>>>>>> 09ded2b3bfc1f6e283f7d3db97c66f1cd45afd4a
<?php
function translateText($text, $sourceLang, $targetLang) {
    $url = "https://api.mymemory.translated.net/get?q=" . urlencode($text) . "&langpair=" . $sourceLang . "|" . $targetLang;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response, true);
    return isset($result['responseData']['translatedText']) ? $result['responseData']['translatedText'] : false;
}

$text = "tolong untuk memberikan nomor tiket anda?";
<<<<<<< HEAD
$translatedText = translateText($text, 'id', 'en'); // Inggris ke Bahasa Indonesia
=======
$translatedText = translateText($text, 'id', 'zh'); // Inggris ke Bahasa Indonesia
>>>>>>> 09ded2b3bfc1f6e283f7d3db97c66f1cd45afd4a
echo "Translated text: " . $translatedText;

?>













<?php

// Alamat yang ingin Anda cek koordinatnya
$address = '1600 Amphitheatre Parkway, Mountain View, CA';

// Format URL untuk OpenStreetMap Nominatim API
$url = 'https://nominatim.openstreetmap.org/search?format=json&q=' . urlencode($address);

// Inisialisasi cURL session
$ch = curl_init();

// Set URL untuk dikirimkan
curl_setopt($ch, CURLOPT_URL, $url);

// Atur agar cURL mengembalikan hasil sebagai string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi cURL dan simpan respons
$response = curl_exec($ch);

// Periksa apakah ada kesalahan saat menjalankan cURL
if(curl_errno($ch)) {
    $error_message = curl_error($ch);
    echo "Error saat melakukan permintaan HTTP: $error_message";
    exit;
}

// Tutup cURL session
curl_close($ch);

// Konversi respons JSON ke array PHP
$data = json_decode($response, true);

// Periksa apakah respons JSON valid
if (!empty($data) && is_array($data)) {
    // Ambil data pertama (asumsi hasil paling relevan)
    $first_result = reset($data);

    // Cek apakah hasil valid dan memiliki koordinat
    if (isset($first_result['lat']) && isset($first_result['lon'])) {
        $latitude = $first_result['lat'];
        $longitude = $first_result['lon'];
        
        echo "Alamat: $address<br>";
        echo "Latitude: $latitude<br>";
        echo "Longitude: $longitude";
    } else {
        echo "Koordinat tidak ditemukan untuk alamat ini.";
    }
} else {
    echo "Gagal mengambil atau memproses data dari OpenStreetMap API.";
}

?>







<?php
/*

    $json_response = '[{"place_id":376947505,"licence":"Data © OpenStreetMap contributors, ODbL 1.0. http://osm.org/copyright","osm_type":"node","osm_id":2192620021,"lat":"37.4217636","lon":"-122.084614","class":"office","type":"it","place_rank":30,"importance":0.6949356759210291,"addresstype":"office","name":"Google Headquarters","display_name":"Google Headquarters, 1600, Amphitheatre Parkway, Mountain View, Santa Clara County, California, 94043, United States","boundingbox":["37.4217136","37.4218136","-122.0846640","-122.0845640"]}]';

    // Decode JSON response
    $data = json_decode($json_response, true);

    // Ambil nilai latitude dan longitude jika data tidak kosong
    if (!empty($data)) {
        $latitude = $data[0]['lat'];
        $longitude = $data[0]['lon'];
        
        echo "Latitude: $latitude<br>";
        echo "Longitude: $longitude";
    } else {
        echo "Gagal mengambil koordinat dari respons JSON.";
    }
*/


?>
