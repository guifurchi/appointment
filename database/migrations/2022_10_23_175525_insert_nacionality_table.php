<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertNacionalityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('nacionality')->insert([
            ['id' => 1, 'description' => 'Portuguesa'],
            ['id' => 2, 'description' => 'Filipina'],
            ['id' => 3, 'description' => 'Sul-Africano'],
            ['id' => 4, 'description' => 'Zimbabweano'],
            ['id' => 5, 'description' => 'Namibiana'],
            ['id' => 6, 'description' => 'Boliviano'],
            ['id' => 7, 'description' => 'Brasileiro'],
            ['id' => 8, 'description' => 'Chileno'],
            ['id' => 9, 'description' => 'Colombiano'],
            ['id' => 10, 'description' => 'Costarriquenho'],
            ['id' => 11, 'description' => 'Cubano'],
            ['id' => 12, 'description' => 'Dominicano'],
            ['id' => 13, 'description' => 'Equatoriano'],
            ['id' => 14, 'description' => 'Salvadorenho'],
            ['id' => 15, 'description' => 'Granadino'],
            ['id' => 16, 'description' => 'Guatemalteco'],
            ['id' => 17, 'description' => 'Guianês'],
            ['id' => 18, 'description' => 'Guianense'],
            ['id' => 19, 'description' => 'Haitiano'],
            ['id' => 20, 'description' => 'Hondurenho'],
            ['id' => 21, 'description' => 'Jamaicano'],
            ['id' => 22, 'description' => 'Mexicano'],
            ['id' => 23, 'description' => 'Nicaraguense'],
            ['id' => 24, 'description' => 'Panamenho'],
            ['id' => 25, 'description' => 'Paraguaio'],
            ['id' => 26, 'description' => 'Peruano'],
            ['id' => 27, 'description' => 'Portorriquenho'],
            ['id' => 28, 'description' => 'Dominicana'],
            ['id' => 29, 'description' => 'São-cristovense'],
            ['id' => 30, 'description' => 'São-vicentino'],
            ['id' => 31, 'description' => 'Santa-lucense'],
            ['id' => 32, 'description' => 'Surinamês'],
            ['id' => 33, 'description' => 'Trindadense'],
            ['id' => 34, 'description' => 'Uruguaio'],
            ['id' => 35, 'description' => 'Venezuelano'],
            ['id' => 36, 'description' => 'Alemã'],
            ['id' => 37, 'description' => 'Austríac'],
            ['id' => 38, 'description' => 'Belga'],
            ['id' => 39, 'description' => 'Croata'],
            ['id' => 40, 'description' => 'Dinamarquês'],
            ['id' => 41, 'description' => 'Antiguano'],
            ['id' => 42, 'description' => ' Argentino'],
            ['id' => 43, 'description' => 'Bahamense'],
            ['id' => 44, 'description' => 'barbadense'],
            ['id' => 45, 'description' => 'Belizenho'],
            ['id' => 46, 'description' => 'Eslovaco'],
            ['id' => 47, 'description' => 'Esloveno'],
            ['id' => 48, 'description' => 'Espanhol'],
            ['id' => 49, 'description' => 'Francês'],
            ['id' => 50, 'description' => 'Grego'],
            ['id' => 51, 'description' => 'Húngaro'],
            ['id' => 52, 'description' => 'Irlandês'],
            ['id' => 53, 'description' => 'Italiano'],
            ['id' => 54, 'description' => 'Noruego'],
            ['id' => 55, 'description' => 'Holandês'],
            ['id' => 56, 'description' => 'Polonês'],
            ['id' => 57, 'description' => 'Inglês'],
            ['id' => 58, 'description' => 'Galês'],
            ['id' => 59, 'description' => 'Escocês'],
            ['id' => 60, 'description' => 'Romeno'],
            ['id' => 61, 'description' => 'Russo'],
            ['id' => 62, 'description' => 'Sérvio'],
            ['id' => 63, 'description' => 'Sueco'],
            ['id' => 64, 'description' => 'Suíço'],
            ['id' => 65, 'description' => 'Turco'],
            ['id' => 66, 'description' => 'Ucraniano'],
            ['id' => 67, 'description' => 'Americano'],
            ['id' => 68, 'description' => 'Canadense'],
            ['id' => 69, 'description' => 'Angolano'],
            ['id' => 70, 'description' => 'Moçambicano'],
            ['id' => 71, 'description' => 'Sul-africano'],
            ['id' => 72, 'description' => 'Zimbabuense'],
            ['id' => 73, 'description' => 'Argélia'],
            ['id' => 74, 'description' => 'Comorense'],
            ['id' => 75, 'description' => 'Egípcio'],
            ['id' => 76, 'description' => 'Líbio'],
            ['id' => 77, 'description' => 'Marroquino'],
            ['id' => 78, 'description' => 'Ganés'],
            ['id' => 79, 'description' => 'Queniano'],
            ['id' => 80, 'description' => 'Ruandês'],
            ['id' => 81, 'description' => 'Ugandense'],
            ['id' => 82, 'description' => 'Bechuano'],
            ['id' => 83, 'description' => 'Marfinense'],
            ['id' => 84, 'description' => 'Camaronense'],
            ['id' => 85, 'description' => 'Nigeriano'],
            ['id' => 86, 'description' => 'Somali'],
            ['id' => 87, 'description' => 'Australiano'],
            ['id' => 88, 'description' => 'Neozelandês'],
            ['id' => 89, 'description' => 'Afegão'],
            ['id' => 90, 'description' => 'Saudita'],
            ['id' => 91, 'description' => 'Armeno'],
            ['id' => 92, 'description' => 'Bangladesh'],
            ['id' => 93, 'description' => 'Chinês'],
            ['id' => 94, 'description' => 'Norte-coreano'],
            ['id' => 95, 'description' => 'Sul-coreano'],
            ['id' => 96, 'description' => 'Indiano'],
            ['id' => 97, 'description' => 'Indonésio'],
            ['id' => 98, 'description' => 'Iraquiano'],
            ['id' => 99, 'description' => 'Iraniano'],
            ['id' => 100, 'description' => 'Israelita'],
            ['id' => 101, 'description' => 'Japonês'],
            ['id' => 102, 'description' => 'Malaio'],
            ['id' => 103, 'description' => 'Nepalês'],
            ['id' => 104, 'description' => 'Omanense'],
            ['id' => 105, 'description' => 'Paquistanês'],
            ['id' => 106, 'description' => 'Palestino'],
            ['id' => 107, 'description' => 'Qatarense'],
            ['id' => 108, 'description' => 'Sírio'],
            ['id' => 109, 'description' => 'Cingalês'],
            ['id' => 110, 'description' => 'Tailandês'],
            ['id' => 111, 'description' => 'Timorense'],
            ['id' => 112, 'description' => 'Árabe'],
            ['id' => 113, 'description' => 'Vietnamita'],
            ['id' => 114, 'description' => 'Iemenita']

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
