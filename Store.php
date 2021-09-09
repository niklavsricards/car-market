<?php

class Store
{
    private array $items;

    public function __construct(array $items)
    {
        foreach ($items as $item)
        {
            $this->add($item);
        }
    }

    private function add(StoreItem $item): void
    {
        $this->items[] = $item;
    }

    public function getAllItems(): array
    {
        return $this->items;
    }

    public function showAllItems(): void
    {
        foreach ($this->getAllItems() as $item) {
            $item->displayStoreItem();
        }
    }
}