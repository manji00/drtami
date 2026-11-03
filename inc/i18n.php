<?php
/** Small file-based UI dictionary. WordPress/Polylang manage article translations. */
function drtami_language(): string {
    if (function_exists('pll_current_language')) {
        $lang = pll_current_language('slug');
        return in_array($lang, ['ro','en','de'], true) ? $lang : 'ro';
    }
    return 'ro';
}
function drtami_t(string $source): string {
    static $translations = [
        "Acasă" => ["Home", "Startseite"],
        "Despre mine" => ["About me", "Über mich"],
        "Articole" => ["Articles", "Artikel"],
        "Întrebări frecvente" => ["FAQ", "Häufige Fragen"],
        "Contact" => ["Contact", "Kontakt"],
        "Grijă pentru cei mici." => ["Care for little ones.", "Fürsorge für die Kleinsten."],
        "Liniște pentru părinți." => ["Peace of mind for parents.", "Sicherheit für Eltern."],
        "Medic specialist · București" => ["Specialist physician · Bucharest", "Fachärztin · Bukarest"],
        "Oncologie și Hematologie Pediatrică — consultații cu atenție, empatie și o abordare individualizată, pentru fiecare copil și familie." => ["Pediatric Oncology and Hematology — attentive, compassionate and individualized care for every child and family.", "Pädiatrische Onkologie und Hämatologie – einfühlsame, individuelle Betreuung für jedes Kind und seine Familie."],
        "Programează o consultație" => ["Request an appointment", "Termin anfragen"],
        "Află mai multe" => ["Learn more", "Mehr erfahren"],
        "Îngrijire personalizată" => ["Personalized care", "Individuelle Betreuung"],
        "Sprijin pentru familie" => ["Family support", "Unterstützung für Familien"],
        "Un loc pentru întrebări, răspunsuri și încredere." => ["A place for questions, answers and trust.", "Ein Ort für Fragen, Antworten und Vertrauen."],
        "Medicină bazată pe cunoaștere și empatie" => ["Medicine grounded in knowledge and empathy", "Medizin auf der Grundlage von Wissen und Empathie"],
        "CUM TE POT AJUTA" => ["HOW I CAN HELP", "WIE ICH HELFEN KANN"],
        "Îngrijire adaptată" => ["Care tailored to", "Betreuung für"],
        "fiecărui copil" => ["every child", "jedes Kind"],
        "Evaluare, diagnostic, monitorizare și îndrumare medicală pentru copii și adolescenți." => ["Assessment, diagnosis, follow-up and medical guidance for children and adolescents.", "Untersuchung, Diagnose, Verlaufskontrolle und medizinische Beratung für Kinder und Jugendliche."],
        "Hematologie pediatrică" => ["Pediatric hematology", "Pädiatrische Hämatologie"],
        "Oncologie pediatrică" => ["Pediatric oncology", "Pädiatrische Onkologie"],
        "Evaluarea anemiilor, modificărilor hemoleucogramei, tulburărilor de coagulare și a altor afecțiuni hematologice." => ["Assessment of anemia, blood count changes, clotting disorders and other hematological conditions.", "Abklärung von Anämien, Blutbildveränderungen, Gerinnungsstörungen und weiteren hämatologischen Erkrankungen."],
        "Evaluarea simptomelor și a suspiciunilor oncologice, monitorizare și îndrumare după tratament." => ["Assessment of symptoms and suspected oncological conditions, follow-up and guidance after treatment.", "Abklärung von Symptomen und Verdachtsfällen, Nachsorge und Beratung nach einer onkologischen Behandlung."],
        "Interpretarea analizelor, a doua opinie medicală și explicații clare pentru părinți." => ["Lab result interpretation, second opinions and clear explanations for parents.", "Befundbesprechung, ärztliche Zweitmeinung und verständliche Erklärungen für Eltern."],
        "Descoperă serviciile" => ["Explore services", "Leistungen entdecken"],
        "SĂ FACEM CUNOȘTINȚĂ" => ["GET TO KNOW ME", "LERNEN SIE MICH KENNEN"],
        "Bună, sunt" => ["Hello, I'm", "Hallo, ich bin"],
        "Sunt medic specialist în Oncologie și Hematologie Pediatrică. Cred că fiecare copil merită să fie ascultat, iar fiecare părinte merită răspunsuri clare și sprijin." => ["I am a specialist in Pediatric Oncology and Hematology. I believe every child deserves to be heard and every parent deserves clear answers and support.", "Ich bin Fachärztin für pädiatrische Onkologie und Hämatologie. Jedes Kind verdient Gehör und alle Eltern verständliche Antworten und Unterstützung."],
        "Îmi doresc să ofer îngrijire atentă și individualizată, într-un mediu bazat pe încredere, respect și siguranță." => ["My aim is to provide attentive, individualized care in an environment of trust, respect and safety.", "Mein Ziel ist eine aufmerksame, individuelle Betreuung in einer Atmosphäre von Vertrauen, Respekt und Sicherheit."],
        "Citește povestea mea" => ["Read my story", "Mehr über mich"],
        "RESURSE UTILE" => ["HELPFUL RESOURCES", "HILFREICHE INFORMATIONEN"],
        "Informații care aduc" => ["Information that brings", "Informationen für mehr"],
        "claritate" => ["clarity", "Klarheit"],
        "Toate articolele" => ["All articles", "Alle Artikel"],
        "Ghid pentru părinți" => ["Guide for parents", "Ratgeber für Eltern"],
        "Când este recomandat un consult la hematologul pediatru?" => ["When should a child see a pediatric hematologist?", "Wann ist eine kinderhämatologische Untersuchung sinnvoll?"],
        "Semne și simptome care merită evaluate de un specialist și informații utile pentru părinți." => ["Signs and symptoms that deserve specialist assessment, and helpful information for parents.", "Anzeichen und Symptome, die fachärztlich abgeklärt werden sollten, und hilfreiche Informationen für Eltern."],
        "Citește articolul" => ["Read article", "Artikel lesen"],
        "SUNT AICI PENTRU VOI" => ["HERE FOR YOUR FAMILY", "FÜR IHRE FAMILIE DA"],
        "Hai să vorbim despre" => ["Let's talk about", "Sprechen wir über"],
        "sănătatea copilului tău." => ["your child's health.", "die Gesundheit Ihres Kindes."],
        "Pentru întrebări sau programări, mă poți contacta telefonic, prin WhatsApp sau prin formular." => ["For questions or appointments, contact me by phone, WhatsApp or the form.", "Bei Fragen oder Terminwünschen erreichen Sie mich telefonisch, über WhatsApp oder das Formular."],
        "Contactează-mă" => ["Get in touch", "Kontakt aufnehmen"],
        "Explorează" => ["Explore", "Entdecken"],
        "Îngrijire atentă, cu empatie și respect pentru fiecare copil și familie." => ["Attentive, compassionate care for every child and family.", "Aufmerksame, einfühlsame Betreuung für jedes Kind und seine Familie."],
        "Informațiile de pe site nu înlocuiesc consultația medicală." => ["Information on this website does not replace a medical consultation.", "Die Informationen auf dieser Website ersetzen keine ärztliche Untersuchung."],
        "Sari la conținut" => ["Skip to content", "Zum Inhalt springen"],
        "Deschide meniul" => ["Open menu", "Menü öffnen"],
        "Informații pentru părinți." => ["Information for parents.", "Informationen für Eltern."],
        "Articole medicale explicate clar, pentru decizii informate și mai multă liniște." => ["Clear medical articles for informed decisions and peace of mind.", "Verständliche medizinische Artikel für fundierte Entscheidungen und mehr Sicherheit."],
    ];
    $lang = drtami_language();
    $index = $lang === 'en' ? 0 : ($lang === 'de' ? 1 : null);
    return $index === null ? $source : ($translations[$source][$index] ?? $source);
}
function drtami_translate_page_url(string $slug): string {
    $page = get_page_by_path($slug);
    if (!$page) return home_url('/' . $slug . '/');
    if (function_exists('pll_get_post')) {
        $translated = pll_get_post($page->ID, drtami_language());
        if ($translated) return get_permalink($translated);
    }
    return get_permalink($page);
}
function drtami_home_url(): string {
    if (function_exists('pll_home_url')) return pll_home_url(drtami_language());
    return home_url('/');
}
