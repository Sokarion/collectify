<?php

namespace Collectify\DataFixtures;

use Collectify\Model\ItemRepository;

class ItemFixtures extends BaseFixtures
{
    public function getType()
    {
        return ItemRepository::TYPE;
    }

    public function getFixtures()
    {
        return array(
            array(
                'title' => 'The Chronic',
                'Author' => 'Dr Dre',
                'editor' => 'Death Row Records',
                'releasedAt' => '1996',
                'gender' => 'RAP',
                'support' => 'CD',
                'category_id' => '1'
            ),
            array(
                'title' => 'Radio Bemba',
                'Author' => 'Manu Chao',
                'editor' => 'Virgin Records',
                'releasedAt' => '2002',
                'gender' => 'Rock',
                'support' => 'Mp3',
                'category_id' => '1'
            ),
            array(
                'title' => 'Back in BlackThe Chronic',
                'Author' => 'AC/DC',
                'editor' => 'ATCO',
                'releasedAt' => '1986',
                'gender' => 'Heavy Metal',
                'support' => 'Cassette Audio',
                'category_id' => '1'
            ),
            array(
                'title' => 'La classe américaine, le grand détournement',
                'Author' => 'Les nuls',
                'editor' => 'Canal+ Cinema',
                'releasedAt' => '1610',
                'gender' => 'Humour',
                'support' => 'Cassette VIdeo',
                'category_id' => '2'
            ),
        );
    }
}