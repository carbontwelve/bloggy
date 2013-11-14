<?php

class TaxonomyTableSeeder extends Seeder {

	public function run()
	{
		// Wipe the table clean before populating
		DB::table('taxonomic_units')->truncate();

        $data = array(
            array(
                'created_user_id' => 1,
                'name'            => 'Tags'
            ),
            array(
                'created_user_id' => 1,
                'name'            => 'Category'
            )
        );

        /** @var Symfony\Component\Console\Helper\ProgressHelper $progress */
        $progress = $this->command->getHelperSet()->get('progress');
        $progress->start($this->command->getOutput(), count($data));

        /** @var Bloggy\Repositories\Classification\TaxonomicUnits\Eloquent\TaxonomicUnitProvider $provider */
        $provider = Classification::getTaxonomicUnitsProvider();

        foreach ($data as $item)
        {
            $provider->create( $item );
            $progress->advance();
        }

        $progress->finish();
	}
}
