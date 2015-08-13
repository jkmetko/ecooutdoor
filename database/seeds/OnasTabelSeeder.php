<?php

use Illuminate\Database\Seeder;

class OnasTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('onas')->insert([
            'title' => 'Marketing a reklama je náš svet',
            'text' => 'Spoločnosť Ecooutdoor a.s. vzikla ako mediálna a marketingová spoločnosť, poskytujúca svojim klientom profesionálne služby.<br />Zúročujeme mnohoročné skúsenosti našich zakladateľov a zamestnancov, či už v oblasti nákupu médií, strategického plánovania, kreatívnych riešení, grafických služieb, ale aj marketingového poradenstva, promoaktivít a eventových služieb.',
            'quote' => 'Marketing a reklama je náš svet, v ktorom žijeme každý deň<br />a cítime sa v ňom ako ryba vo vode',
        ]);
    }
}
