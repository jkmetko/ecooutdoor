<?php

use Illuminate\Database\Seeder;

class PonukaTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ponuka')->insert([
            'title' => 'Nákup médií',
            'sub_title' => 'doplniť titulok',
            'icon' => 'cart-news',
            'description' => 'Nákup reklamného času v elektronických médiách (TV, rádio), nákup reklamného priestoru v tlačených médiách (inzercia, časopisy), tvorba mediálneho plánu.',
            'text' => 'Kontaktujte naše <a href="mailto: obchod@ecooutdoor.eu">obchodné oddelenie</a>'
        ]);

        DB::table('ponuka')->insert([
            'title' => 'Produkcia reklamy',
            'sub_title' => 'doplniť titulok',
            'icon' => 'diamond',
            'description' => 'Tlač letákov, vizitek, billboardov, reklamných banerov, produkcia svetelnej aj nesvetelnej reklamy atď. - máme naozaj širokú paletu, a dokážeme vytlačiť čokoľvek.',
            'text' => 'Kontaktujte naše <a href="mailto: obchod@ecooutdoor.eu">obchodné oddelenie</a>'
        ]);

        DB::table('ponuka')->insert([
            'title' => 'Prenájom plôch',
            'sub_title' => 'doplniť titulok',
            'icon' => 'sign-in',
            'description' => 'Outdoorová reklama patrí bezpochyby k jednej z hlavných zložiek ATL reklamnej komunikácie. Najčastejšie býva vnímaná cez billboardy a bigboardy, teda jej najzákladnejšie formy.',
            'text' => 'Kontaktujte naše <a href="mailto: obchod@ecooutdoor.eu">obchodné oddelenie</a>'
        ]);

        DB::table('ponuka')->insert([
            'title' => 'Strategické plánovanie',
            'sub_title' => 'doplniť titulok',
            'icon' => 'pie-chart',
            'description' => 'Na základe našich dlhoročných skúseností a znalosti trhu dokážeme efektívne naplánovať firemnú komunikáciu podľa Vašich požiadaviek.',
            'text' => 'Kontaktujte naše <a href="mailto: obchod@ecooutdoor.eu">obchodné oddelenie</a>'
        ]);

        DB::table('ponuka')->insert([
            'title' => 'Kreatívne riešenia',
            'sub_title' => 'doplniť titulok',
            'icon' => 'paint-brush',
            'description' => 'Vždy existuje spôsob, ako sa odlíšiť. Dokážeme Vám, že aj z nudného zadania sa dá urobiť atraktívna a kreatívna reklama.',
            'text' => 'Kontaktujte naše <a href="mailto: obchod@ecooutdoor.eu">obchodné oddelenie</a>'
        ]);

        DB::table('ponuka')->insert([
            'title' => 'doplniť titulok',
            'sub_title' => 'doplniť titulok',
            'icon' => 'calendar',
            'description' => 'Eventy sú jedinou možnosťou, ako zapôsobiť na klientove alebo zákazníkove emócie priamo v kontakte s ním. A emócie predávajú, tie si pamätáme najdlhšie.',
            'text' => 'Eventy sú jedinou možnosťou, ako zapôsobiť na klientove alebo zákazníkove emócie priamo v kontakte s ním. A emócie predávajú, tie si pamätáme najdlhšie.
                       Na základe mnohoročných skúseností Vám radi pripravíme event na mieru.
                       Kontaktujte naše <a href="mailto: obchod@ecooutdoor.eu">obchodné oddelenie</a>
                       '
        ]);
    }
}
