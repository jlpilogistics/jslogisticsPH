<?php

namespace App\Providers;

use App\Client;
use App\Policies\TransactPolicy;
use App\Transaction;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Client::class => TransactPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();
//        Gate::define('admin-only', function ($user, $client, $transaction, $invoice) {
//            if($user->client_id == $client->id)
//            {
//                return true;
//            }
//            return false;
//        });
        $gate->define('isAccountant',function ($org){
            return $org->org_role == 'Accountant';
        });
        $gate->define('isOperations',function ($org){
            return $org->org_role == 'Operations Manager';
        });
    }
}
