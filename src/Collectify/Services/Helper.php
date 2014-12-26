<?php

namespace Collectify\Services;

class Helper
{
    public function getLink($name)
    {
        return $name;
    }

    public function getList($type)
    {
        $repositoryClass = sprintf('Collectify\Model\%sRepository', $type);
        $repository = new $repositoryClass();

        $objects = $repository->getAll();

        $html = '';

        foreach($objects as $object)
        {
            $name = $object->name;
            $showLink = sprintf('<a href="app.php?controller=category&action=show&id=%s">Show</a>', $object->id);
            //$editLink = sprintf('<a href="app.php?controller=category&action=edit&slug=%s">Edit</a>', $object->slug);
            $editLink = sprintf('<a href="app.php?controller=category&action=edit&id=%s">Edit</a>', $object->id);
            $removeLink = sprintf('<a href="app.php?controller=category&action=remove&id=%s">Remove</a>', $object->id);
            $html .= <<<EOF
<tr>
    <td>$name</td>
    <td>$showLink - $editLink - $removeLink</td>
</tr>
EOF;
        }

        return $html;
    }
}