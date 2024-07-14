<?php

declare(strict_types=1);

namespace App\Entity;

use App\Enums\InvoiceStatus;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('InvoiceTable2')]

class Invoice
{
  #[Id]
  #[Column, GeneratedValue]
  private int $id;

  #[Column(type: Types::DECIMAL, precision: 10, scale: 2)]
  private float $amount;

  #[Column(name: 'invoice_number')]
  private string $invoiceNumber;

  #[Column]
  private InvoiceStatus $status;

  #[Column(name: 'created_at')]
  private DateTime $createdAt;

  #[OneToMany(targetEntity: InvoiceItem::class, mappedBy: 'invoice')]
  private Collection $items;

  public function __construct()
  {
    $this->items = new ArrayCollection();
  }


  public function getId(): int
  {
    return $this->id;
  }


  public function getAmount(): float
  {
    return $this->amount;
  }


  public function setAmount(float $amount): self
  {
    $this->amount = $amount;
    return $this;
  }


  public function getInvoiceNumber(): string
  {
    return $this->invoiceNumber;
  }

  public function setInvoiceNumber(string $invoiceNumber): self
  {
    $this->invoiceNumber = $invoiceNumber;
    return $this;
  }


  public function getStatus(): InvoiceStatus
  {
    return $this->status;
  }


  public function setStatus(InvoiceStatus $status): self
  {
    $this->status = $status;
    return $this;
  }


  public function getCreatedAt(): DateTime
  {
    return $this->createdAt;
  }


  public function setCreatedAt(DateTime $createdAt): self
  {
    $this->createdAt = $createdAt;
    return $this;
  }

  public function getItems(): Collection
  {
    return $this->items;
  }


  /**
   * Summary of addItem
   * @param \App\Entity\InvoiceItem $item
   * @return \App\Entity\Invoice
   */
  public function addItem(InvoiceItem $item): self
  {
    $item->setInvoice($this);
    $this->items->add($item);
    return $this;
  }
}
