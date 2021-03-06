<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'id' => '1',
                'title' => 'Кутхины Баты - уникальный природный памятник Камчатки',
                'content' => 'На Камчатке в 4-х километрах от реки Озерная находится уникальный природный памятник Кутхины Баты, представляющий собой обнаженные пемзы, затерявшиеся в густой зелени. С этим уникальным местом мы познакомимся далее.
По легенде, это лодки (похожие на долблёнки или индейские пироги), однажды поставленные мудрым вороном Кутхом для просушки, и забытые им на берегу. У коренного народа Камчатки — ительменов — главный бог это ворон по имени Кутх, а бат — это длинная лодка, то есть если сделать дословный перевод, то получится «Лодки бога Кутхи», и, действительно, пемзы очень похожи на составленные лодочки, которые готовы тронуться в путь по первому призыву своего хозяина.
О Кутхиных Батах Степан Петрович Крашенинников писал так: «…в 9 верстах от вершины Озерной реки, а по которую ее сторону — неизвестно, стоит беловатая утесная гора, которая не иначе кажется, как челноки, поставленные перпендикулярно, чего ради казаки называют ее батовым камнем, а тамошние язычники рассказывают, что бог и творец Камчатки Кутху перед своим отъездом жил там несколько времени, в сих каменных челноках или батах по морю и озеру ездил для промыслу рыбы, а по выходу оттуда поставил челноки на объявленном камне, и для того они в таком почтении от них содержатся, что близко подходить к ним опасаются».
Когда-то давно, когда ландшафт в этой местности менялся, всюду происходили извержения вулканов. Кислые лавы, которые были сильно насыщены газами, вспучивались на поверхность земли и быстро застывали. Так образовывалась пористая горная порода – пемза. Спустя время, это место покрылось землей, и выросли новые леса. Но все меняется. И небольшой ручей начал точить горную породу, а ветер доделал его начинание и открыл для общего взора белые скалы.
Название Кутхины Баты пошло из легенд о главном герое Камчатки – Кутхе. Обычно, Кутх представал перед людьми в облике ворона. По древним верованиям считается, что он участвовал в образовании Камчатской земли и всех коренных народов, которые здесь живут. Существует много сказок на эту тему, а у местных ремесленников можно приобрести фигурки Кутха из дерева, а так же из кости.
Одна из таких легенд гласит, что Кутх был мастерским рыбаком. Он часто любил ловить рыбу в водах Курильского озера, куда в период нереста идет огромное количество лосося. В то время для ловли рыбы использовали деревянные лодки по типу каноэ. После каждой своей рыбалки, он ставил лодку сушиться.
Дел у Кутха было много, нужно было заниматься сотворением мира. И когда в следующий раз, он собирался порыбачить, проходило слишком много времени, и лодка превращалась в камень. Он брал новую лодку и после очередной рыбалки ставил ее рядом на просушку. Так и образовалось удивительное скалистое место – Кутхины баты, издалека напоминающее выстроенные в ряд лодки. А баты — это и есть камчатские каноэ. Высота этого памятника природы достигает ста метров.
Если вы решили идти пешим маршрутом до Курильского озера, непременно загляните сюда. Такого вы нигде на Камчатке больше не увидите. Это причудливое обнажение пенз находится рядом с Курильским озером, если смотреть на карте, то это на северо-востоке. Как то доехать на транспорте сюда не получится, нужно идти пешком. Советуем вам присоединиться к какой-нибудь группе и не совершать трекинг в одиночестве — в этом районе собирается большое количество медведей.',
                'preview' => '/images/12.04.2016/1445347807_1.jpg',
                'meta_description' => 'Кутхины Баты',
                'meta_keywords' => 'памятник природы',
                'public' => '1',
            ],
            [
                'id' => '2',
                'title' => 'О нас',
                'content' => 'Какой то текст, который описывает нашу компанию!! Будет в дальнейшем обновляться',
                'preview' => '',
                'meta_description' => '',
                'meta_keywords' => '',
                'public' => '1',
            ],
            [
                'id' => '3',
                'title' => 'Услуги',
                'content' => 'Какой то текст, который описывает наши услуги!! Будет в дальнейшем обновляться',
                'preview' => '',
                'meta_description' => '',
                'meta_keywords' => '',
                'public' => '1',
            ]
        ]);
    }
}
