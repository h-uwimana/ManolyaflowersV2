<?php

namespace App\Controller\Admin\crud;

use App\Entity\Coupons;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CouponsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Coupons::class;
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
