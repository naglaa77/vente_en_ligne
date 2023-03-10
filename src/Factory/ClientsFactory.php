<?php

namespace App\Factory;

use App\Entity\Clients;
use App\Repository\ClientsRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Clients>
 *
 * @method        Clients|Proxy create(array|callable $attributes = [])
 * @method static Clients|Proxy createOne(array $attributes = [])
 * @method static Clients|Proxy find(object|array|mixed $criteria)
 * @method static Clients|Proxy findOrCreate(array $attributes)
 * @method static Clients|Proxy first(string $sortedField = 'id')
 * @method static Clients|Proxy last(string $sortedField = 'id')
 * @method static Clients|Proxy random(array $attributes = [])
 * @method static Clients|Proxy randomOrCreate(array $attributes = [])
 * @method static ClientsRepository|RepositoryProxy repository()
 * @method static Clients[]|Proxy[] all()
 * @method static Clients[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Clients[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Clients[]|Proxy[] findBy(array $attributes)
 * @method static Clients[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Clients[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class ClientsFactory extends ModelFactory
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
            'email' => self::faker()->text(180),
            'nom' => self::faker()->text(255),
            'roles' => [],
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Clients $clients): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Clients::class;
    }
}
