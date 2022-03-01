<?php

namespace App\Controller\Admin;

use App\Entity\TbProducts;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class TbProductsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TbProducts::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
        ->add(Crud::PAGE_INDEX, Action::DETAIL);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
        ->add('product_title')
        ->add('product_price');
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
            IdField::new('product_price'),
            AssociationField::new('category'),
            AssociationField::new('productSize'),
            AssociationField::new('productColor'),
            IdField::new('product_status'),
            IdField::new('product_quantity'),
            TextField::new('product_discount'),
            IdField::new('product_instoct'),
            ImageField::new('image')
            ->setBasePath('uploads/files')
            ->setUploadDir('public/uploads/files')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
            DateTimeField::new('created_at')
        ];
    }
    
}
