<?php

namespace App\Controller\Admin\crud;

use App\Entity\Orderitems;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class OrderitemsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Orderitems::class;
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
