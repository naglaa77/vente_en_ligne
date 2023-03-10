<?php

namespace App\Factory;

use App\Entity\Produits;
use App\Repository\ProduitsRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Produits>
 *
 * @method        Produits|Proxy create(array|callable $attributes = [])
 * @method static Produits|Proxy createOne(array $attributes = [])
 * @method static Produits|Proxy find(object|array|mixed $criteria)
 * @method static Produits|Proxy findOrCreate(array $attributes)
 * @method static Produits|Proxy first(string $sortedField = 'id')
 * @method static Produits|Proxy last(string $sortedField = 'id')
 * @method static Produits|Proxy random(array $attributes = [])
 * @method static Produits|Proxy randomOrCreate(array $attributes = [])
 * @method static ProduitsRepository|RepositoryProxy repository()
 * @method static Produits[]|Proxy[] all()
 * @method static Produits[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Produits[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Produits[]|Proxy[] findBy(array $attributes)
 * @method static Produits[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Produits[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class ProduitsFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'description' => self::faker()->text(),
            'nom' => self::faker()->text(255),
            'prix' => self::faker()->randomFloat(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Produits $produits): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Produits::class;
    }
}
