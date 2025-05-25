<php?
// src/Controller/MyController.php

final class MyController extends AbstractController
{
  #[Route(name: 'myIndexPath', methods: ['GET'])]
  public function myIndex(MyEntityRepository $myEntityRepository): Response
  {
    return $this->render('my_index.html.twig', ['colOrderTotalSum' => $myEntityRepository->SumOrderTotal(),]);
  }
}
