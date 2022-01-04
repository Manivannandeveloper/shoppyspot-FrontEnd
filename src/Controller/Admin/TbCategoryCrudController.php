<?php

namespace App\Controller\Admin;

use App\Entity\TbCategory;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TbCategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TbCategory::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
