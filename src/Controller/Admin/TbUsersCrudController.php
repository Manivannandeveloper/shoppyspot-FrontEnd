<?php

namespace App\Controller\Admin;

use App\Entity\TbUsers;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class TbUsersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TbUsers::class;
    }

    public function configureCrud(Crud  $crud): Crud 
    {
        return $crud
        ->setPageTitle('index', 'Users')
        ->setEntityLabelInSingular('User')
        ;
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('first_name'),
            TextField::new('last_name'),
            EmailField::new('email'),
            IdField::new('mobile_no')
        ];
    }
    
}
