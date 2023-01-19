<?

abstract class Animal
{
    public abstract function getProduct();
    public abstract function getProductType();

    public function getAnimalType()
    {
        return static::class;
    }

}