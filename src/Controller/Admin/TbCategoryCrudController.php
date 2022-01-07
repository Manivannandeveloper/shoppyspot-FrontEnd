<?php

namespace App\Controller\Admin;

use App\Entity\TbCategory;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class TbCategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TbCategory::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('category_name'),
            TextField::new('keyword'),
            TextField::new('description'),
            TextField::new('status')
        ];
    }
}
