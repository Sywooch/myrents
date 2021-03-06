<?php

return array(    //SEO
        
    //Staticpages
    //О портвле
    'staticpage.title.about_us' =>'О портале',
    'staticpage.description.about_us' =>'',
    'staticpage.keywords.about_us' => '',
    //Правила и условия использования
    'staticpage.title.term_of_use' =>'Правила и условия использования',
    'staticpage.description.term_of_use' =>'',
    'staticpage.keywords.term_of_use' => '',

    /*Страница пользователей*/
         'members.title' =>'Пользователи',
    
    
    //действия
    'todo.rent' =>'Rent',
    'todo.sell' =>'Sale',
    'todo.buy' => 'Buy',
    
    //типы квартир
    'type.flat' =>'Flat',
    'type.house' => 'House',
    'type.office' =>'Office',    
    
    
    /*страница просмотра одной аренды*/
    // переменные для просмотра одной аренды:
    // {type} -тип, {todo} действие, {name} название, {room_count} количество комнат, 
    // {floor} этаж, {square} площадь
    'seo.rent.titile.type.flat' => '{name}. {todo} {room_count}-комнатную квартиру: - {adress}',
    'seo.rent.description.type.flat' => '{name}. {todo} {room_count}-комнатную квартиру.',   
    'seo.rent.titile.type.house' => '{name}. {todo} {room_count}-комнатный дом: {adress}',
    'seo.rent.description.type.house' => '{name}. {todo} {room_count}-комнатный дом.',   
    'seo.rent.titile.type.office' => '{name}. {todo} {room_count}-комнатный офис: {adress}',
    'seo.rent.description.type.office' => '{name}. {todo} {room_count}-комнатный офис.',   
    
    /*Главная страница*/
    'seo.main.title'=>'MyRents - недвижимость Украины: аренда, продажа, покупка  квартир, домов, офисов.',
    'seo.main.description'=>'Аренда и продажа недвижимости по всей Украине, ежедневные обновления.',
    
    
    //правила
    'rules.title'=>'Условия использования сайта Myrents',
    'rules.description'=>'Условия использования сайта являются обязывающим пользовательским соглашением между администрацией сайта myrents.com.ua и пользователем.',
    'rules.keywords'=>'условия использования сайта, правила использования сайта, руководство по использованию сайта',
    
    //помощь
    'help.title'=>'Помощь по сайту ',
    'help.description'=>'Помощь по использованию сайта. Краткое руководство по добавлению, поиску объявлений на сайте',
    'help.keywords'=>'помощь по сайту, помощь, myrents помощь',
    
    //как создать
    'how_create.title'=>'Как создать объявление ',
    'how_create.description'=>'Руководство по добавлению объявлений на на сайт. Как создать объявление',
    'how_create.keywords'=>'как добавить объявление, добавление объявления, добавить объявление',
    
    //как найти
    'how_search.title'=>'Как найти объявление',
    'how_search.description'=>'Руководство по поиску объявлений на на сайте. Как найти объявление ',
    'how_search.keywords'=>'как найти объявление, поиск объявления, найти объявление',    
    
    //search  страница поиска
    'search.title'=>'MyRents - Поиск объявлений по недвижимости: аренда, продажа квартир, домов, офисов',
    'search.description'=>'Поиск объявлений недвижимости по всей Украине. Мгновенный поиск объвлений, гибкие критерии поиска. ',
    'search.keywords'=>'поиск объявлений, найти объявление, объявления недвижимость, снять квартиру, купить квартиру, снять дом, купить дом, снять офис, купить офис',    
    
    //user/<id> страница пользователя
    //{name} - имя пользователя
    'user.title'=>'Страница пользователя {name} - MyRents. Недвижимость Украины',
    'user.description'=>'Персональная страница пользователя {name}. Объявления, профиль. MyRents - аренда и продажа недвижимости по всей Украине',
        //user/<id>/hostings/ страница объявлений пользвателя
    'hostings.title'=>'бъявления пользователя {name} - MyRents. Недвижимость Украины',
    'hostings.description'=>'Все объявления пользователя {name}. MyRents - аренда и продажа недвижимости по всей Украине',
    
    //search/%city%
    'preset.city.title'=> 'Недвижимость в #city_pp#: недвижимость #city_rp# - недвижмость #city_ip#',
    'preset.city.keywords'=> 'Недвижимость в #city_pp#, недвижимость #city_rp#, недвижмость #city_ip#',
    'preset.city.description'=> 'Вся недвижимость в #city_pp# как на ладони - доска объявлений MyRents!',
    'preset.city.h1'=> 'Недвижимость в #city_pp#',
    
    //search/%city%/rent
'preset.city.rent.title'=>'Аренда недвижимости в #city_pp#: сдать недвижимость в #city_pp#, снять недвижимость в #city_pp#, аренда недвижимости #city_rp# - аренда недвижимости #city_ip#',
'preset.city.rent.keywords'=> 'Аренда недвижимости в #city_pp#, сдать недвижимость в #city_pp#, снять недвижимость в #city_pp#, аренда недвижимости #city_rp#',
'preset.city.rent.description'=>'Аренда всей недвижимости в #city_pp# как на ладони - доска объявлений MyRents!',
'preset.city.rent.h1'=> 'Аренда недвижимости в #city_pp#',
    
    //search/%city%/sale
'preset.city.sale.title'=>'Продажа недвижимости в #city_pp#: продать недвижимость в #city_pp#, купить недвижимость в #city_pp#, продажа недвижимости #city_rp# - продажа недвижимости #city_ip#',
'preset.city.sale.keywords'=> 'Продажа недвижимости в #city_pp#, продать недвижимость в #city_pp#, купить недвижимость в #city_pp#, продажа недвижимости #city_rp#',
'preset.city.sale.description'=>'Продажа всей недвижимости в #city_pp# как на ладони - доска объявлений MyRents!',
'preset.city.sale.h1'=> 'Продажа недвижимости в #city_pp#',

    ///%city%/rent/flat/
 'preset.city.rent.flat.title'=>'Аренда квартир в #city_pp#: длительно, посуточно, без посредников, недорого - сниму, снять квартиру в #city_pp#',
'preset.city.rent.flat.keywords'=> 'аренда квартир в #city_pp#, аренда квартир посуточно в #city_pp#, аренда квартир без посредников в #city_pp#, аренда квартир длительно в #city_pp#, аренда квартир долгосрочно в #city_pp#, объявления аренда квартир в #city_pp#, сниму квартиру в #city_pp#, сниму квартиру долгосрочно в #city_pp#, сниму квартиру без посредников в #city_pp#, сниму квартиру посуточно в #city_pp#, сниму квартиру длительно в #city_pp#, сниму квартиру недорого в #city_pp#, снять квартиру в #city_pp#, снять квартиру долгосрочно в #city_pp#, снять квартиру без посредников в #city_pp#, снять квартиру посуточно в #city_pp#, снять квартиру длительно в #city_pp#, снять квартиру недорого в #city_pp#',
'preset.city.rent.flat.description'=>'Посуточная или длительная аренда квартир в #city_pp# недорого. Снять квартиру долгосрочно в #city_pp#.',
'preset.city.rent.flat.h1'=> 'Аренда квартир в #city_pp#',   
    
    ///%city%/rent/flat/1-room
 'preset.city.rent.flat.1-room.title'=>'Аренда однокомнатной квартиры в #city_pp#: снять, сниму однокомнатную квартиру в #city_pp#',
'preset.city.rent.flat.1-room.keywords'=> 'аренда однокомнатной квартиры в #city_pp#, снять однокомнатную квартиру в #city_pp#, сниму однокомнатную квартиру в #city_pp#',
'preset.city.rent.flat.1-room.description'=>'Посуточная или длительная аренда однокомнатных квартир в #city_pp#. Снять однокомнатную квартиру долгосрочно в #city_pp#.',
'preset.city.rent.flat.1-room.h1'=> 'Аренда однокомнатной квартиры в #city_pp#',   
    ///%city%/rent/flat/2-room
 'preset.city.rent.flat.2-room.title'=>'Аренда двухкомнатной квартиры в #city_pp#: снять, сниму двухкомнатную квартиру в #city_pp#',
'preset.city.rent.flat.2-room.keywords'=> 'аренда двухкомнатной квартиры в #city_pp#, снять двухкомнатную квартиру в #city_pp#, сниму двухкомнатную квартиру в #city_pp#',
'preset.city.rent.flat.2-room.description'=>'Посуточная или длительная аренда двухкомнатных квартир в #city_pp#. Снять двухкомнатную квартиру долгосрочно в #city_pp#.',
'preset.city.rent.flat.2-room.h1'=> 'Аренда двухкомнатной квартиры в #city_pp#',   
    ///%city%/rent/flat/3-room
 'preset.city.rent.flat.3-room.title'=>'Аренда трехкомнатной квартиры в #city_pp#: снять, сниму трехкомнатную квартиру в #city_pp#',
'preset.city.rent.flat.3-room.keywords'=> 'аренда трехкомнатной квартиры в #city_pp#, снять трехкомнатную квартиру в #city_pp#, сниму трехкомнатную квартиру в #city_pp#',
'preset.city.rent.flat.3-room.description'=>'Посуточная или длительная аренда трехкомнтаных квартир в #city_pp#. Снять трехкомнатных квартиру долгосрочно в #city_pp#.',
'preset.city.rent.flat.3-room.h1'=> 'Аренда трехкомнатной квартиры в #city_pp#',   

    
///%city%/rent/flat/4-room
 'preset.city.rent.flat.4-room.title'=>'Аренда четырехкомнатной квартиры в #city_pp#: снять, сниму четырехкомнатную квартиру в #city_pp#',
'preset.city.rent.flat.4-room.keywords'=> 'аренда четырехкомнатную квартиры в #city_pp#, снять четырехкомнатную квартиру в #city_pp#, сниму четырехкомнатную квартиру в #city_pp#',
'preset.city.rent.flat.4-room.description'=>'Посуточная или длительная аренда четырехкомнатных квартир в #city_pp#. Снять четырехкомнатную квартиру долгосрочно в #city_pp#',
'preset.city.rent.flat.4-room.h1'=> 'Аренда четырехкомнатной квартиры в #city_pp#',   
    
      ///%city%/rent/office/
 'preset.city.rent.office.title'=>'Аренда офисов в #city_pp#: снять офис без посредников, аренда квартиры под офис, сниму офисное помещение в #city_pp#',
'preset.city.rent.office.keywords'=> 'аренда офисов в #city_pp#, аренда офиса в #city_pp#, аренда под офис в #city_pp#, аренда офиса без посредников в #city_pp#, аренда офисного помещения в #city_pp#, 
аренда квартиры под офис в #city_pp#, сниму офис в #city_pp#, сниму под офис в #city_pp#, сниму офис без посредников в #city_pp#, сниму офисное помещение в #city_pp#, 
снять офис в #city_pp#, снять под офис в #city_pp#, снять офис без посредников в #city_pp#, снять офисное помещение в #city_pp#, сдать офис в #city_pp#, сдать под офис в #city_pp#
сдать офисное помещение в #city_pp#',
'preset.city.rent.office.description'=>'Аренда офисов или офисных помещений в #city_pp#. Снять офис без посредников или квартиру под офис в #city_pp#.',
'preset.city.rent.office.h1'=> 'Аренда офисов в #city_pp#',   
    
       ///%city%/rent/house/
 'preset.city.rent.house.title'=>'Аренда домов в #city_pp#: снять частный дом, аренда домов без посредников, сниму дом посуточно, аренда дома долгосрочно',
'preset.city.rent.house.keywords'=> 'аренда домов в #city_pp#, аренда дома в #city_pp#, аренда домов посуточно в #city_pp#, аренда домов без посредников в #city_pp#, аренда частных домов в #city_pp#, аренда дома долгосрочно в #city_pp#, аренда дома длительно в #city_pp#, дом под аренду в #city_pp#, снять дом в #city_pp#, снять частный дом в #city_pp#, снять дом посуточно в #city_pp#, снять дом долгосрочно в #city_pp#, снять дом длительно в #city_pp#, снять дом без посредников в #city_pp#, сниму дом в #city_pp#, сниму частный дом в #city_pp#, сниму дом посуточно в #city_pp#, сниму дом долгосрочно в #city_pp#, сниму дом длительно в #city_pp#, сниму дом без посредников в #city_pp#',
'preset.city.rent.house.description'=>'Посуточная или долгосрочная аренда частных домов в #city_pp#. Снять дом без посредников в #city_pp#',
'preset.city.rent.house.h1'=> 'Аренда частных домов в #city_pp#',      
    
        ///%city%/sale/flat/   
 'preset.city.sale.flat.title'=>'Продажа квартир в #city_pp#: продажа элитных квартир без посредников, куплю квартиру в новостройке, купить квартиру в новострое в #city_pp#',
'preset.city.sale.flat.keywords'=> 'продажа квартир в #city_pp#, продажа квартир без посредников в #city_pp#, продажа квартиры в #city_pp#, продажа элитных квартир в #city_pp#, куплю квартиру в #city_pp#, куплю квартиру без посредников в #city_pp#, куплю квартиру в новострое в #city_pp#, куплю квартиру в новостройке в #city_pp#, куплю новую квартиру в #city_pp#, купить квартиру в #city_pp#, купить квартиру без посредников в #city_pp#, купить квартиру в новострое в #city_pp#, купить квартиру в новостройке в #city_pp#, купить новую квартиру в #city_pp#',
'preset.city.sale.flat.description'=>'Продажа квартир в #city_pp# без посредников в новостроях. Купить элитную квартиру в новых домах в #city_pp#.',
'preset.city.sale.flat.h1'=> 'Продажа квартир в #city_pp#',      
    
        ///%city%/sale/flat/1-room
 'preset.city.sale.flat.1-room.title'=>'Однокомнатные квартиры в #city_pp#: продажа однокомнатных квартир, купить, куплю, продам однокомнатную квартиру в #city_pp#',
'preset.city.sale.flat.1-room.keywords'=> 'однокомнатные квартиры в #city_pp#, продажа однокомнатных квартир в #city_pp#, купить однокомнатную квартиру в #city_pp#, куплю однокомнатную квартиру в #city_pp#, продам однокомнатную квартиру в #city_pp#',
'preset.city.sale.flat.1-room.description'=>'Продажа однокомнатных квартир без посредников в новостроях в #city_pp#. Купить элитную однокомнатную квартиру в #city_pp#.',
'preset.city.sale.flat.1-room.h1'=> 'Продажа однокомнатных квартир в #city_pp#',   
    ///%city%/sale/flat/2-room
 'preset.city.sale.flat.2-room.title'=>'Двухкомнатные квартиры в #city_pp#: продажа двухкомнатных квартир, купить, куплю, продам двухкомнатную квартиру в #city_pp#',
'preset.city.sale.flat.2-room.keywords'=> 'двухкомнатные квартиры в #city_pp#, куплю двухкомнатную квартиру в #city_pp#, купить двухкомнатную квартиру в #city_pp#, продажа двухкомнатных квартир в #city_pp#, продам двухкомнатную квартиру в #city_pp#',
'preset.city.sale.flat.2-room.description'=>'Продажа двухкомнатных квартир без посредников в новостроях в #city_pp#. Купить элитную двухкомнатную квартиру в #city_pp#.',
'preset.city.sale.flat.2-room.h1'=> 'Продажа двухкомнатных квартир в #city_pp#',   
    ///%city%/sale/flat/3-room
 'preset.city.sale.flat.3-room.title'=>'Трехкомнатные квартиры в #city_pp#: продажа трехкомнатных квартир, купить, куплю, продам трехкомнатную квартиру в #city_pp#.',
'preset.city.sale.flat.3-room.keywords'=> 'трехкомнатные квартиры в #city_pp#, продажа трехкомнатных квартир в #city_pp#, купить трехкомнатную квартиру в #city_pp#, куплю трехкомнатную квартиру в #city_pp#, продам трехкомнатную квартиру в #city_pp#',
'preset.city.sale.flat.3-room.description'=>'Продажа трехкомнатных квартир без посредников в новостроях в #city_pp#. Купить элитную трехкомнатную квартиру в #city_pp#.',
'preset.city.sale.flat.3-room.h1'=> 'Продажа трехкомнатных квартир в #city_pp#',   
    
///%city%/sale/flat/4-room
 'preset.city.sale.flat.4-room.title'=>'Четырехкомнатные квартиры в #city_pp#: продажа четырехкомнатных квартир, купить, куплю, продам четырехкомнатную квартиру в #city_pp#.',
'preset.city.sale.flat.4-room.keywords'=> 'четырехкомнатные кваритры в #city_pp#, продажа четырехкомнатных квартир в #city_pp#, купить четырехкомнатную квартиру в #city_pp#, куплю четырехкомнатную квартиру в #city_pp#, продам четырехкомнатную квартиру в #city_pp#',
'preset.city.sale.flat.4-room.description'=>'Продажа четырехкомнатных квартир без посредников в новостроях в #city_pp#. Купить элитную четырехкомнатную квартиру в #city_pp#.',
'preset.city.sale.flat.4-room.h1'=> 'Продажа четырехкомнатных квартир в #city_pp#',   
    
      ///%city%/sale/office/
 'preset.city.sale.office.title'=>'Продажа офисов в #city_pp#: купить офис, куплю помещение под офис, срочно продать офис в #city_pp#',
'preset.city.sale.office.keywords'=> 'продажа офисов в #city_pp#, продажа офиса в #city_pp#, продажа под офис в #city_pp#, продать офис в #city_pp#, срочно продать офис в #city_pp#, купить офис в #city_pp#, купить помещение под офис в #city_pp#, купить квартиру под офис в #city_pp#, куплю офис в #city_pp#, куплю помещение под офис в #city_pp#, куплю квартиру под офис в #city_pp#, куплю под офис в #city_pp#',
'preset.city.sale.office.description'=>'Продажа офисов и помещений под офис в #city_pp#. Купить квартиру под офис или офисное помещение в #city_pp#.',
'preset.city.sale.office.h1'=> 'Продажа офисов в #city_pp#',   
    
       ///%city%/sale/house/
 'preset.city.sale.house.title'=>'Продажа домов в #city_pp#: куплю дом, продать частный дом, купить дом недорого в #city_pp#',
'preset.city.sale.house.keywords'=> 'куплю дом в #city_pp#, куплю дом недорого в #city_pp#, куплю частный дом в #city_pp#, куплю новый дом в #city_pp#, продажа домов в #city_pp#, продажа частных домов в #city_pp#, продажа новых домов в #city_pp#, продажа недорогих домов в #city_pp#, продать дом в #city_pp#, продать частный дом в #city_pp#, купить дом в #city_pp#, купить дом недорого в #city_pp#, купить частный дом в #city_pp#, купить новый дом в #city_pp#',
'preset.city.sale.house.description'=>'Продажа частных домов в #city_pp#. Купить недорого частный дом в #city_pp#.',
'preset.city.sale.house.h1'=> 'Продажа частных домов в #city_pp#',    
	)
?>
