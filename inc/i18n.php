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
        "CONTACT & PROGRAMĂRI" => ["CONTACT & APPOINTMENTS", "KONTAKT & TERMINE"],
        "Hai să " => ["Let's ", "Lassen Sie uns "],
        "vorbim." => ["talk.", "sprechen."],
        "Pentru programări și informații, alege metoda de contact potrivită pentru tine." => ["For appointments and information, choose the contact method that suits you best.", "Für Termine und Informationen wählen Sie bitte Ihren bevorzugten Kontaktweg."],
        "DATE DE CONTACT" => ["CONTACT DETAILS", "KONTAKTDATEN"],
        "Sunt aici pentru " => ["I'm here for ", "Ich bin für "],
        "voi." => ["you.", "Sie da."],
        "Scrie pe WhatsApp" => ["Message on WhatsApp", "Über WhatsApp schreiben"],
        "Adresa clinicii" => ["Clinic address", "Praxisadresse"],
        "Informații utile pentru consultație" => ["Useful appointment information", "Wichtige Informationen zum Termin"],
        "Tarif:" => ["Fee:", "Honorar:"],
        "Durată:" => ["Duration:", "Dauer:"],
        "De adus:" => ["Please bring:", "Bitte mitbringen:"],
        "Trimite un mesaj" => ["Send a message", "Nachricht senden"],
        "Completează formularul, iar mesajul va fi transmis pe e-mail." => ["Fill out the form to send your message by email.", "Füllen Sie das Formular aus, um eine Nachricht per E-Mail zu senden."],
        "Mesajul a fost trimis. Mulțumesc!" => ["Your message has been sent. Thank you!", "Ihre Nachricht wurde versendet. Vielen Dank!"],
        "Verifică datele introduse și încearcă din nou." => ["Please check your details and try again.", "Bitte überprüfen Sie Ihre Angaben und versuchen Sie es erneut."],
        "Te rugăm să aștepți un minut înainte de a trimite un alt mesaj." => ["Please wait one minute before sending another message.", "Bitte warten Sie eine Minute, bevor Sie eine weitere Nachricht senden."],
        "Mesajul nu a putut fi trimis. Te rugăm să folosești telefonul sau e-mailul." => ["Your message could not be sent. Please contact us by phone or email.", "Ihre Nachricht konnte nicht gesendet werden. Bitte nutzen Sie Telefon oder E-Mail."],
        "Numele tău " => ["Your name ", "Ihr Name "],
        "Adresa de e-mail " => ["Email address ", "E-Mail-Adresse "],
        "Mesajul tău " => ["Your message ", "Ihre Nachricht "],
        "Sunt de acord ca datele introduse să fie folosite pentru a primi un răspuns la solicitarea mea. " => ["I agree that my submitted data may be used to respond to my inquiry. ", "Ich bin damit einverstanden, dass meine Angaben zur Beantwortung meiner Anfrage verwendet werden. "],
        "Nu trimite date medicale sensibile prin acest formular." => ["Do not send sensitive medical information through this form.", "Bitte übermitteln Sie über dieses Formular keine sensiblen medizinischen Daten."],
        "Trimite mesajul" => ["Send message", "Nachricht senden"],
        "fără decontare CASMB" => ["not covered by CASMB", "keine Abrechnung über CASMB"],
        "copilul (prezență obligatorie) și documentele medicale ale acestuia." => ["your child (attendance required) and their medical records.", "Ihr Kind (Anwesenheit erforderlich) und seine medizinischen Unterlagen."],
        "București (zona Dristor)" => ["Bucharest (Dristor area)", "Bukarest (Stadtteil Dristor)"],
        "Nume și prenume" => ["Full name", "Vor- und Nachname"],
        "Cum te pot ajuta?" => ["How can I help?", "Wie kann ich Ihnen helfen?"],
        "Evaluarea și investigarea anemiei (anemie feriprivă, anemii hemolitice și alte tipuri de anemie)." => ["Assessment and investigation of anemia (iron-deficiency, hemolytic and other types).", "Untersuchung und Abklärung von Anämien (Eisenmangelanämie, hämolytische und andere Formen)."],
        "Evaluarea modificărilor hemoleucogramei (hemoglobină, leucocite, trombocite)." => ["Assessment of blood count abnormalities (hemoglobin, white blood cells, platelets).", "Abklärung von Blutbildveränderungen (Hämoglobin, Leukozyten, Thrombozyten)."],
        "Evaluarea trombocitopeniei și a numărului crescut de trombocite." => ["Assessment of low and elevated platelet counts.", "Abklärung erniedrigter und erhöhter Thrombozytenzahlen."],
        "Investigarea tulburărilor de coagulare și a manifestărilor hemoragice." => ["Investigation of clotting disorders and bleeding symptoms.", "Abklärung von Gerinnungsstörungen und Blutungszeichen."],
        "Evaluarea vânătăilor spontane, a peteșiilor și a sângerărilor recurente." => ["Assessment of unexplained bruising, petechiae and recurrent bleeding.", "Abklärung spontaner Blutergüsse, Petechien und wiederkehrender Blutungen."],
        "Evaluarea adenopatiilor (ganglioni limfatici măriți)." => ["Assessment of enlarged lymph nodes.", "Untersuchung vergrößerter Lymphknoten."],
        "Investigarea modificărilor persistente ale globulelor albe." => ["Investigation of persistent white blood cell abnormalities.", "Abklärung anhaltender Veränderungen der weißen Blutkörperchen."],
        "Evaluarea splenomegaliei și a hepatomegaliei." => ["Assessment of enlarged spleen and liver.", "Untersuchung einer Milz- oder Lebervergrößerung."],
        "Monitorizarea copiilor cu afecțiuni hematologice cunoscute." => ["Follow-up of children with known blood disorders.", "Verlaufskontrolle bei Kindern mit bekannten Bluterkrankungen."],
        "Evaluarea copiilor cu semne și simptome sugestive pentru o afecțiune oncologică." => ["Assessment of children with signs and symptoms suggestive of cancer.", "Untersuchung von Kindern mit Anzeichen und Symptomen, die auf eine Krebserkrankung hinweisen könnten."],
        "Evaluarea adenopatiilor persistente sau cu aspect clinic suspect." => ["Assessment of persistent or clinically suspicious lymph node enlargement.", "Abklärung anhaltender oder klinisch auffälliger Lymphknotenschwellungen."],
        "Investigarea febrei prelungite și a simptomelor generale fără o cauză identificată." => ["Investigation of prolonged fever and unexplained general symptoms.", "Abklärung länger anhaltenden Fiebers und allgemeiner Symptome ohne erkennbare Ursache."],
        "Evaluarea modificărilor biologice care pot ridica suspiciunea unei afecțiuni oncologice." => ["Assessment of laboratory abnormalities that may raise concern about cancer.", "Abklärung von Laborveränderungen, die den Verdacht auf eine Krebserkrankung begründen können."],
        "Evaluarea și îndrumarea copiilor după finalizarea tratamentului oncologic." => ["Follow-up and guidance for children after cancer treatment.", "Nachsorge und Beratung von Kindern nach Abschluss einer Krebsbehandlung."],
        "Interpretarea hemoleucogramei și a analizelor de laborator." => ["Interpretation of blood counts and laboratory tests.", "Besprechung von Blutbild- und Laborbefunden."],
        "Recomandarea investigațiilor suplimentare necesare pentru stabilirea diagnosticului." => ["Recommendations for further diagnostic tests.", "Empfehlung weiterer Untersuchungen zur Diagnosestellung."],
        "A doua opinie medicală în cazul afecțiunilor hematologice și oncologice pediatrice." => ["Second medical opinions for pediatric blood disorders and cancers.", "Ärztliche Zweitmeinung bei Blut- und Krebserkrankungen im Kindesalter."],
        "Consilierea și informarea părinților cu privire la diagnostic, investigații și opțiunile terapeutice." => ["Guidance for parents about diagnosis, investigations and treatment options.", "Beratung und Information der Eltern zu Diagnose, Untersuchungen und Behandlungsmöglichkeiten."],
        "Îndrumarea către alte specialități medicale atunci când situația clinică o impune." => ["Referral to other medical specialties when clinically indicated.", "Überweisung an andere Fachrichtungen, wenn medizinisch erforderlich."],
        "DESPRE MINE" => ["ABOUT ME", "ÜBER MICH"],
        "Medicină cu " => ["Medicine with ", "Medizin mit "],
        "grijă și empatie." => ["care and empathy.", "Fürsorge und Empathie."],
        "O relație bazată pe încredere, respect și siguranță pentru fiecare copil și familie." => ["A relationship built on trust, respect and safety for every child and family.", "Eine Beziehung auf der Grundlage von Vertrauen, Respekt und Sicherheit für jedes Kind und jede Familie."],
        "Cine sunt eu?" => ["Who am I?", "Wer bin ich?"],
        "Numele meu este " => ["My name is ", "Mein Name ist "],
        " și sunt Medic specialist Oncologie și Hematologie Pediatrică." => [" and I am a specialist in Pediatric Oncology and Hematology.", " und ich bin Fachärztin für pädiatrische Onkologie und Hämatologie."],
        "Am absolvit Universitatea de Medicină și Farmacie „Carol Davila” din București în anul 2020, iar în noiembrie 2025 am finalizat pregătirea prin rezidențiat în specialitatea Oncologie și Hematologie Pediatrică." => ["I graduated from Carol Davila University of Medicine and Pharmacy in Bucharest in 2020 and completed my residency in Pediatric Oncology and Hematology in November 2025.", "Ich habe 2020 mein Studium an der Universität für Medizin und Pharmazie „Carol Davila“ in Bukarest abgeschlossen und im November 2025 meine Facharztausbildung in pädiatrischer Onkologie und Hämatologie beendet."],
        "În prezent, sunt doctorand în cadrul Catedrei de Psihologie Medicală a Universității de Medicină și Farmacie „Carol Davila” din București, domeniu care îmi oferă o perspectivă mai amplă asupra relației dintre medic, copil și familie." => ["I am currently a doctoral candidate in the Department of Medical Psychology at Carol Davila University of Medicine and Pharmacy in Bucharest. This gives me a broader perspective on the relationship between doctor, child and family.", "Derzeit promoviere ich am Lehrstuhl für Medizinische Psychologie der Universität für Medizin und Pharmazie „Carol Davila“ in Bukarest. Das erweitert meine Perspektive auf die Beziehung zwischen Ärztin, Kind und Familie."],
        "Îmi doresc să ofer fiecărui copil îngrijire medicală atentă și individualizată, într-un mediu bazat pe încredere, respect și siguranță." => ["I aim to offer every child attentive, individualized medical care in an environment built on trust, respect and safety.", "Ich möchte jedem Kind eine aufmerksame und individuelle medizinische Betreuung in einer Atmosphäre von Vertrauen, Respekt und Sicherheit bieten."],
        "Ce înseamnă oncologia și hematologia pediatrică?" => ["What are pediatric oncology and hematology?", "Was sind pädiatrische Onkologie und Hämatologie?"],
        "Oncologia și hematologia pediatrică este specialitatea medicală care se ocupă cu diagnosticul, monitorizarea și tratamentul afecțiunilor sângelui și ale organelor hematopoietice, precum și al bolilor oncologice care apar în copilărie și adolescență." => ["Pediatric oncology and hematology is the medical specialty concerned with diagnosing, monitoring and treating disorders of the blood and blood-forming organs, as well as cancers affecting children and adolescents.", "Die pädiatrische Onkologie und Hämatologie befasst sich mit der Diagnose, Überwachung und Behandlung von Erkrankungen des Blutes und der blutbildenden Organe sowie mit Krebserkrankungen im Kindes- und Jugendalter."],
        "Domeniul hematologiei pediatrice include o gamă largă de afecțiuni, de la anemii, tulburări ale coagulării și trombocitopenii, până la boli hematologice mai rare și complexe." => ["Pediatric hematology covers a wide range of conditions, from anemia, clotting disorders and thrombocytopenia to rarer and more complex blood disorders.", "Die pädiatrische Hämatologie umfasst zahlreiche Erkrankungen, von Anämien, Gerinnungsstörungen und Thrombozytopenien bis hin zu seltenen und komplexen Bluterkrankungen."],
        "Oncologia pediatrică se ocupă de diagnosticul și tratamentul cancerelor copilăriei, precum leucemiile, limfoamele, tumorile cerebrale și alte tumori solide." => ["Pediatric oncology focuses on diagnosing and treating childhood cancers, including leukemia, lymphoma, brain tumors and other solid tumors.", "Die pädiatrische Onkologie befasst sich mit der Diagnose und Behandlung von Krebserkrankungen im Kindesalter, darunter Leukämien, Lymphome, Hirntumoren und andere solide Tumoren."],
        "Un aspect esențial al acestei specialități este abordarea multidisciplinară, care presupune colaborarea dintre medici din diferite specialități, pentru a oferi fiecărui copil cele mai bune șanse de diagnostic, tratament și recuperare." => ["A key part of this specialty is multidisciplinary care, bringing together physicians from different fields to offer each child the best possible opportunities for diagnosis, treatment and recovery.", "Ein wesentlicher Bestandteil dieses Fachgebiets ist die interdisziplinäre Zusammenarbeit verschiedener Fachrichtungen, um jedem Kind die bestmöglichen Chancen auf Diagnose, Behandlung und Genesung zu bieten."],
        "Ce consultații ofer?" => ["What consultations do I offer?", "Welche Untersuchungen biete ich an?"],
        "În cadrul specialității de Oncologie și Hematologie Pediatrică, ofer evaluare, diagnostic, monitorizare și îndrumare medicală pentru copii și adolescenți cu suspiciune sau diagnostic de afecțiuni hematologice și oncologice." => ["As a specialist in Pediatric Oncology and Hematology, I offer assessment, diagnosis, follow-up and medical guidance for children and adolescents with suspected or diagnosed blood disorders and cancers.", "Als Fachärztin für pädiatrische Onkologie und Hämatologie biete ich Untersuchung, Diagnose, Verlaufskontrolle und Beratung für Kinder und Jugendliche mit vermuteten oder diagnostizierten Blut- und Krebserkrankungen an."],
        "Consultații de hematologie pediatrică" => ["Pediatric hematology consultations", "Kinderhämatologische Untersuchungen"],
        "Consultații de oncologie pediatrică" => ["Pediatric oncology consultations", "Kinderonkologische Untersuchungen"],
        "Alte servicii medicale" => ["Other medical services", "Weitere medizinische Leistungen"],
        "Ai întrebări?" => ["Have questions?", "Haben Sie Fragen?"],
        "Sunt aici pentru a te ajuta să găsești răspunsuri și îndrumare." => ["I'm here to help you find answers and guidance.", "Ich helfe Ihnen gerne, Antworten und Orientierung zu finden."],
        "Contactează-mă" => ["Get in touch", "Kontakt aufnehmen"],
        "Aici vor apărea în curând răspunsuri la întrebările frecvente." => ["Answers to frequently asked questions will appear here soon.", "Hier finden Sie bald Antworten auf häufig gestellte Fragen."],
        "Pregătim această secțiune." => ["This section is coming soon.", "Dieser Bereich entsteht gerade."],
        "Între timp, mă poți contacta direct pentru informații." => ["In the meantime, feel free to contact me for information.", "In der Zwischenzeit können Sie mich bei Fragen direkt kontaktieren."],
        "HEMATOLOGIE PEDIATRICĂ" => ["PEDIATRIC HEMATOLOGY", "PÄDIATRISCHE HÄMATOLOGIE"],
        "Articolele vor apărea în curând." => ["Articles will appear here soon.", "Hier erscheinen bald Artikel."],
        "Înapoi la articole" => ["Back to articles", "Zurück zu den Artikeln"],
        "ARTICOL · HEMATOLOGIE PEDIATRICĂ" => ["ARTICLE · PEDIATRIC HEMATOLOGY", "ARTIKEL · PÄDIATRISCHE HÄMATOLOGIE"],
        "Ai întrebări sau dorești o consultație?" => ["Have questions or need an appointment?", "Haben Sie Fragen oder möchten Sie einen Termin vereinbaren?"],
    ];
    $lang = drtami_language();
    $index = $lang === 'en' ? 0 : ($lang === 'de' ? 1 : null);
    $result = $index === null ? $source : ($translations[$source][$index] ?? $source);
    return apply_filters('drtami_translation', $result, $source, $lang);
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

function drtami_featured_article_url(): string {
    $article = get_page_by_path('cand-este-recomandat-un-consult-la-hematologul-pediatru', OBJECT, 'post');
    if ($article) {
        $id = (int) $article->ID;
        if (function_exists('pll_get_post')) {
            $translated = pll_get_post($id, drtami_language());
            if ($translated) $id = (int) $translated;
        }
        return get_permalink($id);
    }
    return drtami_translate_page_url('articole');
}
