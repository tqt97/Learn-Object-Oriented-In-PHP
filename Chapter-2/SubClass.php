<?php

declare(strict_types=1);
class SubClass extends BaseClass
{
    public function getParentProtectedProperty(): string
    {
        return $this->getProtectedProperty();
    }

    public function getParentPrivateProperty()
    {
        return $this->privateProperty; // error because private property is not inherited
    }
}
