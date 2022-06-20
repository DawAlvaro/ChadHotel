<?php

namespace App\Repositories;

use App\Models\Room;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;

class TransactionRepository
{
    public function store($request, User $customer, Room $room)
    {
        $transaction = Transaction::create([
            'user_id' => $customer->id,
            'room_id' => $room->id,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'status' => 'Reservation'
        ]);

        return $transaction;
    }

    public function getTransaction($request)
    {
        $transactions = Transaction::with('user', 'room', 'customer')->where('check_out', '>=', Carbon::now());
        
        if (!empty($request->search)) {
            $transactions = $transactions->where('id', '=', $request->search);
        }

        if (auth()->user()->role == 'Customer') {
            $transactions = $transactions
                ->join('users', 'transactions.user_id', '=', 'users.id')
                ->where('users.id', '=', auth()->user()->id);
        }
        
        $transactions = $transactions->orderBy('check_out', 'ASC')->orderBy('transactions.id', 'DESC')->paginate(20);
        $transactions->appends($request->all());
        
        return $transactions;
    }

    public function getTransactionExpired($request)
    {
        $transactionsExpired = Transaction::with('user', 'room', 'customer')->where('check_out', '<', Carbon::now());

        if (!empty($request->search)) {
            $transactionsExpired = $transactionsExpired->where('id', '=', $request->search);
        }

        if (auth()->user()->role == 'Customer') {
            $transactionsExpired = $transactionsExpired
                ->join('users', 'transactions.user_id', '=', 'users.id')
                ->where('users.id', '=', auth()->user()->id);
    }

        $transactionsExpired = $transactionsExpired->orderBy('check_out', 'ASC')->paginate(20);
        $transactionsExpired->appends($request->all());

        return $transactionsExpired;
    }
}
