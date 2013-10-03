<?php namespace Bloggy\Repositories;

class DbPageRepository implements PageRepositoryInterface
{

    public function all()
    {
        return 'everything';
    }

    public function find($id)
    {
        return 'found';
    }

}
