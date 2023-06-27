<?php

declare(strict_types=1);

namespace App\ContasTipo;

use App\ContaBancaria;

class ContaPoupanca extends ContaBancaria
{
    const RENDIMENTO = 0.03;
    const TIPO_CONTA = "Conta Poupança";

    public function __construct(
        string $banco,
        string $nome_titular,
        string $numero_agencia,
        string $numero_conta,
        float $saldo
    ) {
        parent::__construct($banco, $nome_titular, $numero_agencia, $numero_conta, $saldo);
    }

    public function obterSaldo(): string
    {
        return 'Seu saldo atual é: R$ ' . number_format(($this->saldo + ($this->saldo * self::RENDIMENTO)), 2, ',', '');
    }
}
