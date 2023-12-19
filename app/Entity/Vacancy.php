<?PHP

namespace App\Entity;

class Vacancy {
  /**
   * Id
   *  @var integer 
  */
  public $id;
  
  /**
   * Vacancy title
   *  @var string 
  */
  public $title;
  
  /**
   * Vacancy description
   *  @var string 
  */
  public $description;

  /**
   * Set active/deactive status
   * @var string(s/n) 
  */
  public $active;

  public $data;
}