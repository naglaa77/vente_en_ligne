<?php

namespace App\Factory;

use App\Entity\Commandes;
use App\Repository\CommandesRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Commandes>
 *
 * @method        Commandes|Proxy create(array|callable $attributes = [])
 * @method static Commandes|Proxy createOne(array $attributes = [])
 * @method static Commandes|Proxy find(object|array|mixed $criteria)
 * @method static Commandes|Proxy findOrCreate(array $attributes)
 * @method static Commandes|Proxy first(string $sortedField = 'id')
 * @method static Commandes|Proxy last(string $sortedField = 'id')
 * @method static Commandes|Proxy random(array $attributes = [])
 * @method static Commandes|Proxy randomOrCreate(array $attributes = [])
 * @method static CommandesRepository|RepositoryProxy repository()
 * @method static Commandes[]|Proxy[] all()
 * @method static Commandes[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Commandes[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Commandes[]|Proxy[] findBy(array $attributes)
 * @method static Commandes[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Commandes[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class CommandesFactory extends ModelFactory
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
            'client' => ClientsFactory::new(),
            'dateCommande' => self::faker()->dateTimeBetween('-700 days', '-1 days'),
            'produit' => ProduitsFactory::new(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Commandes $commandes): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Commandes::class;
    }
}
