<?php

namespace App\Controller\Admin\crud;

use App\Entity\Productreviews;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductreviewsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Productreviews::class;
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
