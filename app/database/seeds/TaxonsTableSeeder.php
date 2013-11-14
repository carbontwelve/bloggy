<?php

class TaxonsTableSeeder extends Seeder {

	public function run()
	{
        // Wipe the table clean before populating
        DB::table('taxons')->truncate();

        $data = array(
            array(
                'created_user_id'   => 1,
                'taxonomic_unit_id' => 2,
                'name'              => 'Art',
                'description'       => '',
            ),
            array(
                'created_user_id'   => 1,
                'taxonomic_unit_id' => 2,
                'name'              => 'Programming',
                'description'       => '',
            ),
            array(
                'created_user_id'   => 1,
                'taxonomic_unit_id' => 2,
                'name'              => 'Fashion',
                'description'       => '',
            ),
            array(
                'created_user_id'   => 1,
                'taxonomic_unit_id' => 2,
                'name'              => 'PHP Programming',
                'description'       => '',
            ),
            array(
                'created_user_id'   => 1,
                'taxonomic_unit_id' => 2,
                'name'              => 'DOS',
                'description'       => '',
            ),
            array(
                'created_user_id'   => 1,
                'taxonomic_unit_id' => 2,
                'name'              => 'Games',
                'description'       => '',
            ),
            array(
                'created_user_id'   => 1,
                'taxonomic_unit_id' => 2,
                'name'              => 'Linux',
                'description'       => '',
            ),
            array(
                'created_user_id'   => 1,
                'taxonomic_unit_id' => 2,
                'name'              => 'Damn Interesting',
                'description'       => '',
            ),
            array(
                'created_user_id'   => 1,
                'taxonomic_unit_id' => 2,
                'name'              => 'Design',
                'description'       => '',
            ),
            array(
                'created_user_id'   => 1,
                'taxonomic_unit_id' => 2,
                'name'              => 'Minecraft',
                'description'       => '',
            ),
            array(
                'created_user_id'   => 1,
                'taxonomic_unit_id' => 2,
                'name'              => 'Open Source',
                'description'       => '',
            ),
            array(
                'created_user_id'   => 1,
                'taxonomic_unit_id' => 2,
                'name'              => 'Photography',
                'description'       => '',
            ),
            array(
                'created_user_id'   => 1,
                'taxonomic_unit_id' => 2,
                'name'              => 'Sociology',
                'description'       => '',
            )

        );

        /** @var Symfony\Component\Console\Helper\ProgressHelper $progress */
        $progress = $this->command->getHelperSet()->get('progress');
        $progress->start($this->command->getOutput(), count($data));

        /** @var Bloggy\Repositories\Classification\Taxons\Eloquent\TaxonsProvider $provider */
        $provider = Classification::getTaxonProvider();

        foreach ($data as $item)
        {
            $provider->create( $item );
            $progress->advance();
        }

        $progress->finish();
	}

}
