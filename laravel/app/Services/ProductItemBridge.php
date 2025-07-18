<?php
/**
 * Copyright ©Uniwizard All rights reserved.
 * See LICENSE_UNIWIZARD for license details.
 * @author: Uniwizard Wojciech Niewiadomski
 */
declare(strict_types=1);

namespace App\Services;

class ProductItemBridge
{
    public function __construct(
        readonly private int $productId,
        private string $itemId {
            get {
                return $this->itemId;
            }
            set {
                $this->itemId = $value;
            }
        },
        private readonly int $quantity,
        private readonly float $price,
        private readonly float $itemPrice,
        private readonly int $itemQuantity,
        private readonly int $itemPriceTotal,
    )
    {}

    public function getProductId(): int
    {
        return $this->productId;
    }

    public function getItemQuantity(): int
    {
        return $this->itemQuantity;
    }

    public function getItemPrice(): float
    {
        return $this->itemPrice;
    }

    public function getItemPriceTotal(): float
    {
        return $this->itemPriceTotal;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
}
