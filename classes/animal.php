<?
abstract class animal
{
    public abstract function getProduct();
    public abstract function getProductType();
    
    static function create($type)
    {
        switch($type)
        {
            case "COW":
                return new cow();
            case "CHICKEN":
                return new chicken();
        }
    }

    public function getAnimalType()
    {
        return static::class;
    }

}