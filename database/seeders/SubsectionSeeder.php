<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubsectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generalSubsections = [
            'Actualités',
            'Littérature',
            'Films, Séries & Animation',
            'BD, comics, mangas & autres',
            'Musique',
            'Jeux Vidéos',
            'Divers'
        ];
        foreach ($generalSubsections as $subsection) {
            DB::table('subsections')-> insert([
                'subsection_name' => $subsection,
                'section_id' => 1
            ]);
        }

        $itSubsections = [
            'Support technique',
            'Développement web',
            'Actualités IT',
            'Divers IT'
        ];
        foreach ($itSubsections as $subsection) {
            DB::table('subsections')-> insert([
                'subsection_name' => $subsection,
                'section_id' => 2
            ]);
        }

        $forumSubsections = [
            'News & Infos',
            'Suggestions'
        ];
        foreach ($forumSubsections as $subsection) {
            DB::table('subsections')-> insert([
                'subsection_name' => $subsection,
                'section_id' => 3
            ]);
        }

        $vipSubsections = [
            'Activités IRL',
            'Discussion Générale',
            'Divers'
        ];
        foreach ($vipSubsections as $subsection) {
            DB::table('subsections')-> insert([
                'subsection_name' => $subsection,
                'section_id' => 4
            ]);
        }

        $moderatorSubsections = [
            'Bans',
            'Règles de modération',
            'Divers'
        ];
        foreach ($moderatorSubsections as $subsection) {
            DB::table('subsections')-> insert([
                'subsection_name' => $subsection,
                'section_id' => 5
            ]);
        }
    }

}
