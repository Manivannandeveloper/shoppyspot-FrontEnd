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
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;


class TbProductsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TbProducts::class;
    }

    
    public function configureCrud(Crud  $crud): Crud 
    {
        return $crud
        ->setPageTitle('index', 'Products')
        ->setEntityLabelInSingular('Product')
        ->setEntityLabelInPlural('Products')
        ->setEntityLabelInSingular(
            fn (?TbProducts $product, ?string $pageName) => $product ? $product->toString() : 'Product'
        );
    }
  
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('product_title'),
            TextField::new('keyword'),
            TextEditorField::new('product_desc'),
            MoneyField::new('product_price')->setCurrency('INR'),
            AssociationField::new('category'),
            IdField::new('product_status'),
            DateTimeField::new('created_at')
        ];
    }
    
}
