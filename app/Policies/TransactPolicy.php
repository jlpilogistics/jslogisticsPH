<?php

namespace App\Policies;

use App\Client;
use App\Transaction;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use SanderVanHooft\Invoicable\Invoice;

class TransactPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function confirm(User $user, Client $client)
    {
        return ($user->client_id === $client->id);
    }

    public function show(User $user, Client $client)
    {
        return ($user->client_id === $client->id);
    }
}
