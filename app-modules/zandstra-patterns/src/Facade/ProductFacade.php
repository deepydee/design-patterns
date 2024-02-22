<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Facade;

class ProductFacade
{
    private array $products = [];

    public function __construct(private string $file)
    {
        $this->compile();
    }

    public function getProducts(): array
    {
       return $this->products;
    }

    public function getProduct(int $id): ?Product
    {
        return $this->products[$id] ?? null;
    }

    private function compile(): void
    {
        $lines = getProductFileLines($this->file);

        $this->products = collect($lines)
            ->mapWithKeys(
                fn (string $line) => [
                    getIDFromLine($line) =>  getProductObjectFromld(
                    getIDFromLine($line),
                    getNameFromLine($line)
                )]
            )
            ->toArray();
    }
}
