<?php

namespace App\Controller\Admin\crud;

use App\Entity\Ticketresponses;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TicketresponsesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ticketresponses::class;
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
