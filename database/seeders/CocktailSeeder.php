<?php

namespace Database\Seeders;
use App\Models\Cocktail;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        $cocktails = array(
            array(
                "nome" => "Margarita",
                "ingredienti" =>"Tequila, Triple Sec, Succo di lime, Sale,Ghiaccio",
                "decorazione" => "Fetta di lime e sale sul bordo del bicchiere",
                "preparazione" => "Bagnare il bordo del bicchiere con una fetta di lime, quindi rivestire con il sale. Agitare la tequila, il Triple Sec e il succo di lime con ghiaccio, filtrare nel bicchiere e decorare con una fetta di lime.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/5noda61589575158.jpg",
            ),
            array(
                "nome" => "Negroni",
                "ingredienti" =>  "Gin, Vermouth rosso, Bitter, Ghiaccio",
                "decorazione" => "Fetta d'arancia",
                "preparazione" => "Mescolare il gin, il vermouth rosso e il bitter con ghiaccio, filtrare in un bicchiere basso con cubetti di ghiaccio e decorare con una fetta d'arancia.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/qgdu971561574065.jpg",
            ),
            array(
                "nome" => "Piña Colada",
                "ingredienti" =>"Rum bianco, Cocco cremoso, Succo d'ananas, Ghiaccio",
                "decorazione" => "Fetta di ananas e ciliegina",
                "preparazione" => "Agitare il rum, il cocco cremoso e il succo d'ananas con ghiaccio, filtrare in un bicchiere alto con cubetti di ghiaccio e decorare con una fetta di ananas e una ciliegina.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/upgsue1668419912.jpg",
            ),
            array(
                "nome" => "Bloody Mary",
                "ingredienti" => "Vodka, Succo di pomodoro,Succo di limone, Salsa Worcestershire, Tabasco, Sale e pepe, Ghiaccio",
                "decorazione" => "Fetta di limone e gambo di sedano",
                "preparazione" => "Agitare tutti gli ingredienti con ghiaccio, filtrare in un bicchiere alto con cubetti di ghiaccio e decorare con una fetta di limone e un gambo di sedano.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/t6caa21582485702.jpg",
            ),
            array(
                "nome" => "Daiquiri",
                "ingredienti" =>"Rum bianco, Sciroppo di zucchero, Succo di lime, Ghiaccio",
                "decorazione" => "Fetta di lime",
                "preparazione" => "Agitare il rum, lo sciroppo di zucchero e il succo di lime con ghiaccio, filtrare in una coppetta da cocktail ghiacciata e decorare con una fetta di lime.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/mrz9091589574515.jpg",
            ),
            array(
                "nome" => "Martini",
                "ingredienti" => "Gin, Vermouth secco, Olive",
                "decorazione" => "Olive",
                "preparazione" => "Mescolare gin e vermouth secco con ghiaccio, filtrare in una coppetta da cocktail e aggiungere le olive come decorazione.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/71t8581504353095.jpg",
            ),
            array(
                "nome" => "Mojito",
                "ingredienti" => "Rum bianco, Menta, Zucchero, Succo di lime, Soda, Ghiaccio",
                "decorazione" => "Rametto di menta e fetta di lime",
                "preparazione" => "Mettere zucchero e menta in un bicchiere alto, pestare delicatamente, aggiungere succo di lime e ghiaccio, versare il rum, completare con soda e mescolare. Decorare con rametto di menta e fetta di lime.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/metwgh1606770327.jpg",
            ),
            array(
                "nome" => "Cosmopolitan",
                "ingredienti" => "Vodka, Triple sec, Succo di lime, Succo di mirtillo rosso",
                "decorazione" => "Fetta di lime",
                "preparazione" => "Agitare la vodka, il triple sec, il succo di lime e il succo di mirtillo rosso con ghiaccio, filtrare in una coppetta da cocktail e decorare con una fetta di lime.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/kpsajh1504368362.jpg",
            ),
            array(
                "nome" => "Sex on the Beach",
                "ingredienti" => "Vodka, Succo di mirtillo rosso, Succo d'arancia, Succo di pesca",
                "decorazione" => "Fetta d'arancia e ciliegia",
                "preparazione" => "Versare la vodka, il succo di mirtillo rosso, il succo d'arancia e il succo di pesca in uno shaker con ghiaccio, agitare bene e filtrare in un bicchiere highball pieno di ghiaccio. Decorare con una fetta d'arancia e una ciliegia.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/fi67641668420787.jpg",
            ),
            array(
                "nome" => "Blue Lagoon",
                "ingredienti" => "Vodka, Blue Curaçao, Succo di limone, Ghiaccio",
                "decorazione" => "Fetta d'arancia e ciliegia",
                "preparazione" => "Versare la vodka e il succo di limone in uno shaker con ghiaccio, agitare bene e filtrare in un bicchiere highball pieno di ghiaccio. Aggiungere delicatamente il Blue Curaçao per creare un effetto a strati. Decorare con una fetta d'arancia e una ciliegia.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/5wm4zo1582579154.jpg",
            ),
            array(
                "nome" => "Mai Tai",
                "ingredienti" => "Rum scuro, Rum bianco, Triple sec, Succo di lime, Sciroppo d'orzo, Sciroppo d'orzo, Succo d'ananas, Ghiaccio",
                "decorazione" => "Fetta d'ananas, ciliegia e foglie di menta",
                "preparazione" => "Mescolare il rum scuro, il rum bianco, il triple sec, il succo di lime, gli sciroppi e il succo d'ananas con ghiaccio. Versare in un bicchiere tiki pieno di ghiaccio e decorare con una fetta d'ananas, una ciliegia e foglie di menta.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/twyrrp1439907470.jpg",
            ),
            array(
                "nome" => "Long Island Iced Tea",
                "ingredienti" => "Vodka, Gin, Rum bianco, Tequila, Triple sec, Succo di limone, Sciroppo di zucchero, Cola, Ghiaccio",
                "decorazione" => "Fetta di limone",
                "preparazione" => "Mescolare vodka, gin, rum bianco, tequila, triple sec, succo di limone e sciroppo di zucchero con ghiaccio in uno shaker. Versare in un bicchiere highball pieno di ghiaccio e completare con cola. Decorare con una fetta di limone.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/nkwr4c1606770558.jpg",
            ),
            array(
                "nome" => "White Russian",
                "ingredienti" => "Vodka, Liquore al caffè, Panna",
                "decorazione" => "Nessuna",
                "preparazione" => "Versare la vodka e il liquore al caffè in un bicchiere old fashioned con ghiaccio, mescolare delicatamente e aggiungere la panna.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/vsrupw1472405732.jpg",
            ),
            array(
                "nome" => "Manhattan",
                "ingredienti" => "Whiskey, Vermouth rosso, Angostura bitter, Ghiaccio",
                "decorazione" => "Ciliegia",
                "preparazione" => "Mescolare il whiskey, il vermouth rosso e l'Angostura bitter con ghiaccio in un mixing glass. Filtrare in una coppetta da cocktail precedentemente raffreddata e decorare con una ciliegia.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/yk70e31606771240.jpg",
            ),
            array(
                "nome" => "Mimosa",
                "ingredienti" => "Champagne, Succo d'arancia",
                "decorazione" => "Fetta d'arancia",
                "preparazione" => "Versare il succo d'arancia in una flûte e completare con champagne freddo.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/juhcuu1504370685.jpg",
            ),
            array(
                "nome" => "Whiskey Sour",
                "ingredienti" => "Whiskey, Succo di limone, Sciroppo di zucchero, Albume d'uovo, Ghiaccio",
                "decorazione" => "Ciliegia e fettina di arancia",
                "preparazione" => "Agitare il whiskey, il succo di limone, lo sciroppo di zucchero e l'albume d'uovo con ghiaccio. Versare in un bicchiere old fashioned pieno di ghiaccio e decorare con una ciliegia e una fettina di arancia.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/hbkfsh1589574990.jpg",
            ), array(
                "nome" => "Caipirinha",
                "ingredienti" => "Cachaça, Lime, Zucchero, Ghiaccio",
                "decorazione" => "Fetta di lime",
                "preparazione" => "Tagliare il lime a pezzetti, aggiungere lo zucchero e pestare bene nel bicchiere. Aggiungere la cachaça e il ghiaccio, mescolare bene e decorare con una fetta di lime.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/jgvn7p1582484435.jpg",
            ),
            array(
                "nome" => "Screwdriver",
                "ingredienti" => "Vodka, Succo d'arancia",
                "decorazione" => "Fetta d'arancia",
                "preparazione" => "Versare la vodka e il succo d'arancia in un bicchiere highball con ghiaccio, mescolare bene e decorare con una fetta d'arancia.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/8xnyke1504352207.jpg",
            ),
            array(
                "nome" => "Blue Hawaiian",
                "ingredienti" => "Rum bianco, Blue Curaçao, Succo d'ananas, Latte di cocco, Ghiaccio",
                "decorazione" => "Fetta d'ananas e ciliegia",
                "preparazione" => "Frullare il rum bianco, il Blue Curaçao, il succo d'ananas e il latte di cocco con ghiaccio fino a ottenere una consistenza cremosa. Versare in un bicchiere tumbler e decorare con una fetta d'ananas e una ciliegia.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/ujoh9x1504882987.jpg",
            ),
            array(
                "nome" => "Dark 'n' Stormy",
                "ingredienti" => "Rum scuro, Ginger beer, Lime",
                "decorazione" => "Fetta di lime",
                "preparazione" => "Versare il rum scuro in un bicchiere alto pieno di ghiaccio, aggiungere la ginger beer e spremere il succo di lime. Mescolare delicatamente e decorare con una fetta di lime.",
                "image_url"=>"https://www.thecocktaildb.com/images/media/drink/t1tn0s1504374905.jpg",
            ),
        );

        $typeIds = Type::all()->pluck('id');

        foreach ($cocktails as $cocktail) {
            $newCocktail = new Cocktail();
        
            $newCocktail->nome = $cocktail['nome'];
            $newCocktail->ingredienti = $cocktail['ingredienti'];
            $newCocktail->decorazione = $cocktail['decorazione'];
            $newCocktail->preparazione= $cocktail['preparazione'];
            $newCocktail->image_url = $cocktail['image_url'];
            $newCocktail->type_id = $typeIds[rand(0, count($typeIds) - 1)];
            $newCocktail->save();
            }

}
}
