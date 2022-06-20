<?php

namespace App\Repositories;

use App\Models\Payment;

class PaymentRepository
{
    public function store($request, $transaction, string $status)
    {
        $payment = Payment::create([
            'user_id' => Auth()->user()->id,
            'transaction_id' => $transaction->id,
            'price' => $transaction->room()->get()[0]->price,
            'status' => $status
        ]);

        return $payment;
    }
}
