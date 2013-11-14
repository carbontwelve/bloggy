<?php namespace Bloggy\Repositories\Page;

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
