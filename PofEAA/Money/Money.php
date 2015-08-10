<?php

/**
 * Money
 * マネーオブジェクト
 *
 * @author kazuhsat <kazuhsat555@gmail.com>
 * @copyright Copyright (c) 2015, kazuhsat
 */

namespace Money;

class Money
{
    private $_amount;
    private $_currency;

    /**
     * コンストラクタ
     *
     * @param integer  $amount    額
     * @param String   $currency  通貨
     * @throw \InvalidArgumentException 第一引数に数値以外が指定されていた場合
     */
    public function __construct($amount, $currency)
    {
        if ( ! is_numeric($amount)) {
            throw new \Exception(sprintf('invalid argument. [money=%s]', $amount));
        }

        $this->_amount = (integer) $amount;
        $this->_currency = (String) $currency;
    }

    /**
     * 等価性
     *
     * @param Money $money Moneyオブジェクト
     * @return boolean 等価性(trueで等価)
     */
    public function equals(Money $money)
    {
        return $this->_amount === $money->getAmount()
            && $this->_currency === $money->getCurrency();
    }

    public function getAmount()
    {
        return $this->_amount;
    }

    public function getCurrency()
    {
        return $this->_currency;
    }
}
