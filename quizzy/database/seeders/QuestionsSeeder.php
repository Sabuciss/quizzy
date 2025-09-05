<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $questions = [
            // ==================== GRĀMATAS ====================
            [
                'topic' => 'Grāmatas',
                'question' => 'Kurš sarakstīja “Romeo un Džuljeta”?',
                'options' => json_encode(['Dante Alighieri', 'Viljams Šekspīrs', 'Džons Miltons', 'Homērs', 'Čārlzs Dikens']),
                'answer' => 'Viljams Šekspīrs',
            ],
            [
                'topic' => 'Grāmatas',
                'question' => 'Kurš sarakstīja “Harijs Poters”?',
                'options' => json_encode(['J.R.R. Tolkins', 'J.K. Roulinga', 'Džordžs Mārtins', 'Stefānija Meijere', 'Džeina Ostina']),
                'answer' => 'J.K. Roulinga',
            ],
            [
                'topic' => 'Grāmatas',
                'question' => 'E-grāmatas nevar lasīt bez interneta pieslēguma.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'False',
            ],
            [
                'topic' => 'Grāmatas',
                'question' => 'Kura no šīm grāmatām ir klasika?',
                'options' => json_encode(['“Sprīdītis”', '“Ikabogs”', '“Mārlijs un kaķēni”', '“Aitas”', '“Latviešu šausmu stāsti”']),
                'answer' => '“Sprīdītis”',
            ],
            [
                'topic' => 'Grāmatas',
                'question' => 'Vai patiesi, ka daiļliteratūrā ir tikai romāni?',
                'options' => json_encode(['True', 'False']),
                'answer' => 'False',
            ],
            [
                'topic' => 'Grāmatas',
                'question' => 'Kā sauc slaveno detektīvu no Artura Konana Doila stāstiem?',
                'options' => json_encode(['Hercule Poirot', 'Džons Vatsons', 'Sherlock Holmes', 'Augusts Dupins', 'Inspektors Lekstrads']),
                'answer' => 'Sherlock Holmes',
            ],
            [
                'topic' => 'Grāmatas',
                'question' => 'Kurš no šiem autoriem sarakstīja “Sprīdītis”?',
                'options' => json_encode(['Andrejs Upīts', 'Anna Brigadere', 'Jānis Kalniņš', 'Aspazija', 'Jānis Čakste']),
                'answer' => 'Anna Brigadere',
            ],
            [
                'topic' => 'Grāmatas',
                'question' => '“Mazais princis” ir sarakstīts franču valodā.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'True',
            ],
            [
                'topic' => 'Grāmatas',
                'question' => 'Kurš sarakstīja “Dzīvnieku ferma”?',
                'options' => json_encode(['Džordžs Orvels', 'Frānsiss Skots Ficdžeralds', 'Aldous Huxley', 'Stīvens Kings', 'Daniels Defo']),
                'answer' => 'Džordžs Orvels',
            ],
            [
                'topic' => 'Grāmatas',
                'question' => 'Kurš darbs ir sarakstīts kā eposs?',
                'options' => json_encode(['“Odiseja”', '“Romeo un Džuljeta”', '“Daugava”', '“Zelta zirgs”', '“Mazais princis”']),
                'answer' => '“Odiseja”',
            ],
            [
                'topic' => 'Grāmatas',
                'question' => '“1984” ir zinātniskās fantastikas žanra grāmata.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'True',
            ],
            [
                'topic' => 'Grāmatas',
                'question' => 'Kurš no šiem ir bērnu literatūras autors?',
                'options' => json_encode(['Astrīda Lindgrēne', 'Džoiss Kerols', 'Stīvens Kings', 'Suzēna Kolinsa', 'Nora Robertsa']),
                'answer' => 'Astrīda Lindgrēne',
            ],
            [
                'topic' => 'Grāmatas',
                'question' => 'Kurš no šiem darbiem nav bērnu literatūra?',
                'options' => json_encode(['“Harijs Poters”', '“Mazais princis”', '“Alise Brīnumzemē”', '“Don Kihots”', '“Pīters Pens”']),
                'answer' => '“Don Kihots”',
            ],
            [
                'topic' => 'Grāmatas',
                'question' => 'Bibliotēkas ir tikai vecu grāmatu glabāšanas vietas.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'False',
            ],
            [
                'topic' => 'Grāmatas',
                'question' => 'Kurš no šiem nav romāns?',
                'options' => json_encode(['“Zaļā zeme”', '“Trīs vella kalpi”', '“Lāčplēsis”', '“Mērnieku laiki”', '“Ugunszīme”']),
                'answer' => '“Lāčplēsis”',
            ],

            // ==================== SPORTS ====================
            [
                'topic' => 'Sports',
                'question' => 'Cik spēlētāju katrā komandā vienlaikus atrodas uz laukuma basketbolā?',
                'options' => json_encode(['5', '6', '7', '8', '9']),
                'answer' => '5',
            ],
            [
                'topic' => 'Sports',
                'question' => 'Olimpiskās spēles notiek katru gadu.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'False',
            ],
            [
                'topic' => 'Sports',
                'question' => 'Ko nozīmē “Grand Slam” tenisā?',
                'options' => json_encode(['Rekords punktos', 'Vissvarīgākais sets', 'Divkārša uzvara', 'Četri lielākie turnīri', 'Pasaules kauss']),
                'answer' => 'Četri lielākie turnīri',
            ],
            [
                'topic' => 'Sports',
                'question' => 'Kurš ir populārākais sporta veids pasaulē?',
                'options' => json_encode(['Beisbols', 'Basketbols', 'Futbols', 'Hokejs', 'Regbijs']),
                'answer' => 'Futbols',
            ],
            [
                'topic' => 'Sports',
                'question' => 'Maratons ir skrējiens uz 42,195 km.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'True',
            ],
            [
                'topic' => 'Sports',
                'question' => 'Kurš sporta veids nācis no Japānas?',
                'options' => json_encode(['Bokss', 'Futbols', 'Basketbols', 'Teniss', 'Karatē']),
                'answer' => 'Karatē',
            ],
            [
                'topic' => 'Sports',
                'question' => 'Kāds sporta veids ir tenisāls?',
                'options' => json_encode(['Ar raketi un bumbiņu', 'Ar pludmales bumbu', 'Ar lecamauklu', 'Ar nūju un bumbiņu', 'Ar nūju un ripu']),
                'answer' => 'Ar raketi un bumbiņu',
            ],
            [
                'topic' => 'Sports',
                'question' => 'Hokejs tiek spēlēts tikai ziemā.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'False',
            ],
            [
                'topic' => 'Sports',
                'question' => 'Ko nozīmē “hat-trick” futbolā?',
                'options' => json_encode(['Trīs kartītes vienā spēlē', 'Trīs vārti vienā spēlē', 'Trīs piespēles', 'Trīs aizsargi laukumā', 'Trīs soda metieni']),
                'answer' => 'Trīs vārti vienā spēlē',
            ],
            [
                'topic' => 'Sports',
                'question' => 'Kāds ir olimpisko spēļu moto?',
                'options' => json_encode(['“Spēlēt godīgi”', '“Cīņa par zeltu”', '“Visi vienādi”', '“Ātrāk, augstāk, spēcīgāk”', '“Sports - veselība”']),
                'answer' => '“Ātrāk, augstāk, spēcīgāk”',
            ],
            [
                'topic' => 'Sports',
                'question' => 'Olimpiskajās spēlēs ir arī šaušanas sacensības.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'True',
            ],
            [
                'topic' => 'Sports',
                'question' => 'Kurš no šiem ir slavens futbolists?',
                'options' => json_encode(['Lebrons Džeimss', 'Neimars', 'Rodžers Federers', 'Kevins Durants', 'Taigers Vudss']),
                'answer' => 'Neimars',
            ],
            [
                'topic' => 'Sports',
                'question' => 'Kura valsts pirmā rīkoja moderno olimpisko spēļu sacensības?',
                'options' => json_encode(['Francija', 'ASV', 'Grieķija', 'Vācija', 'Spānija']),
                'answer' => 'Grieķija',
            ],
            [
                'topic' => 'Sports',
                'question' => 'Peldēšana ir sporta veids, kurā mēra laiku un distanci.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'True',
            ],
            [
                'topic' => 'Sports',
                'question' => 'Kāds sporta veids ir džudo?',
                'options' => json_encode(['Skvošs', 'Fitness', 'Spēka trīscīņa', 'Cīņas sports', 'Mākslas vingrošana']),
                'answer' => 'Cīņas sports',
            ],

            // ==================== VĒSTURE UN DABASZINĪBAS ====================
            [
                'topic' => 'Vēsture un Dabaszinības',
                'question' => 'Latvijas neatkarības proklamēšana notika 1918. gadā.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'True',
            ],
            [
                'topic' => 'Vēsture un Dabaszinības',
                'question' => 'Kurš bija Senās Ēģiptes valdnieks?',
                'options' => json_encode(['Cēzars', 'Napoleons', 'Faraons', 'Aleksandrs Lielais', 'Ģingishans']),
                'answer' => 'Faraons',
            ],
            [
                'topic' => 'Vēsture un Dabaszinības',
                'question' => 'Kurš atklāja Ameriku 1492. gadā?',
                'options' => json_encode(['Magelāns', 'Kolumbs', 'Kuks', 'Vasko da Gama', 'Āmudsens']),
                'answer' => 'Kolumbs',
            ],
            [
                'topic' => 'Vēsture un Dabaszinības',
                'question' => 'Fotosintēze ir process, kurā augi ražo skābekli.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'True',
            ],
            [
                'topic' => 'Vēsture un Dabaszinības',
                'question' => 'Kurš ir cietākais dabā sastopamais minerāls?',
                'options' => json_encode(['Zelts', 'Dimants', 'Dzelzs', 'Kvarcs', 'Varš']),
                'answer' => 'Dimants',
            ],
            [
                'topic' => 'Vēsture un Dabaszinības',
                'question' => 'Kāda ir ūdens virsmas spraiguma īpašība?',
                'options' => json_encode(['Padara ūdeni vieglāku par gaisu', 'Veido uz ūdens virsmas elastīgu “plēvi”', 'Novērš tvaika veidošanos', 'Padara ūdeni sārmainu', 'Novērš siltuma zudumu']),
                'answer' => 'Veido uz ūdens virsmas elastīgu “plēvi”',
            ],
            [
                'topic' => 'Vēsture un Dabaszinības',
                'question' => 'Ģeoloģijā granīts tiek uzskatīts par magmatisku iezi.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'True',
            ],
            [
                'topic' => 'Vēsture un Dabaszinības',
                'question' => 'Kurš bija Napoleons Bonaparts?',
                'options' => json_encode(['Krievijas cars', 'Francijas imperators', 'Ķīnas imperators', 'Anglijas karalis', 'Grieķijas valdnieks']),
                'answer' => 'Francijas imperators',
            ],
            [
                'topic' => 'Vēsture un Dabaszinības',
                'question' => 'Kāds bija Senās Ēģiptes rakstības veids?',
                'options' => json_encode(['Kirilica', 'Latīņu alfabēts', 'Hieroglifi', 'Rune raksts', 'Sanskrits']),
                'answer' => 'Hieroglifi',
            ],
            [
                'topic' => 'Vēsture un Dabaszinības',
                'question' => 'Viduslaikos cilvēki Eiropā bieži izmantoja drukas mašīnas.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'False',
            ],
            [
                'topic' => 'Vēsture un Dabaszinības',
                'question' => 'Kura ir pirmā pasaules lielvalsts?',
                'options' => json_encode(['Romas impērija', 'Ķīnas impērija', 'Vācijas impērija', 'Krievijas impērija', 'Britu impērija']),
                'answer' => 'Romas impērija',
            ],
            [
                'topic' => 'Vēsture un Dabaszinības',
                'question' => 'Kurš planētas nosaukums nozīmē “Sarkanā planēta”?',
                'options' => json_encode(['Venēra', 'Marss', 'Jupiters', 'Saturns', 'Merkurs']),
                'answer' => 'Marss',
            ],
            [
                'topic' => 'Vēsture un Dabaszinības',
                'question' => 'Vikingu laikmets saistīts ar Skandināvijas tautām.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'True',
            ],
            [
                'topic' => 'Vēsture un Dabaszinības',
                'question' => 'Kāda ir cilvēka normālā ķermeņa temperatūra?',
                'options' => json_encode(['34 °C', '35 °C', '36,6 °C', '38 °C', '40 °C']),
                'answer' => '36,6 °C',
            ],
            [
                'topic' => 'Vēsture un Dabaszinības',
                'question' => 'Kurā slānī atrodas ozona kārta?',
                'options' => json_encode(['Troposfērā', 'Stratosfērā', 'Mezospērā', 'Termosfērā', 'Eksosfērā']),
                'answer' => 'Stratosfērā',
            ],

            // ==================== AUGSTPAPĒŽU KURPES ====================
            [
                'topic' => 'Augstpapēžu kurpes',
                'question' => 'Kurā gadsimtā augstpapēži kļuva populāri Eiropā?',
                'options' => json_encode(['12. gs.', '14. gs.', '16. gs.', '18. gs.', '20. gs.']),
                'answer' => '16. gs.',
            ],
            [
                'topic' => 'Augstpapēžu kurpes',
                'question' => 'Pirmās augstpapēžu kurpes tika izgudrotas priekš vīriešiem.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'True',
            ],
            [
                'topic' => 'Augstpapēžu kurpes',
                'question' => 'Kāds ir visizplatītākais augstums augstpapēžu kurpēm?',
                'options' => json_encode(['2-5 cm', '7-9 cm', '10-12 cm', '15 cm', '20+ cm']),
                'answer' => '7-9 cm',
            ],
            [
                'topic' => 'Augstpapēžu kurpes',
                'question' => 'Kura krāsa ir visspopulārāka priekš augstpapēžu kurpēm?',
                'options' => json_encode(['Sarkana', 'Balta', 'Melna', 'Zila', 'Zaļa']),
                'answer' => 'Melna',
            ],
            [
                'topic' => 'Augstpapēžu kurpes',
                'question' => 'Augstpapēži var ietekmēt mugurkaula veselību.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'True',
            ],
            [
                'topic' => 'Augstpapēžu kurpes',
                'question' => 'Kas ir “stilettos”?',
                'options' => json_encode(['Īpaši plāni un augsti papēži', 'Īsās kurpes bez papēžiem', 'Sandales', 'Sporta kurpes', 'Zābaki']),
                'answer' => 'Īpaši plāni un augsti papēži',
            ],
            [
                'topic' => 'Augstpapēžu kurpes',
                'question' => 'Augstpapēži tika izmantoti kara laikā zirga jāšanai.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'True',
            ],
            [
                'topic' => 'Augstpapēžu kurpes',
                'question' => 'Kurš modes dizainers padarīja sarkanos papēžu zoles slavenas?',
                'options' => json_encode(['Gucci', 'Christian Dior', 'Christian Louboutin', 'Versace', 'Dolce & Gabbana']),
                'answer' => 'Christian Louboutin',
            ],
            [
                'topic' => 'Augstpapēžu kurpes',
                'question' => 'Kura kurpju forma ir ērtākā?',
                'options' => json_encode(['Stilettos', 'Platformas', 'Kaķpapēži', 'Sandales ar augstiem papēžiem', 'Smailes']),
                'answer' => 'Kaķpapēži',
            ],
            [
                'topic' => 'Augstpapēžu kurpes',
                'question' => 'Augstpapēžu kurpes biežāk nēsā sievietes nekā vīrieši.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'True',
            ],
            [
                'topic' => 'Augstpapēžu kurpes',
                'question' => 'Kāds ir galvenais iemesls, kāpēc daudzi valkā augstpapēžus?',
                'options' => json_encode(['Ērtība', 'Modes dēļ', 'Sports', 'Medicīna', 'Dārzkopība']),
                'answer' => 'Modes dēļ',
            ],
            [
                'topic' => 'Augstpapēžu kurpes',
                'question' => 'Vai augstpapēžu kurpes vienmēr ir neveselīgas kājām?',
                'options' => json_encode(['True', 'False']),
                'answer' => 'False',
            ],
            [
                'topic' => 'Augstpapēžu kurpes',
                'question' => 'Kas bija viens no pirmajiem augstpapēžu nēsātājiem Francijā?',
                'options' => json_encode(['Luijs XIV', 'Napoleons', 'Henrijs VIII', 'Žans Žaks Ruso', 'Volters']),
                'answer' => 'Luijs XIV',
            ],
            [
                'topic' => 'Augstpapēžu kurpes',
                'question' => 'Augstpapēži vienmēr ir bijuši paredzēti tikai sievietēm.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'False',
            ],
            [
                'topic' => 'Augstpapēžu kurpes',
                'question' => 'Kurā valstī tika izgudrotas pirmās augstpapēžu kurpes?',
                'options' => json_encode(['Francijā', 'Itālijā', 'Persijā', 'Anglijā', 'Ķīnā']),
                'answer' => 'Persijā',
            ],

            // ==================== MINIONI ====================
            [
                'topic' => 'Minioni',
                'question' => 'Kā sauc galveno Minionu?',
                'options' => json_encode(['Kevin', 'Stjuart', 'Bob', 'Dave', 'Jerry']),
                'answer' => 'Kevin',
            ],
            [
                'topic' => 'Minioni',
                'question' => 'Minioni runā īstā valodā.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'False',
            ],
            [
                'topic' => 'Minioni',
                'question' => 'Kādā krāsā ir Minioni?',
                'options' => json_encode(['Dzeltenā', 'Zilā', 'Zaļā', 'Melnā', 'Rozā']),
                'answer' => 'Dzeltenā',
            ],
            [
                'topic' => 'Minioni',
                'question' => 'Kurš ir Minionu galvenais ļaundaris?',
                'options' => json_encode(['Dru', 'Gru', 'Vektors', 'Ballthazar Bratt', 'Dr. Nefario']),
                'answer' => 'Gru',
            ],
            [
                'topic' => 'Minioni',
                'question' => 'Minioni var dzīvot arī bez sava boss.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'False',
            ],
            [
                'topic' => 'Minioni',
                'question' => 'Kurš uzņēmums radīja Minionus?',
                'options' => json_encode(['Disney', 'Pixar', 'Illumination', 'DreamWorks', 'Warner Bros']),
                'answer' => 'Illumination',
            ],
            [
                'topic' => 'Minioni',
                'question' => 'Kas ir Minionu galvenā nodarbe?',
                'options' => json_encode(['Dziedāšana', 'Strādāšana pie ļaundara', 'Mājas uzkopšana', 'Palīdzēt Dr. Nefario laboratorijā', 'Dejot baletu ar meitenēm']),
                'answer' => 'Strādāšana pie ļaundara',
            ],
            [
                'topic' => 'Minioni',
                'question' => 'Minioni vienmēr ir lojāli savam bossam.',
                'options' => json_encode(['True', 'False',]),
                'answer' => 'True',
            ],
            [
                'topic' => 'Minioni',
                'question' => 'Kurš ir Minionu mīļākais ēdiens?',
                'options' => json_encode(['Banāni', 'Pica', 'Šokolāde', 'Zivis', 'Āboli']),
                'answer' => 'Banāni',
            ],
            [
                'topic' => 'Minioni',
                'question' => 'Cik acis parasti ir vienam Minionam?',
                'options' => json_encode(['1 vai 2', '3', '4', 'Minioniem nav acu']),
                'answer' => '1 vai 2',
            ],
            [
                'topic' => 'Minioni',
                'question' => 'Minioni ir ļoti veikli un gudri.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'False',
            ],
            [
                'topic' => 'Minioni',
                'question' => 'Kura bija pirmā filma kur parādījās Minioni?',
                'options' => json_encode(['Despicable Me', 'Despicable Me 2', 'Despicable Me 3', 'Minions', 'Minions 2']),
                'answer' => 'Despicable Me',
            ],
            [
                'topic' => 'Minioni',
                'question' => 'Kurā gadā tika izlaista filma “Minions”?',
                'options' => json_encode(['2009', '2010', '2015', '2017', '2018']),
                'answer' => 'Luijs XIV',
            ],
            [
                'topic' => 'Minioni',
                'question' => 'Minioni nemīl ballītes un jautrību.',
                'options' => json_encode(['True', 'False']),
                'answer' => 'False',
            ],
            [
                'topic' => 'Minioni',
                'question' => 'Kuram Minionam pieder rotaļu lācis Tim?',
                'options' => json_encode(['Carl', 'Jerry', 'Tim', 'Bob', 'Larry']),
                'answer' => 'Bob',
            ],
        ];

        DB::table('questions')->insert($questions);
    }
}
