<php?
// src/Controller/MyController.php

namespace App\Controller;

use App\Repository\MyEntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MyController extends AbstractController
{
  #[Route(name: 'myIndexPath', methods: ['GET'])]
  public function myIndex(MyEntityRepository $myEntityRepository): Response
  {
    return $this->render('my_index.html.twig', ['colOrderTotalSum' => $myEntityRepository->SumOrderTotal(),]);
  }
  ...
}
