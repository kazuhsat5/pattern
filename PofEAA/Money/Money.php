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
    /**
     * 額
     * @var integer
     */
    private $_amount;

    /**
     * 通貨
     * @var string
     */
    private $_currency;

    /**
     * コンストラクタ
     *
     * @param integer  $amount    額
     * @param string   $currency  通貨
     * @throw \InvalidArgumentException 第一引数に数値以外が指定されていた場合
     */
    public function __construct($amount, $currency)
    {
        // 引数$amountが数値ではなかった場合
        if ( ! is_numeric($amount)) {
            // 不正パラメータの例外をスロー
            throw new \InvalidArgumentException(sprintf('invalid argument. [money=%s]', $amount));
        }

        $this->_amount = (integer) $amount;
        $this->_currency = (String) $currency;
    }

    /**
     * 等価性確認
     *
     * @param Money $money マネーオブジェクト
     * @return bool 等価性(trueで等価)
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
