<php?
src/Repository/MyEntityRepository.php

namespace App\Repository;

use App\Entity\MyEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class MyEntityRepository extends ServiceEntityRepository
{

  public function __construct(ManagerRegistry $registry)
  {
      parent::__construct($registry, MyEntity::class);
  }
  
  // function returns the sum of the column order_total as a float number
  public function SumOrderTotal(): float
  {
    $result = $this->createQueryBuilder('myalias')
        ->select('SUM(myalias.order_total) AS orderTotal')
        ->getQuery()
        ->getSingleScalarResult();
    // dd($result);  // check outcome
    return $result;
  }
  ...
}
