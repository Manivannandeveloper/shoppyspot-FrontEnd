<?php

namespace App\Controller\Admin;

use App\Entity\TbProducts;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class TbProductsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TbProducts::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('product_title'),
            TextField::new('keyword'),
            TextEditorField::new('product_desc'),
            MoneyField::new('product_price')->setCurrency('INR'),
            AssociationField::new('category'),
            DateTimeField::new('created_at')
        ];
    }
    
}
