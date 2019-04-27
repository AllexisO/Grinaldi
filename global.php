<?php 

function tStr($string) {
    $cur_lang = pll_current_language();
    $lng = array(
        //Main Page
        'Kitchen' => array('ru'=>'Кухни', 'ro'=>'Bucătărie', 'en'=>'Kitchen'),
        'Bath' => array('ru'=>'Ванные комнаты', 'ro'=>'Băile', 'en'=>'Bath'),
        'Bed' => array('ru'=>'Спальные комнаты', 'ro'=>'Dormitoare', 'en'=>'Sleeping rooms'),
        'Learn_more' => array('ru'=>'Узнать больше >', 'ro'=>'Aflați mai multe >', 'en'=>'Learn more >'),
        'Cloakroom' => array('ru'=>'Гардеробные комнаты', 'ro'=>'Cameră dressing', 'en'=>'Cloakrooms'),
        'Living' => array('ru'=>'Гостиные', 'ro'=>'Camera de zi', 'en'=>'Living rooms'),
        'Interior' => array('ru'=>'Межкомнатные двери', 'ro'=>'Uși de interior', 'en'=>'Interior doors'),
        'Shops' => array('ru'=>'Магазины и салоны', 'ro'=>'Magazine și saloane', 'en'=>'Shops and salons'),
        'Design_text' => array('ru'=>'Компания с более, чем десятилетним опытом на рынке. Мебель для дома, кухни, межкомнатные двери, мебель для санузлов в минималистичных традициях Hulsta. Офисная мебель, мебель для салонов и магазинов. Индивидуальный и скрупулезный подход к каждому изделию.', 'ro'=>'Compania cu mai mult de zece ani de experienta pe piata. Mobilier pentru casa, mobila de bucatarie, usi de interior, baie mobilier minimalist tradiție hülsta. Mobilier de birou, mobilier pentru saloane de înfrumusețare și magazine. Abordarea individuală și aprofundată a fiecărui produs.', 'en'=>'A company with more than ten years of experience in the market. Furniture for home, kitchen, interior doors, furniture for bathrooms in the minimalist traditions of Hulsta. Office furniture, furniture for salons and shops. Individual and scrupulous approach to each product.'),
        
        //About_us
        'About_us' => array('ru'=>'О нас', 'ro'=>'Despre noi', 'en'=>'About us'),
        
        //Products
        'Our_products' => array('ru'=>'Наши продукты', 'ro'=>'Produsele noastre', 'en'=>'Our Products'),
        
        //Clients
        'Clients' => array('ru'=>'Наши клиенты', 'ro'=>'Clienţii noștri', 'en'=>'Our clients'),
                
        //Contacts
        'Name' => array('ru'=>'Имя', 'ro'=>'Nume', 'en'=>'Name'),
        'Phone' => array('ru'=>'Телефон', 'ro'=>'Telefon', 'en'=>'Phone'),
        'Message' => array('ru'=>'Сообщение', 'ro'=>'Mesaj', 'en'=>'Message'),
        'Send' => array('ru'=>'Отправить', 'ro'=>'Trimite', 'en'=>'Send'),
        'Consultation' => array('ru'=>'Отправьте запрос, и мы свяжемся с Вами, чтобы назначить бесплатную консультацию:', 'ro'=>'Trimite cererea dvs. și vă vom contacta pentru a programa o consultație gratuită:', 'en'=>'Send the request and we will contact you to schedule a free consultation:'),
        'Street' => array('ru'=>'У. Мештерул Маноле 9', 'ro'=>'Str. Meșterul Manole 9', 'en'=>'St. Mesterul Manole 9'),
        'City' => array('ru'=>'Кишинев, Молдова', 'ro'=>'Chișinău, Moldova', 'en'=>'Chisinau, Moldova'),
        'Send_message' => array('ru'=>'Кишинев, Молдова', 'ro'=>'Chișinău, Moldova', 'en'=>'Chisinau, Moldova'),
        
        
        
        'Our_products' => array('ru'=>'Наши продукты', 'ro'=>'Produsele noastre', 'en'=>'Our Products'),
        'Our_partners' => array('ru'=>'Наши партнеры', 'ro'=>'Partenerii noștri', 'en'=>'Our partners'),
        'Our_contacts' => array('ru'=>'Контакты', 'ro'=>'Contacte', 'en'=>'Contacts'),
    );
    
    $word = $lng[$string];
    
    return $word[$cur_lang];
}
