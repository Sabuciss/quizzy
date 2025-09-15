<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Topic;

class QuestionsSeeder extends Seeder
{
    public function run()
    {
        $topicNames = [
            'Grāmatas',
            'Sports',
            'Vēsture un Dabaszinības',
            'Augstpapēžu kurpes',
            'Minioni',
        ];

        $topics = [];
        foreach ($topicNames as $name) {
            $topics[$name] = Topic::firstOrCreate(['name' => $name])->id;
        }

        // ==================== GRĀMATAS ====================
        Question::create([
            'topic_id' => $topics['Grāmatas'],
            'question' => 'Kurš sarakstīja “Romeo un Džuljeta”?',
            'correct_answer' => 'Viljams Šekspīrs',
            'wrong1' => 'Dante Alighieri',
            'wrong2' => 'Džons Miltons',
            'wrong3' => 'Homērs',
            'wrong4' => 'Čārlzs Dikens'
        ]);

        Question::create([
            'topic_id' => $topics['Grāmatas'],
            'question' => 'Kurš sarakstīja “Harijs Poters”?',
            'correct_answer' => 'J.K. Roulinga',
            'wrong1' => 'J.R.R. Tolkins',
            'wrong2' => 'Džordžs Mārtins',
            'wrong3' => 'Stefānija Meijere',
            'wrong4' => 'Džeina Ostina',
            
        ]);

        Question::create([
            'topic_id' => $topics['Grāmatas'],
            'question' => 'E-grāmatas nevar lasīt bez interneta pieslēguma.',
            'correct_answer' => 'False',
            'wrong1' => 'True',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Grāmatas'],
            'question' => 'Kura no šīm grāmatām ir klasika?',
            'correct_answer' => '“Sprīdītis”',
            'wrong1' => '“Ikabogs”',
            'wrong2' => '“Mārlijs un kaķēni”',
            'wrong3' => '“Aitas”',
            'wrong4' => '“Latviešu šausmu stāsti”',
            
        ]);

        Question::create([
            'topic_id' => $topics['Grāmatas'],
            'question' => 'Vai patiesi, ka daiļliteratūrā ir tikai romāni?',
            'correct_answer' => 'False',
            'wrong1' => 'True',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Grāmatas'],
            'question' => 'Kā sauc slaveno detektīvu no Artura Konana Doila stāstiem?',
            'correct_answer' => 'Sherlock Holmes',
            'wrong1' => 'Hercule Poirot',
            'wrong2' => 'Džons Vatsons',
            'wrong3' => 'Augusts Dupins',
            'wrong4' => 'Inspektors Lekstrads',
            
        ]);

        Question::create([
            'topic_id' => $topics['Grāmatas'],
            'question' => 'Kurš no šiem autoriem sarakstīja “Sprīdītis”?',
            'correct_answer' => 'Anna Brigadere',
            'wrong1' => 'Andrejs Upīts',
            'wrong2' => 'Jānis Kalniņš',
            'wrong3' => 'Aspazija',
            'wrong4' => 'Jānis Čakste',
            
        ]);

        Question::create([
            'topic_id' => $topics['Grāmatas'],
            'question' => '“Mazais princis” ir sarakstīts franču valodā.',
            'correct_answer' => 'True',
            'wrong1' => 'False',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Grāmatas'],
            'question' => 'Kurš sarakstīja “Dzīvnieku ferma”?',
            'correct_answer' => 'Džordžs Orvels',
            'wrong1' => 'Frānsiss Skots Ficdžeralds',
            'wrong2' => 'Aldous Huxley',
            'wrong3' => 'Stīvens Kings',
            'wrong4' => 'Daniels Defo',
            
        ]);

        Question::create([
            'topic_id' => $topics['Grāmatas'],
            'question' => 'Kurš darbs ir sarakstīts kā eposs?',
            'correct_answer' => '“Odiseja”',
            'wrong1' => '“Romeo un Džuljeta”',
            'wrong2' => '“Daugava”',
            'wrong3' => '“Zelta zirgs”',
            'wrong4' => '“Mazais princis”',
            
        ]);

        Question::create([
            'topic_id' => $topics['Grāmatas'],
            'question' => '“1984” ir zinātniskās fantastikas žanra grāmata.',
            'correct_answer' => 'True',
            'wrong1' => 'False',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Grāmatas'],
            'question' => 'Kurš no šiem ir bērnu literatūras autors?',
            'correct_answer' => 'Astrīda Lindgrēne',
            'wrong1' => 'Džoiss Kerols',
            'wrong2' => 'Stīvens Kings',
            'wrong3' => 'Suzēna Kolinsa',
            'wrong4' => 'Nora Robertsa',
            
        ]);

        Question::create([
            'topic_id' => $topics['Grāmatas'],
            'question' => 'Kurš no šiem darbiem nav bērnu literatūra?',
            'correct_answer' => '“Don Kihots”',
            'wrong1' => '“Harijs Poters”',
            'wrong2' => '“Mazais princis”',
            'wrong3' => '“Alise Brīnumzemē”',
            'wrong4' => '“Pīters Pens”',
            
        ]);

        Question::create([
            'topic_id' => $topics['Grāmatas'],
            'question' => 'Bibliotēkas ir tikai vecu grāmatu glabāšanas vietas.',
            'correct_answer' => 'False',
            'wrong1' => 'True',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Grāmatas'],
            'question' => 'Kurš no šiem nav romāns?',
            'correct_answer' => '“Lāčplēsis”',
            'wrong1' => '“Zaļā zeme”',
            'wrong2' => '“Trīs vella kalpi”',
            'wrong3' => '“Mērnieku laiki”',
            'wrong4' => '“Ugunszīme”',
            
        ]);

        // ==================== SPORTS ====================
        Question::create([
            'topic_id' => $topics['Sports'],
            'question' => 'Cik spēlētāju katrā komandā vienlaikus atrodas uz laukuma basketbolā?',
            'correct_answer' => '5',
            'wrong1' => '6',
            'wrong2' => '7',
            'wrong3' => '8',
            'wrong4' => '9',
            
        ]);

        Question::create([
            'topic_id' => $topics['Sports'],
            'question' => 'Olimpiskās spēles notiek katru gadu.',
            'correct_answer' => 'False',
            'wrong1' => 'True',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Sports'],
            'question' => 'Ko nozīmē “Grand Slam” tenisā?',
            'correct_answer' => 'Četri lielākie turnīri',
            'wrong1' => 'Rekords punktos',
            'wrong2' => 'Vissvarīgākais sets',
            'wrong3' => 'Divkārša uzvara',
            'wrong4' => 'Pasaules kauss',
            
        ]);

        Question::create([
            'topic_id' => $topics['Sports'],
            'question' => 'Kurš ir populārākais sporta veids pasaulē?',
            'correct_answer' => 'Futbols',
            'wrong1' => 'Beisbols',
            'wrong2' => 'Basketbols',
            'wrong3' => 'Hokejs',
            'wrong4' => 'Regbijs',
            
        ]);

        Question::create([
            'topic_id' => $topics['Sports'],
            'question' => 'Maratons ir skrējiens uz 42,195 km.',
            'correct_answer' => 'True',
            'wrong1' => 'False',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Sports'],
            'question' => 'Kurš sporta veids nācis no Japānas?',
            'correct_answer' => 'Karatē',
            'wrong1' => 'Bokss',
            'wrong2' => 'Futbols',
            'wrong3' => 'Basketbols',
            'wrong4' => 'Teniss',
            
        ]);

        Question::create([
            'topic_id' => $topics['Sports'],
            'question' => 'Kāds sporta veids ir tenisāls?',
            'correct_answer' => 'Ar raketi un bumbiņu',
            'wrong1' => 'Ar pludmales bumbu',
            'wrong2' => 'Ar lecamauklu',
            'wrong3' => 'Ar nūju un bumbiņu',
            'wrong4' => 'Ar nūju un ripu',
            
        ]);

        Question::create([
            'topic_id' => $topics['Sports'],
            'question' => 'Hokejs tiek spēlēts tikai ziemā.',
            'correct_answer' => 'False',
            'wrong1' => 'True',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Sports'],
            'question' => 'Ko nozīmē “hat-trick” futbolā?',
            'correct_answer' => 'Trīs vārti vienā spēlē',
            'wrong1' => 'Trīs kartītes vienā spēlē',
            'wrong2' => 'Trīs piespēles',
            'wrong3' => 'Trīs aizsargi laukumā',
            'wrong4' => 'Trīs soda metieni',
            
        ]);

        Question::create([
            'topic_id' => $topics['Sports'],
            'question' => 'Kāds ir olimpisko spēļu moto?',
            'correct_answer' => '“Ātrāk, augstāk, spēcīgāk”',
            'wrong1' => '“Spēlēt godīgi”',
            'wrong2' => '“Cīņa par zeltu”',
            'wrong3' => '“Visi vienādi”',
            'wrong4' => '“Sports - veselība”',
            
        ]);

        Question::create([
            'topic_id' => $topics['Sports'],
            'question' => 'Olimpiskajās spēlēs ir arī šaušanas sacensības.',
            'correct_answer' => 'True',
            'wrong1' => 'False',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Sports'],
            'question' => 'Kurš no šiem ir slavens futbolists?',
            'correct_answer' => 'Neimars',
            'wrong1' => 'Lebrons Džeimss',
            'wrong2' => 'Rodžers Federers',
            'wrong3' => 'Kevins Durants',
            'wrong4' => 'Taigers Vudss',
            
        ]);

        Question::create([
            'topic_id' => $topics['Sports'],
            'question' => 'Kura valsts pirmā rīkoja moderno olimpisko spēļu sacensības?',
            'correct_answer' => 'Grieķija',
            'wrong1' => 'Francija',
            'wrong2' => 'ASV',
            'wrong3' => 'Vācija',
            'wrong4' => 'Spānija',
            
        ]);

        Question::create([
            'topic_id' => $topics['Sports'],
            'question' => 'Peldēšana ir sporta veids, kurā mēra laiku un distanci.',
            'correct_answer' => 'True',
            'wrong1' => 'False',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Sports'],
            'question' => 'Kāds sporta veids ir džudo?',
            'correct_answer' => 'Cīņas sports',
            'wrong1' => 'Skvošs',
            'wrong2' => 'Fitness',
            'wrong3' => 'Spēka trīscīņa',
            'wrong4' => 'Mākslas vingrošana',
            
        ]);

        // ==================== VĒSTURE UN DABASZINĪBAS ====================
        Question::create([
            'topic_id' => $topics['Vēsture un Dabaszinības'],
            'question' => 'Latvijas neatkarības proklamēšana notika 1918. gadā.',
            'correct_answer' => 'True',
            'wrong1' => 'False',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Vēsture un Dabaszinības'],
            'question' => 'Kurš bija Senās Ēģiptes valdnieks?',
            'correct_answer' => 'Faraons',
            'wrong1' => 'Cēzars',
            'wrong2' => 'Napoleons',
            'wrong3' => 'Aleksandrs Lielais',
            'wrong4' => 'Ģingishans',
            
        ]);

        Question::create([
            'topic_id' => $topics['Vēsture un Dabaszinības'],
            'question' => 'Kurš atklāja Ameriku 1492. gadā?',
            'correct_answer' => 'Kolumbs',
            'wrong1' => 'Magelāns',
            'wrong2' => 'Kuks',
            'wrong3' => 'Vasko da Gama',
            'wrong4' => 'Āmudsens',
            
        ]);

        Question::create([
            'topic_id' => $topics['Vēsture un Dabaszinības'],
            'question' => 'Fotosintēze ir process, kurā augi ražo skābekli.',
            'correct_answer' => 'True',
            'wrong1' => 'False',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Vēsture un Dabaszinības'],
            'question' => 'Kurš ir cietākais dabā sastopamais minerāls?',
            'correct_answer' => 'Dimants',
            'wrong1' => 'Zelts',
            'wrong2' => 'Dzelzs',
            'wrong3' => 'Kvarcs',
            'wrong4' => 'Varš',
            
        ]);

        Question::create([
            'topic_id' => $topics['Vēsture un Dabaszinības'],
            'question' => 'Kāda ir ūdens virsmas spraiguma īpašība?',
            'correct_answer' => 'Veido uz ūdens virsmas elastīgu “plēvi”',
            'wrong1' => 'Padara ūdeni vieglāku par gaisu',
            'wrong2' => 'Novērš tvaika veidošanos',
            'wrong3' => 'Padara ūdeni sārmainu',
            'wrong4' => 'Novērš siltuma zudumu',
            
        ]);

        Question::create([
            'topic_id' => $topics['Vēsture un Dabaszinības'],
            'question' => 'Ģeoloģijā granīts tiek uzskatīts par magmatisku iezi.',
            'correct_answer' => 'True',
            'wrong1' => 'False',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Vēsture un Dabaszinības'],
            'question' => 'Kurš bija Napoleons Bonaparts?',
            'correct_answer' => 'Francijas imperators',
            'wrong1' => 'Krievijas cars',
            'wrong2' => 'Ķīnas imperators',
            'wrong3' => 'Anglijas karalis',
            'wrong4' => 'Grieķijas valdnieks',
            
        ]);

        Question::create([
            'topic_id' => $topics['Vēsture un Dabaszinības'],
            'question' => 'Kāds bija Senās Ēģiptes rakstības veids?',
            'correct_answer' => 'Hieroglifi',
            'wrong1' => 'Kirilica',
            'wrong2' => 'Latīņu alfabēts',
            'wrong3' => 'Rune raksts',
            'wrong4' => 'Sanskrits',
            
        ]);

        Question::create([
            'topic_id' => $topics['Vēsture un Dabaszinības'],
            'question' => 'Viduslaikos cilvēki Eiropā bieži izmantoja drukas mašīnas.',
            'correct_answer' => 'False',
            'wrong1' => 'True',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Vēsture un Dabaszinības'],
            'question' => 'Kura ir pirmā pasaules lielvalsts?',
            'correct_answer' => 'Romas impērija',
            'wrong1' => 'Ķīnas impērija',
            'wrong2' => 'Vācijas impērija',
            'wrong3' => 'Krievijas impērija',
            'wrong4' => 'Britu impērija',
            
        ]);

        Question::create([
            'topic_id' => $topics['Vēsture un Dabaszinības'],
            'question' => 'Kurš planētas nosaukums nozīmē “Sarkanā planēta”?',
            'correct_answer' => 'Marss',
            'wrong1' => 'Venēra',
            'wrong2' => 'Jupiters',
            'wrong3' => 'Saturns',
            'wrong4' => 'Merkurs',
            
        ]);

        Question::create([
            'topic_id' => $topics['Vēsture un Dabaszinības'],
            'question' => 'Vikingu laikmets saistīts ar Skandināvijas tautām.',
            'correct_answer' => 'True',
            'wrong1' => 'False',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Vēsture un Dabaszinības'],
            'question' => 'Kāda ir cilvēka normālā ķermeņa temperatūra?',
            'correct_answer' => '36,6 °C',
            'wrong1' => '34 °C',
            'wrong2' => '35 °C',
            'wrong3' => '38 °C',
            'wrong4' => '40 °C',
            
        ]);

        Question::create([
            'topic_id' => $topics['Vēsture un Dabaszinības'],
            'question' => 'Kurā slānī atrodas ozona kārta?',
            'correct_answer' => 'Stratosfērā',
            'wrong1' => 'Troposfērā',
            'wrong2' => 'Mezospērā',
            'wrong3' => 'Termosfērā',
            'wrong4' => 'Eksosfērā',
            
        ]);

        // ==================== AUGSTPAPĒŽU KURPES ====================
        Question::create([
            'topic_id' => $topics['Augstpapēžu kurpes'],
            'question' => 'Kurā gadsimtā augstpapēži kļuva populāri Eiropā?',
            'correct_answer' => '16. gs.',
            'wrong1' => '12. gs.',
            'wrong2' => '14. gs.',
            'wrong3' => '18. gs.',
            'wrong4' => '20. gs.',
            
        ]);

        Question::create([
            'topic_id' => $topics['Augstpapēžu kurpes'],
            'question' => 'Pirmās augstpapēžu kurpes tika izgudrotas priekš vīriešiem.',
            'correct_answer' => 'True',
            'wrong1' => 'False',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Augstpapēžu kurpes'],
            'question' => 'Kāds ir visizplatītākais augstums augstpapēžu kurpēm?',
            'correct_answer' => '7-9 cm',
            'wrong1' => '2-5 cm',
            'wrong2' => '10-12 cm',
            'wrong3' => '15 cm',
            'wrong4' => '20+ cm',
            
        ]);

        Question::create([
            'topic_id' => $topics['Augstpapēžu kurpes'],
            'question' => 'Kura krāsa ir visspopulārākā priekš augstpapēžu kurpēm?',
            'correct_answer' => 'Melna',
            'wrong1' => 'Sarkana',
            'wrong2' => 'Balta',
            'wrong3' => 'Zila',
            'wrong4' => 'Zaļa',
            
        ]);

        Question::create([
            'topic_id' => $topics['Augstpapēžu kurpes'],
            'question' => 'Augstpapēži var ietekmēt mugurkaula veselību.',
            'correct_answer' => 'True',
            'wrong1' => 'False',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Augstpapēžu kurpes'],
            'question' => 'Kas ir “stilettos”?',
            'correct_answer' => 'Īpaši plāni un augsti papēži',
            'wrong1' => 'Īsās kurpes bez papēžiem',
            'wrong2' => 'Sandales',
            'wrong3' => 'Sporta kurpes',
            'wrong4' => 'Zābaki',
            
        ]);

        Question::create([
            'topic_id' => $topics['Augstpapēžu kurpes'],
            'question' => 'Augstpapēži tika izmantoti kara laikā zirga jāšanai.',
            'correct_answer' => 'True',
            'wrong1' => 'False',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Augstpapēžu kurpes'],
            'question' => 'Kurš modes dizainers padarīja sarkanos papēžu zoles slavenas?',
            'correct_answer' => 'Christian Louboutin',
            'wrong1' => 'Gucci',
            'wrong2' => 'Christian Dior',
            'wrong3' => 'Versace',
            'wrong4' => 'Dolce & Gabbana',
            
        ]);

        Question::create([
            'topic_id' => $topics['Augstpapēžu kurpes'],
            'question' => 'Kura kurpju forma ir ērtākā?',
            'correct_answer' => 'Kaķpapēži',
            'wrong1' => 'Stilettos',
            'wrong2' => 'Platformas',
            'wrong3' => 'Sandales ar augstiem papēžiem',
            'wrong4' => 'Smailes',
            
        ]);

        Question::create([
            'topic_id' => $topics['Augstpapēžu kurpes'],
            'question' => 'Augstpapēžu kurpes biežāk nēsā sievietes nekā vīrieši.',
            'correct_answer' => 'True',
            'wrong1' => 'False',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Augstpapēžu kurpes'],
            'question' => 'Kāds ir galvenais iemesls, kāpēc daudzi valkā augstpapēžus?',
            'correct_answer' => 'Modes dēļ',
            'wrong1' => 'Ērtība',
            'wrong2' => 'Sports',
            'wrong3' => 'Medicīna',
            'wrong4' => 'Dārzkopība',
            
        ]);

        Question::create([
            'topic_id' => $topics['Augstpapēžu kurpes'],
            'question' => 'Vai augstpapēžu kurpes vienmēr ir neveselīgas kājām?',
            'correct_answer' => 'False',
            'wrong1' => 'True',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Augstpapēžu kurpes'],
            'question' => 'Kas bija viens no pirmajiem augstpapēžu nēsātājiem Francijā?',
            'correct_answer' => 'Luijs XIV',
            'wrong1' => 'Napoleons',
            'wrong2' => 'Henrijs VIII',
            'wrong3' => 'Žans Žaks Ruso',
            'wrong4' => 'Volters',
            
        ]);

        Question::create([
            'topic_id' => $topics['Augstpapēžu kurpes'],
            'question' => 'Augstpapēži vienmēr ir bijuši paredzēti tikai sievietēm.',
            'correct_answer' => 'False',
            'wrong1' => 'True',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Augstpapēžu kurpes'],
            'question' => 'Kurā valstī tika izgudrotas pirmās augstpapēžu kurpes?',
            'correct_answer' => 'Persijā',
            'wrong1' => 'Francijā',
            'wrong2' => 'Itālijā',
            'wrong3' => 'Anglijā',
            'wrong4' => 'Ķīnā',
            
        ]);

        // ==================== MINIONI ====================
        Question::create([
            'topic_id' => $topics['Minioni'],
            'question' => 'Kā sauc galveno Minionu?',
            'correct_answer' => 'Kevin',
            'wrong1' => 'Stjuart',
            'wrong2' => 'Bob',
            'wrong3' => 'Dave',
            'wrong4' => 'Jerry',
            
        ]);

        Question::create([
            'topic_id' => $topics['Minioni'],
            'question' => 'Minioni runā īstā valodā.',
            'correct_answer' => 'False',
            'wrong1' => 'True',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Minioni'],
            'question' => 'Kādā krāsā ir Minioni?',
            'correct_answer' => 'Dzeltenā',
            'wrong1' => 'Zilā',
            'wrong2' => 'Zaļā',
            'wrong3' => 'Melnā',
            'wrong4' => 'Rozā',
            
        ]);

        Question::create([
            'topic_id' => $topics['Minioni'],
            'question' => 'Kurš ir Minionu galvenais ļaundaris?',
            'correct_answer' => 'Gru',
            'wrong1' => 'Dru',
            'wrong2' => 'Vektors',
            'wrong3' => 'Ballthazar Bratt',
            'wrong4' => 'Dr. Nefario',
            
        ]);

        Question::create([
            'topic_id' => $topics['Minioni'],
            'question' => 'Minioni var dzīvot arī bez sava boss.',
            'correct_answer' => 'False',
            'wrong1' => 'True',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Minioni'],
            'question' => 'Kurš uzņēmums radīja Minionus?',
            'correct_answer' => 'Illumination',
            'wrong1' => 'Disney',
            'wrong2' => 'Pixar',
            'wrong3' => 'DreamWorks',
            'wrong4' => 'Warner Bros',
            
        ]);

        Question::create([
            'topic_id' => $topics['Minioni'],
            'question' => 'Kas ir Minionu galvenā nodarbe?',
            'correct_answer' => 'Strādāšana pie ļaundara',
            'wrong1' => 'Dziedāšana',
            'wrong2' => 'Mājas uzkopšana',
            'wrong3' => 'Palīdzēt Dr. Nefario laboratorijā',
            'wrong4' => 'Dejot baletu ar meitenēm',
            
        ]);

        Question::create([
            'topic_id' => $topics['Minioni'],
            'question' => 'Minioni vienmēr ir lojāli savam bossam.',
            'correct_answer' => 'True',
            'wrong1' => 'False',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Minioni'],
            'question' => 'Kurš ir Minionu mīļākais ēdiens?',
            'correct_answer' => 'Banāni',
            'wrong1' => 'Pica',
            'wrong2' => 'Šokolāde',
            'wrong3' => 'Zivis',
            'wrong4' => 'Āboli',
            
        ]);

        Question::create([
            'topic_id' => $topics['Minioni'],
            'question' => 'Cik acis parasti ir vienam Minionam?',
            'correct_answer' => '1 vai 2',
            'wrong1' => '3',
            'wrong2' => '4',
            'wrong3' => 'Minioniem nav acu',
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Minioni'],
            'question' => 'Minioni ir ļoti veikli un gudri.',
            'correct_answer' => 'False',
            'wrong1' => 'True',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Minioni'],
            'question' => 'Kura bija pirmā filma kur parādījās Minioni?',
            'correct_answer' => 'Despicable Me',
            'wrong1' => 'Despicable Me 2',
            'wrong2' => 'Despicable Me 3',
            'wrong3' => 'Minions',
            'wrong4' => 'Minions 2',
            
        ]);
        
        Question::create([
            'topic_id' => $topics['Minioni'],
            'question' => 'Kurā gadā tika izlaista filma “Minions”?',
            'correct_answer' => '2015',
            'wrong1' => '2009',
            'wrong2' => '2010',
            'wrong3' => '2015',
            'wrong4' => '2017',
        ]);

        Question::create([
            'topic_id' => $topics['Minioni'],
            'question' => 'Minioni nemīl ballītes un jautrību.',
            'correct_answer' => 'False',
            'wrong1' => 'True',
            'wrong2' => null,
            'wrong3' => null,
            'wrong4' => null,
            
        ]);

        Question::create([
            'topic_id' => $topics['Minioni'],
            'question' => 'Kuram Minionam pieder rotaļu lācis Tim?',
            'correct_answer' => 'Bob',
            'wrong1' => 'Carl',
            'wrong2' => 'Jerry',
            'wrong3' => 'Tim',
            'wrong4' => 'Larry',
            
        ]);
    }
}